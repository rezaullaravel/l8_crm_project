@extends('admin.admin_master')

@section('title')
Selling History
@endsection

@section('content')


 <div class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                {{-- data table --}}
                <h2 class="text-center mb-2" style="font-weight:600;">State Wise Product Selling History.</h2>
                   <div class="card card-primary">
                      <div class="card-header">
                        <h2 class="card-title">State: {{ $state->state_name }}</h2>
                      </div>

                      <div class="card-body">
                        <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-center">Sl</th>
                                    <th class="text-center">Selling Amount</th>
                                    <th class="text-center">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                               @foreach ($orders as $key => $order)
                                  <tr class="text-center">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $order->order_total }} $</td>
                                    <td>{{ $order->date }}</td>
                                  </tr>

                                  @php
                                      $total = $total + $order->order_total;
                                  @endphp
                               @endforeach
                            </tbody>

                            <tbody>
                                <tr>
                                    <th colspan="2">Total</th>
                                    <td style="text-align: center; font-weight:bold;">{{ $total }} $</td>
                                   </tr>
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
