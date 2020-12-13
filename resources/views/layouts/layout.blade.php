<html>
<head>
    <title>Restaurant App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Study</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/list">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/add">Add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/storelist">StoreList</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/articles">articlesList</a>
            </li>
           {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>--}}
        </ul>
    </div>
</nav>
@if(session() -> has('flash_message'))
    <div class=""alert alert-info" role="alert">
    {{session('flash_message')}}
    </div>
@endif
<div class="container">

    @yield('content')

</div>

{{--<footer>
    copy rights by Restaurnat App
</footer>--}}
</body>
</html>
