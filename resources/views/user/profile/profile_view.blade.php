@extends('user.user_master')
@section('title')
User Profile
@endsection

@section('content')
<section class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="card card-primary">
                      <div class="card-body">
                         {{-- profile code --}}
                                <div class="text-center">
                                  <img class="profile-user-img img-fluid img-circle" src="{{ $user->image ? asset($user->image) : asset('admin/dist/img/avatar5.png') }}">
                                </div>

                                <h3 class="profile-username text-center">{{ $user->name }}</h3>

                                {{-- <p class="text-muted text-center">Software Engineer</p> --}}

                                <ul class="list-group list-group-unbordered mb-3">
                                  <li class="list-group-item">
                                    <b>Email</b> <a class="float-right">{{ $user->email }}</a>
                                  </li>
                                  <li class="list-group-item">
                                    <b>Phone</b> <a class="float-right">{{ $user->phone }}</a>
                                  </li>
                                </ul>
                            <!-- /.card -->
                         {{-- profile code end --}}
                      </div>
                      <!-- /.card-body -->
                  </div>
            </div>
          </div>{{-- end row --}}
    </div><!-- /.container-fluid -->
  </section>
@endsection
