<div>
    <form action="/user" method="post">
        @csrf
        {{-- @method('get') --}}
        {{-- @method('post') --}}
        {{-- @method('put') --}}
        {{-- @method('patch') --}}
        @method('delete')
        <label for="email">Email</label>
        <input type="email" name="email" id="email"><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br>
        <button type="submit">Subbmit</button>
    </form>
</div>

