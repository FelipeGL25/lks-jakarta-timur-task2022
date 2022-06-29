<?php get_header() ?>

<style>.blank {
    margin-bottom: 400px;
}
 
*{
    list-style-type: none;
    text-decoration : none;
    color : black;
}

.judul{
    margin-left :100px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    margin-top :30px;
    list-style-type : none;
}

.card {
    margin-left : 100px;
    margin-right: 100px;
    margin-top : 100px;
    border : 1px solid gainsboro;
    max-height: 100%;
    max-width: 100%;
    padding: 20px;
}
</style>
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri()?>/css/category.css">
<h1 class="judul"><?= the_category(); ?></h1>
<?php foreach($posts as $post): ?>
 <div class="card">
     
     <?= the_post_thumbnail($posts->id); ?>
     <h1 style="font-family : 'Arial',sans-serif"><a href="<?= the_permalink() ?>"><?= the_title(); ?></a></h1>
     <h3><?= the_category(); ?></h3>
     <p><?= the_content(); ?></h1>
 </div>

<?php endforeach ?>

<div class="blank"></div>


<?php get_footer() ?>