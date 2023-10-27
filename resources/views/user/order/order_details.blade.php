@extends('user.user_master')

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
                                        <th>Order Date</th>
                                        <td>{{ $order->date }}</td>
                                    </tr>


                                    <tr class="text-center">
                                        <th>Payment Type</th>
                                        <td>{{ $order->payment_type }}</td>
                                    </tr>

                                    <tr class="text-center">
                                        <th>Delivery Status</th>
                                        <td>
                                            @if ($order->status=='1')
                                            <a href="javascript:void(0)" class="btn btn-success"><span>Delivered</span></a>
                                            @else
                                            <a href="javascript:void(0)" class="btn btn-danger"><span>Pending</span></a>
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
                <div class="card card-primary">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>Store House</th>
                                    <th>Product Name</th>
                                    <th>Product Image</th>
                                    <th>Color</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($orderDetails as $detail)
                                    <tr class="text-center">
                                        <td>{{ $detail->product->storehouse->name }}</td>
                                        <td>
                                            {{ $detail->product->product_name }}
                                        </td>

                                        <td>
                                            <img src="{{ asset($detail->product->product_thumbnail) }}" alt="" width="100">
                                        </td>
                                        <td></td>

                                        <td>{{ $detail->product_quantity }}</td>
                                        <td>{{ $detail->product->price }} $</td>

                                    </tr>
                                @endforeach
                            </tbody>

                            <tr>
                                <th>Order Total(Including Shipping Charge)</th>
                                <td colspan="5" style="text-align: right; font-weight:600;">
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
