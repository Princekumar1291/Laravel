<form action="/login" method="post">
    @csrf
    <label for="email">Email</label>
    <input type="email" name="email" id="email"><br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br>
    <button type="submit">Login</button>
</form>
