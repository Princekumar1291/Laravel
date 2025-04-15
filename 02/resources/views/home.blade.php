{{-- SubView  --}}
@include('common.header',["data"=>"subView data"])

<br>
{{-- if file does not exist  then no error will come--}}
@includeIf('common.com',["data"=>"subView data"])








<h1>Welcome to home page</h1>
<h2>Hello, {{$name}}</h2>

<h3>{{$users[0]}}</h3>

@if ($name=="Prince")
<p>This is prince</p>
@elseif($name=="rahul")
<p>This is rahul</p>
@else 
<p>No one...</p>
@endif


{{-- for loop  --}}
<div style="background-color: aqua ; padding: 10px">
  @for($i=0;$i<count($users);$i++)
    <p>{{$users[$i]}}</p>
  @endfor
</div>


{{-- foreach loop  --}}
@foreach($users as $user)
  <p>{{$user}}</p>
@endforeach
