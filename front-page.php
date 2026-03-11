<?php get_header(); ?>

<div class="hero" style="position:relative; background-image:url('<?php echo get_template_directory_uri(); ?>/images/hero.jpg'); background-size:cover; background-position:center; padding:140px 20px; text-align:center; color:#fff;">

    <h1 style="font-size:48px; margin-bottom:10px;">Welcome to Hotel Aurora</h1>
    <p style="font-size:18px;">Luxury stays and unforgettable experiences</p>

    <!-- SEARCH FORM -->
    <div style="margin-top:40px; display:flex; justify-content:center;">
        <?php get_search_form(); ?>
    </div>

    <div style="margin-top:30px; display:flex; justify-content:center; gap:20px;">
        <a href="<?php echo site_url('/rooms'); ?>" class="btn" style="padding:15px 30px; background:#c89b3c; color:#fff; text-decoration:none; border-radius:5px;">Rooms</a>

        <a href="<?php echo site_url('/contact'); ?>" class="btn" style="padding:15px 30px; background:#f04; color:#fff; text-decoration:none; border-radius:5px;">Contact</a>
    </div>

</div>

<div class="section" style="padding:70px 20px; text-align:center;">
    <h2 style="font-size:32px;">Our Rooms</h2>

    <div style="display:flex; justify-content:center; gap:25px; flex-wrap:wrap; margin-top:40px;">

        <div style="border:1px solid #ddd; padding:25px; width:260px; border-radius:8px;">
            <h3>Standard Room</h3>
            <p>Comfortable room with city view.</p>

            <a href="<?php echo site_url('/contact'); ?>" style="display:inline-block; margin-top:10px; padding:10px 20px; background:#c89b3c; color:#fff; text-decoration:none; border-radius:5px;">
                Book Now
            </a>
        </div>

        <div style="border:1px solid #ddd; padding:25px; width:260px; border-radius:8px;">
            <h3>Deluxe Room</h3>
            <p>Spacious room with balcony.</p>

            <a href="<?php echo site_url('/contact'); ?>" style="display:inline-block; margin-top:10px; padding:10px 20px; background:#c89b3c; color:#fff; text-decoration:none; border-radius:5px;">
                Book Now
            </a>
        </div>

        <div style="border:1px solid #ddd; padding:25px; width:260px; border-radius:8px;">
            <h3>Luxury Suite</h3>
            <p>Premium suite with sea view.</p>

            <a href="<?php echo site_url('/contact'); ?>" style="display:inline-block; margin-top:10px; padding:10px 20px; background:#c89b3c; color:#fff; text-decoration:none; border-radius:5px;">
                Book Now
            </a>
        </div>

    </div>
</div>

<?php get_footer(); ?>