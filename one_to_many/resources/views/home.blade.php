@extends ('layouts.main_layout')

@section('content')
  <div class="content">

    <h1>Employees</h1>
    <ul>
      @foreach ($employees as $employe)
        <li>
          <h3>Name:
            <a href="{{route('showEmp', $employe -> id)}}">
              {{$employe['firstname']}} {{$employe['lastname']}}
            </a>
          </h3>
          <p>Role: {{$employe['role']}}</p>
          <small>
            Task: <a href="{{route('task', $employe -> task_id)}}">{{$employe -> task -> name}}</a> <br>
          </small>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
