@extends('hr.dashboard-menu')
@section('title')- Manage Jobs @endsection
@section('current') Manage Jobs @endsection
@section('current-header') Manage Jobs @endsection
@section('manage-jobs-active') active @endsection

@section('dashboard-content')

    <div class="job-alerts-item candidates">
        <h3 class="alerts-title">Manage Jobs <!--<a class="btn btn-success" href="{{route('jobs.create')}}">Post a Job</a>--></h3>
        <table class="table">
            @if(count($jobs)>0)
                <thead class="">
                <tr>
                    <th><p>Job Title</p></th>
                    <th><p># of Applicants</p></th>
                    <th><p>Applicants</p></th>
                    <th><p>Action</p></th>
                </tr>
                </thead>
                <tbody>

                @foreach($jobs as $job)
                    <tr>
                        <td><a href="/jobs/{{$job->id}}"><h3>{{$job->title}}</h3></a></td>
                        <td><span class="badge">1</span></td>
                        <td>
                            <div class="can-img"><a href="#"><img src="{{asset('/img/jobs/candidates.png')}}"></a></div>
                        </td>
                        <td>
                            <a href="/jobs/{{$job->id}}/edit" class="btn btn-primary">Update</a>
                            {!! Form::open(['action'=>['JobsController@destroy',$job->id],'method'=>'POST']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                @else
                    <h4>No Jobs Posted. <a href="{{route('jobs.create')}}" class="btn btn-common">
                            <i class="ti-pencil-alt"></i> Post A Job
                        </a></h4>

                @endif
                </tbody>
        </table>
    </div>

    <!--
    <div class="job-alerts-item candidates">
        <h3 class="alerts-title">Manage Jobs</h3>
        <div class="alerts-list">
            <div class="row">
                <div class="col-md-4">
                    <p class="center">Name</p>
                </div>
                <div class="col-md-1">
                    <p class="center">#</p>
                </div>
                <div class="col-md-5">
                    <p class="center">Applicants</p>
                </div>
                <div class="col-md-2">
                    <p class="center">Action</p>
                </div>
            </div>
        </div>
        <div class="alerts-content">

            <div class="row">
                <div class="col-md-4">
                    <h3>Web Designer</h3>
                </div>
                <div class="col-md-1">
                    <p><span class="badge">1</span></p>
                </div>
                <div class="col-md-5">
                    <div class="can-img"><a href="#"><img src="{{asset('/img/jobs/candidates.png')}}"></a></div>
                </div>
                <div class="col-md-2">
                    <div class="row">
                        <button class="btn btn-block btn-primary">Edit</button>
                    </div>
                    <div class="row">
                        <button class="btn btn-block btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
@endsection