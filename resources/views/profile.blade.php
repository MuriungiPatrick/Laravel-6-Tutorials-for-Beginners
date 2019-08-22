@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <!-- PROFILE SIDEBAR -->
      @include('includes.profile_sidebar')
<!-- END PROFILE SIDEBAR -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}'s Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <form action="index.html" method="post">
                    <div class="form-group">
                      <label for="name"><strong>Name:</strong></label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                    </div>
                    <!-- end Name Input -->
                    <div class="form-group">
                      <label for="email"><strong>Email:</strong></label>
                      <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                    </div>
                    <!-- end Email Input -->
                    <button class="btn btn-primary" type="submit">Update Profile</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
