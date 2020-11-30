@extends('templates.structures')

@section('content')

    <section class="container">
            <form action="{{route(about.store) }}" method="POST" enctype="multipart/form-data">
            @csrf
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
            <input type="file" class="form-control" id="formGroupExampleInput"  name="photo">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Anniversaire</label>
            <input type="text" class="form-control" id="formGroupExampleInput2"  name="aniversaire">
          </div>
          <div class="form-group">
              <label for="formGroupExampleInput2">Website</label>
              <input type="text" class="form-control" id="formGroupExampleInput2"  name="website">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Phone</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="phone">
            </div>
            
            <div class="form-group">
              <label for="formGroupExampleInput2">Age</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name="age">
            </div>
           
            <div class="text-center">
              <button class="btn btn-danger" type="submit">
                  Submit
              </button>
            </div>
            
            
            </form>



    </section>


@endsection