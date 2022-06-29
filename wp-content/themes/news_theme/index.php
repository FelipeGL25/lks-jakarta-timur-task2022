<?php get_header(); ?>
<?php $posts = get_posts(['number_post'=> 4 ]); ?>
<style>*{
    margin : 0;
    padding : 0;
        list-style-type: none;
        text-decoration : none;
        color : black;
    
    
}
</style>
<link rel="stylesheet" href="<?= get_stylesheet_directory_uri()?>/css/index.css"> 

<div class="container" style="margin-top : 50px;">

<?php foreach($posts as $post): ?>
 <div class="card">
     
     <?= the_post_thumbnail($posts->id); ?>
     <h1 class="title"><a href="<?= the_permalink() ?>"><?= the_title(); ?></a></h1>
     <h3 class="category"><?= the_category(); ?></h3>
     <p class="content"><?= the_content(); ?></h1>
 </div>

<?php endforeach ?>
</div>
<div class="blank"></div>



<?php get_footer(); ?>
</body>
</html>