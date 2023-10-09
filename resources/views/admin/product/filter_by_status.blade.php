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

<script src="{{ asset('/') }}admin/data-table/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}admin/data-table/js/dataTables.bootstrap.min.js"></script>
<script>
    $('#example').DataTable();
 </script>
