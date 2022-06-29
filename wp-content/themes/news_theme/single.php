<link rel="stylesheet" href="<?= get_stylesheet_directory_uri()?>/css/single.css">
<?php get_header() ?>

<div class="card">
<?= the_post_thumbnail($posts->id); ?>
<h1 class="title"><?= the_title() ?></h1>

<p class="description"><?= the_content() ?></p>
</div>

<div class="blank" style="margin-top: 600px;"></div>





<?php get_footer() ?>