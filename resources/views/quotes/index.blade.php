@extends('layouts.master')
@section('content')
    <header class="site-header size-lg text-center" style="background-color:#a767d8">
      {{-- background-image: url(img/bg-banner1.jpg) --}}
  <div class="container">
    <div class="col-xs-12">
      <h2>There are <mark>1,200 +</mark>
   Quotes right now!
   <h5 class="font-alt">Search Quotes in one minute</h5>
   <br>
@include('includes.searchform')

 </h2>
    </div>
  </div>
</header>
    <!-- END Site header -->
    <!-- Main container -->
    <main>
      <!-- Recent jobs -->
      <section>
        <div class="container">
          <header class="section-header">
            <h2>Recent Quotes</h2>
          </header>

          <div class="row jobs-details">
            <!-- START JOB DETAILS -->
              <div class="col-xs-12">
              <div class="jobs-block">
                <header>
                  <a href="quotes/modi-sit-consequatur-pariatur-aut-voluptate-est"></a>
                  <div class="hgroup">
                    <h4>
            <a href="quotes/modi-sit-consequatur-pariatur-aut-voluptate-est">Recusandae magni tempore a voluptas dolorem adipisci id.</a>
                    </h4>
                     <div class="spacer-front"></div>
                  </div>
                </header>

               <footer>
              <div class="status"><strong>Posted: &nbsp;<i class="fa fa-clock-o"></i></strong>2 minutes ago &nbsp; By:&nbsp;<a href="author-jobs-details.html">James Mwirigi</a></div>
                  <div class="action-btn">
                    <a class="btn btn-xs btn-info" href="category-details.html">Backend</a>
                  </div>
                </footer>
              </div>
            </div>
          <!-- END JOB DETAILS -->
          </div>

          <br><br>
    <p class="text-center">
      <ul class="pagination" role="navigation">
      <li class="page-item disabled" aria-label="&laquo; Previous">
        <span class="page-link" aria-hidden="true">&lsaquo;</span></li>
          <li class="page-item active" aria-current="page">
            <span class="page-link">1</span></li>
         <li class="page-item">
          <a class="page-link" href="#">2</a></li>
            <li class="page-item">
              <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">
              </a>
            </li>
            </ul>
</p>

        </div>
      </section>
      <!-- END Recent jobs -->
      @include('includes.categories')
@endsection
