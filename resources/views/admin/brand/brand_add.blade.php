@extends('admin.admin_master')
@section('title')
Add Brand
@endsection

@section('content')
<section class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Add Brand</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.brand.store') }}" method="POST">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Brand Name<span class="text-danger">*</span></label>
                          <input type="text" name="brand_name" value="{{ old('brand_name') }}" class="form-control"  placeholder="Enter Brand Name">
                          @error('brand_name')
                           <span class="text-danger">{{ $message }}</span>

                          @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Brand Description<span class="text-danger">*</span></label>
                           <textarea name="brand_description"  rows="5" class="form-control" placeholder="Enter Brand Description">{{ old('brand_description') }}</textarea>
                            @error('brand_description')
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
