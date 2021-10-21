@extends('layouts.app')

@section('content')
<div class="pagetitle">
    <h1>News</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Edit News</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="col-lg-12 ">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit News</h5>
    
            <!-- General Form Elements -->
            <form action="{{ route('news.update', $new->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                  <input value="{{ $new->title }}" name="title" type="text" class="form-control">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">
                  <img src="{{ asset("images/$new->image") }}" alt="">
                </label>
                <div class="col-sm-10">
                  <input name="image" class="form-control" type="file" id="formFile">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                <div class="col-sm-10 ">
                <!-- TinyMCE Editor -->
                    <textarea name="paragraph" class="tinymce-editor form-control">
                        {{ $new->paragraph }}
                    </textarea>
              <!-- End TinyMCE Editor -->
                </div>
              </div>
    
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Diocese</label>
                <div class="col-sm-10">
                  <select name="diocese_id" class="form-select" aria-label="Default select example">
                    <option selected="">Select Diocese</option>
                    @foreach ($dioceses as $diocese)

                      <option class="text-danger" value="{{ $diocese->id }}"
                        @if ($new->diocese_id == $diocese->id)
                           selected
                        @endif
                      >
                        {{ $diocese->name }}
                      </option>
                      
                    @endforeach
                  </select>
                </div>
              </div>
    
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Button</label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
    
            </form><!-- End General Form Elements -->
    
          </div>
        </div>
    
      </div>
</section>

@endsection
