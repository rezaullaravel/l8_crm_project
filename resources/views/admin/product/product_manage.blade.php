@extends('admin.admin_master')

@section('title')
Manage Product
@endsection

@section('content')


 <div class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-12">
                {{-- data table --}}
                   <div class="card card-primary">
                      <div class="card-header">
                        <h2 class="card-title">Product List</h2>
                      </div>


                      <div class="row">
                        <div class="col-sm-6 p-4">
                            <label>Product Filter with Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="" selected disabled>Select</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="col-sm-6 p-4">
                            <label>Product Filter with Status</label>
                            <select name="status" id="status"  class="form-control">
                                <option value="" selected disabled>Select</option>
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>

                            </select>
                        </div>
                      </div>{{-- end row --}}

                      <div class="card-body">
                        <div class="filter_result">
                            <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th class="text-center">Sl</th>
                                        <th class="text-center">Creator</th>
                                        <th class="text-center">Category</th>
                                        <th class="text-center">Brand</th>
                                        <th class="text-center">Thumbnail</th>
                                        <th class="text-center">Hot Deals</th>
                                        <th class="text-center">Featured</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($products as $key => $product)
                                    <tr class="text-center">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $product->user->name }}</td>
                                        <td>{{ $product->category->category_name }}</td>
                                        <td>{{ $product->brand->brand_name }}</td>
                                        <td>
                                            <img src="{{ asset($product->product_thumbnail) }}" alt="" width="100">
                                        </td>
                                        <td>
                                            @if ($product->hot_deals=='1')
                                            <span class="btn text-success">ON</span>
                                            @else
                                            <span class="btn text-danger">OFF</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($product->featured=='1')
                                            <span class="btn text-success">ON</span>
                                            @else
                                            <span class="btn text-danger">OFF</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($product->status=='1')
                                                <a href="{{ route('admin.product.deactive',$product->id) }}" class="btn btn-success btn-sm" title="Deactive it">Active</a>
                                            @else
                                                <a href="{{ route('admin.product.active',$product->id) }}" class="btn btn-danger btn-sm" title="Active it">Deactive</a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{-- route('admin.category.edit',$category->id) --}}" class="btn btn-success btn-sm" title="edit"><i class="fa fa-pen"></i></a>
                                            <a href="{{-- route('admin.category.delete',$category->id) --}}" class="btn btn-danger btn-sm" onclick="confirmation(event)" title="delete"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                      </div>
                   </div>
                {{-- data table end --}}
            </div>
        </div>
    </div>
 </div>


 {{-- product filter by status --}}
 <script>
    $(document).ready(function(){
        $('#status').on('change',function(){
            let status = $(this).val();
            //alert(status);

            $.ajax({
                url:'/admin/product/filter/by-status',
                method:'GET',
                data:{status:status},
                success:function(data){

                    $('.filter_result').html(data);

                    if(data.status=='No data found'){
                        $('.filter_result').html('<h3 class="text-danger text-center" style="font-weight:bold;">'+'No data found.......'+'</h3>');
                    }

                },error:function(error){
                    alert('fail');
                }
            });
        })
    });
 </script>
 {{-- product filter by status end --}}


 {{-- product filter by category --}}
 <script>
    $(document).ready(function(){
        $('#category_id').on('change',function(){
            let category_id = $(this).val();
            //alert(category_id);

            $.ajax({
                url:'/admin/product/filter/by-category',
                method:'GET',
                data:{category_id:category_id},
                success:function(data){

                    $('.filter_result').html(data);

                    if(data.status=='No data found'){
                        $('.filter_result').html('<h3 class="text-danger text-center" style="font-weight:bold;">'+'No data found.......'+'</h3>');
                    }

                }
            });
        })
    });
 </script>

 {{-- product filter by category end --}}

@endsection
