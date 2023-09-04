    <?php wp_reset_query(); ?>
    <?php
    if(!is_page( array('support-mynumber','sc-mnform')) ):
    $style_ft = 'contact_footer';
    if(is_singular('column') || is_post_type_archive('column') || is_tax('column-cat') || is_tax('columntag') || is_page('crossnavi') || is_page('o2') || is_page('t-rex') || is_page('about') || is_page('entrust') || is_page('nencho') || is_page('zyuminzei')){
        $style_ft = 'contact_footer bg_white';
    }
    ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/spnav.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/gotop.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
    <?php if ( is_page('c-en') ){ ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/tab.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/accordion.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/gotop.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inview.js"></script>
    <?php } ?>
    <?php if ( is_page('payroll') ){ ?>
    <script src="<?php echo get_template_directory_uri(); ?>/js/tab.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/accordion.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/gotop.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/inview.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/marker.js"></script>
    <?php } ?>
    <?php if ( is_page('recruit') ){ ?>
        <script>
        $(function() {
        $('input[name=TAB]').on('click', function() {
            $('.contents').fadeOut(500);
            n = $(this).attr('id').replace('TAB', '');
            $('#tab-content' + n).fadeIn(1500);
        });
        $('#TAB01').click();
        });
        </script>
    <?php } ?>
    <div class="<?php echo $style_ft; ?>">
        <a href="<?php echo get_bloginfo('url'); ?>/contact/" class="btn_white_center">お問い合わせ／資料請求</a>
        <div class="contact_tel">
            <span class="txt_tel">お電話でのお問い合わせ</span>
            <a href="tel:0120530451​" class="txt_number">0120-530-451</a>
            <span class="txt_time">（平日9:00〜18:00）</span>
        </div>
    </div>
    <?php endif; ?>
    <footer>
        <div class="container_large">
            <figure class="footer_logo"><a href="<?php echo get_bloginfo('url'); ?>/"><img src="/wp-content/uploads/2022/12/biz-logo-white.png" alt="株式会社キャムテック CAMTEC 白色"></a></figure>
        <div class="footer_menu pc">
            <ul>
                <li>サービス</li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/hr/">HR・テッククラウド</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/outsourcing/">代行・委託サービス</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/global/">海外人材サービス</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/training/">研修プログラム</a></li>
                </ul>
<!--             <ul>
                <li><a href="<?php echo get_bloginfo('url'); ?>/case/">導入事例</a></li>
            </ul> -->
            <ul>
                <li><a href="<?php echo get_bloginfo('url'); ?>/news/">ニュース</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/category/topics/">お知らせ</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/category/event/">イベント</a></li>
                <li><a href="<?php echo get_bloginfo('url'); ?>/category/seminar/">セミナー</a></li>
            </ul>
<!--             <ul>
                <li><a href="<?php echo get_bloginfo('url'); ?>/column/">コラム</a></li>
            </ul> -->
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
        <span class="copyright">© CAMTECH Inc. All Rights Reserved.</p></span>
        </div>
        <div class="pc"><a href="#" id="page_top"><img src="<?php echo get_template_directory_uri(); ?>/img/icn_gotop.svg" alt="ページトップに戻る"></a></div>
    </footer>
</body>
<?php wp_footer(); ?>
</html>