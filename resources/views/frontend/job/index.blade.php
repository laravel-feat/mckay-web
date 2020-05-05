@extends('layouts.frontend')

@section('content')

<link rel='stylesheet' id='mg_wpsi_icons-css' href="{{asset('public/css/post-344.css')}}" media='all' />



<div data-elementor-type="wp-page" data-elementor-id="344" class="elementor elementor-344" data-elementor-settings="[]">
    <div class="elementor-inner">
        <div class="elementor-section-wrap">
            <section class="elementor-element elementor-element-8a3a5bf elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="8a3a5bf" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-element elementor-element-807da09 elementor-column elementor-col-100 elementor-top-column" data-id="807da09" data-element_type="column">
                            <div class="elementor-column-wrap  elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-55fa639 elementor-widget elementor-widget-heading" data-id="55fa639" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">{{__('Latest Jobs')}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="elementor-element elementor-element-90ca177 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="90ca177" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-element elementor-element-c6bbd90 elementor-column elementor-col-100 elementor-top-column" data-id="c6bbd90" data-element_type="column">
                            <div class="elementor-column-wrap  elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-d06fd90 elementor-widget elementor-widget-shortcode" data-id="d06fd90" data-element_type="widget" data-widget_type="shortcode.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-shortcode">
                                                <div class="job_listings" data-location="" data-keywords="" data-show_filters="true" data-show_pagination="false" data-per_page="10" data-orderby="featured" data-order="DESC" data-categories="" data-post_id="344">
                                                    <form class="job_filters">

                                                        <div class="search_jobs">

                                                            <div class="search_keywords">
                                                                <label for="search_keywords">Keywords</label>
                                                                <input type="text" name="search_keywords" id="search_keywords" placeholder="Keywords" value="">
                                                            </div>

                                                            <div class="search_location">
                                                                <label for="search_location">Location</label>
                                                                <input type="text" name="search_location" id="search_location" placeholder="Location" value="">
                                                            </div>

                                                            <div style="clear: both"></div>


                                                            <div class="search_submit">
                                                                <input type="submit" value="Search Jobs">
                                                            </div>

                                                        </div>

                                                        <ul class="job_types">
                                                            <li><label for="job_type_freelance" class="freelance"><input type="checkbox" name="filter_job_type[]" value="freelance" checked="checked" id="job_type_freelance"> Freelance</label></li>
                                                            <li><label for="job_type_full-time" class="full-time"><input type="checkbox" name="filter_job_type[]" value="full-time" checked="checked" id="job_type_full-time"> Full Time</label></li>
                                                            <li><label for="job_type_internship" class="internship"><input type="checkbox" name="filter_job_type[]" value="internship" checked="checked" id="job_type_internship"> Internship</label></li>
                                                            <li><label for="job_type_part-time" class="part-time"><input type="checkbox" name="filter_job_type[]" value="part-time" checked="checked" id="job_type_part-time"> Part Time</label></li>
                                                            <li><label for="job_type_temporary" class="temporary"><input type="checkbox" name="filter_job_type[]" value="temporary" checked="checked" id="job_type_temporary"> Temporary</label></li>
                                                        </ul>
                                                        <input type="hidden" name="filter_job_type[]" value="">
                                                        <div class="showing_jobs" style="display: none;"></div>
                                                    </form>


                                                    <noscript>Your browser does not support JavaScript, or it is disabled. JavaScript must be enabled in order to view listings.</noscript>
                                                    <ul class="job_listings">
                                                        <li class="post-321 job_listing type-job_listing status-expired hentry job-type-full-time" data-longitude="" data-latitude="" style="visibility: visible;">
                                                            <a href="http://mckay.neuronsit.in/job/carpenter/">
                                                                <img class="company_logo" src="http://mckay.neuronsit.in/wp-content/plugins/wp-job-manager/assets/images/company.png" alt="Mckay">
                                                                <div class="position">
                                                                    <h3>Carpenter</h3>
                                                                    <div class="company">
                                                                        <strong>Mckay</strong> <span class="tagline">Brief About Company</span> </div>
                                                                </div>
                                                                <div class="location">
                                                                    London </div>
                                                                <ul class="meta">

                                                                    <li class="job-type full-time">Full Time</li>

                                                                    <li class="date"><time datetime="2020-04-03">Posted 1 month ago</time></li>

                                                                </ul>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <a class="load_more_jobs" href="#" style="display:none;"><strong>Load more listings</strong></a>
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
           
            <section class="elementor-element elementor-element-4da0a2e elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="4da0a2e" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                        <div class="elementor-element elementor-element-9706884 elementor-column elementor-col-100 elementor-top-column" data-id="9706884" data-element_type="column">
                            <div class="elementor-column-wrap  elementor-element-populated">
                                <div class="elementor-widget-wrap">
                                    <div class="elementor-element elementor-element-9c2c8a8 elementor-widget elementor-widget-html" data-id="9c2c8a8" data-element_type="widget" data-widget_type="html.default">
                                        <div class="elementor-widget-container">
                                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                            <style>
                                                .newjob-list-layout .cll-right {
                                                    align-self: flex-end;
                                                    margin-bottom: 3px;
                                                }

                                                .ur-detail-wrap {
                                                    width: 100%;
                                                    display: block;
                                                    position: relative;
                                                    justify-content: center;
                                                    align-items: center;
                                                    padding: 0 2em 1.50em 2em;
                                                    border-radius: 6px;
                                                    background: #ffffff;
                                                    box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.1);
                                                }

                                                .ur-detail-wrap-header {
                                                    padding: 18px 0 10px 0;
                                                    border-bottom: 1px solid #e0dfe6;
                                                    margin-bottom: 1.5em;
                                                }

                                                label {
                                                    font-size: 13px;
                                                    font-weight: 600;
                                                    color: #495677;
                                                }

                                                .form-control {
                                                    height: 50px;
                                                    border: 1px solid #dde6ef;
                                                    margin-bottom: 10px;
                                                    box-shadow: none;
                                                    border-radius: 0;
                                                    background: #fbfdff;
                                                    font-size: 15px;
                                                    color: #445461;
                                                    font-weight: 400;
                                                }

                                                .form-control {
                                                    display: block;
                                                    width: 100%;
                                                    height: 34px;
                                                    padding: 6px 12px;
                                                    font-size: 14px;
                                                    line-height: 1.42857143;
                                                    color: #555;
                                                    background-color: #fff;
                                                    background-image: none;
                                                    border: 1px solid #ccc;
                                                    border-radius: 4px;
                                                    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                                                    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
                                                    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
                                                    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                                                    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
                                                }

                                                .btn {
                                                    font-size: 14px;
                                                    border-radius: 2px;
                                                    padding: 14px 20px;
                                                    letter-spacing: 0.5px;
                                                    text-shadow: none;
                                                    box-shadow: 0 2px 8px rgba(102, 103, 107, .15);
                                                }

                                                .btn-primary {
                                                    background: #2196f3;
                                                    border-color: #2196f3;
                                                    color: #fff;
                                                }

                                                .sidebar-widgets {
                                                    margin-bottom: 30px;
                                                }

                                                .ur-detail-wrap {
                                                    width: 100%;
                                                    display: block;
                                                    position: relative;
                                                    justify-content: center;
                                                    align-items: center;
                                                    padding: 0 2em 1.50em 2em;
                                                    border-radius: 6px;
                                                    background: #ffffff;
                                                    box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.1);
                                                }

                                                ul.follow-links,
                                                ul.advance-list {
                                                    padding: 0;
                                                    margin: 0;
                                                }

                                                ul.follow-links li,
                                                ul.advance-list li {
                                                    display: block;
                                                    list-style: none;
                                                    padding: 12px 0;
                                                    border-bottom: 1px dashed #dfe3e8;
                                                }

                                                .custom-checkbox {
                                                    position: relative;
                                                }

                                                .custom-checkbox input[type="checkbox"] {
                                                    opacity: 0;
                                                    position: absolute;
                                                    margin: 5px 0 0 3px;
                                                    z-index: 9;
                                                }

                                                .custom-checkbox label:before {
                                                    width: 16px;
                                                    height: 16px;
                                                }

                                                .custom-checkbox label:before {
                                                    content: '';
                                                    margin-right: 5px;
                                                    display: inline-block;
                                                    vertical-align: text-top;
                                                    background: white;
                                                    border: 1px solid #bbb;
                                                    border-radius: 2px;
                                                    box-sizing: border-box;
                                                    z-index: 2;
                                                }

                                                .custom-checkbox input[type="checkbox"]:checked+label:before {
                                                    border-color: #0078E1;
                                                    background: #0078E1;
                                                }

                                                .custom-checkbox input[type="checkbox"]:checked+label:after {
                                                    content: '';
                                                    position: absolute;
                                                    left: 5px;
                                                    top: 3px;
                                                    width: 6px;
                                                    height: 10px;
                                                    border: solid #ffffff;
                                                    border-width: 0 3px 3px 0;
                                                    transform: inherit;
                                                    z-index: 3;
                                                    transform: rotateZ(45deg);
                                                }

                                                .show-hide-sidebar.hidden-xs.hidden-sm {
                                                    width: 30%;
                                                    float: left;
                                                }

                                                .pull-right {
                                                    float: right !important;
                                                }

                                                .candidate-list-layout,
                                                .newjob-list-layout {
                                                    display: flex;
                                                    width: 100%;
                                                    margin-bottom: 20px;
                                                    background: #f8f8f8;
                                                    overflow: hidden;
                                                    position: relative;
                                                    border-radius: 6px;
                                                    padding: 20px 25px;
                                                    border: 1px solid #eef4f9;
                                                    align-items: center;
                                                    flex-wrap: wrap;
                                                }

                                                .cll-wrap {
                                                    flex: 1;
                                                }

                                                .newjob-list-layout .cll-thumb {
                                                    max-width: 60px;
                                                    display: inline-block;
                                                    margin: 0 auto;
                                                    overflow: hidden;
                                                    height: 60px;
                                                    float: left;
                                                    margin-top: 6px;
                                                }

                                                .newjob-list-layout .cll-thumb img {
                                                    max-width: 60px;
                                                }

                                                .newjob-list-layout .cll-caption {
                                                    display: inline-block;
                                                    padding-left: 2rem;
                                                    margin-top: 1rem;
                                                }

                                                .cll-caption h4 {
                                                    padding-top: 0;
                                                    margin-top: 0;
                                                    font-size: 17px;
                                                    margin-bottom: 10px;
                                                }

                                                .newjob-list-layout h4 a {
                                                    padding-right: 8px;
                                                    font-weight: 600;
                                                }

                                                .cll-caption h4 span.jb-status {
                                                    padding: 3px 12px;
                                                    background: #1f86ef !important;
                                                    font-size: 14px;
                                                    border-radius: 2px;
                                                    color: #ffffff;
                                                    margin-left: 1rem;
                                                    border: none;
                                                    position: relative;
                                                    top: -2px;
                                                }

                                                .cll-caption h4 span.jb-status.full-time {
                                                    background: #03a84e;
                                                }

                                                .cll-caption ul {
                                                    margin: 0;
                                                    padding: 0;
                                                    margin-top: 1rem;
                                                }

                                                .cll-caption ul li:first-child {
                                                    padding-left: 0px;
                                                }

                                                .cll-caption ul li:last-child {
                                                    border-right: none;
                                                }

                                                .cll-caption ul li {
                                                    display: inline-block;
                                                    list-style: none;
                                                    padding-right: 1rem;
                                                    border-right: 1px solid #dbe6ef;
                                                    padding-left: 5px;
                                                }

                                                .fa-building-o {
                                                    color: #f21136 !important;
                                                }

                                                .jobs-desc {
                                                    width: 68%;
                                                    float: left;
                                                    display: inline-block;
                                                    margin-left: 20px;
                                                }

                                                .cll-caption h4 span.jb-status.part-time {
                                                    background: #f7790a;
                                                }

                                                .cll-caption h4 span.jb-status.freelancer-time {
                                                    background: #f31143;
                                                }

                                                .cll-caption h4 span.jb-status.internship-time {
                                                    background: #964ed6;
                                                }

                                                .cll-caption i {
                                                    margin-right: 5px;
                                                }

                                                .fa-credit-card {
                                                    color: #11b719 !important;
                                                }

                                                select#choose-category {
                                                    background: #fafafa;
                                                    height: 45px;
                                                }

                                                .btn {
                                                    font-size: 14px;
                                                    border-radius: 2px;
                                                    padding: 14px 20px;
                                                    letter-spacing: 0.5px;
                                                    text-shadow: none;
                                                    box-shadow: 0 2px 8px rgba(102, 103, 107, .15);
                                                }

                                                .btn.theme-btn.btn-shortlist {
                                                    text-transform: capitalize;
                                                    background: #0078E1;
                                                    border-color: #0078E1;
                                                    padding: 10px 20px;
                                                    color: #ffffff;
                                                    box-shadow: none;
                                                }

                                                .btn.theme-btn.btn-shortlist i {
                                                    margin-right: 10px;
                                                }

                                                button.btn.btn-primary.full-width {
                                                    width: 100%;
                                                }

                                                .cll-caption p {
                                                    margin-bottom: 10px;
                                                    font-size: 14px;
                                                    margin-right: 15px;
                                                }

                                                .newjob-list-layout .cll-right {
                                                    align-self: flex-end;
                                                }

                                            </style>
                                            <form method="get" action="">
                                             
                                            <div class="show-hide-sidebar hidden-xs hidden-sm">

                                                <!-- Search Job -->
                                                <div class="sidebar-widgets">

                                                    <div class="ur-detail-wrap">
                                                        <div class="ur-detail-wrap-header">
                                                            <h4>{{__('Search Job Here')}}</h4>
                                                        </div>
                                                        <div class="ur-detail-wrap-body">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label>{{__('Keyword')}}</label>
                                                                <input type="text" value="{{request()->get('keyword')}}" name="keyword" class="form-control" placeholder="Job Title or Keyword">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>{{__('Location')}}</label>
                                                                    <input type="text" value="{{request()->get('location')}}" name="location" class="form-control" placeholder="ex. New York">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>{{__('Category')}}</label>
                                                                    <select id="choose-category" name="category" class="form-control">
                                                                        <option value="" >{{__('Choose Category')}}</option>
                                                                        @foreach($jobCategories as $key=>$jobCategory)
                                                                        <option value="{{$key}}"  {{(request()->get('category')==$key)?'selected':''}}>{{$jobCategory}}</option>
                                                                        @endforeach
                                                                        
                                                                     
                                                                    </select>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary full-width">Find Jobs</button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /Search Job -->



                                                <!-- Experince -->
                                                <div class="sidebar-widgets">
                                                    <div class="ur-detail-wrap">

                                                        <div class="ur-detail-wrap-header">
                                                            <h4>{{__('Experiance')}}</h4>
                                                        </div>
                                                        <div class="ur-detail-wrap-body">
                                                            <ul class="advance-list">
                                                                <li>
                                                                    <span class="custom-checkbox">
                                                                        <input {{(is_array(request()->get('experiance')) && in_array('0_1',request()->get('experiance')))?'checked':''}} value="0_1" name="experiance[]" type="checkbox" id="uy">
                                                                        <label for="uy"></label>
                                                                    </span>
                                                                    {{__('0 - 1 Year')}}
                                                                    <span class="pull-right">{{@$experianceCount[0]+@$experianceCount[1]}}</span>
                                                                </li>
                                                                <li>
                                                                    <span class="custom-checkbox">
                                                                        <input {{(is_array(request()->get('experiance')) && in_array('1_2',request()->get('experiance')))?'checked':''}} value="1_2" name="experiance[]" type="checkbox" id="io">
                                                                        <label for="io"></label>
                                                                    </span>
                                                                   {{__('1 - 2 Year')}}
                                                                    <span class="pull-right">{{@$experianceCount[1]+@$experianceCount[2]}}</span>
                                                                </li>
                                                                <li>
                                                                    <span class="custom-checkbox">
                                                                        <input {{(is_array(request()->get('experiance')) && in_array('2_4',request()->get('experiance')))?'checked':''}} value="2_4" name="experiance[]" type="checkbox" id="lo">
                                                                        <label for="lo"></label>
                                                                    </span>
                                                                    {{_('2 - 4 Year')}}
                                                                    <span class="pull-right">{{@$experianceCount[2]+@$experianceCount[3]+@$experianceCount[4]}}</span>
                                                                </li>
                                                                <li>
                                                                    <span class="custom-checkbox">
                                                                        <input {{(is_array(request()->get('experiance')) && in_array('4_6',request()->get('experiance')))?'checked':''}} value="4_6" name="experiance[]" type="checkbox" id="kj">
                                                                        <label for="kj"></label>
                                                                    </span>
                                                                    {{__('4 - 6 Year')}}
                                                                    <span class="pull-right">{{@$experianceCount[4]+@$experianceCount[5]+@$experianceCount[6]}}</span>
                                                                </li>

                                                                <li>
                                                                    <span class="custom-checkbox">
                                                                        <input {{(is_array(request()->get('experiance')) && in_array('6_10',request()->get('experiance')))?'checked':''}} value="6_10" name="experiance[]" type="checkbox" id="kj">
                                                                        <label for="kj"></label>
                                                                    </span>
                                                                    {{__('6 - 10 Year')}}
                                                                    <span class="pull-right">{{@$experianceCount[6]+@$experianceCount[7]+@$experianceCount[8]+@$experianceCount[9]+@$experianceCount[10]}}</span>
                                                                </li>


                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- /Experince -->

                                                <!-- Job Type -->
                                                <div class="sidebar-widgets">
                                                    <div class="ur-detail-wrap colps-wrap">

                                                        <div class="ur-detail-wrap-header">
                                                            <h4>{{__('Job Type')}}</h4>
                                                        </div>
                                                        <div class="ur-detail-wrap-body">
                                                            <ul class="advance-list">
                                                                @foreach($jobTypes as $key=>$jobType)
                                                                <li>
                                                                    <span class="custom-checkbox">
                                                                    <input {{(is_array(request()->get('job_type')) && in_array($key,request()->get('job_type')))?'checked':''}} type="checkbox" name="job_type[]"  value="{{$key}}">
                                                                        <label for="1"></label>
                                                                    </span>
                                                                    {{$jobType}}
                                                                    <span class="pull-right">{{@$jobTypeCount[$key]+0}}</span>
                                                                </li>
                                                                @endforeach
                                                             
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Job Type -->

                                            </div>
                                        </form>



                                            <div class="jobs-desc">

                                                <!-- Single New Job -->
                                                @foreach($models as $model)


                                                <div class="newjob-list-layout">
                                                    <div class="cll-wrap">
                                                        <div class="cll-thumb">
                                                            <a href="{{route('frontend.jobs.view',['model'=>$model])}}"> </a>
                                                        </div>
                                                        <div class="cll-caption">
                                                            <h4><a href="http://mckay.neuronsit.in/job-details">{{$model->title}}</a>
                                                                <!--span class="jb-status full-time">Full Time</span-->
                                                            </h4>
                                                        <p>{{$model->short_desc}}</p>
                                                            <ul>
                                                                <li><i class="fa fa-building-o" aria-hidden="true"></i>{{$model->company_name}}</li>
                                                                <li><i class="fa fa-credit-card" aria-hidden="true"></i>${{$model->salary_from}} - ${{$model->salary_to}} P.A </li>
                                                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{$model->getType()}}</li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="cll-right">
                                                        <a href="{{route('frontend.jobs.view',['model'=>$model])}}" class="btn theme-btn btn-shortlist"><i class="fa fa-arrow-right" aria-hidden="true"></i>Job details</a>
                                                    </div>
                                                </div>
                                                @endforeach






                                                {{ $models->links() }}
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

@endsection
