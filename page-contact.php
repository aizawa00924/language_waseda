<?php
/*
Template Name: お問い合わせ
*/
?>

<?php get_header(); ?>
<!--container -->
<div id="container">

<!--contents -->
<div id="contents">

<!--contact -->
<div id="contact" class="box contact_page">
        <div class="top_title">
            <div class="english">Contact</div>
            <div class="japanese">お問い合わせ</div>
        </div>
	<div class="all_wrapper">
		<div class="form_wrapper">
			<form action="<?php echo get_template_directory_uri() ?>/php/mailform.php" method="post" id="mail_form" class="form_wrapper_in">
				<dl>
					<dt>お名前<span>Your Name</span></dt>
					<dd class="required"><input type="text" id="name_1" name="name_1" value="" /></dd>
					
					<dt>ふりがな<span>Name Reading</span></dt>
					<dd><input type="text" id="read_1" name="read_1" value="" /></dd>
					
					<dt>メールアドレス<span>Mail Address</span></dt>
					<dd class="required"><input type="email" id="mail_address" name="mail_address" value="" /></dd>
					
					<dt>電話番号<span>Phone Number</span></dt>
					<dd><input type="tel" id="phone" name="phone" value="" /></dd>

					<dt>返信方法のご希望<span>Response</span></dt>
					<dd>
						<ul class="check_wrapper">
							<li><label><input type="checkbox" class="response" name="response[]" value="電話での返信を希望" />電話での返信を希望</label></li>
							<li><label><input type="checkbox" class="response" name="response[]" value="メールでの返信を希望" />メールでの返信を希望</label></li>
							<li><label><input type="checkbox" class="response" name="response[]" value="返信不要" />その他</label></li>
						</ul>
					</dd>
					
					<dt>お問い合わせの内容<span>Contents</span></dt>
					<dd class="required"><textarea id="contents" name="contents" cols="40" rows="5" class="textarea_wrapper"></textarea></dd>
					
				</dl>
			<p class="txt_large">プライバシーポリシー</p>
			<p>当サイトは、お客様の個人情報について、お客様の承諾が無い限り第三者に開示、提供を一切いたしません。<br>
				お客様から個人情報をご提供していただき、お客様へのサービスにご利用させて頂く場合がございますが、その目的以外には利用いたしません。<br>
			そして、ご提供頂いた個人情報を取り扱うにあたり管理責任者を置き、適切な管理を行っております。</p>
					<dt><dd>
						<ul>
							<li><label><input type="checkbox" class="agreen" name="agreen[]" value="プライバシーポリシーに同意して送信します。" />プライバシーポリシーに同意して送信します。</label></li>
						</ul>
					</dd>
					<p id="form_submit"><input type="button" id="form_submit_button" value="送信する" class="btn" /></p>
			</form>

	</div>

	</div><!--all_wrapper -->





</div>
<!--/about -->



</div>
<!--/contents -->



</div>
<!--/container -->

<script src="<?php echo get_template_directory_uri() ?>/assets/js/mailform-js.php"></script>

<!-- フリガナ自動入力ライブラリここから -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.autoKana.js"></script>
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
<script src="<?php echo get_template_directory_uri() ?>/assets/js/ajaxzip3.js"></script>
<!-- 住所自動入力ライブラリここまで -->


<!-- ご希望の日時選択ライブラリここから -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.datetimepicker.js"></script>
<script>
	(function( $ ) {
		$( 'input#schedule' ).datetimepicker({
			lang: 'ja'
		});
	})( jQuery );
</script>
<!-- ご希望の日時選択ライブラリここまで -->
<?php get_footer(); ?>