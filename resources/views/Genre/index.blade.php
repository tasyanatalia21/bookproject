@extends('main.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Genres List</h1>
                        <a href="{{route('genres.create')}}" class="btn btn-primary mb-3">Add Genre</a>
                </div>
            </div>
        </div>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Genres</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if (count($genres) > 0)
                    @foreach ($genres as $genre)
                    <tr>
                        <td>{{$genre->id}}</td>
                        <td>{{$genre->name}}</td>
                        <td>

                            <a href="{{route('genres.edit',$genre->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{route('genres.destroy',$genre->id)}}" method="post" >
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td>BELUM ADA DATA</td>
                    </tr>
                @endif

                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection
