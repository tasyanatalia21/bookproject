@extends('main.layout')

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Add Book</h3>
    </div>
    <div class="card-body">
        <form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
            @csrf

                <!--ambil data dari tabel author -->
            <div class="form-group">
                <label for="author-option">Select Author</label>
                <select class="form-control" id="author-option" name="author_id">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="genre-option">Select Genre</label>
                <select class="form-control" id="genre-option" name="genre_id">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="seri-option">Select Seri</label>
                <select class="form-control" id="seri-option" title="seri_id" name="seri_id">
                    @foreach ($seris as $seri)
                        <option value="{{ $seri->id }}">{{ $seri->Title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="from-group">
                <label>IMAGE</label>
                <input name="image" accept="image/png, image/jpeg" type="file" class="form-control
                @error('image')
                is-invalid
                @enderror">
                @error('image')
                   <div class="alert alert-danger mt-2 ">
                        {{$message}}
                   </div>
                @enderror
            </div>

            <div class="form-group">
                <label>Title</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                    <input name="title" type="text" class="form-control @error('title')
                    is-invalid
                    @enderror" value="{{old('title')}}">
                    @error('title')
                    <div class="alert alert-danger mt-2 ">
                    {{$message}}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Description</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-book"></i></span>
                    </div>
                    <textarea name="description" class="form-control @error('description')
                    is-invalid
                    @enderror" value="{{old('description')}}"></textarea>
                    @error('description')
                    <div class="alert alert-danger mt-2 ">
                    {{$message}}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Price</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-tag"></i></span>
                    </div>
                    <input name="price" type="number" class="form-control @error('price')
                    is-invalid
                    @enderror" value="{{old('price')}}">
                    @error('price')
                    <div class="alert alert-danger mt-2 ">
                    {{$message}}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="form-group">    {{-- mau dijadiin kyk > (- 0 +)--}}
                <label>Stock</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-tag"></i></span>
                    </div>
                    <input name="stock" type="text" class="form-control @error('stock')
                    is-invalid
                    @enderror" value="{{old('stock')}}">
                    @error('stock')
                    <div class="alert alert-danger mt-2 ">
                    {{$message}}
                    </div>
                    @enderror
                </div>
            </div>

              <button type="submit" class="btn btn-primary mt-3">SUBMIT</button>
            </form>

</div>
    <!-- /.card-body -->

@endsection


