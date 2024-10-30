<?php
get_header();
?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$posts_per_page = get_option('posts_per_page');

$posts = new WP_Query(array(
	'post_type' => 'post',
	'posts_per_page' => $posts_per_page,
	'post_status' => 'publish',
	'paged' => $paged,
));

?>
<main>
	<div class="breadcrumb-block">
		<div class="container">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>', true);
			}
			?>
		</div>
	</div>

	<section class="entry-page archive-blog">
		<div class="container">

			<div class="archive-blog__wrapper">
				<?php {
					if ($posts->have_posts()) {
						while ($posts->have_posts()) : $posts->the_post(); ?>
							<?php get_template_part('post-templates/post-item', get_post_format()); ?>
				<?php endwhile;
						wp_reset_query();
						wp_reset_postdata();
					} else {
						echo ('<p>Posts is empty.</p>');
						wp_reset_query();
						wp_reset_postdata();
					}
				}
				?>
			</div>
			<div class="archive-blog__pagination">
				<?php pagination_bar($posts); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>