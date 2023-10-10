@extends('admin.admin_master')

@section('title')
Details Product
@endsection

@section('content')


 <div class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4 class="text-center">Product Details</h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td>{{ $product->id }}</td>
                                </tr>

                                <tr>
                                    <th>Creator</th>
                                    <td>{{ $product->user->name }}</td>
                                </tr>

                                <tr>
                                    <th>Category</th>
                                    <td>{{ $product->category->category_name }}</td>
                                </tr>

                                <tr>
                                    <th>Brand</th>
                                    <td>{{ $product->brand->brand_name }}</td>
                                </tr>

                                <tr>
                                    <th>Thumbnail</th>
                                    <td>
                                        <img src="{{ asset($product->product_thumbnail) }}" alt="" style="max-width: 200px;">
                                    </td>
                                </tr>

                                <tr>
                                    <th>Multiple Images</th>
                                    <td>
                                        @if ($product->multiImages)
                                          @foreach ($product->multiImages as $image)
                                              <img src="{{ asset($image->product_image) }}" alt="" style="max-width: 80px;">
                                          @endforeach
                                        @else

                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Description</th>
                                    <td>{!! $product->product_description !!}</td>
                                </tr>

                                <tr>
                                    <th>Hot Deals</th>
                                    <td>
                                        @if ($product->hot_deals=='1')
                                         ON
                                        @else
                                          OFF
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Featured</th>
                                    <td>
                                        @if ($product->featured=='1')
                                           ON
                                        @else
                                            OFF
                                        @endif
                                    </td>
                                </tr>

                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if ($product->status=='1')
                                           Active
                                        @else
                                            Deactive
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 @endsection
