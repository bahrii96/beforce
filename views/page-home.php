<?php /* Template name: Home Page */
get_header();
$main_template = get_field('main_template');

if ($main_template) {
	$hero_group = $main_template['hero_group'];
	$about_group = $main_template['about_group'];
	$benefits_group = $main_template['benefits_group'];
	$price_group = $main_template['price_group'];
	$works_group = $main_template['works_group'];
	$brends_group = $main_template['brends_group'];
	$steps_group = $main_template['steps_group'];
	$banner_group = $main_template['banner_group'];
	$collection_group = $main_template['collection_group'];
	$faq_group = $main_template['faq_group'];
	$product_group = $main_template['product_group'];
	$testimonials_group = $main_template['testimonials_group'];
	$form_group = $main_template['form_group'];
	$video_group = $main_template['video_group'];
	$mainpath = get_stylesheet_directory_uri();
};
?>
<main class="home-page">

	<?php if ($hero_group) :
		$overlay = $hero_group['overlay'];
		$title = $hero_group['title'];
		$benefits = $hero_group['benefits'];
	?>
		<section class="hero-block" style="background-image: url('<?php echo	$overlay ?>');">
			<div class="container">
				<?php if ($title) : ?>
					<h1 class="title" data-aos="fade-left"><?php echo $title ?></h1>
				<?php endif; ?>
				<?php if (is_array($benefits)): ?>
					<div class="hero-block__benefits">



						<?php
						$delay = 400; // Початкове значення затримки
						foreach ($benefits as $item) {
							$title = $item['title'];
						?>
							<div class="hero-block__benefits-item" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 0L15.2414 8.75862L24 12L15.2414 15.2414L12 24L8.75862 15.2414L0 12L8.75862 8.75862L12 0Z" fill="#4F4239" />
								</svg>
								<?php echo $title; ?>
							</div>
						<?php
							$delay += 50; // Збільшуємо затримку на 50 для наступного елемента
						}
						?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($about_group) :
		$block_id = $about_group['block_id'];
		$first_image = $about_group['first_image'];
		$second_image = $about_group['second_image'];
		$title = $about_group['title'];
		$description = $about_group['desciption'];
	?>
		<section class="about-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<div class="about-block__item">
					<div class="about-block__img">
						<div class="about-block__img-first" data-aos="fade-right" data-aos-delay="600"> <?php echo wp_get_attachment_image($first_image, 'full'); ?></div>
						<div class="about-block__img-second" data-aos="fade-right" data-aos-delay="400"> <?php echo wp_get_attachment_image($second_image, 'full'); ?></div>
					</div>
					<div class="about-block__inf">
						<h2><?php echo $title ?></h2>
						<div class="about-block__inf-desc desc"><?php echo $description ?></div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($benefits_group) :
		$block_id = $benefits_group['block_id'];
		$title = $benefits_group['title'];
		$list = $benefits_group['list'];
	?>
		<section class="benefits-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2 class="title"><?php echo $title ?></h2>
				<?php endif; ?>
				<div class="benefits-block__box">
					<?php if (is_array($list)): ?>
						<?php foreach ($list as $item) {
							$image = $item['image'];
							$title = $item['title'];
							$list = $item['list'];
						?>
							<div class="benefits-item">
								<div class="benefits-item__img">
									<?php if ($image): ?>
										<?php echo wp_get_attachment_image($image, 'full'); ?>
									<?php endif; ?>

									<?php if ($title): ?>
										<h3>
											<span> <?php echo $title ?></span>
											<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="#1D1D1B" />
												<path d="M21.1611 38.1318L20.8075 38.4854L21.5146 39.1925L21.8682 38.8389L21.1611 38.1318ZM38.9852 21.5148C38.9852 21.2386 38.7614 21.0148 38.4852 21.0148L33.9852 21.0148C33.7091 21.0148 33.4852 21.2386 33.4852 21.5148C33.4852 21.7909 33.7091 22.0148 33.9852 22.0148L37.9852 22.0148L37.9852 26.0148C37.9852 26.2909 38.2091 26.5148 38.4852 26.5148C38.7614 26.5148 38.9852 26.2909 38.9852 26.0148L38.9852 21.5148ZM21.8682 38.8389L38.8388 21.8683L38.1317 21.1612L21.1611 38.1318L21.8682 38.8389Z" fill="#1D1D1B" />
											</svg>
										</h3>
									<?php endif; ?>

									<?php if (is_array($list)): ?>
										<div class="benefits-item__list">
											<?php foreach ($list as $item) {
												$title = $item['title'];
											?>
												<div class="item">
													<?php echo $title ?>
												</div>
											<?php } ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						<?php } ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($price_group) :
		$block_id = $price_group['block_id'];
		$overlay = $price_group['overlay'];
		$title = $price_group['title'];
		$link = $price_group['link'];
	?>
		<section class="price-block" id="<?php echo $block_id  ?>" style="background-image: url('<?php echo	$overlay ?>');">
			<div class="container">
				<?php if ($title) : ?>
					<h2 class="title"><?php echo $title ?></h2>
				<?php endif; ?>
				<?php if ($link): ?>
					<div class="price-block__link">
						<?php echo initLinkHref($link, 'btn') ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($works_group) :
		$block_id = $works_group['block_id'];
		$title_main = $works_group['title'];
		$list = $works_group['list'];
	?>
		<section class="works-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if (is_array($list)): ?>
					<div class="works-block__list">
						<?php foreach ($list as $item) {
							$title = $item['title'];
							$description = $item['description'];
						?>
							<div class="works-block__item">
								<h3>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M12 0L15.2414 8.75862L24 12L15.2414 15.2414L12 24L8.75862 15.2414L0 12L8.75862 8.75862L12 0Z" fill="#1D1D1B" />
									</svg>
									<?php echo $title ?>
								</h3>
								<div class="works-block__item-desc">
									<?php echo $description ?>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php endif; ?>
				<?php if ($title_main) : ?>
					<h2 class="title" data-aos="fade-left"><?php echo $title_main ?></h2>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($brends_group) :
		$block_id = $brends_group['block_id'];
		$title = $brends_group['title'];
		$list = $brends_group['list'];
	?>
		<section class="brends-block" id="<?php echo $block_id  ?>">
			<?php if ($title) : ?>
				<?php if ($title) : ?>
					<div class="scrolling-container">
						<div class="scrolling-content">
							<?php for ($i = 0; $i < 10; $i++) :
							?>
								<h2 class="title">
									<svg width="81" height="80" viewBox="0 0 81 80" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M40.5 0L51.3046 29.1954L80.5 40L51.3046 50.8046L40.5 80L29.6954 50.8046L0.5 40L29.6954 29.1954L40.5 0Z" fill="#D9CEBB" />
									</svg>
									<?php echo $title; ?>
								</h2>
							<?php endfor; ?>

							<?php for ($i = 0; $i < 10; $i++) :
							?>
								<h2 class="title">
									<svg width="81" height="80" viewBox="0 0 81 80" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M40.5 0L51.3046 29.1954L80.5 40L51.3046 50.8046L40.5 80L29.6954 50.8046L0.5 40L29.6954 29.1954L40.5 0Z" fill="#D9CEBB" />
									</svg>
									<?php echo $title; ?>
								</h2>
							<?php endfor; ?>
						</div>
					</div>
				<?php endif; ?>

			<?php endif; ?>
			<div class="container">
				<?php if (is_array($list)): ?>
					<div class="brends-block__list">
						<?php foreach ($list as $item) {
							$logo = $item['logo'];
						?>
							<?php if ($logo): ?>
								<?php echo wp_get_attachment_image($logo, 'full'); ?>
							<?php endif; ?>
						<?php } ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($steps_group) :
		$block_id = $steps_group['block_id'];
		$title = $steps_group['title'];
		$list = $steps_group['list'];
		$first_image = $steps_group['first_image'];
		$second_image = $steps_group['second_image'];
	?>
		<section class="steps-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<div class="steps-block__left">
					<?php if ($title) : ?>
						<h2 class="title"><?php echo $title ?></h2>
					<?php endif; ?>
					<?php if (is_array($list)): ?>
						<div class="steps-block__list">
							<?php
							$counter = 1;
							foreach ($list as $item) {
								$title = $item['title'];
								$description = $item['description'];
							?>
								<div class="steps-block__item">
									<div class="step">
										0<?php echo $counter ?>/
									</div>
									<div class="steps-block__item-box">
										<h3>
											<?php echo $title ?>
										</h3>
										<div class="steps-block__item-desc">
											<?php echo $description ?>
										</div>
									</div>
								</div>
							<?php
								$counter++;
							} ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="steps-block__right">
					<div class="steps-block__img-first" data-aos="fade-left" data-aos-delay="400"> <?php echo wp_get_attachment_image($first_image, 'full'); ?></div>
					<div class="steps-block__img-second" data-aos="fade-left" data-aos-delay="600"> <?php echo wp_get_attachment_image($second_image, 'full'); ?></div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($banner_group) :
		$block_id = $banner_group['block_id'];
		$overlay = $banner_group['overlay'];
		$title = $banner_group['title'];
		$description = $banner_group['description'];
		$link = $banner_group['link'];
	?>
		<section class="banner-block" id="<?php echo $block_id  ?>" style="background-image: url('<?php echo	$overlay ?>');">
			<div class="container">
				<?php if ($title) : ?>
					<h2 class="title"><?php echo $title ?></h2>
				<?php endif; ?>
				<?php if ($description): ?>
					<div class="banner-block__desc">
						<?php echo $description ?>
					</div>
				<?php endif; ?>
				<?php if ($link): ?>
					<div class="banner-block__link">
						<?php echo initLinkHref($link, 'btn') ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($collection_group) :
		$block_id = $collection_group['block_id'];
		$title = $collection_group['title'];
		$list = $collection_group['list'];
	?>
		<section class="collection-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2 class="title"><?php echo $title ?></h2>
				<?php endif; ?>
				<div class="collection-block__box">

					<?php if (is_array($list)): ?>
						<div class="swiper  collection-block__swiper ">
							<div class="swiper-wrapper">
								<?php
								$counter = 1;
								foreach ($list as $item) {
									$image = $item['image'];
									$title = $item['title'];
									$list = $item['list'];
									$gallery = $item['gallery'];
								?>
									<div class="swiper-slide">
										<div class="collection-item" data-fancybox="gallery" data-src="#popup-content-<?php echo $counter; ?>">
											<div class="collection-item__img">
												<?php echo wp_get_attachment_image($image, 'full'); ?>
												<?php if ($title): ?>
													<h3><?php echo $title ?><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="#1D1D1B" />
															<path d="M21.1611 38.1317L20.8075 38.4852L21.5146 39.1923L21.8682 38.8388L21.1611 38.1317ZM38.9852 21.5147C38.9852 21.2385 38.7614 21.0147 38.4852 21.0147L33.9852 21.0147C33.7091 21.0147 33.4852 21.2385 33.4852 21.5147C33.4852 21.7908 33.7091 22.0147 33.9852 22.0147L37.9852 22.0147L37.9852 26.0147C37.9852 26.2908 38.2091 26.5147 38.4852 26.5147C38.7614 26.5147 38.9852 26.2908 38.9852 26.0147L38.9852 21.5147ZM21.8682 38.8388L38.8388 21.8682L38.1317 21.1611L21.1611 38.1317L21.8682 38.8388Z" fill="#1D1D1B" />
														</svg>
													</h3>
												<?php endif; ?>
												<?php if (is_array($list)): ?>
													<div class="collection-item__list">
														<?php foreach ($list as $item) {
															$title = $item['title'];
														?>
															<div class="item">
																<?php echo $title ?>
															</div>
														<?php } ?>
													</div>
												<?php endif; ?>
											</div>

											<div style="display: none;" id="popup-content-<?php echo $counter; ?>">
												<div class="swiper-box">
													<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper4">
														<div class="swiper-wrapper">
															<?php if (is_array($gallery)): ?>
																<?php foreach ($gallery as $slide): ?>
																	<div class="swiper-slide">
																		<?php echo wp_get_attachment_image($slide, 'full'); ?>
																	</div>
																<?php endforeach; ?>
															<?php endif; ?>
														</div>
													</div>


													<div thumbsSlider="" class="swiper mySwiper3">
														<div class="swiper-wrapper">
															<?php if (is_array($gallery)): ?>
																<?php foreach ($gallery as $slide): ?>
																	<div class="swiper-slide">
																		<?php echo wp_get_attachment_image($slide, 'full'); ?>
																	</div>
																<?php endforeach; ?>
															<?php endif; ?>
														</div>
													</div>
													<div class="nav">


														<div class="button-next"><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="#1D1D1B" />
																<path d="M42 30.5L42.5 30.5L42.5 29.5L42 29.5L42 30.5ZM17.6464 29.6464C17.4512 29.8417 17.4512 30.1583 17.6464 30.3536L20.8284 33.5355C21.0237 33.7308 21.3403 33.7308 21.5355 33.5355C21.7308 33.3403 21.7308 33.0237 21.5355 32.8284L18.7071 30L21.5355 27.1716C21.7308 26.9763 21.7308 26.6597 21.5355 26.4645C21.3403 26.2692 21.0237 26.2692 20.8284 26.4645L17.6464 29.6464ZM42 29.5L18 29.5L18 30.5L42 30.5L42 29.5Z" fill="#1D1D1B" />
															</svg>
														</div>
														<div class="button-prev"><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="#1D1D1B" />
																<path d="M18 29.5H17.5V30.5H18V29.5ZM42.3536 30.3536C42.5488 30.1583 42.5488 29.8417 42.3536 29.6464L39.1716 26.4645C38.9763 26.2692 38.6597 26.2692 38.4645 26.4645C38.2692 26.6597 38.2692 26.9763 38.4645 27.1716L41.2929 30L38.4645 32.8284C38.2692 33.0237 38.2692 33.3403 38.4645 33.5355C38.6597 33.7308 38.9763 33.7308 39.1716 33.5355L42.3536 30.3536ZM18 30.5H42V29.5H18V30.5Z" fill="#1D1D1B" />
															</svg>
														</div>
													</div>
												</div>
											</div>
											<script>
												var swiper = new Swiper('.mySwiper3', {
													spaceBetween: 8,
													slidesPerView: 6,
													freeMode: true,
													watchSlidesProgress: true,
													loop: true,
												});
												var swiper2 = new Swiper('.mySwiper4', {
													spaceBetween: 10,
													navigation: {
														nextEl: '.button-next',
														prevEl: '.button-prev',
													},
													loop: true,
													thumbs: {
														swiper: swiper,
													},
												});
											</script>
										</div>
									</div>
								<?php
									$counter++;
								} ?>

							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($video_group) :
		$video_link = $video_group['video_link'];
		$block_id = $video_group['block_id'];
	?>
		<section class="video-block" id="<?php echo $block_id  ?>">
			<video autoplay loop muted controls>
				<source src="<?php echo $video_link ?>" type="video/mp4">
			</video>
		</section>
	<?php endif; ?>


	<?php if ($faq_group) :
		$title = $faq_group['title'];
		$list = $faq_group['list'];
		$block_id = $faq_group['block_id'];
	?>
		<section class="question-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2>
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
				<div class="question-block__group">
					<div class="question-block__list" role="description" id="accordion">
						<?php
						$counter = 1;
						foreach ($list as $key => $item) {
							$title = $item['title'];
							$description = $item['description'];
						?>
							<div class="group question-block__item">
								<h3>
									<div class="step">
										0<?php echo $counter ?>/
									</div>
									<?php echo $title ?>
									<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="#1D1D1B" />
										<path d="M30.5001 18L30.5001 17.5L29.5001 17.5L29.5001 18L30.5001 18ZM29.6465 42.3536C29.8418 42.5488 30.1584 42.5488 30.3536 42.3536L33.5356 39.1716C33.7309 38.9763 33.7309 38.6597 33.5356 38.4645C33.3403 38.2692 33.0237 38.2692 32.8285 38.4645L30.0001 41.2929L27.1716 38.4645C26.9764 38.2692 26.6598 38.2692 26.4645 38.4645C26.2693 38.6597 26.2693 38.9763 26.4645 39.1716L29.6465 42.3536ZM29.5001 18L29.5001 42L30.5001 42L30.5001 18L29.5001 18Z" fill="#1D1D1B" />
									</svg>
								</h3>
								<div role="description" class="group question-block__item-desc description">
									<p><?php echo $description ?></p>
								</div>
							</div>
						<?php
							$counter++;
						} ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($product_group) :
		$title = $product_group['title'];
		$list = $product_group['list'];
		$block_id = $product_group['block_id'];

	?>
		<section class="product-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2>
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
				<div class="swiper  product-block__swiper ">
					<div class="swiper-wrapper">
						<?php foreach ($list as $item) {
							$image = $item['image'];
						?>
							<div class="swiper-slide">
								<div>
									<?php echo wp_get_attachment_image($image, 'full'); ?>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>


	<?php if ($testimonials_group) :
		$title = $testimonials_group['title'];
		$list = $testimonials_group['list'];
		$block_id = $testimonials_group['block_id'];

	?>
		<section class="testimonials-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<?php if ($title) : ?>
					<h2>
						<?php echo $title ?>
					</h2>
				<?php endif; ?>
				<div class="swiper  testimonials-block__swiper mySwiper2">
					<div class="swiper-wrapper">
						<?php
						$counter = 1;
						foreach ($list as $item) {
							$testimonial = $item['testimonial'];
							$name = $item['name'];
							$caption = $item['caption'];
						?>
							<div class="swiper-slide">
								<div class="step">
									0<?php echo $counter ?>/
								</div>
								<div class="testimonial">
									<?php echo $testimonial ?>
								</div>
								<div class="name">
									<?php echo $name ?>
								</div>
								<div class="caption">
									<?php echo $caption ?>
								</div>
							</div>
						<?php
							$counter++;
						} ?>
					</div>
				</div>
				<div class="swiper-nav">
					<button type="button" class="swiper-prev">
						<div class="btn-arrow"><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="#1D1D1B" />
								<path d="M42 30.5L42.5 30.5L42.5 29.5L42 29.5L42 30.5ZM17.6464 29.6464C17.4512 29.8417 17.4512 30.1583 17.6464 30.3536L20.8284 33.5355C21.0237 33.7308 21.3403 33.7308 21.5355 33.5355C21.7308 33.3403 21.7308 33.0237 21.5355 32.8284L18.7071 30L21.5355 27.1716C21.7308 26.9763 21.7308 26.6597 21.5355 26.4645C21.3403 26.2692 21.0237 26.2692 20.8284 26.4645L17.6464 29.6464ZM42 29.5L18 29.5L18 30.5L42 30.5L42 29.5Z" fill="#1D1D1B" />
							</svg>
						</div>
					</button>
					<button type="button" class="swiper-next">
						<div class="btn-arrow"><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="0.5" y="0.5" width="59" height="59" rx="29.5" stroke="#1D1D1B" />
								<path d="M18 29.5H17.5V30.5H18V29.5ZM42.3536 30.3536C42.5488 30.1583 42.5488 29.8417 42.3536 29.6464L39.1716 26.4645C38.9763 26.2692 38.6597 26.2692 38.4645 26.4645C38.2692 26.6597 38.2692 26.9763 38.4645 27.1716L41.2929 30L38.4645 32.8284C38.2692 33.0237 38.2692 33.3403 38.4645 33.5355C38.6597 33.7308 38.9763 33.7308 39.1716 33.5355L42.3536 30.3536ZM18 30.5L42 30.5V29.5L18 29.5V30.5Z" fill="#1D1D1B" />
							</svg>
						</div>
					</button>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if ($form_group) :
		$block_id = $form_group['block_id'];
		$title = $form_group['title'];
		$list = $form_group['list'];
		$caption = $form_group['caption'];
		$social = $form_group['social'];
		$title_form = $form_group['title_form'];
		$form_shortcode = $form_group['form_shortcode'];
	?>
		<section class="form-block" id="<?php echo $block_id  ?>">
			<div class="container">
				<div class="form-block__left">
					<?php if ($title): ?>
						<h2><?php echo $title ?></h2>
					<?php endif; ?>

					<?php if (is_array($list)) : ?>
						<div class="form-block__list">
							<?php foreach ($list as $item) {
								$logo = $item['logo'];
								$title = $item['title'];
								$link = $item['link'];
							?>
								<div class="form-block__item">
									<div class="form-block__item-top">
										<?php echo wp_get_attachment_image($logo, 'full'); ?>
										<h3><?php echo $title ?></h3>
									</div>
									<div class="form-block__item-link">
										<?php echo initLinkHref($link,) ?>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php endif; ?>
					<div class="form-block__caption-box">
						<?php if ($caption): ?>
							<div class="form-block__caption">
								<?php echo $caption ?>
							</div>
						<?php endif; ?>
						<svg width="162" height="16" viewBox="0 0 162 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 7H0L0 9H1L1 7ZM161.707 8.70711C162.098 8.31658 162.098 7.68342 161.707 7.29289L155.343 0.928932C154.953 0.538408 154.319 0.538408 153.929 0.928932C153.538 1.31946 153.538 1.95262 153.929 2.34315L159.586 8L153.929 13.6569C153.538 14.0474 153.538 14.6805 153.929 15.0711C154.319 15.4616 154.953 15.4616 155.343 15.0711L161.707 8.70711ZM1 9L161 9V7L1 7L1 9Z" fill="#1D1D1B" />
						</svg>
						<?php if (is_array($social)) : ?>
							<div class="form-block__social">
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
					</div>
				</div>
				<div class="form-block__box">
					<?php if (!empty($title_form)): ?>
						<h3><?php echo $title_form ?></h3>
					<?php endif; ?>
					<?php if (!empty($form_shortcode)): ?>
						<div class="form-block__form "> <?php echo do_shortcode($form_shortcode); ?></div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endif; ?>



</main>
<?php get_footer(); ?>