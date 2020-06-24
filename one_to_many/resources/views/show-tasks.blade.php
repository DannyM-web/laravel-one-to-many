@extends ('layouts.main_layout')

@section('content')
  <a href="{{route('home')}}"> HOME</a>
  
  <div class="content">
    <h2>Task:</h2>
      <p>{{$task -> name}} {{$task -> id}} </p> <br>
    <h2>Task description:</h2>
     <p>{{$task -> description}}</p> <br>
    <h2>Task deadline:</h2>
     <p>{{$task -> deadline}}</p> <br>
    <h2></h2>
    <br>
    <h2>Employe assegnati a questa task:</h2>

    <ul>
      @foreach ($task -> employees as $employe)
        <li>{{$employe -> firstname}} {{$employe -> lastname}}</li>
      @endforeach
    </ul>


  </div>
@endsection
