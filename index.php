<?php
    require_once __DIR__ . '/movie.php';

    $avatar = new Movie('Avatar', '2009', '162min', 'Science Fiction', 'English');
    $ilCavaliereOscuro = new Movie('Il Cavaliere Oscuro', '2008', '152min', 'Action');
    $nottingHill = new Movie('Notting Hill', '1999', '124min', 'Comedy');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Movies</title>
</head>
<body>    
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Genere</th>
            <th scope="col">Durata</th>
            <th scope="col">Anno</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td><?php echo $avatar->getMovieTitle();?></td>
            <td><?php echo $avatar->getMovieGenre();?></td>
            <td><?php echo $avatar->getMovieDuration();?></td>
            <td><?php echo $avatar->getMovieYear();?></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td><?php echo $ilCavaliereOscuro->getMovieTitle();?></td>
            <td><?php echo $ilCavaliereOscuro->getMovieGenre();?></td>
            <td><?php echo $ilCavaliereOscuro->getMovieDuration();?></td>
            <td><?php echo $ilCavaliereOscuro->getMovieYear();?></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td><?php echo $nottingHill->getMovieTitle();?></td>
            <td><?php echo $nottingHill->getMovieGenre();?></td>
            <td><?php echo $nottingHill->getMovieDuration();?></td>
            <td><?php echo $nottingHill->getMovieYear();?></td>
            </tr>
        </tbody>
    </table>      
</body>
</html>