<?php
/**
 * Template Name: Page - Stoemper Contact Form
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
<style>
.form-group {
    width: 75%;
}
</style>
					<script type="text/javascript">
					function validate(thisForm) {
						if (thisForm.senderName.value == "") {
							window.alert("Please enter your first and last name!");
							thisForm.senderName.focus();
							return false;
						}
						if (thisForm.senderEmail.value == "") {
							window.alert("Please enter your email address!");
							thisForm.senderEmail.focus();
							return false;
						} else {
							var emailexp = /.*\@.*\..*/;
							if (!emailexp.test(thisForm.senderEmail.value)) {
								window.alert("Invalid email address!\n\nPlease enter your correct email address!\n\nExample yourname@example.com");
								thisForm.senderEmail.focus();
								return false;
							}
						}
						if (thisForm.senderComments.value == "") {
							window.alert("Please enter a comment!");
							thisForm.senderComments.focus();
							return false;
						}
						return true;
					}

				</script> 	
				<form action="<?php echo esc_url( home_url() ) ; ?>/stoemper-contact-form-submitted/" method="POST" onsubmit="return validate(this);">
					<div class="form-group">
					    <label for="name">Name</label>
					    <input type="text" id="senderName" class="form-control" name="senderName" placeholder="Name">
					</div>
					<div class="form-group">
					    <label for="senderEmail">Email</label>
					    <input type="text" class="form-control" id="senderEmail" name="senderEmail" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for=senderComments">Message</label>
						<textarea id="senderComments" class="form-control" rows='10' name="senderComments"></textarea>
					</div>
					<div class="form-group">
					<script type="text/javascript">
					 var RecaptchaOptions = {
					    theme : 'white'
					 };
					 </script>
				<?php
				
					require_once( trailingslashit( get_template_directory() ). 'recaptchalib.php' );

					$publickey = "6LfEEAITAAAAABfPB8_4gLwbG6hKHXbbGdutfMSG"; // you got this from the signup page
					echo recaptcha_get_html($publickey);
				?></div>
					<button type="submit" name="submit" class="btn btn-default">Send</button>
					<!-- <input type="submit" value="Send" name="submit">  -->
				</form>	
			
			</br>
			</br>
			<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
				<?php edit_post_link(__('Edit', 'sandbox'),'<div class="row entry-meta text-center"><div class="col-md-12"><span class="btn btn-danger">','</span></div></div>') ?>
			
			
			</div>
			<div class="col-sm-4 col-md-4 img-col">
				<?php if( get_field('img_contact_1') ): ?>
				<img class="imageStyle img-responsive" alt="The Stoemper Shop" src="<?php the_field('img_contact_1'); ?>" />
				<?php endif; ?>
				<?php if( get_field('img_contact_2') ): ?>
				<img class="imageStyle img-responsive" alt="The Stoemper Shop" src="<?php the_field('img_contact_2'); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</article>
	<?php endwhile; // end of the loop. ?>
						
					</div>
			</div>
			</div>
</div>
<?php get_footer() ?>