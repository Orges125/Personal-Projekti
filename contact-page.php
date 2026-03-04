<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<div style="max-width:800px; margin:auto; padding:50px 20px;">
    <h2>Contact Us</h2>
    <ul>
        <li>📞 +1 234 567 890</li>
        <li>✉ info@hotel-aurora.com</li>
        <li>📍 123 Aurora Street, City</li>
    </ul>

    <form action="#" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
    </form>
</div>

<?php get_footer(); ?>