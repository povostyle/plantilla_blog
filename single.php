
			<header class="archive-header-blog">
							<div class="container">
								<p class="archive-header-blog-title">
									<?php the_title(); ?>
								</p>
								<span>
									Publicado el <?php the_date(); ?>
								</span>
								<figure class="cards-list-picture">
										<?php the_post_thumbnail('large', array(
											'class' => 'mask' 
										)); ?>
								</figure>
							</div>
						</header>


						<div class="single-content">
							<div class="container">
								<div class="single-content-text">
										<?php
												the_content(
													sprintf(
														wp_kses(
															/* translators: %s: Name of current post. Only visible to screen readers */
															__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'evocato360' ),
															array(
																'span' => array(
																	'class' => array(),
																),
															)
														),
														wp_kses_post( get_the_title() )
													)
												);

												wp_link_pages(
													array(
														'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'evocato360' ),
														'after'  => '</div>',
													)
												);
										?>
								</div>		
							</div>
						</div>


						<section id="ultimas_noticias">
							<div class="container">
								<header class="related-header">
									<h2>Últimas noticias</h2>
									<div class="btn-vernoticias">
										<a href="<?php echo get_home_url(); ?>/actualidad">Ver todas</a>
									</div>
								</header>
								<div class="cards-list">
								<?php 
								// the query
									$the_query = new WP_Query( array(
										'posts_per_page' => 3,
									)); 			
								if ( $the_query->have_posts() ) :
								while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
														<div class="cards-list-item">
															<a href="<?php the_permalink(); ?>"></a>
															<figure class="cards-list-picture">
																<?php the_post_thumbnail('large', array(
																	'class' => 'mask' 
																)); ?>
															</figure>
															<div class="cards-list-content">

																<div class="cards-category">
																	<p><?php the_category(', '); ?></p>
																	<p>/ <?php the_date(); ?></p>											
																</div>
																<h2 class="cards-title"><?php the_title(); ?></h2>
																<?php 	// echo wp_trim_words( get_the_content(), 20, '...' );	?>									
																<p class="cards-link">Más detalle

																<span class="svg svg-arrow-right">
																	<svg width="20" height="11" viewBox="0 0 20 11" fill="#19c6c7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
																			<rect width="20" height="11" fill="url(#pattern0)"/>
																			<defs>
																			<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
																			<use xlink:href="#image0_1_2" transform="translate(0 -0.409091) scale(0.00195312 0.00355114)"/>
																			</pattern>
																			<image id="image0_1_2" width="512" height="512" xlink:href="data:image/png;base64,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"/>
																			</defs>
																	</svg>

																</span>
																</p>
															</div>
														</div>
														<?php endwhile; ?>
												<?php wp_reset_postdata(); ?>
											<?php endif; ?>
									</div>
							</div>
						</section>
