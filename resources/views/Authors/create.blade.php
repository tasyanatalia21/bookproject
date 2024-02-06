@extends('main.layout')

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Add Author</h3>
    </div>
    <div class="card-body">
        <form action="{{route('authors.store')}}" method="post" enctype="multipart/form-data">
            @csrf
      <div class="form-group">
        <label>Author Name</label>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-child"></i></span>
          </div>
          <input name="name" type="text" class="form-control @error('name')
          is-invalid
            @enderror" value="{{old('name')}}">
            @error('name')
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
  </div>

@endsection


@section('bottom_script')
<script>

</script>
@endsection
