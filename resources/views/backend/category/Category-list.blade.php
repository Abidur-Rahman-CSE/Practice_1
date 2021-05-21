@extends('AboutPage')
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header text-center bg-primary">{{ __('View Catagory') }}</div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Created @</th>
                          <th scope="col">Uldated @</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($data as $item)
                          <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $item->category_name ?? 'N/A' }}</td>
                            <td>{{ $item->created_at != NULL ? $item->created_at->diffForHumans() : 'N/A' }}</td>
                            <td>
                                <a href="" class="btn btn-outline-primary">Edit</a>
                                <a href="{{ url('category-delete')}}/{{ $item->id }}" class="btn btn-outline-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach


                      </tbody>
                    </table>


              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card">
              <div class="card-header text-center bg-success">{{ __('Add Catagory') }}</div>

                @if (session('CategoryAdd'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Good News!</strong> {{ session('CategoryAdd') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <form action="{{ url('category-post') }}" method="POST">
                      <div class="form-group">
                        <label for="category_name">Name</label>
                        <input type="text" class="form-control" id="category_name" name="category_name"  placeholder="Ex: Jodu">
                         @csrf
                      </div>

                      <div class="text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>


                    </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection


{{-- @extends('layouts.app')

@section('content')

@endsection --}}
