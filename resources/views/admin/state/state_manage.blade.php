@extends('admin.admin_master')

@section('title')
Manage State
@endsection

@section('content')


 <div class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-10 offset-sm-1">
                {{-- data table --}}
                   <div class="card card-primary">
                      <div class="card-header">
                        <h2 class="card-title">State List</h2>
                      </div>

                      <div class="card-body">
                        <table id="example" class="table table-striped table-bordered table-sm" style="width:100%">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-center">Sl</th>
                                    <th class="text-center">State Name</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($states as $key => $state)
                                  <tr class="text-center">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $state->state_name }}</td>
                                    <td>
                                        <a href="{{ route('admin.state.edit',$state->id) }}" class="btn btn-success btn-sm" title="edit"><i class="fa fa-pen"></i></a>
                                        <a href="{{ route('admin.state.delete',$state->id) }}" class="btn btn-danger btn-sm" onclick="confirmation(event)" title="delete"><i class="fa fa-trash"></i></a>
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
