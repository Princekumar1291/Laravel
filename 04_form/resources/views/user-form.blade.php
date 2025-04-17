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
    {{-- display the error --}}
    @if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="add-user" method="post">
        @csrf
        <div>
            <input type="text" name="username" id="username" placeholder="Enter User Name" value="{{ old('username') }}">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Enter Email Address">
        </div>
        <div>
            <input type="text" name="city" id="city" placeholder="Enter City">
        </div>
        <div>
            <label for="skills">Skills</label><br>
            <input type="radio" name="skills" value="html" id="html">HTML<br>
            <input type="radio" name="skills" value="react" id="react">REACT<br>
            <input type="radio" name="skills" value="node" id="node">NODE<br>
            <input type="radio" name="skills" value="postman" id="postman">POSTMAN<br>
        </div>
        <div>
            <label for="hobbies">Hobbies</label><br>
            <input type="checkbox" name="hobbies[]" value="cricket" id="cricket">Cricket<br>
            <input type="checkbox" name="hobbies[]" value="reading" id="reading">Reading<br>
            <input type="checkbox" name="hobbies[]" value="writing" id="writing">Writing<br>
        </div>
        <div>
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div>
            <label for="age">Age: <span id="age-value">50</span></label>
            <input type="range" name="age" id="age" min="0" max="100" value="50" oninput="document.getElementById('age-value').textContent = this.value">
        </div>
        <div>
            <button>Add New User</button>
        </div>
    </form>
</div>

