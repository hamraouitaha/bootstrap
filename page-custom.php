<?php get_header(); ?>
<div class="row">
<div class="col-sm-8 blog-main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<?php endwhile;?>
<nav>
 <ul class="pager">
<li><?php next_posts_link( 'Previous' ); ?></li>
<li><?php previous_posts_link( 'Next' ); ?></li>
 </ul>
</nav>
<?php endif; ?>
<?php get_template_part('content',get_post_format());?>

</div> <!-- /.blog-main -->
<?php get_sidebar(); ?>
</div> <!-- /.row -->
<?php get_footer(); ?>
<?php
$args=array(
'post_type'=>'your_post',
);
$your_loop=new WP_Query($args);
if($your_loop->have_posts()) : while($your_loop->have_posts()) : $your_loop->the_post();
$meta=get_post_meta($post->ID , 'your_fields' , true);?>
<!-- contents of Your Post -->
<?php endwhile; endif; wp_reset_postdata();?>

<?php get_header(); ?>
<div class="row">
<div class="col-sm-12">
<?php
$args = array(
'post_type' => 'my-custom-post',
'orderby' => 'menu_order',
'order' => 'ASC'
);
$custom_query = new WP_Query( $args );
while ($custom_query->have_posts()) : $custom_query-
>the_post(); ?>
<div class="blog-post">
<h2 class="blog-post-title"><a href="<?php
the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
</div>
<?php endwhile; ?>
</div> <!-- /.col -->
</div> <!-- /.row -->
<?php get_footer(); ?>
<?php get_header(); ?>
<div class="row">
<div class="col-sm-12">
<?php
$args = array(
'post_type' => 'my-custom-post',
'orderby' => 'menu_order',
'order' => 'ASC'
);
$custom_query = new WP_Query( $args );
while ($custom_query->have_posts()) : $custom_query-
>the_post(); ?>
<div class="blog-post">
<h2 class="blog-post-title"><a href="<?php
the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
</div>
<?php endwhile; ?>
</div> <!-- /.col -->
</div> <!-- /.row -->
<?php get_footer(); ?>