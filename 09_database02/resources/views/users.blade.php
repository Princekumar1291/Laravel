<div>
    <h1>Users List</h1>
    <table style="width:100%; border: 1px solid black; border-collapse: collapse;">
        <tr>
            <th style="border: 1px solid black; padding: 5px;">Name</th>
            <th style="border: 1px solid black; padding: 5px;">Email</th>
            <th style="border: 1px solid black; padding: 5px;">Password</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td style="border: 1px solid black; padding: 5px;">{{ $user->name }}</td>
                <td style="border: 1px solid black; padding: 5px;">{{ $user->email }}</td>
                <td style="border: 1px solid black; padding: 5px;">{{ $user->password }}</td>
            </tr>
        @endforeach
    </table>
</div>

