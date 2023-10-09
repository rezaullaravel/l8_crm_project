<aside class="control-sidebar control-sidebar-dark">
   <a href="{{ route('admin.profile') }}" >Profile</a> <br/>
   <a href="{{ route('admin.profile.edit') }}" >Profile Edit</a> <br/>
   <a href="{{ route('admin.password.change') }}" >Password Change</a> <br/>
    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">Logout</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
  </aside>
