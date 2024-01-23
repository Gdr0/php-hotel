<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
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
// foreach ($hotels as $hotel) {
//     echo  $hotel['name'] . "<br>";
//     echo  $hotel['description'] . "<br>";
//      if ($hotel['parking']) {
//         echo "Parcheggio Disponibile" . "<br>";
// } else {
//     echo "Parcheggio non Disponiile" . "<br>";
// }
//     echo $hotel['vote']. "<br>";
//     echo "DISTANZA DAL CENTRO: " . $hotel['distance_to_center'] . "<br>";

//     echo "---------------------<br>";
// }

?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Hotel</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
       <th scope="col">Voto</th>
        <th scope="col">Distanza Dal Centro</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($hotels as $hotel){
    echo "<tr>";
    echo "<td>". $hotel['name'] . "</td>";
      echo "<td>". $hotel['description'] . "</td>";
      if ($hotel['parking']){
        echo "<td>  Disponibile </td>";
        } else {
            echo "<td> Non Disponibile </td>";
        };
          echo "<td>". $hotel['vote'] . "</td>";
            echo "<td>". $hotel['distance_to_center'] . "</td>";

      echo "<tr7>";}
  ?>
   </tbody>
</table>
</body>
</html>





