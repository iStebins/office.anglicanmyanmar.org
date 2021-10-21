@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>News</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Add News</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section d-flex justify-content-center">
    <div class="col-lg-6 col-sm-12">

      <div class="card ">
        <div class="card-body">
          <h5 class="card-title">New Magazine</h5>

          <!-- Floating Labels Form -->
          <form action="{{ route('magazines.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
              <div class="form-floating">
                <input name="edition" type="number" class="form-control" id="floatingZip" placeholder="Edition">
                <label for="floatingZip">Edition Number</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input name="issue" type="number" class="form-control" id="floatingZip" placeholder="Issue">
                <label for="floatingZip">Issue Number</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input name="date" class="form-control" type="date">
                <label for="floatingTextarea">Date</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="">
                <label for="floatingPassword">Cover Photo</label>
                <input class="form-control" type="file" name="image">
              </div>
            </div>
            <div class="col-md-12">
              <div class="">
                <label for="floatingPassword">File</label>
                <input class="form-control" type="file" name="file">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End floating Labels Form -->

        </div>
      </div>

    </div>

    
      </div>
</section>

@endsection
