<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animatia | Pure CSS3 Image Hover Animations</title>
    <link rel="icon" href="img/favicon.ico">
    
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
    <script type="text/javascript" src="/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <nav>
            <ul class="nav nav-pills">
                <li><a href="/">HOme</a></li>
                <li><a href="/category">Category</a></li>
                <li><a href="/category/create">Add Category</a></li>
            </ul>
        </nav>
        <div class="row">
            <div class="col-lg-12">
            @yield('content')
            </div>
            </div>
    </div>
</body>
</html>