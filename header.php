<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- 電話番号の自動リンク化を無効 -->
<meta name="format-detection" content="telephone=no">

<title>リブナビ株式会社 | LIVENAVI Co., Ltd</title>
<meta name="description" content="リブナビ株式会社 | LIVENAVI Co., Ltdの公式サイト">
<meta property="og:type" content="website">
<meta property="og:title" content="リブナビ株式会社 | LIVENAVI Co., Ltd">
<meta property="og:url" content="morinoken.jp">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/kv_top_pc.png">

<meta property="og:site_name" content="リブナビ株式会社 | LIVENAVI Co., Ltd">
<meta property="og:description" content='リブナビ株式会社 | LIVENAVI Co., Ltdの公式サイト'>
<meta property="og:locale" content="ja_JP">
<meta name="twitter:card" content="summary_large_image">

<link rel="canonical" href="park-homes.jp"/>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo_icon.png" type="/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo_icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo_icon.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/logo_icon.png">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>


</head>

<body id="<?php echo esc_attr( $post->post_name ); ?>" class="common">
<div class="header" id="head_wrap">
    <div class="inner">
        <div id="mobile-head">
        <div class="MainMenu_logo">
        <a href="<?php echo esc_url(home_url('')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_wide.png" alt="logo"></a></div>
            <div id="nav-toggle">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <nav id="global-nav" class="nav_list pc">
            <ul class="gnavi__lists">
                <li class="navi_back navi01"><a href="<?php echo esc_url(home_url('')); ?>">TOP</a></li>
                <li class="gnavi__list navi_back navi02"><a href="<?php echo esc_url(home_url('')); ?>/service/">事業紹介</a>
                     <ul class="dropdown__lists">
                        <li class="dropdown__list"><a href="<?php echo esc_url(home_url('')); ?>/service/#c01"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu_sub_1st.png" alt="不動産売買"></a></li>
                        <li class="dropdown__list"><a href="<?php echo esc_url(home_url('')); ?>/service/#c02"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu_sub_2nd.png" alt="不動産賃貸"></a></li>
                        <li class="dropdown__list"><a href="<?php echo esc_url(home_url('')); ?>/service/#c03"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu_sub_3rd.png" alt="不動産管理"></a></li>
                         <li class="dropdown__list"><a href="<?php echo esc_url(home_url('')); ?>/service/#c04"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu_sub_4th.png" alt="不動産運用"></a></li>
                         <li class="dropdown__list"><a href="<?php echo esc_url(home_url('')); ?>/service/#c05"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu_sub_5th.png" alt="学生寮経営"></a></li>
                    </ul>
                </li>
                <li class="navi_back navi03"><a href="<?php echo esc_url(home_url('')); ?>/company/">会社情報</a></li>
                <li class="navi_back navi04"><a href="<?php echo esc_url(home_url('')); ?>/news/">お知らせ</a></li>
                <li class="navi_back navi05"><a href="<?php echo esc_url(home_url('')); ?>/contact/">お問い合わせ</a></li>
            </ul>
        </nav>
            <nav id="global-nav" class="nav_list sp">
            <ul>
                <li><a href="<?php echo esc_url(home_url('')); ?>">TOP</a></li>
                <li class="gnavi__list"><a href="<?php echo esc_url(home_url('')); ?>/service/">事業内容</a></li>
                <li><a href="<?php echo esc_url(home_url('')); ?>/company/">会社概要</a></li>
                <li><a href="<?php echo esc_url(home_url('')); ?>/news/">最新情報</a></li>
                <li><a href="<?php echo esc_url(home_url('')); ?>/contact/">お問い合わせ</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- /header-->