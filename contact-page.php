<?php
/*
Template Name: Contact Page
*/

get_header();

if(isset($_POST['submit'])) {

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = get_option('admin_email');
    $subject = "New Contact Message";

    $body = "Name: ".$name."\n";
    $body .= "Email: ".$email."\n\n";
    $body .= "Message:\n".$message;

    $headers = array('Content-Type: text/plain; charset=UTF-8');

    if(wp_mail($to, $subject, $body, $headers)){
        echo "<p style='color:green;'>Message sent successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error sending message.</p>";
    }
}
?>

<div style="max-width:800px;margin:auto;padding:50px 20px;">
<h2>Contact Us</h2>

<ul>
<li>📞 +1 234 567 890</li>
<li>✉ info@hotel-aurora.com</li>
<li>📍 123 Aurora Street, City</li>
</ul>

<form method="post" style="margin-top:30px;">
<input type="text" name="name" placeholder="Your Name" required style="width:100%;padding:10px;margin-bottom:10px;">

<input type="email" name="email" placeholder="Your Email" required style="width:100%;padding:10px;margin-bottom:10px;">

<textarea name="message" placeholder="Your Message" required style="width:100%;padding:10px;height:120px;margin-bottom:10px;"></textarea>

<button type="submit" name="submit">Send Message</button>
</form>
</div>

<?php get_footer(); ?>