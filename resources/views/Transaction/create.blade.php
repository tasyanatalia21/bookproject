@extends('main.layout')

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Add Transaction</h3>
    </div>
    <div class="card-body">
        <form action="{{route('transactions.store')}}" method="post" enctype="multipart/form-data">
            @csrf

                <!--ambil data dari tabel author -->
            <div class="form-group">
                <label for="book-option">Select Book</label>
                <select class="form-control" id="book-option" name="book_id">
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}">{{ $book->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>price</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-tag"></i></span>
                    </div>
                    <input name="price" type="text" class="form-control @error('price')
                    is-invalid
                    @enderror" value="{{old('price')}}">
                    @error('price')
                    <div class="alert alert-danger mt-2 ">
                    {{$message}}
                    </div>
                    @enderror
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->


              <button type="submit" class="btn btn-primary mt-3">SUBMIT</button>
            </form>

</div>
    <!-- /.card-body -->

@endsection


@section('bottom_script')
<script>

</script>
@endsection
