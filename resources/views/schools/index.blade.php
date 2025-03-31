<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Schools</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="container-fluid">

    <div class="row">
        <div class="col">
            <h1>List of All schools</h1>

        </div>
        <div class="col">
            <a href="{{ route('newschool') }}" class="btn btn-warning">New School</a>

        </div>

    </div>

    <div class="row g-2">
        @foreach($allschools as $school)
        <div class="col col-3 card mx-auto g-4">
            <!-- <div class="card-header">
            Featured
        </div> -->
            <div class="card-body">
                <h5 class="card-title">{{ $school->name }}</h5>
                <p class="card-text">{{$school->location}}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        @endforeach
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
