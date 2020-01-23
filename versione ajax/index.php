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


      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>

    <script id="entry-template" type="text/x-handlebars-template">
      <div id="template-disco" class="container-disco" data-genere = "{{genere_disco}}">
        <img class="copertina-album" src="{{copertina}}" alt="">
        <p class="titolo-album">{{titolo}}</p>
        <p class="artista">{{artista}}</p>
        <p class="anno">{{anno}}</p>
      </div>
    </div>
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="main.js" charset="utf-8"></script>

  </body>
</html>
