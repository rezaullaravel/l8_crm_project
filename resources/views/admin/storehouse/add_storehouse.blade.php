@extends('admin.admin_master')
@section('title')
Add Store House
@endsection

@section('content')
<section class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Add Store House</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.storehouse.store') }}" method="POST">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name<span class="text-danger">*</span></label>
                          <input type="text" name="name" value="{{ old('name') }}" class="form-control"  placeholder="Enter store house name">
                          @error('name')
                           <span class="text-danger">{{ $message }}</span>

                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone<span class="text-danger">*</span></label>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control"  placeholder="Enter store house phone number">
                            @error('phone')
                             <span class="text-danger">{{ $message }}</span>

                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Address<span class="text-danger">*</span></label>
                            <textarea name="address"  class="form-control"  placeholder="Enter store house address" rows="4">{{ old('address') }}</textarea>
                            @error('address')
                             <span class="text-danger">{{ $message }}</span>

                            @enderror
                          </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
            </div>
          </div>{{-- end row --}}
    </div><!-- /.container-fluid -->
  </section>
@endsection
