@extends('layouts.dashboard')


@section('title')
    Add Projects
@endsection

@section('content')

<div class="row">
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header">
                <h4>Show Projects</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Project Name</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($all_projects as $key=> $project)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$project->name}}</td>
                            <td>
                                <img width="80" src="{{asset('uploads/projects')}}/{{$project->photo}}" alt="">
                            </td>
                            <td>
                                <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>

                                <a class="" href="#"><i class="ml-2 fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <h4>Add Projects</h4>
                @if(session('success'))
                    <strong class="text-success">{{session('success')}}</strong>
                @endif
            </div>
            <div class="card-body">
                <form action="{{route('project.insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Project Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                     <div class="mb-3">
                        <label for="link" class="form-label">Porject Link</label>
                        <input type="text" name="link" class="form-control">
                    </div>
                    
                     <div class="mb-3">
                        <label for="photo" class="form-label">Project Image</label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection