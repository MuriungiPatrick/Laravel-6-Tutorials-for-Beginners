@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <!-- PROFILE SIDEBAR -->
      @include('includes.profile_sidebar')
<!-- END PROFILE SIDEBAR -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h4>INDEX VIEW</h4></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">JOB TITLE</th>
                        <th colspan="2">ACTIONS</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($jobs as $key => $job)

                        <tr>
                          <td>{{$job->id}}</td>
                          <td>{{$job->job_title}}</td>
                          <td><a href="{{route('dashboard.edit', $job->id)}}" class="btn btn-primary btn-xs">edit</a></td>
                          <td><a href="#" class="btn btn-danger btn-xs">Delete</a></td>
                        </tr>
                      </tbody>
                      @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
