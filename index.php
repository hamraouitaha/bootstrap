<?php get_header(); ?>
<div class="row">
<div class="col-sm-8 blog-main">
<?php $custom_query = new WP_Query( $args );
while ($custom_query->have_posts()) : $custom_query->the_post();?>
<?php
$args=array(
'post_type'=>'your_post',
);
$your_loop=new WP_Query($args);
if($your_loop->have_posts()) : while($your_loop->have_posts()) : $your_loop->the_post();
$meta=get_post_meta($post->ID , 'your_fields' , true);?>
<!-- contents of Your Post -->
<?php endwhile; endif; wp_reset_postdata();?>
<nav>
 <ul class="pager">
<li><?php next_posts_link( 'Previous' ); ?></li>
<li><?php previous_posts_link( 'Next' ); ?></li>
 </ul>
</nav>
<?php get_template_part('content',get_post_format());?>

</div> <!-- /.blog-main -->
<?php get_sidebar(); ?>
</div> <!-- /.row -->
<?php get_footer(); ?>
