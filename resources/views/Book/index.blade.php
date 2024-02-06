@extends('main.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="col-sm-6">
                <h1>Book List</h1>
            <a href="{{route('books.create')}}" class="btn btn-primary mb-3">Add Book</a>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Books</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Author</th>
                      <th>Genre</th>
                      <th>Seri</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Stock</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                        @if (count($books) > 0)
                        @foreach ($books as $book)
                        <tr>
                            <td>{{$book->id}}</td>
                            <td>{{ $book->author->name }}</td>
                            <td>{{ $book->genre->name }}</td>
                            <td>{{ $book->seri->Title }}</td>
                            <td><img src="{{asset('storage/books/'.$book->image)}}" width="50"></td>
                            <td>{{$book->Title}}</td>
                            <td>{{$book->description}}</td>
                            <td>{{$book->price}}</td>
                            <td>{{$book->stock}}</td>
                            <td>

                                <a href="{{route('books.edit',$book->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('books.destroy',$book->id)}}" method="post" >
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
