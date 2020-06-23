@extends ('layouts.main_layout')

@section('content')
  <div class="content">

    <h1>Employees</h1>
    <ul>
      @foreach ($employees as $employe)
        <li>
          <h3>Name: {{$employe['firstname']}} {{$employe['lastname']}}</h3>
          <p>Role: {{$employe['role']}}</p>
          <small>
            Task: {{$employe -> task -> name}} <br>
            Task description: {{$employe -> task -> description}} <br>
            Task deadline: {{$employe -> task -> deadline}} <br>
          </small>
          <a href="{{route('edit', $employe['id'])}}">Edit me</a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
