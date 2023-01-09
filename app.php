<?php
declare(strict_types=1);

const MOVIES_LIST = 'movie_list/movies.csv';

function getMovie(string $movieList): array {
    
    $data = [];
    // check if file exists
    if ($movieList !== false) {
        // open and read file
        $movieList = fopen($movieList, 'r');
        // go through every row of the file and push the data into the array
        while (($row = fgetcsv($movieList)) !== false) {
            $data[] = $row;
        }
        fclose($movieList);
    } 

    // generate random int and return movie data
    $randomNum = rand(1, count($data) - 1);
    return [
        'title' => $data[$randomNum][0],
        'year' => $data[$randomNum][1],
        'genre' => $data[$randomNum][2]
    ];
} 

// if (isset($_POST['movies'])) {
    $movie = getMovie(MOVIES_LIST);
    echo json_encode($movie);
// }