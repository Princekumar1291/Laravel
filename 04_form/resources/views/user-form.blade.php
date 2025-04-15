<style>
    #user-form {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #user-form div {
        margin-bottom: 10px;
    }

    #user-form input[type="text"],
    #user-form input[type="email"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
    }

    #user-form button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #user-form button:hover {
        background-color: #45a049;
    }
</style>

<div id="user-form">
    <h2>Add new User</h2>
    <form action="add-user" method="post">
        @csrf
        <div>
            <input type="text" name="username" id="username" placeholder="Enter User Name">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Enter Email Address">
        </div>
        <div>
            <input type="text" name="city" id="city" placeholder="Enter City">
        </div>
        <div>
            <button>Add New User</button>
        </div>
    </form>
</div>

