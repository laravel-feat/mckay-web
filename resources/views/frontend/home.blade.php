@extends('layouts.frontend')

@section('content')

<div class="ast-container">



    <div class="elementor elementor-8">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section class="elementor-element elementor-element-41ce66bb elementor-section-content-middle elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="41ce66bb" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div style="background-image:url('{{@optional($banner)->getBannerUrl()}}')" class="elementor-background-overlay"></div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-53666123 elementor-column elementor-col-50 elementor-top-column" data-id="53666123" data-element_type="column">
                                <div class="elementor-column-wrap  elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-3b86dde9 elementor-widget elementor-widget-heading" data-id="3b86dde9" data-element_type="widget" id="dream" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h1 class="elementor-heading-title elementor-size-default">WE
                                                    BUILD DREAM</h1>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-13deb97c elementor-widget elementor-widget-text-editor" data-id="13deb97c" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix banner-desc">
                                                    {{@optional($banner)->description}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3c419dd elementor-align-left elementor-widget elementor-widget-button" data-id="3c419dd" data-element_type="widget" data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                <a href="{{route('frontend.jobs')}}" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-right">
                                                                <i aria-hidden="true" class="fas fa-user-tie"></i>
                                                            </span> <span class="elementor-button-text">{{__('LATEST JOBS')}}</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0636cdf elementor-align-left elementor-absolute elementor-widget elementor-widget-button" data-id="0636cdf" data-element_type="widget" id="Customer" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="{{route('frontend.customer')}}" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-right">
                                                                <i aria-hidden="true" class="fas fa-user-friends"></i>
                                                            </span> <span class="elementor-button-text">{{__('CUSTOMER')}}</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-f72c498 elementor-align-left elementor-absolute elementor-widget elementor-widget-button" data-id="f72c498" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a href="{{route('frontend.contactUs')}}" class="elementor-button-link elementor-button elementor-size-sm" role="button"> <span class="elementor-button-content-wrapper"> <span class="elementor-button-icon elementor-align-icon-right">
                                                                <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                                            </span> <span class="elementor-button-text">{{__('CONTACT US')}}</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1350792c elementor-column elementor-col-50 elementor-top-column" data-id="1350792c" data-element_type="column">
                                <div class="elementor-column-wrap">
                                    <div class="elementor-widget-wrap"></div>
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






    <!-- #primary -->



</div>
<!-- ast-container -->

@endsection
