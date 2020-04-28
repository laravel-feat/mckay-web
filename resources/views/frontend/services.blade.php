@extends('layouts.frontend') @section('content')



<link rel='stylesheet' id='mg_wpsi_icons-css'
	href="{{asset('public/css/post-250.css')}}" media='all' />

<div class="ast-container">



	<div id="primary" class="content-area primary">


		<main id="main" class="site-main">





			<article
				class="post-250 page type-page status-publish ast-article-single"
				id="post-250" itemtype="https://schema.org/CreativeWork"
				itemscope="itemscope">


				<header class="entry-header ast-header-without-markup"> </header>
				<!-- .entry-header -->

				<div class="entry-content clear" itemprop="text">


					<div data-elementor-type="wp-page" data-elementor-id="250"
						class="elementor elementor-250" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
								<section
									class="elementor-element elementor-element-cb725bb elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section"
									data-id="cb725bb" data-element_type="section"
									data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
									<div
										style="background-image: url('{{@optional($banner)->getBannerUrl()}}')"
										class="elementor-background-overlay"></div>
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-row">
											<div
												class="elementor-element elementor-element-1518efe elementor-column elementor-col-100 elementor-top-column"
												data-id="1518efe" data-element_type="column">
												<div
													class="elementor-column-wrap  elementor-element-populated">
													<div class="elementor-widget-wrap">
														<div
															class="elementor-element elementor-element-2e631ed elementor-widget elementor-widget-heading"
															data-id="2e631ed" data-element_type="widget"
															data-widget_type="heading.default">
															<div class="elementor-widget-container">
																<h2
																	class="elementor-heading-title elementor-size-default">{{@optional($banner)->title}}</h2>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

								{!!@optional($section1)->html!!}
							</div>
						</div>
					</div>



				</div>
				<!-- .entry-content .clear -->



			</article>
			<!-- #post-## -->





		</main>
		<!-- #main -->


	</div>
	<!-- #primary -->



</div>

@endsection
