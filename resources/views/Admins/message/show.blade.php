@extends('layouts.dashboard');

@section('title')
    View Message
@endsection


@section('content')
<div class="row">
    <div class="col-lg-10 m-auto">
        <div class="card">
            <div class="card-header">
                <h4>Show Messages</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>SL</th>
                        <th>Sender Name</th>
                        <th>Sender Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                    @forelse ($messages as $key=> $project )
                         <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$project->name}}</td>
                            <td>{{$project->email}}</td>                        
                            <td>{{$project->subject}}</td>                        
                            <td>{{$project->desp}}</td>                                          
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="mt-2 text-center" ><strong class=" text-danger">No Messages Fount Yet !!</strong></td>
                        </tr>
                    @endforelse ()
                </table>
            </div>
        </div>
    </div>
</div>
@endsection