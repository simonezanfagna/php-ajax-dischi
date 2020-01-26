<?php include 'data.php' ?>
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
        <?php $generiLista = []; ?>
        <?php foreach ($dischi as $key => $disco) {
          var_dump($disco['genre']);
          if (!in_array($disco['genre'], $generiLista)) {
            array_push($generiLista, $disco['genre']); ?>
            <option value="<?php echo $disco['genre']; ?>"><?php echo $disco['genre']; ?></option>
          <?php }?>
        <?php } ?>
      </select>

      <div class="container">

        <?php foreach ($dischi as $key => $disco) {?>
          <div id="template-disco" class="container-disco" data-genere ="<?php echo $disco['genre']; ?>">
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
