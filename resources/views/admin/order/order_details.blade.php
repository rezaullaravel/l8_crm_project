@extends('admin.admin_master')

@section('title')
Order Details
@endsection

@section('content')


 <div class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                {{-- data table --}}
                   <div class="card card-primary">
                      <div class="card-header">
                        <h2 class="card-title">Order Details</h2>
                      </div>

                      <div class="card-body">
                        <table  class="table table-striped table-bordered table-sm" style="width:100%">
                            <tbody>

                                    <tr class="text-center">
                                        <th>Customer Name</th>
                                        <td>{{ $order->customer_name }}</td>
                                    </tr>

                                    <tr class="text-center">
                                        <th>Phone</th>
                                        <td>{{ $order->c_phone }}</td>
                                    </tr>

                                    <tr class="text-center">
                                        <th>Email</th>
                                        <td>{{ $order->c_email }}</td>
                                    </tr>

                                    <tr class="text-center">
                                        <th>State</th>
                                        <td>{{ $order->c_state }}</td>
                                    </tr>

                                    <tr class="text-center">
                                        <th>City</th>
                                        <td>{{ $order->c_city }}</td>
                                    </tr>

                                    <tr class="text-center">
                                        <th>Zip Code</th>
                                        <td>{{ $order->c_zipcode }}</td>
                                    </tr>

                                    <tr class="text-center">
                                        <th>Shipping Address</th>
                                        <td>{{ $order->c_shipping_address }}</td>
                                    </tr>

                                    <tr class="text-center">
                                        <th>Payment Type</th>
                                        <td>{{ $order->payment_type }}</td>
                                    </tr>

                                    <tr class="text-center">
                                        <th>Delivery Status</th>
                                        <td>
                                            @if ($order->status=='1')
                                                <span class="text-success">Delivered</span>
                                            @else
                                            <span class="text-danger">Pending</span>
                                            @endif
                                        </td>
                                    </tr>



                            </tbody>
                        </table>
                      </div>
                   </div>
                {{-- data table end --}}
            </div>
        </div>{{-- end row --}}

        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Color</th>
                                    <th>Store House</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($orderDetails as $detail)
                                    <tr class="text-center">
                                        <td>
                                            {{ $detail->product->product_name }}
                                        </td>

                                        <td>
                                            <img src="{{ asset($detail->product->product_thumbnail) }}" alt="" width="100">
                                        </td>

                                        <td>{{ $detail->product_quantity }}</td>
                                        <td>{{ $detail->product->price }} $</td>
                                        <td></td>
                                        <td>{{ $detail->product->storehouse->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tr>
                                <th>Order Total(Including Shipping Charge)</th>
                                <td colspan="3">
                                    {{ $order->order_total }} $
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>{{-- end row --}}
    </div>
 </div>


@endsection
