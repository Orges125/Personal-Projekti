<?php get_header(); ?>

<div class="hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/hero.jpg'); background-size:cover; padding:100px 20px; text-align:center; color:#fff;">
    <h1>Welcome to Hotel Aurora</h1>
    <p>Luxury stays and unforgettable experiences</p>
    <div style="margin-top:20px; display:flex; justify-content:center; gap:20px;">
        <a href="<?php echo site_url('/rooms'); ?>" class="btn">Rooms</a>
        <a href="<?php echo site_url('/contact'); ?>" class="btn" style="padding:15px 30px; background:#f04; color:#fff; text-decoration:none; border-radius:5px;">Contact</a>
    </div>

</div>

<div class="section" style="padding:50px 20px; text-align:center;">
    <h2>Our Rooms</h2>
    <div style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap; margin-top:30px;">
        <div style="border:1px solid #ccc; padding:20px; width:250px;">
            <h3>Standard Room</h3>
            <p>Comfortable room with city view.</p>
            <a href="<?php echo site_url('/contact'); ?>" class="btn" style="display:inline-block; margin-top:10px; padding:10px 20px; background:#f04; color:#fff; text-decoration:none; border-radius:5px;">Book Now</a>
        </div>
        <div style="border:1px solid #ccc; padding:20px; width:250px;">
            <h3>Deluxe Room</h3>
            <p>Spacious room with balcony.</p>
            <a href="<?php echo site_url('/contact'); ?>" class="btn" style="display:inline-block; margin-top:10px; padding:10px 20px; background:#f04; color:#fff; text-decoration:none; border-radius:5px;">Book Now</a>
        </div>
        <div style="border:1px solid #ccc; padding:20px; width:250px;">
            <h3>Luxury Suite</h3>
            <p>Premium suite with sea view.</p>
            <a href="<?php echo site_url('/contact'); ?>" class="btn" style="display:inline-block; margin-top:10px; padding:10px 20px; background:#f04; color:#fff; text-decoration:none; border-radius:5px;">Book Now</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>