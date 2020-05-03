<?php
use App\Models\Banner;
?>
@extends('layouts.admin')


@section('content')

 <div class="animated fadeIn">


                <div class="row">
                   

                    </div><!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>{{__('Position')}}</strong><small> {{__('Form')}}</small></div>
                            <div class="card-body card-block">
                             @include('admin.position._form',['path'=>route('admin.position.add.post')]) 
                                    
                            </div>
                        </div>
                        
                        
                    </div>
                    
                    </div>
 @endsection