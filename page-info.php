<?php
/*
Template Name: ニュース一覧
*/
?>

<?php get_header(); ?>
<!--container -->
<div id="container">

<!--contents -->
<div id="contents">

<!--contact -->
<div id="news" class="box news_page news_wrapper">
        <div class="top_title">
            <div class="english">News</div>
            <div class="japanese">ニュース一覧</div>
        </div>
	<div class="news_in_wrapper">
            <?php query_posts( 'cat=1&posts_per_page=50' ); ?>
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

	</div><!--all_wrapper -->





</div>
<!--/about -->



</div>
<!--/contents -->



</div>
<!--/container -->

<script src="<?php echo get_template_directory_uri() ?>/js/mailform-js.php"></script>

<!-- フリガナ自動入力ライブラリここから -->
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.autoKana.js"></script>
<script>
	(function( $ ) {
		$.fn.autoKana( '#name_1', '#read_1', {
			katakana: false
		});
		$.fn.autoKana( '#name_2', '#read_2', {
			katakana: false
		});
	})( jQuery );
</script>
<!-- フリガナ自動入力ライブラリここまで -->


<!-- 住所自動入力ライブラリここから -->
<script src="<?php echo get_template_directory_uri() ?>/js/ajaxzip3.js"></script>
<!-- 住所自動入力ライブラリここまで -->


<!-- ご希望の日時選択ライブラリここから -->
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.datetimepicker.js"></script>
<script>
	(function( $ ) {
		$( 'input#schedule' ).datetimepicker({
			lang: 'ja'
		});
	})( jQuery );
</script>
<!-- ご希望の日時選択ライブラリここまで -->
<?php get_footer(); ?>