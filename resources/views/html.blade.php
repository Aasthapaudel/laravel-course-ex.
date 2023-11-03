<h1>User login</h1>
<form action="html" method="POST">
    @csrf
    <input type ="text" name="username" placeholder="enter user id"/><br>
    <div style="color: red">@error('username'){{$message}}@enderror</div><br>
    <input type ="password" name="userpassword" placeholder="enter user password"/><br>
    <div style="color: red">@error('userpassword'){{$message}}@enderror</div><br>
    <button type="submit">Login</button>
</form>
