<?php get_header(); ?>

<!--container -->
<div id="container">

    <!--contents -->
    <div id="contents">
        <div class="news_page">
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            <div class="news_contents">
                <p><?php the_content('Read more'); ?></p>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="news_foot">
            <p class="front in_block"><?php previous_post_link('%link','< 前の記事'); ?></p>
            <p class="middle in_block"><a href="<?php echo esc_url(home_url('')); ?>/news/">ニュース</a></p>
            <p class="end in_block"><?php next_post_link('%link','後の記事 >'); ?></p>
        </div>

    </div>
    <!--/contents -->


</div>
<!--/container -->

<?php get_footer(); ?>