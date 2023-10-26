@extends('admin.admin_master')
@section('title')
State Wise Product Selling History
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
                      <h3 class="card-title">State Wise Product Selling History</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('statewise.sell.index') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>State</label>
                                <select name="c_state" class="form-control" required>
                                    <option value="" selected disabled>Select</option>
                                     @foreach ($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                     @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label>From</label>
                                <input type="date" name="from" class="form-control" required>

                            </div>

                            <div class="form-group">
                                <label>To</label>
                                <input type="date" name="to" class="form-control" required>

                            </div>

                            <div class="form-group">
                                <input type="submit" value="Search" class="btn btn-primary btn-block">

                            </div>
                        </form>
                    </div>
                  </div>
            </div>
          </div>{{-- end row --}}
    </div><!-- /.container-fluid -->
  </section>
@endsection
