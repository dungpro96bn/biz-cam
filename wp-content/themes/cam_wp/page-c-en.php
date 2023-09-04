<?php 
/*
Template Name: C-en
*/
?>
<?php get_header();?>

<style type="text/css">
	h1, h2, h3, h4, h5, h6{
		font-weight: bold;
	}
	@media print, screen and (min-width: 768px) {
		body {
			min-width: 1024px;
		}
	}
</style>

<main id="main_wrap">

    <!--font noto sans jp-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;700;900&display=swap" rel="stylesheet">

    <!--font Roboto-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- 	<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/c-en/css/style.css"/> -->
    <link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/c-en/css/c-en.css"/>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/c-en/js/c-en.js"></script>

    <div id="c-en" class="c-en">

        <div class="main-banner">
            <div class="main-content">
                <div class="heading-main">
                    <h1 class="heading">
                        <span class="t1">営業活動を見える化し、営業スタイルを革新する</span>
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_main_ttl01_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_main_ttl01_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_main_ttl01_pc.png" alt="">
                        </picture>
                    </h1>
                </div>
                <div class="main-list">
                    <div class="list-image">
                        <div class="box-text">
                            <p class="t1">クラウドサービス</p>
                            <p class="t2">シーエン</p>
                            <p class="t3">C-en</p>
                        </div>
                        <div class="img-item">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_main_img01_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_main_img01_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_main_img01_pc.png" alt="">
                            </picture>
                        </div>
                        <div class="img-item">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_main_img02_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_main_img02_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_main_img02_pc.png" alt="">
                            </picture>
                        </div>
                    </div>

                    <div class="list-infoMain">
                        <div class="item-main item01">
                            <ul class="list-info">
                                <li class="item-info">
                                    <p class="text">名刺を探す時間を大幅削減</p>
                                </li>
                                <li class="item-info">
                                    <p class="text">残業時間DOWN</p>
                                </li>
                                <li class="item-info">
                                    <p class="text">社内決裁がスムーズ</p>
                                </li>
                                <li class="item-info">
                                    <p class="text">引き継ぎがスムーズ</p>
                                </li>
                                <li class="item-info">
                                    <p class="text">資料も簡単作成</p>
                                </li>
                            </ul>
                        </div>
                        <div class="sub-box">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon20_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon20_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon20_pc.png" alt="">
                            </picture>
                        </div>
                        <div class="item-main item02">
                            <ul class="list-info">
                                <li class="item-info">
                                    <p class="text">名刺探しで時間がかかる</p>
                                </li>
                                <li class="item-info">
                                    <p class="text">毎日終電間際</p>
                                </li>
                                <li class="item-info">
                                    <p class="text">進捗報告が無駄と手間</p>
                                </li>
                                <li class="item-info">
                                    <p class="text">顧客履歴が消失</p>
                                </li>
                                <li class="item-info">
                                    <p class="text">営業資料作成に時間がかかる</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="point-block">
            <div class="inner">
                <h2 class="heading-block" data-aos="fade-up"><span class="txt-border-yellow">名刺は企業資産。有効活用して営業効率アップ！</span></h2>
                <ul class="list-point">
                    <li class="item-point" data-aos="fade-up">
                        <p class="ttl-en">Point1</p>
                        <p class="text">初期費用無料、<br class="pc-br"/>簡単導入</p>
                    </li>
                    <li class="item-point" data-aos="fade-up">
                        <p class="ttl-en">Point2</p>
                        <p class="text">アポ獲得率30%<span>※</span><br class="pc-br"/>アップ</p>
                    </li>
                    <li class="item-point" data-aos="fade-up">
                        <p class="ttl-en">Point3</p>
                        <p class="text">キャンペーン<br class="pc-br"/>ヒアリング率98%<span>※</span></p>
                    </li>
                </ul>
                <p class="txt-note" data-aos="fade-up">※当社モニター企業調査(2015年4月〜6月)による</p>
                <p class="ttl-btn" data-aos="fade-up"><span>5つの効率テクニック限定公開中！！</span></p>
                <div class="link-page" data-aos="fade-up">
                    <a class="btn-link" href="https://www.ca-m.co.jp/download/download0006/">資料ダウンロードはこちら</a>
                </div>
            </div>
        </div>

        <div class="introduction-block">
            <div class="inner">
                <h2 class="heading-block" data-aos="fade-up">
                    <span class="t1">名刺管理から営業戦略として売り上げにつながる</span>
                    <span class="t2 txt-border-green">「C-en」充実機能のご紹介</span>
                </h2>
                <picture class="image-introduction" data-aos="fade-up">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic01_sp.png 2x">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic01_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic01_pc.png" alt="">
                </picture>
                <div data-aos="fade-up">
                    <ul class="list-tab">
                        <li class="item-tab">
                            <a href="#tab01" class="btn-tab is-active">名刺<br class="sp-br"/>管理</a>
                        </li>
                        <li class="item-tab">
                            <a href="#tab02">顧客<br class="sp-br"/>管理</a>
                        </li>
                        <li class="item-tab">
                            <a href="#tab03">営業<br class="sp-br"/>管理</a>
                        </li>
                        <li class="item-tab">
                            <a href="#tab04">情報<br class="sp-br"/>管理</a>
                        </li>
                    </ul>
                    <div id="tab01" class="introduction-tab is-active">
                        <div class="content">
                            <p class="title">スマホで撮影したデータを<br class="sp-br"/>スッキリ効率的に名刺管理</p>
                            <div class="item-content">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic02_sp.png 2x">
                                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic02_pc.png 2x">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic02_pc.png" alt="">
                                </picture>
                                <dl class="text-info">
                                    <dt class="ttl">名刺情報のデジタル化</dt>
                                    <dd class="text">デジタルデータとして取り込み。スマートフォンやスキャナ一括取り込みで登録も簡単です。<br/>オペレーターによる精度の高いデータ化サービスもございます。</dd>
                                </dl>
                            </div>
                            <div class="item-content">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic03_sp.png 2x">
                                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic03_pc.png 2x">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic03_pc.png" alt="">
                                </picture>
                                <dl class="text-info">
                                    <dt class="ttl">名刺検索機能</dt>
                                    <dd class="text">登録された名刺情報は、 PCからはもちろん、外出先でのスマートフォンやタブレットで<br class="pc-br"/> いつでも閲覧することができ、空き時間でのアポ取りや後追いもリスト不要で行えます。</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div id="tab02" class="introduction-tab">
                        <div class="content">
                            <p class="title">スマホで撮影したデータをスッキリ効率的に名刺管理</p>
                            <div class="item-content">
                                <picture class="image">
                                    <source srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic04_pc.png 2x">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic04_pc.png" alt="">
                                </picture>
                                <dl class="text-info">
                                    <dt class="ttl">社内人脈の可視化</dt>
                                    <dd class="text">顧客と接触した自社担当者を名刺に自動紐付けし、顧客との社内人脈情報を見える化します。<br/>これにより新規開拓のかぶりをなくし効率的な営業活動が可能です。</dd>
                                </dl>
                            </div>
                            <div class="item-content">
                                <picture class="image">
                                    <source srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic05_pc.png 2x">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic05_pc.png" alt="">
                                </picture>
                                <dl class="text-info">
                                    <dt class="ttl">組織図自動生成</dt>
                                    <dd class="text">名刺の情報から顧客の組織構成を自動生成します。顧客側の部門・役職などが一元化され、<br/>自社担当者がどのセクションに接触中なのかを見える化し、水平展開や複合提案につなげられます。</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div id="tab03" class="introduction-tab">
                        <div class="content">
                            <p class="title">営業戦略に対応するプロジェクト管理、一括メール配信</p>
                            <div class="item-content">
                                <picture class="image">
                                    <source srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic06_pc.png 2x">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic06_pc.png" alt="">
                                </picture>
                                <dl class="text-info">
                                    <dt class="ttl">プロジェクト管理</dt>
                                    <dd class="text">商談記録をアクション登録し、状況を随時管理。確度・進捗・商談時間・内容・次回予定などを見える化し、報告・営業会議などの効率化が可能です。</dd>
                                </dl>
                            </div>
                            <div class="item-content">
                                <picture class="image">
                                    <source srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic07_pc.png 2x">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic07_pc.png" alt="">
                                </picture>
                                <dl class="text-info">
                                    <dt class="ttl">一括メール配信</dt>
                                    <dd class="text">案内メールを複数の担当者に一斉メール配信ができます。メルマガ的ではなくOne To One（担当者直接メール）のように送信できるため反応効果を高めます。閲覧可否もチェックできます。</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div id="tab04" class="introduction-tab">
                        <div class="content">
                            <p class="title">アクション通知で即時情報共有</p>
                            <div class="item-content">
                                <picture class="image">
                                    <source srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic06_pc.png 2x">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic06_pc.png" alt="">
                                </picture>
                                <dl class="text-info">
                                    <dt class="ttl">情報共有</dt>
                                    <dd class="text">商談相手の名刺を選択して営業報告。スマートフォン・タブレットから登録できるので、会社に戻らずとも1日の営業報告ができます。入力項目は自由にカスタマイズ可能。スケジュール管理もC-en上で管理・共有できます。</dd>
                                </dl>
                            </div>
                            <div class="item-content">
                                <picture class="image">
                                    <source srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic07_pc.png 2x">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic07_pc.png" alt="">
                                </picture>
                                <dl class="text-info">
                                    <dt class="ttl">アクション通知</dt>
                                    <dd class="text">注目する企業や自社の部署・担当者を事前フォローしておくと、アクションが登録された時に、情報が自動で配信され、リアルタイムに動きが確認できます。</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="ttl-btn" data-aos="fade-up"><span>5つの効率テクニック限定公開中！！</span></p>
                <div class="link-page" data-aos="fade-up">
                    <a class="btn-link" href="https://www.ca-m.co.jp/download/download0006/">資料ダウンロードはこちら</a>
                </div>
            </div>
        </div>

        <div class="reason-block">
            <div class="content">
                <h2 class="heading-block" data-aos="fade-up">
                    <span class="t1">C-enは簡単だから使う！<br class="sp-br"/>欲しい情報が勝手に届く！</span>
                    <span class="t2 txt-border-yellow">選ばれるのには理由があります</span>
                </h2>
                <ul class="list-reason" data-aos="fade-up">
                    <li class="item-reason">
                        <div data-aos="fade-up">
                            <div class="box-ttl">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon06_sp.png 2x">
                                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon06_pc.png 2x">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon06_pc.png" alt="">
                                </picture>
                                <p class="ttl"><span>C-en</span>なら</p>
                            </div>
                            <ul class="item-content">
                                <li class="item-text">
                                    <p class="text">様々な規模の企業でデモを行い、使いやすさを追求。</p>
                                </li>
                                <li class="item-text">
                                    <p class="text">専門知識不要で、カスタマイズもおまかせ。</p>
                                </li>
                                <li class="item-text">
                                    <p class="text">初期費用がかからず導入が手軽。<br/>メール配信・サーバー容量の追加課金なし。</p>
                                </li>
                                <li class="item-text">
                                    <p class="text">無料サポートセンター常設。</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="item-reason">
                        <div data-aos="fade-up">
                            <div class="box-ttl">
                                <picture class="image">
                                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon07_sp.png 2x">
                                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon07_pc.png 2x">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon07_pc.png" alt="">
                                </picture>
                                <p class="ttl">他社<br class="sp-br"/>だと</p>
                            </div>
                            <ul class="item-content">
                                <li class="item-text">
                                    <p class="text">多機能だけど使いこなせない。</p>
                                </li>
                                <li class="item-text">
                                    <p class="text">別途プログラムする必要がある。</p>
                                </li>
                                <li class="item-text">
                                    <p class="text">イニシャル・ランニングコストが高い。<br/>コンサル費の請求も。</p>
                                </li>
                                <li class="item-text">
                                    <p class="text">マニュアルあれども、フォローが浅い。</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="table-company">
             <div class="inner">
                 <h2 class="heading-block" data-aos="fade-up">
                     <span class="txt-border-yellow">他社比較</span>
                 </h2>
                 <div class="list-company" data-aos="fade-up">
                     <div class="item-company item-th">
                         <div class="th-ttl ttl-company"></div>
                         <div class="th-ttl ttl-big">
                             <p class="text">C-en</p>
                         </div>
                         <div class="th-ttl">
                             <p class="text">A社</p>
                         </div>
                         <div class="th-ttl">
                             <p class="text">B社</p>
                         </div>
                         <div class="th-ttl">
                             <p class="text">C社</p>
                         </div>
                     </div>
                     <div class="item-company item-tr">
                         <div class="ttl">
                             <p class="text">顧客企業情報</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">△</p>
                         </div>
                     </div>
                     <div class="item-company item-tr">
                         <div class="ttl">
                             <p class="text">顧客組織<br class="sp-br"/>情報管理</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">×</p>
                         </div>
                     </div>
                     <div class="item-company item-tr">
                         <div class="ttl">
                             <p class="text">組織構成表示又は<br class="pc-br"/>人脈</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">×</p>
                         </div>
                     </div>
                     <div class="item-company item-tr">
                         <div class="ttl">
                             <p class="text">顧客担当者情報管理</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                     </div>
                     <div class="item-company item-tr">
                         <div class="ttl">
                             <p class="text">顧客接触履歴<br class="pc-br"/>（アクション履歴）</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">△</p>
                         </div>
                     </div>
                     <div class="item-company item-tr">
                         <div class="ttl">
                             <p class="text">登録項目の<br/>カスタマイズ</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">×</p>
                         </div>
                         <div class="text-td">
                             <p class="text">○</p>
                         </div>
                         <div class="text-td">
                             <p class="text">×</p>
                         </div>
                     </div>
                     <div class="content-toggle" style="display: none">
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">プロジェクト情報</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">△</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">登録項目のカスタマイズ</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">スケジュール</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">接触履歴表示</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">注目企業管理</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">注目企業の接触情報を<br/>お知らせ</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">一斉メール配信</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">△</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">差込項目対応</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">差出人可変対応</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">顧客担当者アクセス状況</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">名刺管理</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">△</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">デジタルデータ化</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">テキスト補正</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">スマホカメラ撮影<br/>アップロード</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">×</p>
                             </div>
                         </div>
                         <div class="item-company item-tr">
                             <div class="ttl">
                                 <p class="text">スキャナ取り込み</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                             <div class="text-td">
                                 <p class="text">○</p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="toggle-btn" data-aos="fade-up">
                     <p class="btn-table"><span class="txt-open">表の続きを見る</span><span class="txt-close">閉じる</span></p>
                 </div>
             </div>
        </div>

        <div class="management-screen">
            <div class="inner">
                <h2 class="heading-block" data-aos="fade-up">
                    <span class="txt-border-yellow">マルチデバイスに対応した<br class="sp-br"/>管理画面</span>
                </h2>
                <div class="ttl" data-aos="fade-up">
                    <p class="text">外出先でも、スマホ・タブレット・ノートPCで確認できます！</p>
                </div>
                <picture class="image" data-aos="fade-up">
                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic10_sp.png 2x">
                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic10_pc.png 2x">
                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_pic10_pc.png" alt="">
                </picture>
                <p class="text-note" data-aos="fade-up">様々な規模の企業でデモを行い、使いやすさを追求。</p>
            </div>
        </div>

        <div class="voice-block">
            <div class="inner">
                <h2 class="heading-block" data-aos="fade-up">
                    <span class="txt-border-green">ご利用者様の声</span>
                </h2>
                <ul class="voice-list">
                    <li class="voice-item" data-aos="fade-up">
                        <div class="voice-header">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon08_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon08_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon08_pc.png" alt="">
                            </picture>
                            <dl class="text-info">
                                <dt class="ttl">毎週の営業会議の時間が30分削減できました。</dt>
                                <dd class="text">情報・通信業 B社（埼玉県／営業人数13人）</dd>
                                <dd class="text">営業部 主任 O様</dd>
                            </dl>
                        </div>
                        <p class="voice-text">情報通信業界では新商品や機能改善の流れがとても早く、市場に合わせて営業スタイルや提案内容を変更していかなければならず、<br/>効果的な営業手法や提案を即時に社内共有する必要があります。ただ、実際には、全員が集める会議は週に1回しかなかったため、リアルタイムに把握することは難しかったです。また、会議の内容もだらだらとした商談内容の報告がメインになっていたため、個々の営業手法に頼りきりになっているところがありました。ですが、C-enを使うようになって、取引先の基本情報が名刺から即時データ化され、商談情報がメンバーへの自動配信されるのでタイムリーな情報共有ができるようになったことで、<span>毎週の営業会議の時間を30分削減</span>できました。また報告内容に「成功例」「失敗例」という項目を必須で入力させたため、<span>積極的に他者の事例を取り入れてくれて成功率も15%アップ</span>しました。なにより、携帯番号で名刺読み込み・商談情報登録までできるので、外出先でほとんどの報告が済ませられるということは大変魅力的ですよね。</p>
                        <ul class="list-check">
                            <li class="item-check">
                                <p class="text">成功率15%UP</p>
                            </li>
                            <li class="item-check">
                                <p class="text">タイムリーな情報共有</p>
                            </li>
                            <li class="item-check">
                                <p class="text">会議時間の短縮</p>
                            </li>
                        </ul>
                    </li>
                    <li class="voice-item" data-aos="fade-up">
                        <div class="voice-header">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon09_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon09_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon09_pc.png" alt="">
                            </picture>
                            <dl class="text-info">
                                <dt class="ttl">お客様の変化にも柔軟に対応でき、社内コミュニケーションも円滑になりました。</dt>
                                <dd class="text">食品・日用品小売業　S社（千葉県／営業人数21人）</dd>
                                <dd class="text">第1 営業部 部長 A様</dd>
                            </dl>
                        </div>
                        <p class="voice-text">食品価格の高騰が大きな社会問題となっている近年、お客さまからの反応を即座に販売戦略へと反映させることが必要不可欠になって<br class="pc-br"/>きました。営業が作成した日報を上司が週報にまとめて経営陣に報告、というプロセスをとっていたのですが、日報もその日に上がらない事が多く、現場と経営者との情報のタイムラグが2週間から4週間もありました。<br/>C-enを導入することで、経営者が自ら知りたい情報だけを営業報告の中からダイレクトに吸い上げて、<span>1日単位で目を通せるので、<br class="pc-br"/>日々移り変わるお客様の変化にも柔軟に対応することができる</span>ようになりました。話題や認識も共有しやすくなり、<span>社内のコミュニケーションも円滑</span>になったような気がしています。</p>
                        <ul class="list-check">
                            <li class="item-check">
                                <p class="text">円滑なコミュニケーション</p>
                            </li>
                            <li class="item-check">
                                <p class="text">顧客変化に柔軟に対応</p>
                            </li>
                            <li class="item-check">
                                <p class="text">タイムラグの改善</p>
                            </li>
                        </ul>
                    </li>
                    <li class="voice-item" data-aos="fade-up">
                        <div class="voice-header">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon10_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon10_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon10_pc.png" alt="">
                            </picture>
                            <dl class="text-info">
                                <dt class="ttl">組織全体のボトムアップに成功、有効商談率が20%アップしました。</dt>
                                <dd class="text">電気・精密メーカー D社（東京都／営業人数53人）</dd>
                                <dd class="text">営業部 部長 K様</dd>
                            </dl>
                        </div>
                        <p class="voice-text">弊社のような製造業では、1つの案件に対して複数の取引先と営業部門が絡むため、情報共有の徹底が重要でした。営業担当者が個々に把握・管理している情報や進捗状況について、共有・検討するためのミーティングを定期的に開催していますが、営業の人数も多いことから、営業全体の進捗把握に手間と時間がかかっていました。そこでC-enを導入することを決めました。<br/>成功事例やベテラン営業担当のノウハウを即時共有して、プロセスに落とし込んでいくことで、<span>組織全体のボトムアップに成功し、<br class="pc-br"/>有効商談率が20％アップ</span>しました。以前は社内に持ち帰りデータ化を行なっていたので、データ入力だけで約3週間、お礼のメールを送るまでに長いと1ヶ月近くかかっていたので、C-enを利用することで<span>お客様の熱が冷めない内にアプローチができるようになり、展示会から成約までの導線が5割削減できました。</span></p>
                        <ul class="list-check">
                            <li class="item-check">
                                <p class="text">有効商談率20%UP</p>
                            </li>
                            <li class="item-check">
                                <p class="text">組織のボトムアップ</p>
                            </li>
                            <li class="item-check">
                                <p class="text">成約までの最短アプローチ</p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <h2 class="heading-block heading02" data-aos="fade-up">
                    <span class="txt-border-green">様々な業界で導入いただいております！</span>
                </h2>
                <div class="list-voice-icon">
                    <div class="item-voice-icon" data-aos="fade-up">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon12_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon12_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon12_pc.png" alt="">
                        </picture>
                        <p class="txt-img">情報通信業界</p>
                    </div>
                    <div class="item-voice-icon" data-aos="fade-up">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon13_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon13_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon13_pc.png" alt="">
                        </picture>
                        <p class="txt-img">金融業界</p>
                    </div>
                    <div class="item-voice-icon" data-aos="fade-up">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon14_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon14_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon14_pc.png" alt="">
                        </picture>
                        <p class="txt-img">建築・不動産<br class="sp-br"/>業界</p>
                    </div>
                    <div class="item-voice-icon" data-aos="fade-up">
                        <picture class="image">
                            <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon15_sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon15_pc.png 2x">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon15_pc.png" alt="">
                        </picture>
                        <p class="txt-img">電気・精密機器</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="rate-plan">
            <div class="inner">
                <h2 class="heading-block" data-aos="fade-up">
                    <span class="txt-border-yellow">料金プラン</span>
                </h2>
                <div class="rate" data-aos="fade-up">
                    <div class="text-t">
                        <p class="text-border">月額<span>2,200</span>円</p>
                        <p class="text">からの<br class="sp-br"/>料金プランをご用意しております！</p>
                    </div>
                </div>
                <p class="ttl-btn" data-aos="fade-up"><span>5つの効率テクニック限定公開中！！</span></p>
                <div class="link-page" data-aos="fade-up">
                    <a class="btn-link" href="https://www.ca-m.co.jp/download/download0006/">資料ダウンロードはこちら</a>
                </div>
            </div>
        </div>

        <div class="installing-block">
            <div class="inner">
                <h2 class="heading-block" data-aos="fade-up">
                    <span class="txt-border-yellow">C-enは導入して<br class="sp-br"/>終わりじゃない！！</span>
                </h2>
                <p class="sub-ttl" data-aos="fade-up">定着させてこそ初めて効果を発揮します！</p>
                <ul class="list-install">
                    <li class="item-install" data-aos="fade-up">
                        <p class="ttl">導入支援</p>
                        <p class="text">最適なプラン・仕組み<br class="pc-br"/>をご提案</p>
                    </li>
                    <li class="item-install" data-aos="fade-up">
                        <p class="ttl">定着支援</p>
                        <p class="text">“結果”を出すため</p>
                    </li>
                    <li class="item-install" data-aos="fade-up">
                        <p class="ttl">教育・研修サービス</p>
                        <p class="text">営業社員、マネージャー、<br class="pc-br"/>リーダーの能力を高める</p>
                    </li>
                </ul>
                <div class="box-mess" data-aos="fade-up">
                    <picture class="box-mess-image">
                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon16_sp.png 2x">
                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon16_pc.png 2x">
                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon16_pc.png" alt="">
                    </picture>
                    <div class="text-content">
                        <p class="text">その他、業務改善・管理、事務委託、各種代行などキャムテックはヒトの更なる価値向上・創造のためのサービスを提供しています。</p>
                        <a href="#">
                            <picture class="image">
                                <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon17_sp.png 2x">
                                <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon17_pc.png 2x">
                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/c-en/images/c-en/cen_icon17_pc.png" alt="">
                            </picture>
                            <span>キャムテック（株）はプライバシーマークを取得しております。</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>


</main>


<?php get_footer();?>