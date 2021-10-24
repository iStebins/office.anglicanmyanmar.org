@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Dioceses</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dioceses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="d-flex justify-content-center">

      <!-- Left side columns -->
      <div class="col-lg-8 col-sm-12">
        <div class="row">

          <!-- Dioceses -->
          @foreach ($dioceses as $diocese)
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>View</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">News</a></li>
                  <li><a class="dropdown-item" href="#">Employees</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">{{ $diocese->name }} Diocese</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    {{-- <i class="bi bi-cart"></i> --}}
                    <img src="{{ $diocese->image }}" alt="">
                  </div>
                  <div class="ps-3">
                    <h6> <i class="bi bi-people-fill"></i> {{ $diocese->employees->count() }}</h6>
                    <i class="bi bi-newspaper"></i> <span>News</span> - {{ $diocese->news->count() }}
                    {{-- <span class="text-success small pt-1 fw-bold">Clergy</span> <span class="text-muted small pt-2 ps-1">123</span> : --}}
                    {{-- <span class="text-success small pt-1 fw-bold">News</span> <span class="text-muted small pt-2 ps-1">123 Post</span> --}}
                  </div>
                </div>
              </div>

            </div>
          </div>
          @endforeach
          <!-- End Dioceses -->

        </div>
      </div><!-- End Left side columns -->

      

    </div>
  </section>
@endsection