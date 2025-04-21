<div>
    <h1>profile page</h1>
    @if(session('fEmail')){
        {{ session('fEmail') }}
    }
    @endif
    @if(session('email'))
        <p>Email: {{ session('email') }}</p>
    @else
        <p>Email: N/A</p>
    @endif

    <a href="/logout">Logout</a>
    <br>
    <br>
    <div>
        Email: 
        {{
            session("user")['email']
        }}
    </div>
    <div>
        Password: {{session("user")['password']}}
    </div>
</div>

