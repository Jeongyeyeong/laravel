

{{--@include('header')
<h1>User Page</h1>
@foreach($user as $row)
    <h3>{{$row}}</h3>
@endforeach

@include(('inner'))--}}


{{--<h1>User login</h1>

<form action="users" method="post">
    @csrf
    <input type="text" name="username" placeholder="enter user id" /><br>
    <span style="color:red">@error('username'){{$message}}@enderror</span>
    <br>

    <input type="password" name="userpassword" placeholder="enter user password" /><br>
    <span style="color:red">@error('userpassword'){{$message}}@enderror</span>
    <br>

    <button type="submit">Login</button>
</form>--}}


{{--<h1>User List</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Photo</td>
    </tr>
    @foreach($collection as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['first_name']}}</td>
            <td>{{$item['email']}}</td>
            <td><img src="{{$item['avatar']}}" /></td>
        </tr>
    @endforeach
</table>--}}

