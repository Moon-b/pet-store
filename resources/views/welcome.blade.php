<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    
    <link rel="stylesheet" href="{{url('backend/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/css/vendor.bundle.base.css')}}" >
    
    <link rel="stylesheet" href="{{url('backend/css/font-awesome.min.css')}}"> 
    <link rel="stylesheet" href="{{url('backend/css/bootstrap-datepicker.min.css')}}">
    
    <link rel="stylesheet" href="{{url('backend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('backend/css/style.css.map')}}">
    <!-- <link rel="shortcut icon" href="assets/images/favicon.png" /> -->
</head>

<body>
    <div class="container-scroller">
        @include('backend.fixed.header')
        <div class="container-fluid page-body-wrapper">
            @include('backend.fixed.sidebar')
            <div class="main-panel">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{url('backend/js/vendor.bundle.base.js')}}"></script>
    <script src="{{url('backend/js/Chart.min.js')}}"></script>
    <script src="{{url('backend/js/circle-progress.min.js')}}"></script>
    <script src="{{url('backend/js/off-canvas.js')}}"></script>
    <script src="{{url('backend/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('backend/js/misc.js')}}"></script>
    <script src="{{url('backend/js/chart.js')}}"></script>
    <script src="{{url('backend/js/codemirror.js')}}"></script>
    <script src="{{url('backend/js/dashboard.js')}}"></script>
    <script src="{{url('backend/js/file-upload.js')}}"></script>
    <script src="{{url('backend/js/select2.js')}}"></script>
    <script src="{{url('backend/js/settings.js')}}"></script>
    <script src="{{url('backend/js/todolist.js')}}"></script>
    <script src="{{url('backend/js/typeahead.js')}}"></script>
    

</body>

</html>
