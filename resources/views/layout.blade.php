<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fakebook</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../../css/app.css">
</head>
<body>
    <div class="wrapper">
        <header>
            @include('global_nav')
        </header>


        <div class="sidebar left-side flex-column">
            @yield('left-sidebar')
        </div>


        <main class="flex-column">
            @yield('main-content')
        </main>


        <div class="sidebar right-side flex-column">
            @yield('right-sidebar')
        </div>
    </div>
</body>
</html>
