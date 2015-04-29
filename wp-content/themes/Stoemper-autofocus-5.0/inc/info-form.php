<?php 
function addme_ajaxurl() {
?>
<script type="text/javascript">
var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>
<?php
}
add_action('wp_head','addme_ajaxurl');

add_action('wp_ajax_submit_form', 'submit_form_callback');
function submit_form_callback(){

$params = array();
    parse_str($_POST['data'], $params);

$name = trim($params['name']);
$email = $params['email'];
$message = $params['message'];
$subject = $params['subject'];
$site_owners_email = 'mjpeternell@gmail.com'; // Replace this with your own email address

if ($name=="") {
$error['name'] = "Please enter your name";
}


// if (!preg_match('/^[a-z0-9&.-_+]+@[a-z0-9-]+.([a-z0-9-]+.)*+[a-z]{2}/is', $email)) {
// $error['email'] = "Please enter a valid email address";
// }

//$email = "abc123@lolhaha"; // Invalid email address 
$regex = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$";
if ( preg_match( $regex, $email ) ) { 
	echo $email . " is a valid email. We can accept it."; 
} else { 
	//echo $email . " is an invalid email. Please try again."; 
	$error['email'] = "Please enter a valid email address";
}

if ($message== "") {
$error['message'] = "Please leave a comment.";
}
if ($subject=="") {
$error['subject'] = "Please leave a subject.";
}
if (!$error) {

$mail = mail($site_owners_email, $subject, $message,
"From: ".$name." <".$email.">rn"
."Reply-To: ".$email."rn"
."X-Mailer: PHP/" . phpversion());
$success['success'] = "<div class='success'>" . $name . ", We've received your email. We'll be in touch with you as soon as possible! </div>";

echo json_encode($success);

} # end if no error
else {

echo json_encode($error);
} # end if there was an error sending

    die(); // this is required to return a proper result
}
?>