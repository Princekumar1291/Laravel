<form method="POST" action="/users">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <button type="submit">Add</button>
</form>

