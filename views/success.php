<?php /* Template name: Success Page */
get_header();
$page_success = get_field('page_success');

if ($page_success) {
	$title = $page_success['title'];
	$caption = $page_success['caption'];
	$image = $page_success['image'];
};
?>
<main>

	<section class="success-block">
		<div class="container">
			<?php echo wp_get_attachment_image($image, 'full'); ?>
			<?php if ($title): ?>
				<h1><?php echo $title ?></h1>
			<?php endif; ?>

			<?php if ($caption): ?>
				<div class="success-block__desc">
					<?php echo $caption ?>
				</div>
			<?php endif; ?>

		</div>
	</section>
</main>
<?php get_footer(); ?>