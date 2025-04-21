<div>
    <h1 class="text-center">Login</h1>

    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</div>

