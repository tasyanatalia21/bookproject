@extends('main.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="col-sm-6">
                <h1>Transaction List</h1>
            <a href="{{route('transactions.create')}}" class="btn btn-primary mb-3">Add Transaction</a>
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
                      <th>Book</th>
                      <th>Price</th>
                      <th>Qty</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                        @if (count($transactions) > 0)
                        @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->id}}</td>
                            <td>{{ $transaction->book->title }}</td>
                            <td>{{$transaction->Price}}</td>
                            <td>{{$transaction->Qty}}</td>
                            <td>

                                <a href="{{route('transactions.edit',$transaction->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('transactions.destroy',$transaction->id)}}" method="post" >
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
