<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Category</title>
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

    @if (session()->has('message'))
    <script>
        toastr.success("{{ session('message') }}");
    </script>
@endif




    <div id="wrapper">
        @include('admin.navbar')
              <!-- /. NAV TOP  -->
                  @include('admin.side_navbar')

                  <div id="page-wrapper" >

<!--View category start--->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Form Elements -->
                            <div class="panel panel-default">
                                 <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                         <h2>CATEGORY</h2>
                                            <h5>Welcome Jhon Deo , Love to see you back. </h5>

                                        </div>
                                    </div>
                                     <!-- /. ROW  -->
                                     <hr />
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!-- Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            View Products
                         </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Images</th>
                                            <th>SKU</th>
                                            <th>Product Name</th>
                                            <th>Price(RRP)</th>
                                            <th>Cost Price</th>
                                            <th>Product Category</th>
                                            <th>Description</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product as $products)
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset($products->image) }}" alt="{{ $products->product_name }}" style="width: 100px; height: 100px;">
                                                    </td>
                                                    <td>{{ $products->sku }}</td>
                                                    <td>{{ $products->product_name }}</td>
                                                    <td>{{ $products->product_price }}</td>
                                                    <td>{{ $products->product_cost }}</td>
                                                    <td>{{ $products->category }}</td>
                                                    <td>{{ $products->description }}</td>
                                                    <td>
                                                        <a href="{{ url('admin/show_products_edit') }}">
                                                            <button class="btn btn-success">Update</button>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('admin/show_products_edit') }}">
                                                            <button class="btn btn-danger">Delete</button>
                                                        </a>
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
