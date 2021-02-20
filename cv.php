<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/main.css" />
  <title>Faucheron</title>
</head>

<body>
  <div class="general">
    <?php  include("templates/nav.php") ?>
    <div class="container-persocv">
<h1>CV</h1>
<hr>

      <?php

      $handle = fopen("resume.txt", "r");
      if ($handle) {
        while (($line = fgets($handle)) !== false) {
          echo("<p>$line</p>");
        }

        fclose($handle);
      } else {
        // error opening the file.
      }

      ?>
    </div>
  </div>
</body>

</html>