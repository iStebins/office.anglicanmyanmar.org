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

<section class="section dashboard">
    <div class="row">

        @foreach ($news as $new)

        <div class="col-lg-3 col-sm-12">
            <div class="card">
                <img src="{{ $new->image ? asset("images/$new->image") : asset("assets/img/logo.png") }}"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $new->title }}</h5>

                    <p class="card-text">
                        <i class="bx bxs-calendar"></i>
                        {{ $new->created_at }}
                        <span class="badge rounded-pill bg-primary">{{ $new->diocese->name }}</span>
                    </p>

                    <div class="d-flex justify-content-around py-2">

                        <a href="{{ route('news.show', $new->id) }}" class="btn btn-primary"> <i
                                class="bx bx-detail"></i> View</a>

                        <a href="{{ route('news.edit',$new->id) }}" class="btn btn-warning"> <i class="bx bxs-edit"></i>
                            Edit</a>


                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm{{ $new->id }}">
                            <i class="bx bxs-trash"></i> Delete
                          </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="confirm{{ $new->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-warning">Confirm ?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure want to <span class="text-danger"><i class="bx bxs-trash"></i>  DELETE</span> {{ $new->title  }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-danger"><i class="bx bxs-trash"></i> Delete</button> --}}
                        <form action="{{ route('news.destroy', $new->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bx bxs-trash"></i> Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End Vertically centered Modal-->

        @endforeach

    </div>

   


    <div class="container">
        {{ $news->links('vendor.pagination.custom') }}
        {{-- {{ $news->links('vendor.pagination.bootstrap-4') }} --}}
    </div>

</section>

@endsection
