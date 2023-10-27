<aside class="control-sidebar control-sidebar-dark">
   <a href="{{ route('user.profile') }}" >Profile</a> <br/>
   <a href="{{ route('user.profile.edit') }}" >Profile Edit</a> <br/>
   <a href="" >Password Change</a> <br/>
    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">Logout</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
  </aside>
