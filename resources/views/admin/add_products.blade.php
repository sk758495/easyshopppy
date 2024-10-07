<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Add Products</title>
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
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                             <h2>Add Products</h2>
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
                                    Add Here Your Product
                                </div>

                                <div class="panel-body" style="justify-content: center;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Feel Here Product Detail</h3>
                                            <form action="{{ url('admin/upload_products') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label style="margin-top:10px ">SKU</label>
                                                    <input type="text" class="form-control" name="sku" />

                                                    <label style="margin-top: 10px">Product Name</label>
                                                    <input type="text" class="form-control" name="product_name" />

                                                    <label style="margin-top:10px ">Price</label>
                                                    <input type="text" class="form-control" name="product_price" />

                                                    <label style="margin-top: 10px">Cost Price</label>
                                                    <input type="text" class="form-control" name="product_cost" />

                                                    <label style="margin-top: 10px">Select Category</label>
                                                    <select class="form-control" name="category" style="margin-top:10px ">
                                                        <option value="">-- Select Category --</option>
                                                        @foreach ($data as $item)

                                                        <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>

                                                        @endforeach
                                                    </select>

                                                    <label style="margin-top: 10px">Description</label><br>
                                                    <textarea name="description" id="" cols="auto" rows="auto"></textarea>


                                                    <label style="margin-top:10px ">Image</label>
                                                    <input type="file" class="form-control" name="image" />

                                                    <div style="margin: 10px;">
                                                        <button type="submit" class="btn btn-success">Add Category</button>
                                                        <button type="reset" class="btn btn-primary">Reset All</button>
                                                    </div>
                                                </div>
                                            </form>

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
