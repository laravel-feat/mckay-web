@extends('layouts.frontend')

@section('content')


<link rel='stylesheet' id='mg_wpsi_icons-css'
	href="{{asset('public/css/post-264.css')}}" media='all' />


<div data-elementor-type="wp-page" data-elementor-id="264" class="elementor elementor-264" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-f04f714 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="f04f714" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div style="background-image: url('{{@optional($banner)->getBannerUrl()}}')" class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-97cbb45 elementor-column elementor-col-100 elementor-top-column" data-id="97cbb45" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-d09a06b elementor-widget elementor-widget-heading" data-id="d09a06b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{@optional($banner)->title}}</h2>		</div>
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
		
		
@endsection