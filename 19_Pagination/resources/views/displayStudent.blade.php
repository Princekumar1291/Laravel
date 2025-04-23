<div>
    <h1>Student Name: </h1>
    <form action="/search" method="get">
        <input type="text" name="name" id="name" placeholder="Search by name" value={{ @$name }}>
        <button>Search</button>
    </form>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Operation</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->password }}</td>
                <td>
                    <a href="delete/{{ $student->id }}">Delete</a>
                    <a href="edit/{{ $student->id }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="linksofpagination" style="width: 100px;display: flex;flex-direction:row;">
        {{ $students->links() }}
    </div>

</div>
