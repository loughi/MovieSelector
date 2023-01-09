function displayMovie() {
    $.ajax({
        url: 'app.php',
        type: 'POST',
        dataType: 'json',
        data: {movies: true},
        success: function(data){
            $('#movie-title').text(data.title);
            $('#movie-year').text(data.year);
            $('#movie-genre').text(data.genre);
        },
        error: function(response){
            console.log(response);
        }
    });
}