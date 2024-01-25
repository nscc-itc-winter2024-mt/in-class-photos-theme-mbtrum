<?php

get_header();

while ( have_posts() ) : 
    the_post();

    // Get this post instance
    $post = get_post();
    
    // Get the author info

    $author_name = get_the_author_meta('display_name', $post->post_author);
    $avatar_src = get_avatar_url($post->post_author);
?>    

<div class="">
    <img src="<?= $avatar_src ?>" class="post_profile_img">
    <?= $author_name ?>
</div>

<div class="d-flex justify-content-center">
    <?= the_post_thumbnail('large') ?>
</div>

<h3><?= the_title() ?></h3>

<main><?= the_content() ?></main>

<?php
the_category();

the_tags();

endwhile;
?>


<?php 
get_footer();
?>