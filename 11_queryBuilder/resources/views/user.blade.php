<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        padding: 20px;
    }

    h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    .container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .box {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        transition: transform 0.2s;
    }

    .box:hover {
        transform: translateY(-5px);
    }

    .box p {
        margin: 5px 0;
        color: #555;
    }

    .section-title {
        font-weight: bold;
        margin-top: 10px;
        color: #000;
    }
</style>

<div>
    <h1>User List</h1>
    <div class="container">
        @foreach ($users as $user)
            <div class="box">
                <p><strong>ID:</strong> {{ $user->id }}</p>
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
            </div>
        @endforeach
    </div>
</div>
