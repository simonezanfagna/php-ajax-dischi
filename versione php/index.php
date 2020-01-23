<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

    <header>
      <img class="logo" src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png" alt="">
    </header>

    <main>
      <select id="genere">
        <option value="">Scegli un genere</option>
        <option value="pop">Pop</option>
        <option value="rock">Rock</option>
        <option value="jazz">Jazz</option>
        <option value="metal">Metal</option>
      </select>
      <div class="container">

        <?php include 'data.php' ?>

        <?php foreach ($dischi as $key => $disco) {?>
          <div id="template-disco" class="container-disco" data-genere = <?php echo $disco['genre']; ?>>
            <img class="copertina-album" src=<?php echo $disco['poster']; ?> alt="">
            <p class="titolo-album"><?php echo $disco['title']; ?></p>
            <p class="artista"><?php echo $disco['author']; ?></p>
            <p class="anno"><?php echo $disco['year']; ?></p>
          </div>
        <?php } ?>

      </div>
    </main>

  </body>
</html>
