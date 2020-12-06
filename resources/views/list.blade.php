<h1>Member list</h1>
<style>
    .mycolor1 {
        background-color: steelblue;
        color: white;
    }
    .btn-group-sm>.btn, .btn-sm {
        padding: .25rem .5rem;
        margin-left: 350px;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem;
    }
</style>

<a href="/add" class="btn btn-sm mycolor1" >추가</a><div><br></div>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Operation</td>
        <td>edit</td>

    </tr>
    @foreach($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
        <td onclick="return confirm('Are you sure?')"><a href={{"delete/".$member['id']}}>Delete</a></td>
        <td><a href={{"edit/".$member['id']}}>edit</a></td>
    </tr>
    @endforeach
</table>
<span>
    {{$members->links()}}
</span>
<style>
    .w-5{
        display: none;
    }
</style>
