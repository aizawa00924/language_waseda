<?php
/*
Template Name: 会社概要
*/
?>

<?php get_header(); ?>
<!--container -->
<div id="container">

<!--contents -->
<div id="contents">

<!--contact -->
<div id="company" class="box company_page company_wrapper">
<!--KV -->
<div class="kv_wrapper" id="kv">
    <div class="center_wrapper">
        <p class="jp">会社情報</p>
        <p class="en">About us</p>
    </div>
     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kv_company_pc.png" alt="会社概要" class="pc">
     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kv_company_sp.png" alt="会社概要" class="sp">
</div>
<!--KV -->

<div class="in_wrapper" id="donation">
    <div class="top_title">
        <div class="english">PHILOSOPHY</div>
        <div class="japanese">企業理念</div>
    </div>
<div class="ph_out">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company_logo_large.png" alt="リブナビ株式会社">
    <h2>不動産の能力を最大限に活用し、お客様と共存共栄を目指します</h2>
</div>
<div class="ph_out_image">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sub_company_image.png" alt="リブナビの企業理念">
    <div class="txt_blue_wrapper sp">
        <p class="txt_larage">更なる飛躍を目指して、人にやさしく、<br>環境にやさしい後世へと受け継がれるサステナブルな街づくりを推進し、<br>新しい価値の「創造」を続けてまいります。</p>

    </div>
    <div class="txt_blue_wrapper pc">
        <p class="txt_larage">更なる飛躍を目指して、人にやさしく、<br>環境にやさしい後世へと受け継がれるサステナブルな街づくりを推進し、新しい価値の「創造」を続けてまいります。</p>

    </div>
</div>
<div class="">
    <div class="top_title">
        <div class="english">SOCIAL CONTRBUTIONS</div>
        <div class="japanese">社会貢献</div>
    </div>
    <div class="news_wrapper in_wrapper">
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
</div>
<div class="in_wrapper" id="info">
        <div class="top_title">
            <div class="english">About us</div>
            <div class="japanese">会社概要</div>
        </div>
<div class="in_wrapper_contents">
    <div class="map_wrapper_out">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.7068278980364!2d139.72352811477998!3d35.708831436066035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d03cac12705%3A0x3743d3e1beb3845!2z44CSMTYyLTAwNDEg5p2x5Lqs6YO95paw5a6_5Yy65pep56iy55Sw6ba05be755S677yS77yV77yR4oiS77yU77yVIFlVTUVOT-ODk-ODqw!5e0!3m2!1sja!2sjp!4v1656855065730!5m2!1sja!2sjp" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map_wrapper"></iframe>
        </div>
<table class="info_table">
<tbody>
<tr>
<th>社名</th>
<td>リブナビ株式会社</td>
</tr>

<tr>
<th>設立</th>
<td>2008年1月18日</td>
</tr>

<tr>
<th>取締役</th>
<td>矢野　康</td>
</tr>

<tr>
<th>所在地</th>
<td>〒162-0041<br>東京都新宿区早稲田鶴巻町251-45</td>
</tr>
<tr>
<th>Tel</th>
<td>03-6302-0127</td>
</tr>
<tr>
<th>Fax</th>
<td>03-6302-0129</td>
</tr>
<tr>
<th>資本金</th>
<td>1000万円</td>
</tr>

<tr>
<th>事業内容</th>
<td>中古マンション・戸建ての再生事業を展開しており、東京23区を中心とした不動産の売買仲介業務などを手掛けている。その他、競売代行業も担っており、物件調査から... 事業主からの販売代理委託による新築分譲マンションの販売を行う。また、学生寮の経営、電気やガス及び水道などインフラ設備や防犯設備の提案にも取り組む。</td>
</tr>

</tbody>

</table>
</div>

<div class="btn">
    <a href="<?php echo get_template_directory_uri(); ?>/service/">事業紹介</a>
</div>
</div>


</div>




</div>
<!--/about -->



</div>
<!--/contents -->



</div>
<!--/container -->

<?php get_footer(); ?>