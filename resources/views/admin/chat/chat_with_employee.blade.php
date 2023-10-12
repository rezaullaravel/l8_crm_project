@extends('admin.admin_master')
@section('title')
Chat With Employee
@endsection

@section('content')
<section class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Employee List</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                      <div class="card-body">
                        @php
                        $users = App\Models\User::where('role',2)->get();
                        @endphp
                         <ul class="list-group">
                          @foreach( $users as  $user)
                            <li class="list-group-item"><a href="{{route('admin.message.show',$user->id)}}">{{$user->name}}</a></li>
                          @endforeach

                          </ul>
                      </div>
                      <!-- /.card-body -->



                  </div>
            </div>
          </div>{{-- end row --}}
    </div><!-- /.container-fluid -->
  </section>
@endsection
