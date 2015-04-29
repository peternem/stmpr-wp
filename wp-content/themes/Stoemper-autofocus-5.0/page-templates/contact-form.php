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
<div class="container bikes-bground">
	<div id="content">
		<div id="post-<?php the_ID(); ?>"
			class="<?php sandbox_post_class() ?> stoemp-pg-temp">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php if(function_exists('the_subtitle')) the_subtitle( '<h2 class="subtitle">', '</h2>'); ?>
					</div>
			</div>
			<div class="row entry-content bikes">
				<div class="col-sm-12 col-md-8">
						<?php the_content()?>
						
<br/>
<br/>
<br/>
<style>
.form-group {
    width: 75%;
}
</style>
						<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
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
				<form action="<?php bloginfo('url'); ?>/stoemper-contact-form-submitted/" method="POST" onsubmit="return validate(this);">
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
					</div>
				<div class="col-sm-12 col-md-4">
					<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2014/02/IMG_20130617_211859.jpg" class="img-responsive" />
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="entry-meta">
							<?php edit_post_link(__('Edit', 'sandbox'),'<span class="btn btn-danger">','</span>')?>
						</div>
				</div>
			</div>
				<?php //get_sidebar(); ?>
				<?php //if ( dynamic_sidebar('sidebar-3') ) : else : endif; ?>
			</div>
		<!-- .post -->
			<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>		</div>
	<!-- #content -->
</div>
<!-- #container -->
<?php get_footer() ?>