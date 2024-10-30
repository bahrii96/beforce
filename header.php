<!DOCTYPE html>
<html lang="en-US">

<head>
	<?php
	get_template_part('structure/meta');
	wp_head();
	?>
</head>
<?php
$button = get_field('button', 'options');
$tel_logo = get_field('tel_logo', 'options');
$tel_link = get_field('tel_link', 'options');
$social = get_field('social', 'options');
?>
<?php $mainpath = get_stylesheet_directory_uri(); ?>

<body <?php body_class(); ?>>

	<header class="header">
		<div class="container">
			<a href="<?php echo home_url('/'); ?>" class="logo" aria-label="Site Logo">
				<?php
				$custom_logo_id = get_theme_mod('custom_logo_site');
				if ($custom_logo_id) :
					$logo_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
					$logo_title = get_the_title($custom_logo_id);
					echo wp_get_attachment_image($custom_logo_id, 'full', false, [
						'alt' => $logo_alt,
						'title' => $logo_title,
						'loading' => 'eager'
					]);
				endif;
				?>
			</a>
			<div class="header__links">
				<nav>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary_left',
						'menu_class' => 'main-nav',
						'walker' => new Custom_Walker_Nav_Menu
					));
					?>
					<div class="header__btn-mob">
						<?php echo initLinkHref($button, 'btn') ?>
					</div>
				</nav>
				<div class="header__links-bottom">
					<?php if ($tel_link): ?>
						<div class="tel">
							<?php echo wp_get_attachment_image($tel_logo, 'full'); ?>
							<?php echo initLinkHref($tel_link,) ?>
						</div>
					<?php endif; ?>
					<?php if (is_array($social)): ?>
						<div class="social-list">
							<?php foreach ($social as $item) {
								$icon = $item['icon'];
								$link = $item['link'];
							?>
								<a href="<?php echo $link ?>" class="social">
									<?php echo wp_get_attachment_image($icon, 'full'); ?>
								</a>
							<?php } ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="header__btn">
				<?php echo initLinkHref($button, 'btn') ?>
			</div>
			<div class="menu-toggle">

				<svg class="open" width="40" height="31" viewBox="0 0 40 31" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M39.8938 0H3.8147e-06V3.41179H39.8938V0Z" fill="#4F4239" />
					<path d="M39.8938 17.7817H3.8147e-06V21.1955H39.8938V17.7817Z" fill="#4F4239" />
					<path d="M39.8938 8.89062H3.8147e-06V12.3044H39.8938V8.89062Z" fill="#4F4239" />
					<path d="M39.8938 26.6758H14.8046V30.0896H39.8938V26.6758Z" fill="#4F4239" />
				</svg>

				<svg class="close" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M6.09715 4L36 33.9029L33.9029 36L4 6.09715L6.09715 4Z" fill="#919191" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M4 33.9029L33.9029 4L36 6.09715L6.09715 36L4 33.9029Z" fill="#919191" />
				</svg>


			</div>
		</div>
	</header>