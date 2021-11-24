@extends('layouts.frontend')

@section('content')



<style>
.thankyou{display:none;text-align: center;vertical-align: middle;line-height: 90px;font-size: 25px;color: #1c943b;}
</style>
<link rel='stylesheet' id='mg_wpsi_icons-css'
	href="{{asset('public/css/post-286.css')}}" media='all' />


<div data-elementor-type="wp-page" data-elementor-id="286" class="elementor elementor-286" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-cb348cb elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="cb348cb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div style="background-image: url('{{@optional($banner)->getBannerUrl()}}')" class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-4b423d5 elementor-column elementor-col-100 elementor-top-column" data-id="4b423d5" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-117d727 elementor-widget elementor-widget-heading" data-id="117d727" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{@optional($banner)->title}} </h2>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="elementor-element elementor-element-16bd115e elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="16bd115e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-f0478a6 elementor-column elementor-col-33 elementor-top-column" data-id="f0478a6" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-6282579a elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="6282579a" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<i aria-hidden="true" class="fas fa-home"></i>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span>{{__('Visit us')}}</span>
				</h3>
							</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-60a8bf44 elementor-widget elementor-widget-heading" data-id="60a8bf44" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-large">{{$setting->office_address}}</p>		</div>
				</div>
						</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-501a2478 elementor-column elementor-col-33 elementor-top-column" data-id="501a2478" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-27c23778 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="27c23778" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<i aria-hidden="true" class="fas fa-phone"></i>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span>{{__('Call us')}}</span>
				</h3>
							</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-70ab30c1 elementor-widget elementor-widget-heading" data-id="70ab30c1" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-large">{{$setting->contact_number}}</p>		</div>
				</div>
						</div>
			</div>
		</div>
				<div class="elementor-element elementor-element-7e9606aa elementor-column elementor-col-33 elementor-top-column" data-id="7e9606aa" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-5b55c87a elementor-view-default elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="5b55c87a" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-">
				<i aria-hidden="true" class="far fa-envelope"></i>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span>{{__('Contact us')}}</span>
				</h3>
								<p class="elementor-icon-box-description">
</p>
							</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-2882d307 elementor-widget elementor-widget-heading" data-id="2882d307" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-large">{{$setting->contact_email}}</p>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="elementor-element elementor-element-e10ff9c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e10ff9c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-a21732b elementor-column elementor-col-100 elementor-top-column" data-id="a21732b" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-92f42b5 elementor-widget elementor-widget-heading" data-id="92f42b5" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">{{__('Get in touch')}}</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-0b6f531 elementor-widget elementor-widget-shortcode" data-id="0b6f531" data-element_type="widget" data-widget_type="shortcode.default">
				<div class="elementor-widget-container">
					<div class="elementor-shortcode"><div role="form" class="wpcf7" id="wpcf7-f295-p286-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<div class="thankyou">{{__("Thank You for Contacting Us. We will get back to you shortly")}}</div>
<form action="{{route('frontend.contactUs.post')}}" id="contact_us_form" method="post" class="wpcf7-form" novalidate="novalidate">
@csrf
<p><label> {{__('Your Name')}} ({{__('required')}})<br>
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> {{__('Your Email')}} ({{__('required')}})<br>
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> {{__('Subject')}}<br>
    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false"></span> </label></p>
<p><label> {{__('Your Message')}}<br>
    <span class="wpcf7-form-control-wrap your-message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
<p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				<section class="elementor-element elementor-element-547f2e3 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="547f2e3" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-6399bb2b elementor-column elementor-col-100 elementor-top-column" data-id="6399bb2b" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-a1ebd02 elementor-widget elementor-widget-google_maps" data-id="a1ebd02" data-element_type="widget" data-widget_type="google_maps.default">
				<div class="elementor-widget-container">
			<div class="elementor-custom-embed"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="{!!$setting->gmap_iframe_link!!}"  ></iframe></div>		</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
						</div>
			</div>
		</div>



<script>

$("#contact_us_form").submit(function(e){
	e.preventDefault();
	var url=$(this).attr("action");
	$.ajax({
		  url: url,
		  type:"post",
		  data:$("#contact_us_form").serialize(),
		  success: function(response){
		     if(response.status=='NOK')
		     {
				alert(response.error[0]);
				return ;
			 }
		     else
		     {

		    	 $("#contact_us_form").css("display","none");
		    	 $(".elementor-heading-title").css("display","none");
		    	 $(".thankyou").show();
			}
		  }
		});
	 
});

</script>
@endsection