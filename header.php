<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="<?php echo mix('css/app.css') ?>">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
   <title>Document</title>
   <?php wp_head() ?>
</head>

<body>
   <div class="my-container">
      <header class="main-header">
         <div class="row">
            <div class="col-7">
               <h1>SaulDsign</h1>
            </div>
            <div class="col-5">
               <?php wp_nav_menu([
                  "theme_location" => "top",
                  "container" => "nav",
               ]); ?>
            </div>
         </div>
      </header>
   </div>
   <hr>