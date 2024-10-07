<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('admin_assets/css/bootstrap.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('admin_assets/css/font-awesome.css') }}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{ asset('admin_assets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('admin_assets/css/custom.css') }}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div id="wrapper">
        @include('admin.navbar')   
              <!-- /. NAV TOP  -->
                  @include('admin.side_navbar') 
   @include('admin.body')
</div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('admin_assets/js/jquery-1.10.2.js') }}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('admin_assets/js/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('admin_assets/js/jquery.metisMenu.js') }}"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{ asset('admin_assets/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/morris/morris.js') }}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('admin_assets/js/custom.js') }}"></script>
    
   

</body>
</html>
