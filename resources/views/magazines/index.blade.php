@extends('layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Magazines</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Magazines</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Magazines</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($magazines as $magazine)

                <tr>
                    <th scope="row">{{ $magazine->edition }} / {{ $magazine->issue }}</th>
                    <td>{{ $magazine->date }}</td>
                    <td>
                        <a target="_" href="{{ asset("documents/$magazine->file") }}" class="btn btn-primary"> <i
                            class="bx bx-detail"></i> View</a>

                    {{-- <a href="{{ route('magazines.edit',$magazine->id) }}" class="btn btn-warning"> <i class="bx bxs-edit"></i>
                        Edit</a> --}}


                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm{{ $magazine->id }}">
                        <i class="bx bxs-trash"></i> Delete
                      </button>
                    </td>
                  </tr>

                  <div class="modal fade" id="confirm{{ $magazine->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-warning">Confirm ?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to <span class="text-danger"><i class="bx bxs-trash"></i>  DELETE</span> {{ $magazine->date  }} Magazine?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-danger"><i class="bx bxs-trash"></i> Delete</button> --}}
                                <form action="{{ route('magazines.destroy', $magazine->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bx bxs-trash"></i> Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- End Vertically centered Modal-->
        
                @endforeach

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>


@endsection
