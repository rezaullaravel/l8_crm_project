
@if(Auth::user()->role==1)
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin/dashboard') }}" class="brand-link">
      <img src="{{asset('/')}}admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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

          {{-- category start --}}
            <li class="nav-item {{ (request()->is('admin/category*')) ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ (request()->is('admin/category*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-object-group"></i>
                  <p>
                    Category
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="{{ (request()->is('admin/category*')) ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                  <li class="nav-item">
                    <a  href="{{ route('admin.category.add') }}"  class=" nav-link {{ (request()->is('admin/category/add')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.category.manage') }}" class="nav-link {{ (request()->is('admin/category/manage')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Category</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- category end --}}

              {{-- brand start --}}
              <li class="nav-item {{ (request()->is('admin/brand*')) ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ (request()->is('admin/brand*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-object-group"></i>
                  <p>
                    Brand
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="{{ (request()->is('admin/brand*')) ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                  <li class="nav-item">
                    <a  href="{{ route('admin.brand.add') }}"  class=" nav-link {{ (request()->is('admin/brand/add')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Brand</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.brand.manage') }}" class="nav-link {{ (request()->is('admin/brand/manage')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Brand</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- brand end --}}


              {{-- store house start --}}
              <li class="nav-item {{ (request()->is('admin/storehouse*')) ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ (request()->is('admin/storehouse*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-object-group"></i>
                  <p>
                    Store House
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="{{ (request()->is('admin/storehouse*')) ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                  <li class="nav-item">
                    <a  href="{{ route('admin.storehouse.add') }}"  class=" nav-link {{ (request()->is('admin/storehouse/add')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Store House</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.storehouse.manage') }}" class="nav-link {{ (request()->is('admin/storehouse/manage')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Store House</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- store house end --}}


              {{-- product start --}}
              <li class="nav-item {{ (request()->is('admin/product*')) ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ (request()->is('admin/product*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-object-group"></i>
                  <p>
                    Product
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="{{ (request()->is('admin/product*')) ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                  <li class="nav-item">
                    <a  href="{{ route('admin.product.add') }}"  class=" nav-link {{ (request()->is('admin/product/add')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Product</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.product.manage') }}" class="nav-link {{ (request()->is('admin/product/manage')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage Product</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- product end --}}


              {{-- state start --}}
              <li class="nav-item {{ (request()->is('admin/state*')) ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ (request()->is('admin/state*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-object-group"></i>
                  <p>
                   State
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="{{ (request()->is('admin/state*')) ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                  <li class="nav-item">
                    <a  href="{{ route('admin.state.add') }}"  class=" nav-link {{ (request()->is('admin/state/add')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add State</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.state.manage') }}" class="nav-link {{ (request()->is('admin/state/manage')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Manage State</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- state end --}}


              {{-- chat with employee start --}}
              <li class="nav-item {{ (request()->is('admin/chat*')) ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ (request()->is('admin/chat*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-object-group"></i>
                  <p>
                    Chat
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="{{ (request()->is('admin/chat*')) ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                  <li class="nav-item">
                    <a  href="{{ route('admin.chat.employee') }}"  class=" nav-link {{ (request()->is('admin/chat/employee')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Chat With Employee</p>
                    </a>
                  </li>

                </ul>
              </li>
              {{-- chat with employee end --}}


              {{-- order history start --}}
              <li class="nav-item {{ (request()->is('admin/order*')) ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ (request()->is('admin/order*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-solid fa-object-group"></i>
                  <p>
                    Order
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="{{ (request()->is('admin/order*')) ? 'display:block; overflow:hidden;' : 'display:none; overflow:hidden;' }} ">
                  <li class="nav-item">
                    <a  href="{{ route('admin.order.history') }}"  class=" nav-link {{ (request()->is('admin/order/history')) ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Order/Delivery History</p>
                    </a>
                  </li>
                </ul>
              </li>
              {{-- order history end --}}


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  @endif
