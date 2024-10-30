<?php
$footer_settings = get_field('footer_settings', 'options');
if ($footer_settings) {
	$copyright = isset($footer_settings['copyright']) ? $footer_settings['copyright'] : null;
	$socials = isset($footer_settings['socials']) ? $footer_settings['socials'] : null;

	$widget_list = isset($footer_settings['widget_list']) ? $footer_settings['widget_list'] : null;
}
?>


<footer class="footer">
	<div class="container">

		<div class="footer__contact">
			<div class="footer__social">
				<?php if (!empty($socials)) :
					$logo = $socials['logo'];
					$social = $socials['social'];
				?>
					<div class="footer__social-box">
						<a href="/" class="logo">
							<?php echo wp_get_attachment_image($logo, 'full'); ?>
						</a>
						<?php if (is_array($social)) : ?>
							<div class="social-list">
								<?php foreach ($social as $item) {
									$logo = $item['logo'];
									$link = $item['link'];
								?>
									<a href="<?php echo $link ?>" class="social">
										<?php echo wp_get_attachment_image($logo, 'full'); ?>
									</a>
								<?php } ?>
							</div>
						<?php endif; ?>
					<?php endif; ?>
					</div>
			</div>
			<?php if (!empty($widget_list)) : ?>
				<?php foreach ($widget_list as $item) {
					$links = $item['links'];
				?>
					<div class="footer__contact-item">
						<?php if (!empty($links)) : ?>
							<ul class="footer__contact-links">
								<?php
								foreach ($links as $item) {
									$link = $item['link'];
								?>
									<li>
										<?php echo initLinkHref($link,) ?>
									</li>
								<?php
								} ?>
							</ul>
						<?php endif; ?>
					</div>
				<?php } ?>
			<?php endif; ?>
		</div>

	</div>
	<?php if (!empty($copyright)) : ?>
		<div class="copyright">
			<div class="container"><?php echo $copyright ?></div>
		</div>
	<?php endif; ?>
</footer>
<?php
wp_footer();
?>
</body>

</html>