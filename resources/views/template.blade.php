<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link href="../css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="image-fond">
      
    </div>

      <div class="container text-center">
        <nav class="navbar barre">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="../images/logo_sicilylines.png" alt="Logo de Sicily Lines" width="48" height="48">
              <span class="barre-titre">Sicily Lines</span>
            </a>
            @yield("barre-additionnelle")
          </div>
        </nav>

        @yield("contenu")
      </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </body>
</html>