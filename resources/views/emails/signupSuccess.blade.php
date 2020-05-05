@extends('layouts.email')
@section('content')

<p>Hi <b>{{$model->full_name}}</b>,</p>
                        <p>
                           {{__('mails.thank_you_signup',['sitename'=>env('APP_NAME')])}} 
                           <br/>
                           {!!__('mails.your_unique_code',['unique_code'=>"<b>{$model->unique_code}</b>"])!!}     

                        </p>
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
                          <tbody>
                            <tr>
                              <td align="left">
                                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      
                                      <td> <a href="{{url('/')}}" target="_blank">{{__('Visit :sitename',['sitename'=>env('APP_NAME')])}}</a> </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                       

@endsection