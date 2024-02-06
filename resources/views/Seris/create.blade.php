@extends('main.layout')

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Add Seri</h3>
    </div>
    <div class="card-body">
        <form action="{{route('Seris.store')}}" method="post" enctype="multipart/form-data">
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
