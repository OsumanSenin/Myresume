@extends('templates.structures')

@section('content')

<section class="container">
    
    <h1 class="text-center "> about </h1>

    <a href="{{ route("about.create") }}" class="btn btn-success   mb-4">Create</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">photo</th>
            <th scope="col">aniversaire</th>
            <th scope="col">website</th>
            <th scope="col">phone</th>
            <th scope="col">age</th>
          </tr>
        </thead>
          @foreach ($about as $e)
          <tbody>
            <tr>
            
              <td>{{ $e->id }}</td>
              <td><img src="{{ asset("img/$e->photo") }}" alt=""></td>
              <td>{{$e->aniversaire  }}</td>
              <td>{{$e->website }}</td>
              <td>{{$e->phone  }}</td>
              <td>{{$e->age  }}</td>
              <td class="d-flex">
                <a href="/admin/about/{{ $e->id }}/edit" class="btn btn-primary">EDIT</a>
                <form action="/admin/about/{{ $e->id }}" method="POST">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
            </td>
          </tr>
            </tr>
          </tbody>
        </table>
              
          @endforeach


      {{--  --}}


</section>


    
@endsection