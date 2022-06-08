<?php
    $grey = 'grigio';
    $green = 'verde';
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Snack 6</title>
    <style>
        .grigio, .verde{
            width: 500px;
            text-align: center;
            margin: auto;
            padding: 20px;
            font-size: 25px;
        }
        .grigio{
            background-color: lightgrey;
            
        }
        .verde{
            background-color: greenyellow;
        }
    </style>    
</head>
 <body>
        <?php foreach($db as $key => $data):?>
            <div class="<?php if($key === "teachers"){echo $grey;}else{echo $green;} ?>">
                <?php foreach($data as $miniData) :?>
                    <p><?php echo $miniData['name'] ?> <?php echo $miniData['lastname'] ?></p>
                <?php endforeach;?>
            </div>
        <?php endforeach;?>

     
 </body>
 </html>