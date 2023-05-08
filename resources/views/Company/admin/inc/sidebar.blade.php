<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-decoration-none">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light ">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-decoration-none">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link">
                        <i class="fa-solid fa-bars"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-user"></i>
                        <p>
                            Admin
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                        <p>
                            Filemanager
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('file.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('file.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-paperclip" aria-hidden="true"></i>
                        <p>
                            Sliders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('slider.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('slider.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                        <p>
                            Abouts
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('about.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        <p>
                            Features
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('feature.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('feature.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                        <p>
                            Blogs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('blog.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        <p>
                            Services
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('service.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('service.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <p>
                            Teams
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('team.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('team.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <p>
                            Testimonials
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('testimonial.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('testimonial.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-user-tie"></i>
                        <p>
                            Clients
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('client.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('client.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-address-card"></i>
                        <p>
                            Portfolios
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('portfolio.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('portfolio.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-scroll"></i>
                        <p>
                            Portfolio Details
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('portfoliodetail.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('portfoliodetail.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-network-wired"></i>
                        <p>
                            Skills
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('skill.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('skill.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-dollar" aria-hidden="true"></i>
                        <p>
                            Pricings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pricing.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pricing.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                        <p>
                            Blogsingles
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('blogsingle.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blogsingle.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p>
                            ContactFrontends
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('contactFrontend.create') }}" class="nav-link">
                                <i class="fa-solid fa-plus"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contactFrontend.index') }}" class="nav-link">
                                <i class="fa-solid fa-table"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
