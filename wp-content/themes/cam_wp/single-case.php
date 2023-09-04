<?php get_header(); ?>
<main id="case_detail">
<?php while ( have_posts() ) : the_post(); ?>
<section class="title_white">
<h1 class="title"><a href="/case/">CASE<span><?php echo the_field( 'task' ); ?>の導入事例</span></a></h1>
</section>
<div class="container_medium">
<div class="case_date">
<?php
if(has_post_thumbnail()){
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id, 'casethumb');
	$thumb = $image_url[0];
}else{
	$thumb = get_template_directory_uri().'/img/non_pic.jpg';
}
if($thumb){
?>
<figure class="case_logo"><img src="<?php echo $thumb; ?>" alt="導入事例の<?php if(get_field('company_link')){ ?><a href="<?php echo get_field('company_link'); ?>"><?php } ?><?php echo the_field( 'company_name' ); ?><?php if(get_field('company_link')){ ?></a><?php } ?>のイメージ <?php echo the_field( 'industry' ); ?>"></figure>
<?php } ?>
<table>
<tr>
<th>会社名</th>
<td><p><?php if(get_field('company_link')){ ?><a href="<?php echo get_field('company_link'); ?>"><?php } ?><?php echo the_field( 'company_name' ); ?><?php if(get_field('company_link')){ ?></a><?php } ?></p></td>
</tr>
<tr>
<th>業種</th>
<td><p><?php echo the_field( 'industry' ); ?></p></td>
</tr>
<tr>
<th>従業員数</th>
<td><p><?php echo the_field( 'employees' ); ?></p></td>
</tr>
<tr>
<th>課題</th>
<td>
<p><?php echo the_field( 'task' ); ?></p>
</td>
</tr>
<tr>
<th>導入サービス</th>
<td><?php $post_obj = get_field('service'); ?><p><a href="<?php echo get_the_permalink($post_obj->ID); ?>" target="_blank"><?php echo $post_obj->post_title; ?></a></p>
<p><?php echo the_field( 'service_disc' ); ?></p>
</td>
</tr>
</table>
</div>
<section class="case_content">
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
</section>
<div class="case_service">
<ul class="service_list">
<li>
<?php 
$image = get_field('service_bn');
$image = $image['sizes']['servicethumb'];
if( $image ) {
?>
<figure class="thumbnail"><a href="<?php echo get_the_permalink($post_obj->ID); ?>" target="_blank"><img src="<?php echo $image; ?>" alt="<?php echo the_field( 'service_name' ); ?>のイメージ <?php echo the_field( 'task' ); ?>サービス"></a></figure>
<?php } ?>
<h2 class="service_title"><?php echo the_field( 'service_name' ); ?></p>
<p class="service_txt"><?php echo the_field( 'service_disc2' ); ?></p>
<a href="<?php echo get_the_permalink($post_obj->ID); ?>" target="_blank" class="btn_blue_center">詳細を見る</a>
</li>
</ul>
</div>
</div>
</main>
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); ?>
<?php get_footer();?>