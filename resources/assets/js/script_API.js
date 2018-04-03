// script d'appel d'une API JSON pour afficher les amis !!!!!!!!!!

$(document).ready( function() {
        $.getJSON('https://api.myjson.com/bins/lgsab', function(donnees) {
          for (var i=0; i<donnees.length; i++){
          $('#API_amis').append('<div class="a"><p><img src="' + donnees[i].img +'" width="90" height="90" alt="Clique sur l\'image">' +"   " + donnees[i].pseudo +'</p></div>');
          }
        });
        setInterval(function() {
          $.getJSON('https://www.chucknorrisfacts.fr//api/get?data=tri:alea').done(function(donnees) {
            $('#Chuck_fr').html('<p>' + donnees[0].fact + '</p>');
          }).fail(function(data){
            alert('fail: Blague Chuck Norris non chargée');
          });
        },8000);
      });
// script Chuck_fr
