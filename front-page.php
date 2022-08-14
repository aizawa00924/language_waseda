<?php
/*
Template Name: TOPページ
*/
?>
<?php get_header(); ?>

<!--container -->
<div id="container">
<!--contents -->
<div id="contents">
    <!--KV -->
    <div class="kv_wrapper" id="kv">
        <div class="container-video">
            <div class="table-center">
                <div>
                  <p class="txt_small english">リブナビ株式会社 LIVENAVI Co., Ltd</p>
                  <p class="pc"> 不動産の能力を最大限に活用し、お客様と共存共栄を目指します</p>
                  <p class="sp"> 不動産の能力を最大限に活用し、<br>お客様と共存共栄を目指します</p>
                   <p class="txt_small"></p>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kv_top_pc.png" alt="リブナビ株式会社" class="pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kv_top_sp.png" alt="リブナビ株式会社" class="sp">
        </div>
    </div>
    <!--KV -->
    <div class="about_wrapper in_wrapper" id="top_about">
        <div class="top_title">
            <div class="english">About Us</div>
            <div class="japanese">企業理念</div>
        </div>
        <div class="sub_wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top_about.png" alt="リブナビ株式会社の企業理念">
            <span class="txt sp">物件探し・融資・管理・売却など不動産投資に関することなら、<br>どんなことでもおまかせください！
            </span>
            <span class="txt pc">物件探し・融資・管理・売却など不動産投資に関することなら、<br>どんなことでもおまかせください！<br>
            </span>
            <div class="btn">
                <a href="<?php echo get_template_directory_uri(); ?>/company/">会社概要</a>
            </div>
        </div>
    </div>
<!--about_wrapper fin -->

    <div class="news_wrapper in_wrapper" id="news">
            <div class="top_title">
                <div class="english">SOCIAL CONTRBUTIONS</div>
                <div class="japanese">社会貢献</div>
            </div>
        <div class="news_in_wrapper">
            <?php query_posts( 'cat=2&posts_per_page=3' ); ?>
            <?php if(have_posts()): ?>
            <dl class="news_wrapper_all">
            <?php while(have_posts()): the_post(); ?>
            <div class="single_news_wrapper">
            <dt class="date"><?php the_time('Y.m.d'); ?></dt>
            <?php
            $cats = get_the_category();
            $cats = $cats[0];
            ?>
            <dd class="<?php echo $cats->category_nicename;?>">
            <a href="<?php the_permalink(); ?>" <?php if ( has_post_format( 'gallery' )) echo 'class="photo"' ?> ><?php the_title(); ?></a></dd></div>
            <?php endwhile; ?>

            </dl>
            <?php endif; wp_reset_query(); ?>
        </div>
    </div>
<!--SOCIAL CONTRBUTIONS fin -->
    <div class="business_wrapper in_wrapper" id="top_business">
        <div class="bg_top_business">
            <div class="top_title">
                <div class="english">Business</div>
                <div class="japanese">事業紹介</div>
            </div>
            <div class="img_all_wrapper">
                <div class="business_in_wrapper camera">
                    <div class="title">不動産売買</div>
                </div>
                <div class="business_in_wrapper inv">
                    <div class="title">不動産賃貸</div>
                </div>
                <div class="business_in_wrapper sales1">
                    <div class="title">不動産管理</div>
                </div>
                <div class="business_in_wrapper sales2">
                    <div class="title">不動産運営</div>
                </div>
                <div class="business_in_wrapper sales3">
                    <div class="title">学生寮の運営</div>
                </div>
            </div>
            <div class="btn">
                <a href="<?php echo get_template_directory_uri(); ?>/service/">事業内容詳細</a>
            </div>
        </div>
    </div>
<!--business fin -->

    <div class="news_wrapper in_wrapper" id="news">
            <div class="top_title">
                <div class="english">NEWS</div>
                <div class="japanese">最新情報</div>
            </div>
        <div class="news_in_wrapper">
            <?php query_posts( 'cat=1&posts_per_page=3' ); ?>
            <?php if(have_posts()): ?>
            <dl class="news_wrapper_all">
            <?php while(have_posts()): the_post(); ?>
            <div class="single_news_wrapper">
            <dt class="date"><?php the_time('Y.m.d'); ?></dt>
            <?php
            $cats = get_the_category();
            $cats = $cats[0];
            ?>
            <dd class="<?php echo $cats->category_nicename;?>">
            <a href="<?php the_permalink(); ?>" <?php if ( has_post_format( 'gallery' )) echo 'class="photo"' ?> ><?php the_title(); ?></a></dd></div>
            <?php endwhile; ?>

            </dl>
            <?php endif; wp_reset_query(); ?>
        </div>
            <div class="btn">
                <a href="<?php echo esc_url(home_url('')); ?>/news/">ニュース一覧</a>
            </div>
    </div>
<!--news fin -->

    <div class="contact_wrapper in_wrapper" id="contact">

        <div class="top_title">
            <div class="english">Contact</div>
            <div class="japanese">お問い合わせ</div>
        </div>
        <div class="sub_wrapper">
            <div class="txt pc">
                物件探し・融資・管理・売却など不動産投資に関することなら、どんなことでもおまかせください！<br>
                内容を確認後、担当者よりご連絡させていただきます。
            </div>
            <div class="txt sp">
                物件探し・融資・管理・売却など不動産投資に関することなら、<br>どんなことでもおまかせください！<br>
                内容を確認後、<br>担当者よりご連絡させていただきます。
            </div>
            <div class="btn">
                <a href="<?php echo esc_url(home_url('')); ?>/contact/">Contact</a>
            </div>
        </div>

    </div>
<!--contact fin -->

</div>
<!--/contents -->

</div>
<!--/container -->

<?php get_footer(); ?>