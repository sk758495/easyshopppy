<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Brands</title>
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
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>

<body>

    @if (session()->has('success'))
    <script>
        toastr.success("{{ session('success') }}");
    </script>
@endif

@if (session()->has('error'))
    <script>
        toastr.error("{{ session('error') }}");
    </script>
@endif





    <div id="wrapper">
        <!-- /. NAV TOP  -->
        @include('admin.side_navbar')

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Brand Page</h2>
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
                                Brand Section
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3>Add Brand</h3>
                                        <form action="{{ url('admin/add_brands') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Add Brand Name</label>
                                                <input type="text" class="form-control" name="brand_name" />

                                                <div style="margin: 10px;">
                                                    <button type="submit" class="btn btn-success">Add Brand
                                                        Name</button>
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


                <!--View category start--->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Brands</h2>
                                        <h5>Welcome Jhon Deo , Love to see you back. </h5>

                                    </div>
                                </div>
                                <!-- /. ROW  -->
                                <hr />
                                <div class="row">
                                    <div class="col-md-6">

                                        <!-- Hover Rows  -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                View Brands
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Brands Name</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->brand_name }}</td>

                                                            <td> <a href="{{ url('admin/edit_brand', $item->id) }}"><button
                                                                            class="btn btn-success">Edit</button></a>
                                                            </td>
                                                            <td><a href="{{ url('admin/delete_brand', $item->id) }}"><button
                                                                            class="btn btn-danger">Delete</button></a>
                                                            </td>

                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- /. PAGE INNER  -->
                    </div>
                </div>


            </div>
        </div>
        <!-- /. WRAPPER  -->

        <!-- Toastr JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            toastr.success("{{ session('message') }}");
        </script>



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

        <!-- flash message link -->
        <!--    https://github.com/yoeunes/toastr     -->


</body>

</html>
