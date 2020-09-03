<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="list-divider"></li>
                    @role('Admin')
                        <li class="nav-small-cap"><span class="hide-menu">Admin</span></li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="far fa-user"></i>
                                <span class="hide-menu">User</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="{{url('/admin/index')}}" class="sidebar-link">
                                        <span class="hide-menu">Daftar User</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fab fa-product-hunt"></i>
                                <span class="hide-menu">Product</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="{{url('/admin/gambar_product')}}" class="sidebar-link">
                                        <span class="hide-menu">Daftar Product</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{url('/admin/index/product')}}" class="sidebar-link">
                                        <span class="hide-menu">Gambar Product</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-clipboard-check"></i>
                                <span class="hide-menu">Checkout</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="{{url('/admin/checkout/index')}}" class="sidebar-link">
                                        <span class="hide-menu">Daftar Order</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="far fa-bookmark"></i>
                                <span class="hide-menu">Menu By</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="{{url('/list_menu')}}" class="sidebar-link">
                                        <span class="hide-menu">Daftar Menu</span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="far fa-bookmark"></i>
                                <span class="hide-menu">Category</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="{{url('/list_category')}}" class="sidebar-link">
                                        <span class="hide-menu">Daftar Category</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fas fa-truck-loading"></i>
                                <span class="hide-menu">Gudang</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="{{url('/admin/gudang/index')}}" class="sidebar-link">
                                        <span class="hide-menu">Daftar Gudang</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{url('/admin/add/gudang')}}" class="sidebar-link">
                                        <span class="hide-menu">Tambah Gudang</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="far fa-list-alt"></i>
                                <span class="hide-menu">Log Admin</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="{{url('/admin/log')}}" class="sidebar-link">
                                        <span class="hide-menu">Daftar Log Admin</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                <i class="fa fa-truck"></i>
                                <span class="hide-menu">Transaksi</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="{{url('/admin/log')}}" class="sidebar-link">
                                        <span class="hide-menu">Daftar Transaksi</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endrole
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->