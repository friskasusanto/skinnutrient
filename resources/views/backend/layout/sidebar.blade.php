<!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{asset('backends/assets/images/dashboard/multikart-logo.png')}}" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('backends/assets/images/dashboard/man.png')}}" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">{{Auth::user()->name}}</h6>
                @if (Auth::user()->hasRole('Admin'))
                    <p>Admin</p>
                @elseif (Auth::user()->hasRole('Dropshiper'))
                    <p>Dropshiper</p>
                @elseif (Auth::user()->hasRole('Reseller'))
                    <p>Reseller</p>
                @endif
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="index.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i> <span>User</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="{{url('/admin/index')}}"><i class="fa fa-circle"></i>
                                    <span>Daftar User</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="box"></i><span>Product</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('/admin/index/product')}}"><i class="fa fa-circle"></i>Daftar Product</a></li>
                            <li><a href="{{url('/admin/gambar_product')}}"><i class="fa fa-circle"></i>Gambar product</a></li>
                            <li><a href="{{url('/admin/add_view/product')}}"><i class="fa fa-circle"></i>Tambah product</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="clipboard"></i><span>Checkout</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('/admin/checkout/index')}}"><i class="fa fa-circle"></i>Daftar Order</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Menu Product</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('/list_menu')}}"><i class="fa fa-circle"></i>Daftar Product Menu</a></li>
                            <li><a href="{{url('/list_category')}}"><i class="fa fa-circle"></i>Daftar Product Category</a></li>
                            <li><a href="{{url('/admin/jenisProduct')}}"><i class="fa fa-circle"></i>Daftar Product Jenis</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="archive"></i><span>Gudang</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('/admin/gudang/index')}}"><i class="fa fa-circle"></i>Daftar Gudang</a></li>
                            <li><a href="{{url('/admin/add/gudang')}}"><i class="fa fa-circle"></i>Tambah Barang</a></li>
                            <li><a href=""><i class="fa fa-circle"></i>Barang Keluar Masuk</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Blog</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('/admin/blog')}}"><i class="fa fa-circle"></i>Daftar Blog</a></li>
                            <li><a href="{{url('/admin/addBlog')}}"><i class="fa fa-circle"></i>Tambah Blog</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="bar-chart"></i><span>Log Admin</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('/admin/log')}}"><i class="fa fa-circle"></i>Daftar Log Admin</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
