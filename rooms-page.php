<?php
/*
Template Name: Rooms Page
*/
get_header();
?>

<div style="padding:50px 20px; text-align:center;">
    <h2>Our Rooms</h2>
    <div style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap;">

        <div style="border:1px solid #ccc; padding:20px; width:250px;">
            <img src="<?php echo get_template_directory_uri(); ?>/images/room1.jpg" alt="Standard Room" style="width:100%; height:auto;">
            <h3>Standard Room</h3>
            <p>Comfortable room with city view.</p>
        </div>

        <div style="border:1px solid #ccc; padding:20px; width:250px;">
            <img src="<?php echo get_template_directory_uri(); ?>/images/room2.jpg" alt="Deluxe Room" style="width:100%; height:auto;">
            <h3>Deluxe Room</h3>
            <p>Spacious room with balcony.</p>
        </div>

        <div style="border:1px solid #ccc; padding:20px; width:250px;">
            <img src="<?php echo get_template_directory_uri(); ?>/images/room3.jpg" alt="Luxury Suite" style="width:100%; height:auto;">
            <h3>Luxury Suite</h3>
            <p>Premium suite with sea view.</p>
        </div>

    </div>
</div>

<?php get_footer(); ?>