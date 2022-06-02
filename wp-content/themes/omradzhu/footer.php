<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omradzhu
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div>Дизайн: Берченко Софья</div>
			<div><a href="/privacy-policy/">Соглашение о конфиденциальности информации</a></div>
			<div class="social">
				<?  $youtube_link = CFS()->get( 'youtube_link' );
					$facebook_link = CFS()->get( 'facebook_link' );
					$instagram_link = CFS()->get( 'instagram_link' );?>
				<? if($youtube_link):?><a href="<?= $youtube_link['url']; ?>" class="youtube" target="_blank"></a><?endif;?>
				<? if($facebook_link):?><a href="<?= $facebook_link['url'] ?>" class="facebook" target="_blank"></a><?endif;?>
				<? if($instagram_link):?><a href="<?= $instagram_link['url'] ?>" class="instagram" target="_blank"></a><?endif;?>
			</div>
			<div class="totop"></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
