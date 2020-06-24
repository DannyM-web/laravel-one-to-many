@extends ('layouts.main_layout')

@section('content')
  <div class="content">
    <a href="{{route('home')}}"> HOME</a>
    
    <ul>
      <li>FIRST NAME:{{$employe['firstname']}}</li>
      <li>LAST NAME:{{$employe['lastname']}}</li>
      <li>DATE OF BIRTH:{{$employe['date_of_birth']}}</li>
      <li>ROLE:{{$employe['role']}}</li>
    </ul>

    @if ($employe -> locations -> count())
      <h2>LOCATIONS:</h2>
        @foreach ($employe -> locations as $location)
          <h3>{{$location['city']}} -- {{$location['state']}} </h3>
      @endforeach
    @else
      No location to show
    @endif
    <br>
    <a href="{{route('edit', $employe['id'])}}">Edit me</a>
    <a href="{{route('delete', $employe -> id)}}">Delete me</a>
  </div>
@endsection
