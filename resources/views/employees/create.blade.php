@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>Parish</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Add Parish</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section d-flex justify-content-center">
    <div class="col-lg-6 col-sm-12">
      
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add New Parish</h5>

                <!-- General Form Elements -->
                <form action="{{ route('parishes.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control">
                            @error('name')
                              <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">URL Slug</label>
                        <div class="col-sm-10">
                            <input name="slug" type="text" class="form-control">
                            @error('slug')
                              <div class="error text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input name="phone" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputTime" class="col-sm-2 col-form-label">Service Time</label>
                        <div class="col-sm-10">
                            <input value="08:30" name="service_time" type="time" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea name="address" class="form-control" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Congeregation</label>
                        <div class="col-sm-10">
                            <input name="congeregation" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Weekely Attendance</label>
                        <div class="col-sm-10">
                            <input name="weekely_attendance" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Dedication</label>
                        <div class="col-sm-10">
                            <input name="dedication" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Map</label>
                        <div class="col-sm-10">
                            <textarea name="map" class="form-control" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input name="image" class="form-control" type="file" id="formFile">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Diocese</label>
                        <div class="col-sm-10">
                            <select name="diocese_id" class="form-select" aria-label="Default select example">
                                <option value="1" selected>Select Diocese</option>
                                @foreach ($dioceses as $diocese)
                                <option value="{{ $diocese->id }}">{{ $diocese->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">History</label>
                        <div class="col-sm-10">
                            <textarea name="history" class="form-control tinymce-editor" style="height: 100px"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Submit Button</label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                    </div>

                </form><!-- End General Form Elements -->

            </div>
        </div>



    </div>


    </div>
</section>

@endsection
