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


</head>
<body>

    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

        @include('admin.navbar')
              <!-- /. NAV TOP  -->
                  @include('admin.side_navbar')

                  <div id="page-wrapper" >
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                             <h2>Forms Page</h2>
                                <h5>Welcome Jhon Deo , Love to see you back. </h5>

                            </div>
                        </div>
                         <!-- /. ROW  -->
                         <hr />
                       <div class="row">
                        <div class="col-md-12">
                            <!-- Form Elements -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Element Examples
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Edit Category</h3>
                                            <form action="{{ url('admin/update_category/' . $data->id) }}" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label>Enter New Category</label>
                                                    <input type="text" value="{{ $data->category_name }}" class="form-control" name="category_name" />

                                                    <div style="margin: 10px;">
                                                    <button type="submit" class="btn btn-success">Update Category</button>
                                                    <button type="reset" class="btn btn-primary">Reset All</button>
                                                   </div>

                                                    </div>
                                                </div>
                                            </form>
                                            <!---All Category--->
                                    </div>
                                </div>
                         </div>
                     <!-- /. PAGE INNER  -->
                    </div>

                </div>




</div>
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
