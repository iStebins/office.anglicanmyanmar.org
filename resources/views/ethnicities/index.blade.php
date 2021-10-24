@extends('layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Ethnicities</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Ethnicities</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">

    <!-- Left side columns -->
    <div class="row col-lg-12">



        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pie Chart</h5>

                    <!-- Pie Chart -->
                    <div id="pieChart" style="min-height: 400px;" class="echart"></div>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            echarts.init(document.querySelector("#pieChart")).setOption({
                                title: {
                                    text: 'Ethnicities',
                                    // subtext: 'Fake Data',
                                    left: 'center'
                                },
                                tooltip: {
                                    trigger: 'item'
                                },
                                legend: {
                                    orient: 'vertical',
                                    left: 'left'
                                },
                                series: [{
                                    name: 'Access From',
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
        </div>

        <!-- Top Selling -->
        <div class="col-lg-6">
            <div class="card top-selling">


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
                    <h5 class="card-title">Ethnicities <span> List</span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">Flag</th>
                                <th scope="col">Name</th>
                                <th scope="col">Staff</th>
                                <th scope="col">Clergy</th>
                                <th scope="col">Clergy + Staff</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ethnicities as $ethinicity)
                            <tr>
                                <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                                <td><a href="#" class="text-primary fw-bold">{{ $ethinicity->name }}</a></td>
                                {{-- {{ $ethinicity->employees->count()->where('role','=','2') }} --}}
                                {{-- @if ($ethinicity->employees->role == 1)
                                    <td>{{ $ethinicity->employees->role->count() }}</td>
                                @elseif ($ethinicity->employees->role == 2)
                                    <td>{{ $ethinicity->employees->role->count() }}</td>
                                @endif --}}

                                
                                <td class="fw-bold">124</td>
                                <td class="fw-bold">124</td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <!-- End Top Selling -->

    </div>

</section>

@endsection
