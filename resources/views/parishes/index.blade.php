@extends('layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Parishes</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Parishes</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card"> 
          <div class="card-body">
            <h5 class="card-title">Parishes</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Diocese</th>
                  <th scope="col">Clergy</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($parishes as $parish)

                <tr>
                    <td>{{ $parish->name }} Church</td>
                    <td>{{ $parish->phone }}</td>
                    <td>{{ $parish->diocese->name }}</td>
                    <td>
                      @foreach ($parish->employees as $clergy)
                        @if ($clergy->role >= 2)
                          <p>{{ $clergy->name }}</p>
                        @endif
                      @endforeach
                    </td>
                    <td>
                        <a href="{{ route('parishes.show', $parish->id) }}" class="btn btn-primary"> <i
                            class="bx bx-detail"></i> View</a>

                    <a href="{{ route('parishes.edit',$parish->id) }}" class="btn btn-warning"> <i class="bx bxs-edit"></i>
                        Edit</a>


                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirm{{ $parish->id }}">
                        <i class="bx bxs-trash"></i> Delete
                      </button>
                    </td>
                  </tr>

                  <div class="modal fade" id="confirm{{ $parish->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-warning">Confirm ?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure want to <span class="text-danger"><i class="bx bxs-trash"></i>  DELETE</span> {{ $parish->name  }} ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{ route('parishes.destroy', $parish->id) }}" method="post">
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
