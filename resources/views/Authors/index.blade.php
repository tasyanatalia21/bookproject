@extends('main.layout')

@section('content')

    <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Authors List</h1>
                        <a href="{{route('authors.create')}}" class="btn btn-primary mb-3">Add Author</a>
                </div>
            </div>
        </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Authors</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Author Name</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @if (count($authors) > 0)
                        @foreach ($authors as $author)
                        <tr>
                            <td>{{$author->id}}</td>
                            <td>{{$author->name}}</td>
                            <td>

                                <a href="{{route('authors.edit',$author->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('authors.destroy',$author->id)}}" method="post" >
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
