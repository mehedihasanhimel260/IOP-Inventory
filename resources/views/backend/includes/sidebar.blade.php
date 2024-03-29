<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin Panel</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('backend/') }}/img/user.jpg" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('categories.index') }}"
                class="nav-item nav-link  {{ request()->routeIs('categories.index', 'categories.edit', 'categories.create') ? 'active' : '' }}"><i
                    class="fa fa-chart-bar me-2"></i>Categoris</a>
            <a href="{{ route('brand.index') }}"
                class="nav-item nav-link  {{ request()->routeIs('brand.index', 'brand.edit', 'brand.create') ? 'active' : '' }}"><i
                    class="fa fa-chart-bar me-2"></i>Brands</a>
            <a href="{{ route('product.index') }}"
                class="nav-item nav-link  {{ request()->routeIs('product.index', 'product.edit', 'product.create') ? 'active' : '' }}"><i
                    class="fa fa-chart-bar me-2"></i>Products</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
