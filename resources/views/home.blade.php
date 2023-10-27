<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        <nav class="nav justify-content-center  ">
            <a class="nav-link active" href="#" aria-current="page">Active link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link disabled" href="#">Disabled link</a>
        </nav>
        <section id="jumbo">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                    <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the
                        one in previous versions of Bootstrap. Check out the examples below for how you can remix and
                        restyle it to your liking.</p>
                    <button class="btn btn-primary btn-lg" type="button">Example button</button>
                </div>
            </div>
        </section>
        <main>
            <div class="container">
                <div class="row">
                    @foreach ($movies as $movie)
                        <div class="col-4 py-4">
                            <div class="card text-start">
                                <img class="card-img-top" src="https://picsum.photos/400/200?random={{ $movie->id }}"
                                    alt="{{ $movie['title'] }}">
                                <div class="card-body">
                                    <h5 class="card-title">Titolo: {{ $movie['title'] }}</h5>
                                    <h6 class="card-text">Titolo Originale: {{ $movie['original_title'] }}</h6>
                                    <p class="card-text">Voto: {{ $movie['vote'] }} </p>
                                    <p class="card-text">Nazionalità: {{ $movie['nationality'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-4">

                    </div>
                </div>
            </div>

        </main>
    </header>

</body>

</html>
