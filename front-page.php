<?php

// Display the header (partial template)
get_header();

// Get posts (photos)
$photos = get_posts(array(
    'numberposts' => 50,
    'post_status' => 'publish',
    'orderby' => 'rand')
);

?>

<div class="pin-container">

<?php
// Loop through the photos and display
foreach($photos as $photo) 
{
    $id = $photo->ID;
    $author_id = $photo->post_author;

    $featured_img_url = get_the_post_thumbnail_url($id, 'large');
    $post_url = get_permalink($id);
    $author_name = get_the_author_meta('display_name', $author_id);
    $author_avatar_url = get_avatar_url($author_id);
    ?>

    <div class="pin-box">
        <a href="<?= $post_url ?>">
            <img src="<?= $featured_img_url ?>">
        </a>
    </div><!-- .pin-box -->
<?php
}
?>

</div> <!-- .pin-container -->

<?php


// Display the footer (partial template)
get_footer();

?>
