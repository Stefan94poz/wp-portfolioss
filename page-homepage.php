<?php 
/*
    Template Name: Projects on Homepage
*/
?>

<?php get_header() ?>
<div class="content" id="content">
    <div class="container">
        <div class="row">
            <?php 
                $args = array(
                    'post_type' => 'post'
                );
                query_posts($args);
            ?>
            <?php if(have_posts() ):
                while(have_posts() ): the_post(); ?>
                    <div class="col-md-6 space-bottom">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <?php the_tags( '<ul class="tech-items"><li>', '</li><li>', '</li></ul>' ); ?>
                        <img class="img-fluid" src="<?php echo get_option('default_thumbnail') ?>" alt="<?php the_title(); ?>" />
                    </div>
                 <?php endwhile; ?> 
            <?php endif; ?> 
        </div>
    </div>
<?php get_footer() ?>
