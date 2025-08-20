<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
   <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet">
   <title>Document</title>
   <?php wp_head() ?>
</head>

<body>
   <hr class="vertical-line">
   <div class="container">
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
   <hr class="header-hr">