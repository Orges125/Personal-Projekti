<?php if (is_front_page()) : ?>
    <div class="hero">
        <h2>Welcome to Hotel Aurora</h2>
        <p>We offer luxury stays and unforgettable experiences.</p>
        <a href="<?php echo site_url('/contact'); ?>" class="btn">Book Now</a>
    </div>

    <div class="section">
        <h3>Our Services</h3>
        <div class="rooms">
            <div class="room-card">
                <h4>Standard Room</h4>
                <p>Comfortable room with city view.</p>
                <a href="#" class="btn">Book Now</a>
            </div>
            <div class="room-card">
                <h4>Deluxe Room</h4>
                <p>Spacious room with balcony.</p>
                <a href="#" class="btn">Book Now</a>
            </div>
            <div class="room-card">
                <h4>Luxury Suite</h4>
                <p>Premium suite with sea view.</p>
                <a href="#" class="btn">Book Now</a>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_header(); ?>

<div class="hero">
    <h2>Welcome to Hotel Aurora</h2>
    <p>Luxury stays and unforgettable experiences.</p>
    <a href="<?php echo site_url('/contact'); ?>" class="btn">Book Now</a>
</div>

<div class="section">
    <h3>Our Services</h3>
    <div class="rooms">
        <div class="room-card">...</div>
        <div class="room-card">...</div>
        <div class="room-card">...</div>
    </div>
</div>

<?php get_footer(); ?>