<?php
/*
Template Name: roukan
*/
?>

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KXV8CG2');</script>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1">
<?php 
if( is_home() || is_front_page() ){
	$canonical = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] ;
}else{
	$canonical = (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}
?>
<link rel="canonical" href="<?php echo $canonical; ?>">
<link rel="alternate" hreflang="ja" href="<?php echo $canonical; ?>">
<title><?php wp_title( '｜', true, 'right' ); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=0.5">
    <title>roukan</title>
    <meta name="format-detection" content="telephone=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&family=Roboto:wght@700&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	  <link rel="stylesheet" media="all" href="<?= get_template_directory_uri();?>/roukan/css/roukan.css"/>
</head>


<body>
    <main id="main_wrap">
        <link rel="stylesheet" media="all" href="./css/roukan.css"/>
		
		 <?php the_content(); ?>
		 
	</main>

</body>
 <script type="text/javascript" src="<?= get_template_directory_uri();?>/roukan/js/roukan.js"></script> 

   <?php wp_reset_query(); ?>
    <?php
    if(!is_page( array('support-mynumber','sc-mnform')) ):
    $style_ft = 'contact_footer';
    if(is_singular('column') || is_post_type_archive('column') || is_tax('column-cat') || is_tax('columntag') || is_page('crossnavi') || is_page('o2') || is_page('t-rex') || is_page('about') || is_page('entrust') || is_page('nencho') || is_page('zyuminzei')){
        $style_ft = 'contact_footer bg_white';
    }

    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/spnav.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/gotop.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
    <?php if ( is_page('c-en') ){ ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/c-en.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/tab.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/accordion.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/gotop.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inview.js"></script>
    <?php } ?>
    <?php if ( is_page('payroll') ){ ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/payroll.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/tab.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/accordion.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/gotop.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inview.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/marker.js"></script>
    <?php } ?>
    <div >
    </div>
    <?php endif; ?>
    <footer>
        <div class="container_large">
            <figure class="footer_logo"><a href="<?php echo get_bloginfo('url'); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/img/header_logo_white.svg" alt="株式会社キャムテック CAMTEC 白色"></a></figure>
        <div class="footer_menu pc">
            <ul>
                <li>サービス</li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/hr/">HR・テッククラウド</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/">代行・委託サービス</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/global/">海外人材サービス</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/training/">研修プログラム</a></li>
                </ul>
            <ul>
                <li><a href="<?php echo get_bloginfo('url'); ?>/case/">導入事例</a></li>
            </ul>
            <ul>
                <li><a href="<?php echo get_bloginfo('url'); ?>/news/">ニュース</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/category/topics/">お知らせ</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/category/event/">イベント</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/category/seminar/">セミナー</a></li>
            </ul>
            <ul>
                <li><a href="<?php echo get_bloginfo('url'); ?>/column/">コラム</a></li>
            </ul>
            <ul>
                <li>会社情報</li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/message/">代表メッセージ</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/vision/">企業理念</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/about/">会社概要</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/recruit/">採用情報</a></li>
            </ul>
            <ul>
                <li><a href="<?php echo get_bloginfo('url'); ?>/contact/">お問い合わせ／資料請求</a></li>
            </ul>
        </div>
        <div class="footer_policy">
            <ul>
                <li><a href="<?php echo get_bloginfo('url'); ?>/sitepolicy/">サイトポリシー</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/privacypolicy/">プライバシーポリシー</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/securitypolicy">グッジョブ 情報セキュリティ方針</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/terms/">各種サービス利用規約</a></li>
            </ul>
        </div>
        <span class="copyright">© CAMTECH INC. All Rights Reserved.</p></span>
        </div>
        <div class="pc"><a href="#" id="page_top"><img src="<?php echo get_template_directory_uri(); ?>/img/icn_gotop.svg" alt="ページトップに戻る"></a></div>
    </footer>

<?php wp_footer(); ?>
