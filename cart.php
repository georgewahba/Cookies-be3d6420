<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->
        <?php
        if (isset($_POST['keuze'])) {
          $cookie_name ='mand';
          $cookie_value = $_POST['keuze'];
          setcookie($cookie_name, $cookie_value, time()+(86400 * 30), "/");
        }
        if (isset($_COOKIE['mand'])) {
          echo "gekozen item: ". $_COOKIE['mand'] ;
        }
        else {
          echo "  <form action=' ' method='post'>
                  keuze : <input type='text' name='keuze'/>
                  <input type='submit' value='submit'/>
                  </form>";
        }
         ?>


    </body>
</html>
