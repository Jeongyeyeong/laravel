<h1> Add Member</h1>
@if(session('user'))
    <h3 style="color: green">{{session('user')}} user has been added</h3>
    @endif
<form action="addmember" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter User Name"><br><br>
    <input type="text" name="password" placeholder="enter User Password"><br><br>
    <input type="text" name="email" placeholder="enter User Email"><br><br>
    <button>Add Member</button>
</form>
