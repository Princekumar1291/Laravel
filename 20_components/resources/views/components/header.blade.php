@props(['logo'])
<header style="display: flex; justify-content: center; background-color: #838181; padding: 1em; color: #fff;">
    <a href="/" style="display: flex; align-items: center; margin-right: 1em;">
       {{$logo}}
    </a>
    <nav>
        <ul style="display: flex; list-style: none; margin: 0; padding: 0;">
            <li style="margin-right: 1em;"><a href="/" style="color: inherit;">Home</a></li>
            <li style="margin-right: 1em;"><a href="/about" style="color: inherit;">About</a></li>
            <li><a href="/contact" style="color: inherit;">Contact</a></li>
        </ul>
    </nav>
</header>

