@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <!-- PROFILE SIDEBAR -->
      @include('includes.profile_sidebar')
<!-- END PROFILE SIDEBAR -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h4>CREATE VIEW</h4></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <form action="dashboard.store" method="post">
                    <div class="form-group">
                      <label for="job_title"><strong>JOB TITLE:</strong></label>
                      <input type="text" class="form-control" name="job_title">
                    </div>
                    <!-- End Job Title -->
                    <div class="form-group">
                      <label for="job_type"><strong>JOB TYPE:</strong></label>
                      <input type="text" class="form-control" name="job_type">
                    </div>
                    <!-- End Job Type -->
                    <div class="form-group">
                      <label for="salary"><strong>SALARY:</strong></label>
                      <input type="text" class="form-control" name="salary">
                    </div>
                    <!-- End Salary-->
                    <div class="form-group">
                      <label for="slug"><strong>SLUG:</strong></label>
                      <input type="text" class="form-control" name="slug">
                    </div>
                    <!-- End Slug -->
                    <div class="form-group">
                      <label for="job_description"><strong>JOB DESCRIPTION:</strong></label>
                      <textarea name="" id="" rows="10" class="form-control"></textarea>
                    </div>
                    <!-- End Job Description -->
                      <button class="btn btn-success" type="submit">Save</button>

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
