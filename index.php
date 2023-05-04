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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
        <table class="table">
            <thead>

                <tr>
                    <th scope="col">#</th>
                    <?php foreach ($hotels as $hotel ){ 
                        foreach ($hotel as $key => $value){ ?>
                            <th scope="col"><?php echo $key ?></th>
                        <?php } 
                        break;
                    }; ?>
                </tr>

            </thead>

            <tbody>
                <?php foreach ($hotels as $key => $hotel){ ?>
                    
                    <tr>
                        <th scope="row"><?php  echo $key + 1 ?></th>
                        <td> <?php echo $hotel['name'] ?></td>
                        <td> <?php echo $hotel['description'] ?></td>
                        <td class="text-center"> 
                            <?php 
                                if($hotel['parking'] === true){
                                    echo "yes";
                                }else{
                                    echo "no";
                                }
                            ?>
                        </td>
                        <td class="text-center"> <?php echo $hotel['vote'] ?></td>
                        <td class="px-5"> <?php echo $hotel['distance_to_center']. " " . "Km" ?></td>
                    </tr>
                
                <?php }; ?>
            </tbody>

        </table>

    </div>

</body>
</html>