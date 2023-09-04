<?php get_header(); ?>
<main id="news">
<?php while ( have_posts() ) : the_post(); ?>
<section class="title_wide_grey">
<h1 class="news_title_detail"><?php the_title(); ?></h1>
<div class="news_title_sub">
<p class="news_date"><?php the_time('Y.m.d'); ?></p>
<?php
$cats = get_the_category();
$cat = $cats[0];
$cat_slug = $cat->slug;
?>
<p class="news_category<?php if($cat_slug == 'topics'){echo ' black';}else{echo ' blue';} ?>"><strong><?php echo $cat->cat_name; ?></strong></p>
</div>
</section>
<div class="container_medium">
<div class="news_detail_content">
<?php if(has_post_thumbnail()): ?>
<p><?php the_post_thumbnail('large'); ?></p>
<?php endif; ?>
<?php the_content(); ?>
</div>
<div class="sns_share">
<p>SHARE</p>
<a href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="株式会社キャムテックのTwitter(ツイッター)への遷移ボタン"></a>
<a href="http://www.facebook.com/share.php?u=<?php echo get_the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="株式会社キャムテックのFacebook(フェイスブック)への遷移ボタン"></a>
<a href="https://social-plugins.line.me/lineit/share?url=<?php echo get_the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/line.svg" alt="株式会社キャムテックのline(ライン)への遷移ボタン"></a>
</div>
</div>
<?php endwhile; // end of the loop. ?>
<?php wp_reset_query(); ?>
<a href="/news/" class="btn_white_center">一覧に戻る</a>
</main>
<?php get_footer();?>