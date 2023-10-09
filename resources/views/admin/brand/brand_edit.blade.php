@extends('admin.admin_master')
@section('title')
Edit Brand
@endsection

@section('content')
<section class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit Brand</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.brand.update') }}" method="POST">
                        @csrf

                     <input type="hidden" name="id" value="{{ $brand->id }}">

                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Brand Name<span class="text-danger">*</span></label>
                          <input type="text" name="brand_name" value="{{ $brand->brand_name }}" class="form-control">
                          @error('brand_name')
                           <span class="text-danger">{{ $message }}</span>

                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand Description<span class="text-danger">*</span></label>
                           <textarea name="brand_description"  rows="5" class="form-control">{{ $brand->brand_description}}</textarea>
                            @error('brand_description')
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
