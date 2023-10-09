@extends('admin.admin_master')
@section('title')
Add Product
@endsection


@section('content')
<section class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Add Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                         <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Category <span class="text-danger">*</span></label>
                                    <select name="category_id" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>

                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Brand <span class="text-danger">*</span></label>
                                    <select name="brand_id" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->brand_name}}</option>
                                        @endforeach
                                    </select>

                                    @error('brand_id')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>
                            </div>
                         </div>{{-- end row --}}

                         <div class="row mt-3">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input type="text" name="product_name" value="{{ old('product_name') }}" class="form-control">

                                    @error('product_name')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Thumbnail <span class="text-danger">*</span></label>
                                    <input type="file" name="product_thumbnail" class="form-control" onchange="thumbImgUrl(this)">

                                    @error('product_thumbnail')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror

                                    <img src="" id="thumbnailImage" style="margin-top: 5px;">
                                </div>
                            </div>
                         </div>{{-- end row --}}

                         <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label> Description <span class="text-danger">*</span></label>

                                    @error('product_description')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                    <textarea name="product_description" id="description_editor" rows="10">{{ old('product_description') }}</textarea>

                                </div>
                            </div>
                         </div>{{-- end row --}}


                         <div class="row mt-3">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Multiple Images <span class="text-danger">*</span></label>
                                    <input type="file" name="images[]" multiple class="form-control" id="multiImg">

                                    @error('images')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror

                                    <div class="row mt-3" id="preview_img"></div>
                                </div>
                            </div>
                         </div>{{-- end row --}}


                         <div class="row mt-3">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label> Price <span class="text-danger">*</span></label>
                                    <input type="text" name="price" class="form-control">

                                    @error('price')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Featured <span class="text-danger">*</span></label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="featured" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      ON
                                    </label>
                                  </div>

                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="featured" value="0" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      OFF
                                    </label>
                                  </div>

                                  @error('featured')
                                  <span class="text-danger">{{ $message }}</span>

                                  @enderror
                            </div>
                         </div>{{-- end row --}}


                         <div class="row mt-3">
                            <div class="col-sm-6">
                                <label> Hot Deals <span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="hot_deals" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      ON
                                    </label>
                                  </div>

                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="hot_deals" value="0" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      OFF
                                    </label>
                                  </div>

                                  @error('hot_deals')
                                  <span class="text-danger">{{ $message }}</span>

                                  @enderror
                            </div>

                            <div class="col-sm-6">
                                <label> Status <span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status" value="1" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      Active
                                    </label>
                                  </div>

                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status" value="0" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      Deactive
                                    </label>
                                  </div>

                                  @error('status')
                                  <span class="text-danger">{{ $message }}</span>

                                  @enderror
                            </div>
                         </div>{{-- end row --}}


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

   {{-- ck editor using cdn --}}
   <script src="https://cdn.ckeditor.com/4.22.1/standard-all/ckeditor.js"></script>
   <script type="text/javascript">
      CKEDITOR.replace('description_editor');
  </script>
  {{-- ck editor end --}}




  {{-- js for product thumbnail image preview --}}
  <script type="text/javascript">
    function thumbImgUrl(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e){
        $('#thumbnailImage').attr('src',e.target.result).width(300).height(200);
        };
        reader.readAsDataURL(input.files[0]);
    }
    }
</script>
  {{-- js for product thumbnail image preview end --}}


  {{-- js for product multiple image preview --}}
  <script>

    $(document).ready(function(){
     $('#multiImg').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                    .height(80); //create image element
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });

    </script>
  {{-- js for product multiple image preview end --}}


@endsection






