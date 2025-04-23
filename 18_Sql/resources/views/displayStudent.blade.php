<div>
    <h1>Student Name: </h1>
    <form action="/search" method="get">
        <input type="text" name="name" id="name" placeholder="Search by name" value="{{ @$name }}">
        <button>Search</button>
    </form>
    <form action="/deleteMultiple" method="post">
        @csrf
        <table border="1">
            <tr>
                <th>Select</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Operation</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{ $student->id }}"></td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->password }}</td>
                <td>
                    <a href="edit/{{ $student->id }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
        <button type="submit">Delete Selected</button>
    </form>
</div>

