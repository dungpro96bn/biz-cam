<!DOCTYPE html>
<html lang="ja" dir="ltr">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/column.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/service.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/service-detail.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/company.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/case.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/newgraduate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/inview.css">
    <?php if ( is_page('c-en') ){ ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/c-en.css">
    <?php } ?>
    <?php if ( is_page('payroll') ){ ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/payroll.css"><?php } ?>
    <?php if ( is_page('recruit') ){ ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/recruit.css"><?php } ?>
    <?php if ( is_page('contact') || is_page('support-mynumber') || is_page('sc-mnform')){ ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css"><?php } ?>
    <?php if ( is_page('thanks')){ ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css"><?php } ?>
    <?php wp_head(); ?>
</head>
<body class="<?php $ID_page = get_the_ID(); echo get_post_field( 'post_name', $ID_page );?>">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KXV8CG2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <header>
    <p class="logo"><a href="<?php echo get_bloginfo('url'); ?>"><img src="/wp-content/uploads/2022/12/biz-logo.png" alt="CAMTEC"></a></p>
    <nav class="pc">
      <ul class="header__menu">
        <li class="mega__menu"><a href="javascript:void(0)">サービス<span class="fas fa-chevron-down"></span></a>
          <ul class="mega__menu-second">
            <li class="title_second"><a href="<?php echo get_bloginfo('url'); ?>/hr/">HRテック・クラウド</a>
              <ul class="mega__menu-third">
                <li><a href="https://goodjob.ca-m.co.jp/" target="_blank">派遣管理クラウド「グッジョブ」</a>
                  <figure class="nav_bnr"><a href="https://goodjob.ca-m.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/bnr_nav_gjob.svg" alt="ハケン(派遣)マネジメントクラウド グッジョブ"></a>
                  </figure>
                </li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/hr/t-rex/">WEB勤怠管理「T-REX」</a></li>
<!--                 <li><a href="<?php echo get_bloginfo('url'); ?>/hr/c-en/">営業支援「C-en」</a></li> -->
                <li><a href="<?php echo get_bloginfo('url'); ?>/hr/o2/">人材管理「O2」</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/hr/">業務効率改善「R2」</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/hr/crossnavi/">雇用管理「CROSSNAVI」</a></li>
              </ul>
            </li>
            <li class="title_second"><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/">代行・委託サービス</a>
              <ul class="mega__menu-third">
                <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/payroll/">給与計算／保険手続代行</a></li>
                <!--li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/zyuminzei/">特別微収住民税年次更新データ作成代行</a></li-->
                <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/roukan-nencho">ROUKAN年末調整</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/entrust/">事務委託</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/mynumber/">マイナンバー収集</a></li>
				  <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/stresscheck/">ストレスチェック</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/labor_management/">労務管理委託</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/outplace/">再就職支援</a></li>
              </ul>
            </li>
            <li class="title_second"><a href="<?php echo get_bloginfo('url'); ?>/global/">海外人材サービス</a>
              <ul class="mega__menu-third">
                <li>
                  <a href="https://gms.ca-m.co.jp/" target="_blank">海外人材マネジメントGMS</a>
                  <figure class="nav_bnr"><a href="https://gms.ca-m.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/bnr_nav_gms.svg" alt="海外人材マネジメントGMS(ジーエムエス)"></a></figure>
                </li>
                <li><a href="https://sendinginstnavi.asia/" target="_blank">ベトナム技能実習生<br>送り出し機関紹介サイト</a></li>
                <li><a href="https://tra-navi.asia/" target="_blank">技能実習生研修施設紹介サイト<br>「トレナビ」</a></li>
                <li><a href="https://kaji-japan.jp/" target="_blank">海外人材向け学習・交流<br>プラットフォーム「kaji」</a></li>
				  <li><a href="https://www.edu-poke.jp/global" target="_blank">外国人材の教育プラットフォーム<br>「edupoke® global」</a></li>
				  <li><a href="https://minnano-tokugi.com/" target="_blank">特定技能求人マッチングサイト<br/>「みんなのトクギ」</a></li>
              </ul>
            </li>
            <li class="title_second"><a href="/training/">研修プログラム</a>
              <ul class="mega__menu-third">
                <li><a href="https://cam-training.jp/" target="_blank">キャムテック企業研修</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/training/lqp/">評価・教育ツール「LQプログラム」</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/training/lqs/">採用基準作成ツール「LQS」</a></li>
                <li><a href="https://edu-poke.jp/" target="_blank">動画研修サービス「edupoke®」</a></li>
              </ul>
            </li>
          </ul>
        </li>
<!--         <li><a href="<?php echo get_bloginfo('url'); ?>/case/">導入事例</a></li> -->
        <li><a href="<?php echo get_bloginfo('url'); ?>/news/">ニュース</a></li>
<!--         <li><a href="<?php echo get_bloginfo('url'); ?>/column/">コラム</a></li> -->
        <li class="mega__menu"><a href="javascript:void(0)">会社情報<span class="fas fa-chevron-down"></span></a>
          <ul class="mega__menu-second">
            <li class="title_second"><a href="<?php echo get_bloginfo('url'); ?>/message/">代表メッセージ</a></li>
            <li class="title_second"><a href="<?php echo get_bloginfo('url'); ?>/vision/">企業理念</a></li>
            <li class="title_second"><a href="<?php echo get_bloginfo('url'); ?>/about/">会社概要</a></li>
            <li class="title_second"><a href="<?php echo get_bloginfo('url'); ?>/recruit/">採用情報</a></li>
          </ul>
        </li>
        <li><a href="<?php echo get_bloginfo('url'); ?>/contact/" class="btn_white_center">お問い合わせ／資料請求</a></li>
      </ul>
    </nav>
    <div class="drawer_menu sp">
       <div class="drawer_bg"></div>
       <button type="button" class="drawer_button">
         <span class="drawer_bar drawer_bar1"></span>
         <span class="drawer_bar drawer_bar2"></span>
         <span class="drawer_bar drawer_bar3"></span>
       </button>
       <nav class="drawer_nav_wrapper">
         <ul class="drawer_nav">
           <li>
             <a href="<?php echo get_bloginfo('url'); ?>">トップページ</a>
           </li>
           <li>サービス
             <span class="touch-btn"><span class="fas fa-chevron-down"></span></span>
             <ul class="second-level">
               <li>
                 <a href="<?php echo get_bloginfo('url'); ?>/hr/">HRテッククラウド</a>
                 <span class="touch-btn2"><span class="fas fa-chevron-down"></span></span>
                 <ul class="third-level">
                   <li>
                     <a href="https://goodjob.ca-m.co.jp/" target="_blank">派遣マネジメント「グッジョブ」</a>
                   </li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/hr/t-rex/">WEB勤怠管理「T-REX」</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/hr/c-en/">営業支援「C-en」</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/hr/o2/">人材管理「O2」</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/hr/">業務効率改善「R2」</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/hr/crossnavi/">雇用管理「CROSSNAVI」</a></li>
                 </ul>
               </li>
               <li>
                 <a href="<?php echo get_bloginfo('url'); ?>/outsourcing/">代行・委託サービス</a>
                 <span class="touch-btn2"><span class="fas fa-chevron-down"></span></span>
                 <ul class="third-level">
                   <li><a href="https://conciertech.jp/lpb/" target="_blank">採用代行「コンシェル&amp;テック」</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/payroll/">給与計算／保険手続代行</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/nencho/">年末調整サポート</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/entrust/">事務委託</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/mynumber/">マイナンバー収集</a></li>
					 <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/stresscheck/">ストレスチェック</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/labor_management/">労務管理委託</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/outplace/">再就職支援</a></li>
                 </ul>
               </li>
               <li>
                 <a href="<?php echo get_bloginfo('url'); ?>/global/">海外人材サービス</a>
                 <span class="touch-btn2"><span class="fas fa-chevron-down"></span></span>
                 <ul class="third-level">
                   <li><a href="https://gms.ca-m.co.jp/" target="_blank">海外人材マネジメントGMS<br>「ライフサポート」</a></li>
                   <li><a href="https://sendinginstnavi.asia/" target="_blank">ベトナム技能実習生<br>送り出し機関紹介サイト</a></li>
                   <li><a href="https://tra-navi.asia/" target="_blank">技能実習生研修施設紹介サイト<br>「トレナビ」</a></li>
                   <li><a href="https://kaji-japan.jp/" target="_blank">海外人材向け学習・交流<br>プラットフォーム「kaji」</a></li>
                   <li><a href="https://www.edu-poke.jp/global" target="_blank">外国人材の教育プラットフォーム<br>「edupoke® global」</a></li>
					 <li><a href="https://minnano-tokugi.com/" target="_blank">特定技能求人マッチングサイト<br/>「みんなのトクギ」</a></li>
                 </ul>
               </li>
               <li>
                 <a href="<?php echo get_bloginfo('url'); ?>/training/">研修プログラム</a>
                 <span class="touch-btn2"><span class="fas fa-chevron-down"></span></span>
                 <ul class="third-level">
                    <li><a href="https://cam-training.jp/" target="_blank">キャムテック企業研修</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/training/lqp/">評価・教育ツール<br>「LQプログラム」</a></li>
                   <li><a href="<?php echo get_bloginfo('url'); ?>/training/lqs/">採用基準作成ツール「LQS」</a></li>
                   <li><a href="https://edu-poke.jp/" target="_blank">動画研修サービス「edupoke®」</a></li>
                 </ul>
               </li>
             </ul>
           </li>
           <li><a href="<?php echo get_bloginfo('url'); ?>/news/">ニュース</a></li>
           <li><a href="<?php echo get_bloginfo('url'); ?>/column/">コラム</a></li>
           <li>会社情報
             <span class="touch-btn"><span class="fas fa-chevron-down"></span></span>
             <ul class="second-level">
               <li><a href="<?php echo get_bloginfo('url'); ?>/message/">代表メッセージ</a></li>
               <li><a href="<?php echo get_bloginfo('url'); ?>/vision/">企業理念</a></li>
               <li><a href="<?php echo get_bloginfo('url'); ?>/about/">会社概要</a></li>
               <li><a href="<?php echo get_bloginfo('url'); ?>/recruit/">採用情報</a></li>
             </ul>
           </li>
         </ul>
         <a href="<?php echo get_bloginfo('url'); ?>/contact/" class="btn_white_center">お問い合わせ／資料請求</a>
       </nav>
     </div>
  </header>