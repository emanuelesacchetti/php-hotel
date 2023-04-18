<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    /*
    foreach($hotels as $key => $singleHotel){
        foreach($singleHotel as $chiave => $valore){
            echo $chiave . ':' . $valore . '<br>';
        };
    };
    */
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Hotels</title>
    <style>
        .cont{
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>

    <div class="cont">

        <form action="" method="GET">
            <label for="parcheggio">Parcheggio</label>
            <select id='parcheggio' name='parcheggio'>
                <option value="true">Si</option>
                <option value="false">No</option>
                <option value="" selected></option>
            </select>

            <label for="voto">Voto</label>
            <input type="number" name="voto" id="voto">

            <button type="submit">invia</button>
            <button type="reset">resetta</button>
        </form>


        <?php

            $parcheggio = $_GET['parcheggio'];
            $voto = $_GET['voto'];
            var_dump($parcheggio);
            var_dump($voto);

            if (empty($data)) {
                echo "nessun elemento get";
            } else {
                foreach($data as $chiave => $valore) {
                    echo 'Chiave: ' . $chiave . ' - Valore ' . $valore . '<br/>';
                }
            }

        ?>

        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Stelle</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            /*
            if($parcheggio == 'si'){
                echo '<tr>'. '<br>' . 
                            "<th scope='row'>" . $singleHotel['name'] . '</th>' . 
                            "<td>" . $singleHotel['description'] . '</td>' . 
                            "<td>" . isset($parcheggio == si)? $singleHotel['parking']:'' . '</td>' . 
                            "<td>" . $singleHotel['vote'] . '</td>' . 
                            "<td>" . $singleHotel['distance_to_center'] . '</td>' . 
                         '</tr>';
            }
                {
                foreach($hotels as $key => $singleHotel){
                    echo '<tr>'. '<br>' . 
                            "<th scope='row'>" . $singleHotel['name'] . '</th>' . 
                            "<td>" . $singleHotel['description'] . '</td>' . 
                            "<td>" . $singleHotel['parking'] . '</td>' . 
                            "<td>" . $singleHotel['vote'] . '</td>' . 
                            "<td>" . $singleHotel['distance_to_center'] . '</td>' . 
                         '</tr>';
                }
            }elseif()
            */
            foreach($hotels as $key => $singleHotel){
                echo '<tr>'. '<br>' . 
                        "<th scope='row'>" . $singleHotel['name'] . '</th>' . 
                        "<td>" . $singleHotel['description'] . '</td>' . 
                        "<td>" . $singleHotel['parking'] . '</td>' . 
                        "<td>" . $singleHotel['vote'] . '</td>' . 
                        "<td>" . $singleHotel['distance_to_center'] . '</td>' . 
                     '</tr>';
            }
            
            ?>
        </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>