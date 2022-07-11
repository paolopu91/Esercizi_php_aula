<?php
/* 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e 
i PM in un rettangolo verde.
*/

$db = [
  [
    'name' => 'Michele',
    'lastname' => 'Papagni',
    'role' => "teacher"
  ],
  [
    'name' => 'Fabio',
    'lastname' => 'Forghieri',
    'role' => "teacher"
  ],
  [
    'name' => 'Roberto',
    'lastname' => 'Marazzini',
    'role' => "pm"
  ],
  [
    'name' => 'Federico',
    'lastname' => 'Pellegrini',
    'role' => "pm"
  ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  
  <div class="container">
    <div class="row">

      <div class="col bg-secondary">
        <!-- qui vanno gli insegnanti -->

        <?php   
            foreach($db as $role){
                if($role ["role"] === "teacher"){
                    echo $role["name"] . " " . $role["lastname"] . "<br>";
                };

            }
       
        ?>
      </div>
      <div class="col bg-success">
        <!-- qui vanno i pm -->
        <?php   
            foreach($db as $role){
                if($role ["role"] === "pm"){
                    echo $role["name"] . " " . $role["lastname"] . "<br>";
                };

            }
       
        ?>
      </div>

    </div>
  </div>
</body>
</html>