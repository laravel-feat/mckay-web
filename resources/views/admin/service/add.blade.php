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
                            <div class="card-header"><strong>Service</strong><small> Form</small></div>
                            <div class="card-body card-block">
                             @include('admin.service._form',['path'=>route('admin.service.add')]) 
                                    
                            </div>
                        </div>
                        
                        
                    </div>
                    
                    </div>
                    
  
 @endsection
 