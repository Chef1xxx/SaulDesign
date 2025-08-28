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
   <?php wp_head() ?>
</head>

<body>
   <div class="container">
      <header class="main-header">
         <div class="row">
            <div class="col-7">
               <h1>SaulDsign</h1>
            </div>
            <div class="col-5">
               <nav class="navbar main-menu">
                  <div class="container-fluid">
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu"
                        aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>

                     <div class="collapse navbar-collapse menu-list" id="mainMenu">
                        <?php
                        wp_nav_menu(array(
                           'theme_location' => 'top',
                           'menu_class' => 'navbar-nav me-auto',
                           'container' => false,
                           'fallback_cb' => false,
                           'depth' => 2,
                           'link_before' => '<span>',
                           'link_after' => '</span>'
                        ));
                        ?>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </header>
   </div>
   <hr class="header-hr">