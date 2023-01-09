<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Generator</title>
    <style>
        header,
        .description,
        .movie,
        footer {
            margin: auto;
            border: 3px solid green;
            text-align: center;
        }

        p {
            display: block;
        }
    </style>
    <script src="jquery-3.6.3.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <main>
        <header>
            <h1>Elo mordeczki</h1>
        </header>
        <section class="description">
            <div class="paragraph">
                <p>This is a movie generator. If you don't know what to watch
                    with your beloved one, click the button below and get the
                    inspiration!</p>
            </div>
            <div class="buttons">
                <button onclick="displayMovie()">Generate Movie</button>
            </div>
        </section>
        <section id="movie">
            <p>Here we should see a movie title</p>
            <div>
                <p id="movie-title"></p>
                <p id="movie-year"></p>
                <p id="movie-genre"></p>
            </div>
        </section>
        <footer>
            &copy;
        </footer>
    </main>
</body>

</html>