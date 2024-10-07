<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
        <li class="text-center">
            <img src="admin_assets/img/find_user.png" class="user-image img-responsive"/>
            </li>


            <li>
                <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
            </li>
             <li>
                <a  href="{{ route('admin.category') }}" style="align-items: center;"><i class="fa fa-desktop fa-3x"></i>Category</a>
            </li>
            <li>
                <a  href="{{ route('admin.brand') }}" style="align-items: center;"><i class="fa fa-desktop fa-3x"></i>Brand</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i>Products<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('admin/view_products') }}">View Products</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/add_products') }}">Add Product</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/show_products_edit') }}">Update Product</a>
                    </li>
                    <li>
                        <a href="{{ url('admin/show_products_edit') }}">Delete Product</a>
                    </li>

                </ul>
              </li>
                   <li  >
                <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
            </li>
              <li  >
                <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
            </li>
            <li  >
                <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
            </li>


            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link</a>
                    </li>
                    <li>
                        <a href="#">Second Level Link<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>
                            <li>
                                <a href="#">Third Level Link</a>
                            </li>

                        </ul>

                    </li>
                </ul>
              </li>
          <li  >
                <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
            </li>
        </ul>

    </div>

</nav>
