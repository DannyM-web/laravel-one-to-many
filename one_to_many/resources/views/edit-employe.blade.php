@extends ('layouts.main_layout')

@section('content')

  <div class="content">
    <a href="{{route('home')}}"> HOME</a>

    <form  action="{{route('update', $employe -> id)}}" method="post">
      @csrf
      @method ('POST')

      <label for="firstname">NAME</label>
      <input type="text" name="firstname" value="{{$employe -> firstname}}">
      <br>

      <label for="lastname">LASTNAME</label>
      <input type="text" name="lastname" value="{{$employe -> lastname}}">
      <br>

      <label for="date_of_birth">DATE OF BIRTH</label>
      <input type="text" name="date_of_birth" value="{{$employe -> date_of_birth}}">
      <br>

      <label for="role">ROLE</label>
      <input type="text" name="role" value="{{$employe -> role}}">
      <br>

      <label for="task_id">TASK</label>
      <select name="task_id">
        @foreach ($tasks as $task)
          <option value="{{$task -> id}}"
            @if ($task['id'] == $employe -> task_id)
              selected
            @endif
            >{{$task -> name}}</option>
        @endforeach
      </select>
      <br>

      <label for="locations[]">LOCATION</label><br>
      @foreach ($locations as $location)
        <input type="checkbox" name="locations[]" value="{{$location -> id}}"
        @foreach ($employe -> locations as $empLocation)
          @if ($location -> id == $empLocation -> id)
            checked
          @endif
        @endforeach
        >{{$location -> state}}
        <br>
      @endforeach

      <input type="submit" name="submit" value="UPDATE">
    </form>

  </div>

@endsection
