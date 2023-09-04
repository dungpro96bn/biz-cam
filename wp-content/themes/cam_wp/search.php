<?php get_header();?>
<main class="sub_wrap">
<?php 
$type = $_GET['type'];
$category = $_GET['category'];
$yearg = $_GET['year'];
$ttl = '検索';
if($type == 'post'){
	$ttl = 'ニュース';
}
?>
<div class="pan"><a href="<?php echo get_bloginfo('url'); ?>">TOP</a><span><?php echo $ttl; ?></span></div>
<div class="content">
<?php if($type == 'post'){ ?>
<h2>ニュース</h2>
<p class="lead">お知らせカテゴリのボタン、年次を切り替えることで記事を絞り込むことができます。</p>
<script>
$(document).ready(function(){
	<?php if($category){ ?>var cate = <?php echo $category; ?>;
	if(cate[0]){
	}else{
		$('#full').prop('checked',false);
	}
	<?php } ?>
	$('input[name="category[]"]').change(function () {
		if($(this).prop('checked')) {
			$('#full').prop('checked',false);
		}
		var len = $('input[name="category[]"]:checked').length;
		if (len < 1) {
			$('#full').prop('checked',true);
			$('input[name="s').attr('disabled', 'disabled');
		}else{
			$('input[name="s').attr('disabled', false);
		}
	});
	$('#full').change(function () {
		if($(this).prop('checked')) {
			$('input[name="category[]"]').prop('checked',false);
		}
	});
	$("select").change(function(){
		$('#sc_pa').submit();
	});
});
</script>
<form id="sc_pa" method="get" action="<?php bloginfo('url'); ?>/news/">
<input type="hidden" name="s" id="s">
<input type="hidden" name="type" value="post">
<div class="sub_search_box flex_wrap_between for_news">
<div class="cheack_area">
<input type="checkbox" value="full" id="full" checked="checked"><label for="full"  class="checkbox">全て</label>
<?php
$categories = get_categories();
foreach($categories as $taxonomyss):
?>
<input name="category[]" id="<?php echo $taxonomyss->slug; ?>" type="checkbox" value="<?php echo $taxonomyss->slug; ?>"<?php if(in_array($taxonomyss->slug, $category)){ print(' checked');} ?>><label for="<?php echo $taxonomyss->slug; ?>"  class="checkbox"><?php echo $taxonomyss->name; ?></label>
<?php
endforeach;
wp_reset_query();
?>
</div>
<div class="btn_form_search">
<input type="submit" value="絞り込む">
</div>
</div>
<?php 
$year=NULL; 
$args = array(
'post_type' => 'post',
'orderby' => 'date', 
'posts_per_page' => -1, 
'order'   => 'DESC',
);
$the_query = new WP_Query($args); if($the_query->have_posts()){
?>
<div class="select_wrap">
<select class="fmselect" name="year">
<option value="">年度で絞り込む</option>
<?php
while ($the_query->have_posts()): $the_query->the_post();
if ($year != get_the_date('Y')){
$year = get_the_date('Y'); 
?>
<option value="<?php echo $year; ?>"<?php if($year == $yearg){ print(' selected');} ?>><?php echo $year; ?>年</option>
<?php
}
endwhile; 
?>
</select>
</div>
<?php } ?>
</form>
<?php
if($category){
	$taxquerysp2['relation'] = 'OR';
	foreach($category as $val){
    	$taxquerysp2[] = array(
            'taxonomy'=>'category',
            'terms'=> $val,
            'field'=>'slug',
			//'operator'=>'IN'
            );
	}
	$taxquerysp[] = array(
		$taxquerysp2
	);
}
if($yearg){
	$date_query = array(
		array(
			'after' => array(
			'year' => $yearg,
			'month' => 1,
			'day' => 1,
		),
			'before' => array(
			'year' => $yearg,
			'month' => 12,
			'day' => 31,
		),
			'inclusive' => true 
		),
	);
}
$paged = get_query_var('paged'); 
query_posts( array(
	'post_type' => $type,
    'tax_query' => $taxquerysp,
    'date_query' => $date_query,
	'paged' => $paged
    )
);
?>
<?php if ( have_posts() ) : ?>
<ul class="list_news">
<?php while (have_posts()) : the_post(); ?>
<li>
<?php
$url_blank = get_field('url_blank');
if($url_blank){
?>
<a href="<?php echo $url_blank; ?>" class="clearfix" target="_blank">
<?php }else{ ?>
<a href="<?php the_permalink(); ?>" class="clearfix">
<?php } ?>
<div class="news_head">
<span class="date"><?php the_time('Y/m/d'); ?></span>
<?php
$cats = get_the_category(); 
foreach($cats as $cat){
?>
<span class="cate"><?php echo $cat->cat_name; ?></span>
<?php } ?>
</div>
<h3 class="fl_box"><?php the_title(); ?></h3>
</a>
</li>
<?php endwhile; ?>
</ul>
<?php pagination($wp_query->max_num_pages, 2); ?>
<?php else: ?>
<div class="search_result">
<p>このカテゴリーの投稿はまだありません。</p>
</div>
<?php endif; ?>
<?php }else{ ?>
<?php if (have_posts()) : ?>
<h2><?php the_search_query(); ?>に関する検索結果<span><?php echo $wp_query->found_posts; ?>件</span></h2>
<ul class="list_news">
<?php while (have_posts()) : the_post(); ?>
<li>
<?php
$url_blank = get_field('url_blank');
if($url_blank){
?>
<a href="<?php echo $url_blank; ?>" class="clearfix" target="_blank">
<?php }else{ ?>
<a href="<?php the_permalink(); ?>" class="clearfix">
<?php } ?>
<div class="news_head">
<span class="date"><?php the_time('Y/n/j'); ?></span>
<?php
$cats = get_the_category(); 
foreach($cats as $cat){
?>
<span class="cate"><?php echo $cat->cat_name; ?></span>
<?php } ?>
</div>
<h3 class="fl_box"><?php the_title(); ?></h3>
</a>
</li>
<?php endwhile; ?>
</ul>
<?php pagination($wp_query->max_num_pages, 2); ?>
<?php else: ?>
<p class="pb_10">お探しのキーワードでは該当するページがみつかりません。<br>
再度他のキーワードでお探しください。</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php } ?>
</div>
</main>
<?php get_footer();?>