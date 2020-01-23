var source = $('#entry-template').html();
var template = Handlebars.compile(source);

$.ajax({
  'url': 'data.php',
  'method': 'GET',
  'success': function (data) {
    var disco = JSON.parse(data);
    console.log(disco);
    for (var i = 0; i < disco.length; i++) {
      var context = {
        copertina : disco[i].poster,
        titolo : disco[i].title,
        artista : disco[i].author,
        anno : disco[i].year,
        genere_disco : disco[i].genre
      };
      var html = template(context);
      $('.container').append(html);
    }
  },
  'error': function () {
    alert('errore')
  }
})

$('#genere').change(function () {
  $('.container').empty();
  var genere_scelto = $(this).val();
  if (genere_scelto == "") {
    $.ajax({
      'url': 'data.php',
      'method': 'GET',
      'success': function (data) {
        var disco = JSON.parse(data);
        console.log(disco);
        for (var i = 0; i < disco.length; i++) {
          var context = {
            copertina : disco[i].poster,
            titolo : disco[i].title,
            artista : disco[i].author,
            anno : disco[i].year,
            genere_disco : disco[i].genre
          };
          var html = template(context);
          $('.container').append(html);
        }
      },
      'error': function () {
        alert('errore')
      }
    })
  }
  else {
    $.ajax({
      'url': 'data.php',
      'method': 'GET',
      'success': function (data) {
        var disco = JSON.parse(data);
        console.log(disco);
        for (var i = 0; i < disco.length; i++) {
          if (disco[i].genre.toLowerCase() == genere_scelto.toLowerCase()) {
            var context = {
              copertina : disco[i].poster,
              titolo : disco[i].title,
              artista : disco[i].author,
              anno : disco[i].year,
              genere_disco : disco[i].genre
            };
            var html = template(context);
            $('.container').append(html);
          }
        }
      },
      'error': function () {
        alert('errore')
      }
    })
  }
})
