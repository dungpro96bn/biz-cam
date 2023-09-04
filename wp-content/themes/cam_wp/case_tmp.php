<?php
$post_id = get_the_ID();
$post = get_page($post_id);
$slug = $post->post_name;
$parents_id = $parent_id = $post->ancestors[count($post->ancestors) - 1]; 
if($parents_id){
	$slug = get_post($parent_id)->post_name;
}
$args = array(
    'post_type'      => 'case',
    'tax_query' => array(
            array(
                'taxonomy' => 'case-cat',
                'field' => 'slug',
                'terms' => $slug,
                ),
	),
    'posts_per_page' => 3,
);
$the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts() ) : ?>
<div class="bg_grey">
<h2 class="case_title">導入事例から探す</h2>
<div class="container_large">
<ul class="case">
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
<li>
<figure class="thumbnail">
<a href="<?php the_permalink(); ?>">
<?php
if(has_post_thumbnail()){
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id, 'casethumb');
	$thumb = $image_url[0];
}else{
	$thumb = get_template_directory_uri().'/img/non_pic.jpg';
}
?>
<img src="<?php echo $thumb; ?>" alt="<?php echo the_field( 'company_name' ); ?>の導入事例  <?php echo the_field( 'industry' ); ?> イメージ">
</a>
</figure>
<p class="case_company"><?php echo the_field( 'company_name' ); ?></p>
<h3 class="case_title" style=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<dl class="case_date">
<?php if(get_field('industry')){ ?>
<dt>業種</dt>
<dd><?php echo the_field( 'industry' ); ?></dd>
<?php } ?>
<?php if(get_field('employees')){ ?>
<dt>従業員数</dt>
<dd><?php echo the_field( 'employees' ); ?></dd>
<?php } ?>
<?php if(get_field('task')){ ?>
<dt>課題</dt>
<dd><?php echo the_field( 'task' ); ?></dd>
<?php } ?>
<?php if(get_field('service_disc')){ ?>
<dt>導入サービス</dt>
<dd><?php echo the_field( 'service_disc' ); ?></dd>
<?php } ?>
</dl>
</li>
<?php endwhile; ?>
</ul>
</div>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>