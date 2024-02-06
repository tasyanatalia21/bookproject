@extends('main.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="col-sm-6">
                <h1>Series List</h1>
            <a href="{{route('Seris.create')}}" class="btn btn-primary mb-3">Add Series</a>
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
                  <h3 class="card-title">Series</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Author</th>
                      <th>Series Title</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                        @if (count($seris) > 0)
                        @foreach ($seris as $seri)
                        <tr>
                            <td>{{$seri->id}}</td>
                            <td>{{ $seri->author->name }}</td>
                            <td>{{$seri->Title}}</td>
                            <td>

                                <a href="{{route('Seris.edit',$seri->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('Seris.destroy',$seri->id)}}" method="post" >
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
