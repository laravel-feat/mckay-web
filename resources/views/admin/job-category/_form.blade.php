<?php 
use App\Models\Position;
?>
<form method="post" action="{{$path}}" enctype="multipart/form-data">
                                @csrf 
                                
                                
                                <div class="form-group">
                                <label for="company" class=" form-control-label">{{__('Title')}}</label>
                                <input type="text" value="{{old('title',optional(@$model)->title)}}" name="title" placeholder="Enter Title" class="form-control">
                                <span class="help-block is-invalid">{{$errors->first('title')}}</span>
                                </div>
                                 
                                    
                            
                                    <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">{{__('Submit')}}</button>
                                </div>  
                                
                                </form>    