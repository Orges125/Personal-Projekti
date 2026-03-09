<?php
/*
Template Name: About Page
*/

get_header();
?>

<div style="max-width:1000px;margin:auto;padding:50px 20px;">
    <h2>About Us</h2>
    <p>Welcome to Hotel Aurora! We offer luxurious rooms and an unforgettable experience. Explore some of our beautiful rooms below.</p>

    <div style="display:flex;flex-wrap:wrap;gap:20px;margin-top:30px;">
        <?php
        $rooms = array(
            array(
                'name' => 'Deluxe Room',
                'image' => get_template_directory_uri() . '/images/room1.jpg'
            ),
            array(
                'name' => 'Suite',
                'image' => get_template_directory_uri() . '/images/room2.jpg'
            ),
            array(
                'name' => 'Standard Room',
                'image' => get_template_directory_uri() . '/images/room3.jpg'
            ),
        );

        foreach($rooms as $room) { ?>
            <div style="flex:1 1 calc(33% - 20px);">
                <img src="<?php echo esc_url($room['image']); ?>" alt="<?php echo esc_attr($room['name']); ?>" style="width:100%;height:auto;border-radius:8px;">
                <h3><?php echo esc_html($room['name']); ?></h3>
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>