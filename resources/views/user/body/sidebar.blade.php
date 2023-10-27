

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
      <img src="{{asset('/')}}admin/dist/img/companyLogo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Nexwift 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Auth::user()->image ? asset(Auth::user()->image) : asset('admin/dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          {{-- order start --}}
            <li class="nav-item {{ (request()->is('user/order*')) ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ (request()->is('user/order*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-object-group"></i>
                  <p>
                    Order
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="{{ (request()->is('user/order*')) ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                  <li class="nav-item">
                    <a  href="{{ route('user.order.history') }}"  class=" nav-link {{ (request()->is('user/order/history')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>My Order</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- order end --}}

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

