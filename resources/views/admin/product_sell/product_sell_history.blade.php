@extends('admin.admin_master')
@section('title')
Product Selling History
@endsection

<style>
.stateButton i{
    margin-right: 10px;
}
</style>

@section('content')
<section class="content">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Product Selling History</h3>
                    </div>
                    <div class="card-body">
                        <div class="row stateButton">
                            <div class="col-sm-6">
                                <a href="{{ route('statewise.sell') }}" class="btn btn-primary"><i class="fas fa-solid fa-arrow-right"></i>State Wise Selling History</a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('datewise.sell') }}" class="btn btn-success"><i class="fas fa-solid fa-arrow-right"></i>Date Wise Selling History</a>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
          </div>{{-- end row --}}
    </div><!-- /.container-fluid -->
  </section>
@endsection
