@extends('layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

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

                <div class="row">
                    {{-- left --}}
                    <div class="col-lg-4 col-sm-12">

                        <div class="card" id="magazines">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                    
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                    
                            <div class="card-body">
                                <h5 class="card-title">Magazines <span>| Latest</span></h5>
                    
                                <div class="activity">
                    
                                    @foreach ($magazines as $magazine)
                                    <div class="activity-item d-flex">
                                        <div class="activite-label"><a target="_"
                                                href="{{ $magazine->file ? asset("documents/$magazine->file") : '#' }}">{{ $magazine->edition }}
                                                / {{ $magazine->issue }}</a></div>
                                        <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                        <div class="activity-content">
                                            {{-- Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae --}}
                                            {{ $magazine->date }}
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End item-->
                                </div>
                            </div>
                        </div>
                        {{-- End Magazines --}}
                    
                        <div class="card" id="departments">
                            <div class="card-body">
                                <h5 class="card-title">Departments</h5>
                    
                                <!-- Table with stripped rows -->
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($departments as $department)
                                        <tr>
                                            <th scope="row">{{ $department->id }}</th>
                                            <td>{{ $department->name }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                    
                            </div>
                        </div>
                        {{-- End Departments --}}

                    </div>

                    {{-- center --}}
                    <div class="col-lg-8 col-sm-12">
                        <div class="card" id="ethnicities">
                            <div class="card-body">
                                <h5 class="card-title">Ethnicities</h5>
                    
                                <!-- Pie Chart -->
                                <div id="pieChart" style="min-height: 400px;" class="echart"></div>
                    
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#pieChart")).setOption({
                                            // title: {
                                            //     text: 'Ethnicities',
                                            //     subtext: 'Fake Data',
                                            //     left: 'center'
                                            // },
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            legend: {
                                                orient: 'vertical',
                                                left: 'left'
                                            },
                                            series: [{
                                                name: 'Ethnicity',
                                                type: 'pie',
                                                radius: '50%',
                                                data: [
                                                    @foreach($ethnicities as $ethinicity) {
                                                        value: 735,
                                                        name: "{{ $ethinicity->name }}"
                                                    },
                                                    @endforeach
                                                ],
                                                emphasis: {
                                                    itemStyle: {
                                                        shadowBlur: 10,
                                                        shadowOffsetX: 0,
                                                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                                                    }
                                                }
                                            }]
                                        });
                                    });
                    
                                </script>
                                <!-- End Pie Chart -->
                            </div>
                        </div>
                        {{-- End Ethnicities --}}
                    
                        <div class="card" id="male-female">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                    
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                    
                            <div class="card-body pb-0">
                                <h5 class="card-title">Male | Female</h5>
                    
                                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
                    
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        echarts.init(document.querySelector("#trafficChart")).setOption({
                                            tooltip: {
                                                trigger: 'item'
                                            },
                                            legend: {
                                                top: '5%',
                                                left: 'center'
                                            },
                                            series: [{
                                                name: 'Access From',
                                                type: 'pie',
                                                radius: ['40%', '70%'],
                                                avoidLabelOverlap: false,
                                                label: {
                                                    show: false,
                                                    position: 'center'
                                                },
                                                emphasis: {
                                                    label: {
                                                        show: true,
                                                        fontSize: '18',
                                                        fontWeight: 'bold'
                                                    }
                                                },
                                                labelLine: {
                                                    show: false
                                                },
                                                data: [{
                                                        value: 1048,
                                                        name: 'Male'
                                                    },
                                                    {
                                                        value: 735,
                                                        name: 'Female'
                                                    },
                                                ]
                                            }]
                                        });
                                    });
                    
                                </script>
                    
                            </div>
                        </div>
                        {{-- End Male | Female --}}
                    </div>
                </div>

            </div>


        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4 col-sm-12">

            <div class="card" id="news">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>
        
                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>
        
                <div class="card-body pb-0">
                    <h5 class="card-title">News <span>| Latest</span></h5>
        
                    <div class="news">
                        @foreach ($news as $new)
                        <div class="post-item clearfix">
                            <img src="{{ $new->image ? asset("images/$new->image") : asset("assets/img/logo.png") }}" alt="">
                            <h4><a href="{{ route('news.show', $new->id) }}">{{ $new->title }}</a></h4>
                            <p class="card-text">
                                <i class="bx bxs-calendar"></i>
                                {{ $new->created_at->diffForHumans() }}
                                <span class="badge rounded-pill bg-primary">{{ $new->diocese->name }}</span>
                            </p>
                        </div>
                        @endforeach
        
                    </div><!-- End sidebar recent posts-->
        
                </div>
            </div>
            {{-- End News --}}
        
            <div class="card" id="positions">
                <div class="card-body">
                    <h5 class="card-title">Positions</h5>
        
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($positions as $position)
                            <tr>
                                <th scope="row">{{ $position->id }}</th>
                                <td>{{ $position->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
            {{-- End Positions --}}

        </div><!-- End Right side columns -->

    </div>
</section>

@endsection
