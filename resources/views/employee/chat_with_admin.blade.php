
@extends('admin.admin_master')
@section('title')
Admin And Employee Chat
@endsection
@section('content')
<section class="content">
    @if(Auth::user()->role==1)
          <livewire:chat :userId="$userId" />
	  @else
	    <livewire:chat/>
	  @endif
  </section>
@endsection

{{-- @if(Auth::user()->role==1)
I am admin
@else
I am employee
@endif --}}
