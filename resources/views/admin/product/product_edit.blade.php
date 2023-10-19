@extends('admin.admin_master')
@section('title')
Edit Product
@endsection

@section('content')
<section class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.product.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $product->id }}">
                      <div class="card-body">
                         <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Category <span class="text-danger">*</span></label>
                                    <select name="category_id" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id==$product->category_id ? 'selected': '' }}>{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>

                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Brand <span class="text-danger">*</span></label>
                                    <select name="brand_id" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : '' }}>{{ $brand->brand_name}}</option>
                                        @endforeach
                                    </select>

                                    @error('brand_id')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Store House <span class="text-danger">*</span></label>
                                    <select name="storehouse_id" class="form-control">
                                        <option value="" selected disabled>Select</option>
                                        @foreach ($storehouses as $house)
                                            <option value="{{ $house->id }}" {{ $product->storehouse_id==$house->id ? 'selected' :'' }}>{{ $house->name}}</option>
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
                                    <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control">

                                    @error('product_name')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Thumbnail <span class="text-danger">*</span></label>
                                    <input type="file" name="product_thumbnail" class="form-control" onchange="thumbImgUrl(this)">

                                    <img src="{{ $product->product_thumbnail  ? asset($product->product_thumbnail ) : ''  }}" id="thumbnailImage" style="margin-top: 5px; max-width:100px; max-height:100px;">
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
                                    <textarea name="product_description" id="description_editor">{{ $product->product_description }}</textarea>

                                </div>
                            </div>
                         </div>{{-- end row --}}


                         <div class="row mt-3">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Multiple Images <span class="text-danger">*</span></label>
                                    <input type="file" name="images[]" multiple class="form-control" id="multiImg">


                                       <div class="mt-3">
                                        @if ($product->multiImages)

                                        <div class="row">
                                            @foreach ($product->multiImages as $image)
                                            <div class="col-md-3">
                                                <div class="product-image">
                                                    <img src="{{ asset($image->product_image) }}" alt="" style="max-width: 80px; margin-left:3px;">
                                                    <br>
                                                    <a href="{{ route('admin.product-image.delete',$image->id) }}" class="btn btn-danger mt-2">Remove</a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                      @else

                                      @endif
                                       </div>


                                </div>
                            </div>
                         </div>{{-- end row --}}


                         <div class="row mt-3">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label> Price <span class="text-danger">*</span></label>
                                    <input type="text" name="price" value="{{ $product->price }}" class="form-control">

                                    @error('price')
                                    <span class="text-danger">{{ $message }}</span>

                                    @enderror

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label> Featured <span class="text-danger">*</span></label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="featured" value="1" {{ $product->featured == 1 ? 'checked'  : '' }} id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      ON
                                    </label>
                                  </div>

                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="featured" value="0" {{ $product->featured == 0 ? 'checked'  : '' }}  id="defaultCheck1">
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
                                    <input class="form-check-input" type="checkbox" name="hot_deals" value="1" {{ $product->hot_deals == 1 ? 'checked'  : '' }}  id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      ON
                                    </label>
                                  </div>

                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="hot_deals" value="0" {{ $product->hot_deals == 0 ? 'checked'  : '' }}  id="defaultCheck1">
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
                                    <input class="form-check-input" type="checkbox" name="status" value="1" {{ $product->status == 1 ? 'checked'  : '' }} id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      Active
                                    </label>
                                  </div>

                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status" value="0" {{ $product->status == 0 ? 'checked'  : '' }} id="defaultCheck1">
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
                        <button type="submit" class="btn btn-primary">Update</button>
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


  {{-- js for refresh page and keep scroll position --}}
  <script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
</script>
  {{-- js for refresh page and keep scroll position end --}}


@endsection






