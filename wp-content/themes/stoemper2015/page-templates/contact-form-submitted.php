<?php
/**
 * Template Name: Page - Stoemper Contact Form - Submitted
 * The template used for displaying page content in page.php
 *
 * @author Matt Peternell| http://stoemper.com
 * @package stoemper 2.0
 */
?>
<?php get_header()?>
<div id="content" class="inner-container">
	<div class="row">
		<div class="col-md-12">
		<?php if (function_exists('upbootwp_breadcrumbs')) upbootwp_breadcrumbs(); ?>
		</div>
	</div>
<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('stoemp-pg-temp');?>>
		<header class="page-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
		</header>
		<div class="row entry-content ">
			<div class="col-sm-8 col-md-8">
				<?php the_content() ?>
				<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
				
<style>
.form-group {
    width: 75%;
}
</style>
				<?php
 				require_once( trailingslashit( get_template_directory() ). 'recaptchalib.php' );
 				$privatekey = "6LfEEAITAAAAALBu8picwHDDnzDrd1OjdDdYLqcx";
 				$resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);

 				if (!$resp -> is_valid) {
 					// What happens when the CAPTCHA was entered incorrectly
 					die("The reCAPTCHA wasn't entered correctly. Go back and try it again." . "(reCAPTCHA said: " . $resp -> error . ")");
 				} else {
 					// Your code here to handle a successful verification

					/*** EMAIL Setup***/
					$submit = stripslashes($_POST['submit']);
					$senderName = stripslashes($_POST['senderName']);
					$senderEmail = $_POST['senderEmail'];
					$senderComments = stripslashes($_POST['senderComments']);

					$subject = "Stoemper.com Contact/Request Form";

					
					$to = "information@stoemper.com";
					//$to .=",mjpeternell@gmail.com, david507@hotmail.com";

					$headers = "From: Stoemper.com contact form\r\n";
					$headers .= "Bcc: mjpeternell@gmail.com\r\n";
					$headers .= "Reply-To: $senderEmail\r\n";
					$headers .= "X-Mailer: PHP/" . phpversion();

					$message = "$senderName would like to be learn more about Stoemper.\n";
					$message .= "Email: $senderEmail\n";
					$message .= "Comments:\n" . wordwrap($senderComments, 70);
					;

					if (mail($to, $subject, $message, $headers)) {
						echo "<h3>The following informations was emailed to Stoemper.</h3><br>";
						echo "<p>$senderName</p><br>";
						echo "<p>$senderEmail</p><br>";
						echo "<p>$senderComments</p><br>";
					} else {
						echo "<h3>Error!</h3> <p>You have reached this page without clicking the submit button.  The Stoemper request form!";
					}

				}
				?>
				
				<?php edit_post_link(__('Edit', 'sandbox'),'<div class="row entry-meta text-center"><div class="col-md-12"><span class="btn btn-danger">','</span></div></div>') ?>
			
			
			</div>
			<div class="col-sm-4 col-md-4 img-col">
				<img src="<?php echo esc_url( home_url() ) ; ?>/wp-content/uploads/2015/12/stoemper-taylor-stoepid-SW1.jpg" class="img-responsive" />
			</div>
		</div>
	</article>
	<!-- .post -->
<?php endwhile; // end of the loop. ?>
</div>
<!-- #container -->
<?php get_footer() ?>