<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- user panel-->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
  <!-- /.user panel-->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">PRODUCT MANAGEMENT</li>

          <!-- Brands -->
          <li class="nav-item has-treeview">
            <a href="{{route('brands.manage')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Brands
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('brands.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Brands</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('brands.manage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Brands</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Category -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category.manage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Categories</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Products -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('product.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('product.manage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Product</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">LOCATION MANAGER</li>

          <!-- Divisions -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              All Divisions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('division.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Divisions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('division.manage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Divisions</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Districts -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              All Districts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('district.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create District</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('district.manage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Districts</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">WEBSITE MANAGER</li>

          <!-- Slider -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Home Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('slider.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('slider.manage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Sliders</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>