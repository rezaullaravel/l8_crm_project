@extends('user.user_master')
@section('title')
Edit Profile
@endsection

@section('content')
<section class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $user->id }}">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name<span class="text-danger">*</span></label>
                          <input type="text" name="name" value="{{$user->name }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone<span class="text-danger"></span></label>
                            <input type="text" name="phone" value="{{$user->phone }}" class="form-control">

                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Image<span class="text-danger"></span></label>
                            <input type="file" name="image"  class="form-control">
                            <img src="{{ $user->image ? asset($user->image) : '' }}" alt="" style="max-width: 80px; margin-top:3px;">

                        </div>


                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
            </div>
          </div>{{-- end row --}}
    </div><!-- /.container-fluid -->
  </section>
@endsection
