@extends('layouts.app')

@section('content')

<div class="pagetitle">
    <h1>News</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">News</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="{{ $church->image ? asset("images/$church->image") : asset("assets/img/logo.png") }}"
                        class="card-img-top" alt="...">

                    {{-- <h2>{{ $church->name }}</h2> --}}
                </div>
            </div>

        </div>

        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">{{ $church->name }}</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">URL Slug</div>
                                <div class="col-lg-9 col-md-8">{{ $church->slug }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Clergy</div>
                                <div class="col-lg-9 col-md-8">
                                    @foreach ($church->employees as $clergy)
                                    @if ($clergy->role >= 2)
                                    <p>{{ $clergy->name }}</p>
                                    @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">{{ $church->email }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8">{{ $church->phone }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Service Time</div>
                                <div class="col-lg-9 col-md-8">{{ $church->service_time }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Diocese</div>
                                <div class="col-lg-9 col-md-8">{{ $church->diocese->name }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Congeregation</div>
                                <div class="col-lg-9 col-md-8">{{ $church->congeregation }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Weekely Attendance</div>
                                <div class="col-lg-9 col-md-8">{{ $church->weekely_attendance }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Dedication</div>
                                <div class="col-lg-9 col-md-8">{{ $church->dedication }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address</div>
                                <div class="col-lg-9 col-md-8">{{ $church->address }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Map</div>
                                <div class="col-lg-9 col-md-8">
                                    <iframe
                                        src="{{ $church->map ? $church->map : 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.734559851208!2d96.1380060154333!3d16.78987672417998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ebc2bcfec36b%3A0xa0630639bac67b1c!2sThe%20church%20of%20the%20province%20of%20Myanmar!5e0!3m2!1sen!2smm!4v1634832931571!5m2!1sen!2smm' }}"
                                        width="100%" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>


                            <h5 class="card-title">History</h5>
                            <p class="small fst-italic">{!! $church->history !!}</p>


                        </div>




                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>


@endsection
