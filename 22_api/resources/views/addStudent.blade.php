<form action="/addStudent" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="age" placeholder="Age">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="phone" placeholder="Phone">

    <input type="submit" value="Add">
</form>