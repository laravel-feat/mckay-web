@extends('layouts.frontend')

@section('content')
<link rel='stylesheet' id='mg_wpsi_icons-css'
	href="{{asset('public/css/post-197.css')}}" media='all' />


<div data-elementor-type="wp-page" data-elementor-id="197" class="elementor elementor-197" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-ae8302c elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="ae8302c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div style="background-image: url('{{@optional($banner)->getBannerUrl()}}')" class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-e7e532c elementor-column elementor-col-100 elementor-top-column" data-id="e7e532c" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-2727f0b elementor-widget elementor-widget-heading" data-id="2727f0b" data-element_type="widget" data-widget_type="heading.default">
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
				{!!@optional($section2)->html!!}
				{!!@optional($section3)->html!!}
				{!!@optional($section4)->html!!}
				 
			
				 
						</div>
			</div>
		</div>

@endsection