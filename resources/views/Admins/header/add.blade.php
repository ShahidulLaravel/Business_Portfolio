@extends('layouts.dashboard')


@section('title')
    Add Header Info
@endsection

@section('content')

<div class="row">
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header">
                <h4>Show Header Info</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Desiognation</th>
                    </tr>
                    @foreach ($headers as $key=> $header)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td></td>
                            <td>
                                <img width="50" src="{{asset('uploads/headers')}}/{{$header->header_photo}}" alt="">
                            </td>
                            <td></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <h4>Add Header Part</h4>
            </div>
            <div class="card-body">
                <form action="{{route('header.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                     <div class="mb-3">
                        <label for="designation_one" class="form-label">designation one</label>
                        <input type="text" name="designation_one" class="form-control">
                    </div>
                     <div class="mb-3">
                        <label for="designation_two" class="form-label">designation Two</label>
                        <input type="text" name="designation_two" class="form-control">
                    </div>
                     <div class="mb-3">
                        <label for="header_photo" class="form-label">Header Photo</label>
                        <input type="file" name="header_photo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Header</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection