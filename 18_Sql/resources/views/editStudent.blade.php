<div>
    <form action="/edit/{{$student->id}}" method="post">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="{{$student->id}}"><br>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$student->name}}"><br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{$student->email}}"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{$student->password}}"><br>
        <button type="submit">Edit</button>
    </form>
    <a href="/displayStudent">Back</a>
</div>