<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Actors & Movies</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="antialiased bg-mute">
    <div class="container-fullwidth mx-4">
        <div class="row d-flex">
            <div class="col-md-6 mx-auto d-flex">
                <label class="h1 text-warning mx-auto pl-3">Star Wars</label>
                <a href="/" class="link-primary position-absolute mt-4">Actors &<br>Movies</a>
            </div>
        </div>
        <div class="row d-flex">
            <form class="col-md-4 mx-auto form" method="GET" action="/starwars">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Character's name</span>
                    </div>
                    <input class="form-control" value="{{$name}}" type=" text" name="name">
                    <button class="btn btn-outline-dark" type="submit">Filter</button>
                </div>
            </form>
        </div>
        <div class="row d-flex mt-4">
            <div class="col-md-6 mx-auto">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Character</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($characters as $character)
                        <tr>
                            <td>{{$character['name']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>
