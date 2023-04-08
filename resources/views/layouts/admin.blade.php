
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <title>Sadaha UP </title>
    <meta name="viewport" content="">
    <meta name="description" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="apple-touch-icon" sizes="57x57" href="images/WhatsApp Image 2023-03-22 at 11.18.26 PM.jpeg">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="{{asset('backend/css/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/elephant.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/application.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/login-3.min.css')}}./">
    {{-- <link rel="stylesheet" href="{{asset('backend/css/font-awesome-4.7.0/css/font-awesome.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('backend/css/custom.css')}}">
       {{-- toastr css --}}

  {{-- <link rel="stylesheet" href="{{asset('backend/plugin/toastr/toastr.min.css')}}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <style>
              .control-label{
                  color: black !important;
              }
              .form-group label{
                   color: black !important;
              }
      </style>
</head>

<body class="layout layout-header-fixed">
     @include('layouts.partial.header')
    <div class="layout-main">
       @include('layouts.partial.sidebar')


        <div class="layout-content">
            <div class="layout-content-body">
             


                 @yield('content')


            </div>
        </div>



        <div class="layout-footer">
            <div class="layout-footer-body">
                <small class="version" style="color:black !important; font-weight:700;">  Developed and Maintenance By <strong><span><a href="https://twitter.com/Mujibur19401109">Mujib</a></span></strong> &copy; {{date("Y");}}.</small>
                <small class="copyright" style="color:black !important; font-weight:700;">Copyright {{date("Y");}} &copy; Chambal UP</small>
            </div>
        </div>
    </div>
    <link href="{{asset('backend')}}/css/datatables/datatables.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('backend')}}/js/vendor.min.js"></script>
    <script src="{{asset('backend')}}/js/elephant.min.js"></script>
    <script src="{{asset('backend')}}/js/application.min.js"></script>
    <script src="{{asset('backend')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('backend')}}/js/dataTables.min.js"></script>
    <script src="{{asset('backend')}}/js/dataTables.bootstrap.js"></script>
    <script src="{{asset('backend')}}/js/sweetalert2.all.js"></script>
    <script src="{{asset('backend')}}/ckeditor/ckeditor.js"></script>
    <script src="{{asset('backend')}}/js/common_script.js"></script>
    <script src="{{asset('backend')}}/js/custom.js"></script>
    {{-- <script src="{{asset('backend')}}/js/all.js"></script> --}}
    <script src="{{asset('backend')}}/js/all.min.js"></script>
    <link rel='stylesheet' type='text/css' property='stylesheet' href='{{asset('backend')}}/css/stylesheetsv=1677567764'>
    <script type='text/javascript' src='{{asset('backend')}}/js/javascriptv=1677567764'></script>
    <script type="text/javascript">
        jQuery.noConflict(true);
    </script>
    {{-- <script src="{{asset('backend/plugin/toastr/toastr.min.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
            @if(Session::has('success'))
               toastr.success("{{ Session::get('success') }}");
             @endif
    </script>
    
    @yield('script')



</body>

</html>