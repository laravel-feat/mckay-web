
 
<script src="{{asset('public/assets/ckeditor/ckeditor.js')}}"></script>
 
<script type="text/javascript">

 

CKEDITOR.config.contentsCss = ["{{asset('public/css/style.css')}}" ,"{{asset('public/css/frontend.min.css')}}","{{asset('public/css/global.css')}}","{{asset('public/css/global.css')}}","{{asset('public/css/global.css')}}"];
 
CKEDITOR.config.allowedContent = true;
CKEDITOR.config.protectedSource.push(/<i[^>]*><\/i>/g);

CKEDITOR.dtd.$removeEmpty.i = 0;
CKEDITOR.config.extraAllowedContent = 'i';
  
CKEDITOR.dtd.$removeEmpty['i'] = false;

CKEDITOR.config.allowedContent = true;
CKEDITOR.dtd.$removeEmpty.i = 0;

  var editor=  CKEDITOR.replace( 'html',{
    	 filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
         filebrowserUploadMethod: 'form'
        }
     );
  CKEDITOR.config.allowedContent = true;
</script>
 