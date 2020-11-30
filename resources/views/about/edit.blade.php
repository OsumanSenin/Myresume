@extends('templates.structures')

@section('content')

<section class="container">

    <form action="/admin/about/{{$about->id  }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("put")
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="form-group">
          <label for="formGroupExampleInput">Photo</label>
          <input type="file" class="form-control" id="formGroupExampleInput" value="{{ $about->photo }}" name="photo">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Anniversaire</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $about->aniversaire }}" name="aniversaire">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Website</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $about->website }}" name="website">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Phone</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $about->phone }}" name="phone">
          </div>
          
          <div class="form-group">
            <label for="formGroupExampleInput2">Age</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $about->age }}" name="age">
          </div>
          <div class="text-center">
            <button class="btn btn-sucess" type="submit">
                Submit
            </button>
          </div>
      </form>
    
@endsection