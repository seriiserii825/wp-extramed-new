<?php
/*
* Template Name: Principala
*/
?>

<?php get_header(); ?>

<div class="container">
	<div class="time-table-sec">
		<ul id="accordion2" class="accordion2">
			<li>
				<ul class="submenu time-table">
					<li class="tit">
						<h5><?php  echo carbon_get_theme_option('crb_timer_title'); ?></h5>
					</li>
					<li><span class="day">Luni - Vineri</span> <span class="divider">-</span>
						<span class="time">
									<?php  echo substr(carbon_get_theme_option('crb_monday_start'), 0, 5); ?> -
									<?php  echo substr(carbon_get_theme_option('crb_monday_end'), 0, 5); ?>
								</span>
					</li>
					<li><span class="day">Simbata</span> <span class="divider">-</span> <span class="time">
								<?php  echo substr(carbon_get_theme_option('crb_saturday_start'), 0, 5); ?> -
								<?php  echo substr(carbon_get_theme_option('crb_saturday_end'), 0, 5); ?></span></li>
					<li><span class="day">Stationar</span> <span class="divider">-</span>
							<span class="time">
								<?php  echo carbon_get_theme_option('crb_timer_stationar'); ?>
                            </span>
					</li>
				</ul>
				<div class="link"><img class="time-tab" src="<?php echo get_template_directory_uri(); ?>/assets/images/timetable-menu.png" alt=""></div>

			</li>
		</ul>
	</div>
</div>

<!--Start Banner-->
<div class="tp-banner-container">
	<div class="tp-banner">
		<ul>
			<?php $slider_images = carbon_get_theme_option('crb_slider_item'); ?>

			<?php foreach($slider_images as $image): ?>

				<?php
				$image_id = $image['crb_slider_image'];
				$image_url = kama_thumb_src( ['width'  => 1920, 'height' => 900], $image_id );
				?>

				<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
				    data-title="Intro Slide">

					<img src="<?php echo $image_url; ?>" alt="" data-bgposition="center top" data-bgfit="cover"
					     data-bgrepeat="no-repeat">
				</li>
			<?php  endforeach; ?>

			<?php wp_reset_postdata(); ?>

		</ul>
		<div class="tp-bannertimer"></div>
	</div>
</div>

<!--End Banner-->

<!--Start Content-->
<div class="content">

	<!--Start Services-->
	<div class="services-one">
		<div class="container">
			<div class="row">
				<div class="services-one_content">

					<?php $amb_stat_posts = new WP_Query([
						'cat' => '4,5',
						'posts_per_page' => -1,
					]); ?>

					<?php if ( $amb_stat_posts->have_posts() ) : ?>
						<?php $i = 0; while ( $amb_stat_posts->have_posts() ) : $amb_stat_posts->the_post(); ?>
							<?php
							$category = get_the_category();
							$category_name = $category[0]->name;
							?>
							<div class="service-sec">
								<div class="icon">
									<i class="fas fa-plus"></i>
								</div>
								<h5>
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?> (<?php echo $category_name; ?>)
									</a>
								</h5>
							</div>
							<?php $i++; endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
	<!--End Services-->

    <div class="video">
        <header class="video__head">
            <blockquote class="video__cite">“Sănătatea nu este doar absența bolii.”</blockquote>
            <h3 class="video__title">Hannah Green</h3>
        </header>

        <div class="video__file">
	        <?php echo do_shortcode('[fvplayer id="1"]'); ?>
        </div>

        <div class="video-container">
            <div class="video__item">
                <p>Pentru a evalua starea de sănătate faceți o programare la Centru  Medical ,,Extramed,, unde o echipă de medici specialiști în obstetrică și ginecologie, ecografie, neonatologie, anesteziologie va poate consulta privind:</p>
                <ul>
                    <li>Planificare, pregătire preconcepțională pentru a naște un copil sănătos;</li>
                    <li>Consiliere prenatală, evidență și monitorizare a sarcinii;</li>
                    <li>Aprecierea stării intrauterine a fătului – CTG, USG, diagnosticul malformațiilor fetale;</li>
                    <li>Naștere naturală – prezența soțului la naștere, asistență psiho-emoțională, analgezie medicamentoasa în naștere, analgezie epidurală în travaliu;</li>
                    <li>Naștere prin operația cezariană;</li>
                    <li>Îngrijire postoperatorie după intervenții obstetricale;</li>
                    <li>Consiliere și încurajarea alaptătii nou-născutului;</li>
                    <li>Consiliere în post-partum pentru o contracepție perfectă;</li>
                    <li>Consultație , diagnostic și tratament al  diferitor  afecțiuni ginecologice;</li>
                    <li>Diagnosticul și tratamentul stărilor precanceroase a colului;</li>
                    <li>Efectuarea videocolposcopiei, citologiei de pe col;</li>
                    <li>Diagnostic și tratament al infecțiilor cu transmisie sexuală;</li>
                    <li>Tratamentul  dereglărilor de ciclu menstrual;</li>
                    <li>Evitarea unei sarcini nedorite,alegerea unei metode perfecte, consiliere în administrarea contraceptivelor;</li>
                    <li>Consiliere, investigații și tratament al diverselor probleme de sanătate în menopauză;</li>
                </ul>
            </div>
            <div class="video__item">
                <p>Efectuarea tuturor tipurilor de intervenții chirurgicale ginecologice:</p>
                <ul>
                    <li>Îngrijire postoperatorie după intervenții ginecologice;</li>
                    <li>Consiliere, investigații, tratament conservativ și chirurgical al infertilității (tubare, ovariene, peritoniale);</li>
                    <li>Diagnosticul, tratamentul conservativ și chirurgical al :
                        <ul>
                            <li>a) gravidității extrauterine,</li>
                            <li>b) bolilor inflamatorii pelvine,</li>
                            <li>c)tumorilor organelor genitale benigne (miom uterin, chist ovarian, endometrioza etc);</li>
                        </ul>
                    </li>
                    <li>Diagnosticul, tratamentul chirurgical al stărilor de urgență în ginecologie: sarcină tubară, apoplexie ovariană, torsiune de chist ovarian etc);</li>
                    <li>Diagnosticul, tratamentul conservativ și chirurgical al tulburărilor de statică pelvi-genitală (incontinență urinară de efort, prolaps genital);</li>
                    <li>Marsupilizarea sau extirparea chistului glandei Bartholin, drenarea abcesului chistului glandei Bartholin ;</li>
                    <li>Diagnosticul, tratamentul chirurgical al anomaliilor organelor genitale (uter, col, vagin, vulvă etc);</li>
                    <li>Consiliere, tratament conservativ și chirurgical ( plastia colului, vaginoplastie, perineoplastie, himentomie, himenplastie etc). în ginecologia estetică.</li>
                </ul>
                <p>
                    Centru Medical Extramed activează  24/24 ore.<br>
                    Avem grijă de sănătatea Dumneavoastră.<br>
                    Pentru programare  apelati  la tel. 068557000 sau 022843018
                </p>
            </div>
        </div>
    </div>
<!--    video-->

	<!--Start Welcome-->
	<div class="welcome dark-back">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<?php
						$guide_title_1 = carbon_get_theme_option('crb_guid_title_1');
						$guide_title_2 = carbon_get_theme_option('crb_guid_title_2');
						$guide_description = carbon_get_theme_option('crb_gid_descr');
						?>
						<h2><span><?php echo $guide_title_1; ?> </span> <?php echo $guide_title_2; ?></h2>
						<p><?php echo $guide_description; ?></p>
					</div>
				</div>
			</div>

			<div id="tabbed-nav">
				<?php $guid_posts = new WP_Query([
					'cat' => '4,5',
					'posts_per_page' => 3,
					'orderby' => 'rand'
				]);
				?>
				<ul>
					<?php if($guid_posts->have_posts()): ?>
						<?php while($guid_posts->have_posts()): ?>
							<?php
							$category = get_the_category();
							$category_name = $category[0]->name;
							$category_name_short = substr($category_name, 0, 3);
							?>
							<?php $guid_posts->the_post(); ?>
							<li><a><?php the_title(); ?> (<?php echo $category_name_short; ?>)</a></li>
						<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

				</ul>

				<div>
					<?php if($guid_posts->have_posts()): ?>
						<?php while($guid_posts->have_posts()): ?>
							<?php $guid_posts->the_post(); ?>

							<?php
							$img_id = carbon_get_the_post_meta('crb_category_amb_stat_posts_img');
							if($img_id == ''){
								$img_id = carbon_get_theme_option('crb_category_amb_stat_default_img');
							}
							$img_url = wp_get_attachment_image_src($img_id, 'full');
							?>

							<div>
								<div class="row">
									<div class="col-md-6">
										<div class="welcome-serv-img">
											<img src="<?php echo $img_url[0]; ?>" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="detail">
											<div class="detail__content">
												<h4>
													<?php echo carbon_get_the_post_meta('crb_category_amb_stat_posts'); ?>
												</h4>
												<?php the_content(); ?>
											</div>
											<a href="<?php the_permalink();?>">Vezi mai multe</a>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>

				</div>

			</div>


		</div>
	</div>
	<!--End Welcome-->



	<!--Start Specialists-->
	<div class="meet-specialists">
		<div class="container">


			<div class="row">
				<div class="col-md-12">
					<div class="main-title">
						<?php $specialist_title_1 = carbon_get_theme_option('crb_specialist_block_title_1'); ?>
						<?php $specialist_title_2 = carbon_get_theme_option('crb_specialist_block_title_2'); ?>
						<?php $specialist_description = carbon_get_theme_option('crb_specialist_description'); ?>

						<h2><span><?php echo $specialist_title_1; ?></span> <?php echo $specialist_title_2; ?></h2>

						<p><?php echo $specialist_description;?></p>
					</div>
				</div>
			</div>

			<div id="demo">
				<div class="container">
					<div class="row">
						<div class="span12">

							<div id="owl-demo4" class="owl-carousel">
								<?php $specialist_post = new WP_Query([
									'post_type' => 'specialist',
									'posts_per_page' => -1
								]); ?>

								<?php if ( $specialist_post->have_posts() ) : ?>
									<?php while ( $specialist_post->have_posts() ) : $specialist_post->the_post(); ?>
										<div class="post item">
											<?php
											$img_id = carbon_get_the_post_meta('crb_category_specialist_im');
											$img_url = wp_get_attachment_image_src($img_id, 'full');
											$facebook_url = carbon_get_the_post_meta('crb_specialist_facebook');
											$twitter_url = carbon_get_the_post_meta('crb_specialist_twitter');
											$google_url = carbon_get_the_post_meta('crb_specialist_google');
											$terms = get_the_terms(get_the_ID(), 'profession');
											?>

											<div class="gallery-sec">
												<div class="image-hover img-layer-slide-left-right">
													<img src="<?php echo $img_url[0]; ?>" alt="">
													<div class="layer">
														<a class="galler-sec__icon" href="<?php echo $facebook_url; ?>">
															<i class="fab fa-facebook-f"></i>
														</a>
														<a class="galler-sec__icon" href="<?php echo $twitter_url; ?>">
															<i class="fab fa-twitter"></i>
														</a>
														<a class="galler-sec__icon" href="<?php echo $google_url; ?>">
															<i class="fab fa-google"></i>
														</a>
													</div>
												</div>
											</div>

											<div class="detail">
												<h6>
													<a class="detail__link" href="<?php the_permalink(); ?>">
														<?php the_title(); ?>
													</a>
												</h6>

                                                <div class="detail-category">
                                                    <?php echo showTermsInSpan($terms); ?>
												</div>

                                                <div class="detail-study">
													<?php the_excerpt(); ?>
                                                </div>
                                                <a href="<?php the_permalink(); ?>">- Vezi in Profile</a>
											</div>

										</div>

									<?php endwhile; ?>
								<?php else : ?>
								<?php endif; ?>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Specialists-->


	<!--Start Doctor Quote-->
	<?php
    $cite_slider = carbon_get_theme_option('crb_cite_slider');
	$cite_text = carbon_get_theme_option('crb_cite_text') ? carbon_get_theme_option('crb_cite_text') : 'Text pentru citata';
	$cite_author = carbon_get_theme_option('crb_cite_author') ? carbon_get_theme_option('crb_cite_author') : 'Author pentru citata';
	?>
	<div class="dr-quote">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
                    <div class="quote-slider-wrap">
                        <div class="quote-arrows">
						   <div class="arrows arrow-prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="arrows arrow-next"><i class="fas fa-chevron-right"></i></div>
                        </div>
						<div class="quote-slider" id="js-quote-slider">
							<?php foreach($cite_slider as $slide): ?>
								<div class="quote-slider__item">
									<span class="quote">"<?php echo $slide['crb_cite_text']; ?>"</span>
									<span class="name">- <?php echo $slide['crb_cite_author']; ?></span>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Doctor Quote-->

</div>
<!--End Content-->


<?php get_footer(); ?>
