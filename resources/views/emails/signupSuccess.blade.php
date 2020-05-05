
<p>Hi <b>{{$model->full_name}}</b>,</p>
                      
{{__('mails.thank_you_signup',['sitename'=>env('APP_NAME')])}} 
<br/>
{!!__('mails.your_unique_code',['unique_code'=>"<b>{$model->unique_code}</b>"])!!}   </p>