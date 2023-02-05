@extends('layouts.dashboard')

@section('title')
    Admin Dashboard
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>Welcome Back, {{Auth::user()->name}}</h4>
                </div>

                <div class="card-body">
                    <div class="mb-3 avatar avatar-xl">

                    @if(Auth::user()->photo == null)
                      <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" />
                    @else
                      <img style="width: 140px; height:140px;" src="{{asset('uploads/users/')}}/{{Auth::user()->photo}}" alt="..." class="avatar-img rounded-circle">
                    @endif

                  </div>
                    <h5>This is Your Admin Dashboard</h5>
                    <span>Email- </span><strong>{{Auth::user()->email}}</strong>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
