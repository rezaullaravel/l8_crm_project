@extends('user.user_master')

@section('title')
Order History
@endsection

@section('content')


 <div class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                {{-- data table --}}
                   <div class="card card-primary">
                      <div class="card-header">
                        <h2 class="card-title">Order History</h2>
                      </div>

                      <div class="card-body">
                        <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-center">Sl</th>
                                    <th class="text-center">Order Total</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Delivery Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($orders as $key => $order)
                                  <tr class="text-center">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $order->order_total }} $</td>
                                    <td>{{ $order->date }}</td>
                                    <td>
                                        @if ($order->status=='1')
                                        <a href="" class="btn btn-success"><span>Delivered</span></a>
                                        @else
                                        <a href="" class="btn btn-danger"><span>Pending</span></a>
                                        @endif
                                    </td>
                                    <td>
                                         <a href="{{ route('user.order.details',$order->id) }}" class="btn btn-success btn-sm" title="Order Details"><i class="fa fa-eye"></i></a>

                                    </td>
                                  </tr>

                               @endforeach
                            </tbody>
                        </table>
                      </div>
                   </div>
                {{-- data table end --}}
            </div>
        </div>
    </div>
 </div>


@endsection
