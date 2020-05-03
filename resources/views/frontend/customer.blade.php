@extends('layouts.frontend')

@section('content')



<link rel='stylesheet' href="{{asset('public/css/post-354.css')}}" media='all' />

<div class="ast-container">



    <div id="primary" class="content-area primary">


        <main id="main" class="site-main">





            <article class="post-354 page type-page status-publish ast-article-single" id="post-354" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">


                <header class="entry-header ast-header-without-markup">


                </header><!-- .entry-header -->

                <div class="entry-content clear" itemprop="text">


                    <div data-elementor-type="wp-page" data-elementor-id="354" class="elementor elementor-354" data-elementor-settings="[]">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                                <section class="elementor-element elementor-element-49d05ba elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="49d05ba" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div style="background-image: url('{{@optional($banner)->getBannerUrl()}}');" class="elementor-background-overlay"></div>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-88547b1 elementor-column elementor-col-100 elementor-top-column" data-id="88547b1" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-deb5ea7 elementor-widget elementor-widget-heading" data-id="deb5ea7" data-element_type="widget" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">{{@optional($banner)->title}}</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="elementor-element elementor-element-d84fb1f elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="d84fb1f" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-a9fa822 elementor-column elementor-col-100 elementor-top-column" data-id="a9fa822" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-282ac2b elementor-widget elementor-widget-html" data-id="282ac2b" data-element_type="widget" data-widget_type="html.default">
                                                            <div class="elementor-widget-container">
                                                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                                                <style>
                                                                    .success-msg {


                                                                        text-align: center;
                                                                        float: left;
                                                                        width: 100%;
                                                                        color: green;
                                                                        font-size: 22px;
                                                                        font-weight: 600;

                                                                    }

                                                                    .job-search-form {
                                                                        background: #f2f2f2;
                                                                        padding: 30px 20px;
                                                                        float: left;
                                                                        display: block;
                                                                        width: 100%;
                                                                        margin-bottom: 20px;
                                                                    }

                                                                    .form-outer {
                                                                        float: left;
                                                                        display: block;
                                                                        width: 23%;
                                                                        margin: 0 8px;
                                                                    }

                                                                    .form-outer input[type="text"] {
                                                                        background: #fff;
                                                                        width: 100%;
                                                                    }

                                                                    .form-outer button {
                                                                        width: 100%;
                                                                        font-size: 16px;
                                                                        padding: 14px;
                                                                    }

                                                                    select#cars {
                                                                        width: 100%;
                                                                        background: #fff;
                                                                    }

                                                                    .brows-company {
                                                                        background: #ffffff;
                                                                        border-radius: 4px;
                                                                        overflow: hidden;
                                                                        margin-bottom: 30px;
                                                                        float: left;
                                                                        display: inline-table;
                                                                        transition: all ease-in-out 0.4s;
                                                                        border: 1px solid rgba(88, 136, 247, 0.1);
                                                                        box-shadow: 0px 0px 10px 0px rgba(88, 96, 109, 0.14);
                                                                        -webkit-box-shadow: 0px 0px 10px 0px rgba(88, 96, 109, 0.14);
                                                                        margin: 20px 7px;
                                                                        width: 32%;
                                                                    }

                                                                    .brows-company-name {
                                                                        padding: 15px;
                                                                    }

                                                                    .item-fl-box {
                                                                        width: 100%;
                                                                        display: block;
                                                                        align-items: center;
                                                                    }

                                                                    .brows-company .brows-company-pic {
                                                                        position: relative;
                                                                        width: 100%;
                                                                        border-radius: 50%;
                                                                    }

                                                                    .brows-company .item-fl-box .brows-company-pic {
                                                                        margin-right: 15px;
                                                                    }

                                                                    .brows-company .brows-company-pic img {
                                                                        width: 100%;
                                                                        margin: 0 auto;
                                                                    }

                                                                    .brows-company h4 {
                                                                        margin-bottom: 5px;
                                                                        color: #2a2a2a;
                                                                        font-size: 20px;
                                                                        margin: 0;
                                                                        font-weight: 600;
                                                                    }

                                                                    .brows-company span.brows-company-tagline {
                                                                        display: block;
                                                                        color: #636d75;
                                                                    }

                                                                    .brows-company .brows-company-location p {
                                                                        margin-bottom: 5px;
                                                                        font-weight: 600;
                                                                        color: #0274be;
                                                                        font-size: 14px;
                                                                    }

                                                                    .brows-company .brows-company-position p {
                                                                        text-align: right;
                                                                        color: #0274be;
                                                                        margin: 0px;
                                                                        font-weight: 600;
                                                                    }

                                                                    .image-outer {
                                                                        width: 100%;
                                                                    }

                                                                    .location-outer {
                                                                        width: 100%;
                                                                        padding: 10px 15px 15px;
                                                                    }

                                                                    .brows-company hr {
                                                                        background: #eee;
                                                                        width: 93%;
                                                                        text-align: center;
                                                                        margin: 0 auto;
                                                                    }

                                                                    .brows-company-location {
                                                                        width: 50%;
                                                                        float: left;
                                                                    }

                                                                </style>
                                                                <div class="job-search-form">
                                                                    <div class="form-outer">
                                                                        <input type="text" placeholder="Keyword">
                                                                    </div>
                                                                    <div class="form-outer">
                                                                        <input type="text" placeholder="Loaction">
                                                                    </div>
                                                                    <div class="form-outer">

                                                                        <select id="cars">
                                                                            <option class="disabled">Select Category</option>
                                                                            <option>Hospitality</option>
                                                                            <option>Cleaner</option>
                                                                            <option>Constructions</option>
                                                                            <option>Security</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-outer">
                                                                        <button type="submit">Search</button>
                                                                    </div>
                                                                </div>
                                                                <div class="brows-company">
                                                                    <div class="image-outer">
                                                                        <div class="item-fl-box">
                                                                            <div class="brows-company-pic">
                                                                                <img src="http://mckay.neuronsit.in/wp-content/uploads/2020/04/26VWUNION-articleLarge.jpg" class="img-responsive" alt="">
                                                                            </div>
                                                                            <div class="brows-company-name">
                                                                                <h4><a href="company-detail.html">Company One</a></h4>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="location-outer">
                                                                        <div class="brows-company-location">
                                                                            <p><i class="fa fa-map-marker"></i> FALBROOK NSW 2330</p>
                                                                        </div>
                                                                        <div class="brows-company-position">
                                                                            <p>6 Openings</p>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="brows-company">
                                                                    <div class="image-outer">
                                                                        <div class="item-fl-box">
                                                                            <div class="brows-company-pic">
                                                                                <img src="http://mckay.neuronsit.in/wp-content/uploads/2020/04/s2.jpg" class="img-responsive" alt="">
                                                                            </div>
                                                                            <div class="brows-company-name">
                                                                                <h4><a href="company-detail.html">Company Two</a></h4>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="location-outer">
                                                                        <div class="brows-company-location">
                                                                            <p><i class="fa fa-map-marker"></i> FALBROOK NSW 2330</p>
                                                                        </div>
                                                                        <div class="brows-company-position">
                                                                            <p>8 Openings</p>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="brows-company">
                                                                    <div class="image-outer">
                                                                        <div class="item-fl-box">
                                                                            <div class="brows-company-pic">
                                                                                <img src="http://mckay.neuronsit.in/wp-content/uploads/2020/04/s3.jpg" class="img-responsive" alt="">
                                                                            </div>
                                                                            <div class="brows-company-name">
                                                                                <h4><a href="company-detail.html">Company Three</a></h4>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="location-outer">
                                                                        <div class="brows-company-location">
                                                                            <p><i class="fa fa-map-marker"></i> FALBROOK NSW 2330</p>
                                                                        </div>
                                                                        <div class="brows-company-position">
                                                                            <p>4 Openings</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="brows-company">
                                                                    <div class="image-outer">
                                                                        <div class="item-fl-box">
                                                                            <div class="brows-company-pic">
                                                                                <img src="http://mckay.neuronsit.in/wp-content/uploads/2020/04/s4.jpg" class="img-responsive" alt="">
                                                                            </div>
                                                                            <div class="brows-company-name">
                                                                                <h4><a href="company-detail.html">Company Four</a></h4>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="location-outer">
                                                                        <div class="brows-company-location">
                                                                            <p><i class="fa fa-map-marker"></i> FALBROOK NSW 2330</p>
                                                                        </div>
                                                                        <div class="brows-company-position">
                                                                            <p>5 Openings</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="brows-company">
                                                                    <div class="image-outer">
                                                                        <div class="item-fl-box">
                                                                            <div class="brows-company-pic">
                                                                                <img src="http://mckay.neuronsit.in/wp-content/uploads/2020/04/bigstock-Happy-Young-Woman-Taking-Notes-86676881.jpg" class="img-responsive" alt="">
                                                                            </div>
                                                                            <div class="brows-company-name">
                                                                                <h4><a href="company-detail.html">Company Five</a></h4>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="location-outer">
                                                                        <div class="brows-company-location">
                                                                            <p><i class="fa fa-map-marker"></i> FALBROOK NSW 2330</p>
                                                                        </div>
                                                                        <div class="brows-company-position">
                                                                            <p>2 Openings</p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="brows-company">
                                                                    <div class="image-outer">
                                                                        <div class="item-fl-box">
                                                                            <div class="brows-company-pic">
                                                                                <img src="http://mckay.neuronsit.in/wp-content/uploads/2020/04/living_options5.jpg" class="img-responsive" alt="">
                                                                            </div>
                                                                            <div class="brows-company-name">
                                                                                <h4><a href="company-detail.html">Company Six</a></h4>
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="location-outer">
                                                                        <div class="brows-company-location">
                                                                            <p><i class="fa fa-map-marker"></i> FALBROOK NSW 2330</p>
                                                                        </div>
                                                                        <div class="brows-company-position">
                                                                            <p>3 Openings</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="elementor-element elementor-element-5dc7f0a elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="5dc7f0a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-38f3082 elementor-column elementor-col-100 elementor-top-column" data-id="38f3082" data-element_type="column">
                                                <div class="elementor-column-wrap  elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-f45515f elementor-widget elementor-widget-html" data-id="f45515f" data-element_type="widget" data-widget_type="html.default">
                                                            <div class="elementor-widget-container">

                                                                <style>
                                                                    .page-content {
                                                                        width: 100%;
                                                                        margin: 0 auto;
                                                                        background: #F4f4f4;
                                                                        display: flex;
                                                                        display: -webkit-flex;
                                                                        justify-content: center;
                                                                        -o-justify-content: center;
                                                                        -ms-justify-content: center;
                                                                        -moz-justify-content: center;
                                                                        -webkit-justify-content: center;
                                                                        align-items: center;
                                                                        -o-align-items: center;
                                                                        -ms-align-items: center;
                                                                        -moz-align-items: center;
                                                                        -webkit-align-items: flex-start;
                                                                    }

                                                                    .form-v5-content {
                                                                        background: #fff;
                                                                        width: 45%;
                                                                        border-radius: 8px;
                                                                        -o-border-radius: 8px;
                                                                        -ms-border-radius: 8px;
                                                                        -moz-border-radius: 8px;
                                                                        -webkit-border-radius: 8px;
                                                                        margin: 40px 40px;
                                                                        color: #333;
                                                                        font-weight: 400;
                                                                        position: relative;
                                                                        font-size: 18px;
                                                                    }

                                                                    .form-v5-content .form-detail {
                                                                        padding: 30px 45px 30px 45px;
                                                                        position: relative;
                                                                    }

                                                                    .form-detail h2 {
                                                                        font-weight: 700;
                                                                        font-size: 25px;
                                                                        text-align: center;
                                                                        position: relative;
                                                                        padding: 3px 0 20px;
                                                                        margin-bottom: 40px;
                                                                    }

                                                                    .form-detail h2::after {
                                                                        background: #3786bd;
                                                                        width: 50px;
                                                                        height: 2px;
                                                                        content: "";
                                                                        position: absolute;
                                                                        top: 100%;
                                                                        left: 50%;
                                                                        transform: translateX(-50%);
                                                                        -o-transform: translateX(-50%);
                                                                        -ms-transform: translateX(-50%);
                                                                        -moz-transform: translateX(-50%);
                                                                        -webkit-transform: translateX(-50%);
                                                                    }

                                                                    .form-detail .form-row {
                                                                        position: relative;
                                                                    }

                                                                    .form-detail .form-row-last {
                                                                        text-align: center;
                                                                    }

                                                                    .form-detail label {
                                                                        display: block;
                                                                        font-size: 18px;
                                                                        padding-bottom: 10px;
                                                                    }

                                                                    .form-detail .input-text {
                                                                        margin-bottom: 26px;
                                                                    }

                                                                    .form-detail input {
                                                                        width: 100%;
                                                                        padding: 10.5px 15px;
                                                                        border: 1px solid #e5e5e5;
                                                                        appearance: unset;
                                                                        -moz-appearance: unset;
                                                                        -webkit-appearance: unset;
                                                                        -o-appearance: unset;
                                                                        -ms-appearance: unset;
                                                                        outline: none;
                                                                        -moz-outline: none;
                                                                        -webkit-outline: none;
                                                                        -o-outline: none;
                                                                        -ms-outline: none;
                                                                        border-radius: 4px;
                                                                        -o-border-radius: 4px;
                                                                        -ms-border-radius: 4px;
                                                                        -moz-border-radius: 4px;
                                                                        -webkit-border-radius: 4px;
                                                                        font-family: 'Roboto', sans-serif;
                                                                        font-weight: 400;
                                                                        font-size: 18px;
                                                                    }

                                                                    .form-detail input:focus {
                                                                        border: 1px solid #b3b3b3;
                                                                    }

                                                                    .form-detail .register {
                                                                        font-size: 18px;
                                                                        color: #fff;
                                                                        background: #3786bd;
                                                                        border-radius: 5px;
                                                                        -o-border-radius: 5px;
                                                                        -ms-border-radius: 5px;
                                                                        -moz-border-radius: 5px;
                                                                        -webkit-border-radius: 5px;
                                                                        width: 180px;
                                                                        box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.2);
                                                                        -o-box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.2);
                                                                        -ms-box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.2);
                                                                        -moz-box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.2);
                                                                        -webkit-box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.2);
                                                                        border: none;
                                                                        margin: 19px 0 40px;
                                                                        cursor: pointer;
                                                                    }

                                                                    .form-detail .register:hover {
                                                                        background: #2f73a3;
                                                                    }

                                                                    .form-detail .form-row-last input {
                                                                        padding: 14px;
                                                                    }

                                                                    .form-detail i {
                                                                        font-size: 14px;
                                                                        color: #999;
                                                                        right: 15px;
                                                                        top: 50%;
                                                                        transform: translateX(-50%);
                                                                        position: absolute;
                                                                    }

                                                                    input::-webkit-input-placeholder {
                                                                        /* Chrome/Opera/Safari */
                                                                        color: #999;
                                                                        font-size: 16px;
                                                                    }

                                                                    input::-moz-placeholder {
                                                                        /* Firefox 19+ */
                                                                        color: #999;
                                                                        font-size: 16px;
                                                                    }

                                                                    input:-ms-input-placeholder {
                                                                        /* IE 10+ */
                                                                        color: #999;
                                                                        font-size: 16px;
                                                                    }

                                                                    input:-moz-placeholder {
                                                                        /* Firefox 18- */
                                                                        color: #999;
                                                                        font-size: 16px;
                                                                    }

                                                                    input#img {
                                                                        margin-bottom: 26px;
                                                                        background: #fafafa;
                                                                        font-size: 15px;
                                                                        font-weight: 400;
                                                                    }

                                                                    .form-row select#study {
                                                                        width: 100%;
                                                                        margin-bottom: 26px;
                                                                        border-radius: 4px;
                                                                    }

                                                                    /* Responsive */
                                                                    @media screen and (max-width: 767px) {
                                                                        .form-v5-content {
                                                                            margin: 175px 20px;
                                                                        }
                                                                    }

                                                                </style>
                                                                @if(session()->has('success'))
                                                                <span class="success-msg"> 
                                                                    {!!session('success')!!}

                                                                </span>
                                                                @endif
                                                                
                                                                <div class="page-content">
                                                                    <div class="form-v5-content">
                                                                        <form class="form-detail" action="{{route('frontend.customer.add.post')}}" method="post" enctype='multipart/form-data'>

                                                                            <h2>{{__('Register')}}</h2>


                                                                            @if (count($errors) > 0)
                                                                            <ul id="login-validation-errors" class="validation-errors">
                                                                                @foreach ($errors->all() as $error)
                                                                                <li style="color:red;" class="validation-error-item">{{ $error }}</li>
                                                                                @endforeach
                                                                            </ul>
                                                                            @endif

                                                                            @csrf
                                                                            <div class="form-row">
                                                                                <label for="full-name">{{__('Full Name')}}</label>
                                                                                <input type="text" value="{{old('full_name')}}" name="full_name" class="input-text" placeholder="{{__('Full Name')}}" required="">
                                                                            </div>
                                                                            <div class="form-row">
                                                                                <label for="your-email">{{__('Your Email')}}</label>
                                                                                <input type="email" name="email" value="{{old('email')}}" class="input-text" placeholder="{{__('Your Email')}}" required="">
                                                                            </div>
                                                                            <!--div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
				</div-->
                                                                            <div class="form-row">
                                                                                <label for="password">{{__('Phone Number')}}</label>
                                                                                <input name="phone_number" value="{{old('phone_number')}}" class="input-text" placeholder="{{__('Your Phone Number')}}" required="">
                                                                            </div>

                                                                            <div class="form-row">
                                                                                <label for="password">{{__('Address')}}</label>
                                                                                <input type="text" name="address" value="{{old('address')}}" class="input-text" placeholder="{{__('Your Address')}}" required="">
                                                                            </div>

                                                                            <div class="form-row">
                                                                                <label for="password">{{__('Upload Profile Picture')}}</label>
                                                                                <input type="file" name="profile_image" accept="image/*">
                                                                            </div>

                                                                            <div class="form-row">
                                                                                <label for="password">{{__('Gender')}}</label>
                                                                                <select id="study" name="gender" required>
                                                                                    <option>{{__('Select Gender')}} </option>
                                                                                    <option value="male" {{(old('gender')=="male")?'selected':''}}>{{__('Male')}}</option>
                                                                                    <option value="female" {{(old('gender')=="female")?'selected':''}}>{{__('Female')}}</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="form-row">
                                                                                <label for="password">{{__('Qualification')}}</label>
                                                                                <select id="study">
                                                                                    <option value="0">{{__('Select Qualification')}} </option>
                                                                                    <option value="Btech">B.tech</option>
                                                                                    <option value="Bsc">Bsc</option>
                                                                                    <option value="MTech">M.tech</option>
                                                                                    <option value="BA">B.a</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="form-row">
                                                                                <label for="password">{{__('Apply for position')}}</label>
                                                                                <select id="study" name="applied_position">
                                                                                    <option value="0">{{__('Select position')}} </option>
                                                                                    @foreach($positions as $key=>$position)
                                                                                    <option value="{{$key}}" {{($key==old('applied_position'))?'selected':''}}>{{$position}}</option>
                                                                                    @endforeach

                                                                                </select>
                                                                            </div>

                                                                            <div class="form-row">
                                                                                <label for="password">Total experience</label>
                                                                                <select id="study" name="total_experiance">
                                                                                    <option value="">Select experience </option>
                                                                                    @for($i=0;$i<=10;$i++) <option value="{{$i}}" {{($i==old('total_experiance'))?'selected':''}}>{{$i}} {{__('years')}}</option>
                                                                                        @endfor
                                                                                </select>
                                                                            </div>

                                                                            <div class="form-row">
                                                                                <label for="password">{{__('Location for job')}}</label>
                                                                                <select id="study" name="job_location">
                                                                                    <option>{{__('Select Location')}} </option>
                                                                                    @foreach($cities as $key=>$city)
                                                                                    <option value="{{$key}}" {{($key==old('job_location'))?'selected':''}}>{{$city}}</option>

                                                                                    @endforeach


                                                                                </select>
                                                                            </div>

                                                                            <div class="form-row-last">
                                                                                <input type="submit" name="register" class="register" value="Register">
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                    <div class="form-v5-content" style="width:35%;">
                                                                        <form class="form-detail" action="#" method="post">
                                                                            <h2>{{__('Registered Users')}}</h2>
                                                                            <div class="form-row">
                                                                                <label for="full-name">{{__('Unique Code')}}</label>
                                                                                <input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Unique code" required="">
                                                                            </div>
                                                                            <!--div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Your Email" required>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
				</div--->
                                                                            <div class="form-row-last">
                                                                                <input type="submit" name="register" class="register" value="Submit">
                                                                            </div>
                                                                        </form>
                                                                    </div>


                                                                </div>

                                                            </div>
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



                </div><!-- .entry-content .clear -->



            </article><!-- #post-## -->





        </main><!-- #main -->


    </div><!-- #primary -->



</div>
@endsection
