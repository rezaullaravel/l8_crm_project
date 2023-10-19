@extends('admin.admin_master')
@section('title')
Edit Store House
@endsection

@section('content')
<section class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit Store House</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.storehouse.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $storehouse->id }}">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name<span class="text-danger">*</span></label>
                          <input type="text" name="name" value="{{ $storehouse->name }}" class="form-control">
                          @error('name')
                           <span class="text-danger">{{ $message }}</span>

                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone<span class="text-danger">*</span></label>
                            <input type="text" name="phone" value="{{ $storehouse->phone }}" class="form-control">
                            @error('phone')
                             <span class="text-danger">{{ $message }}</span>

                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Address<span class="text-danger">*</span></label>
                            <textarea name="address"  class="form-control"  placeholder="Enter store house address" rows="4">{{ $storehouse->address}}</textarea>
                            @error('address')
                             <span class="text-danger">{{ $message }}</span>

                            @enderror
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
