jQuery(document).ready(function ($) {

  // Création du slider (carrousel) en JQuery !

  var slideCount = $('#slider ul li').length;
  var slideWidth = $('#slider ul li').width();
  var slideHeight = $('#slider ul li').height();
  var sliderUlWidth = slideCount * slideWidth;

  $('#slider').css({ width: slideWidth, height: slideHeight });

  $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

  $('#slider ul li:last-child').prependTo('#slider ul');

  function moveLeft() {
    $('#slider ul').animate({
      left: + slideWidth
    }, 200, function () {
      $('#slider ul li:last-child').prependTo('#slider ul');
      $('#slider ul').css('left', '');
    });
  };

  function moveRight() {
    $('#slider ul').animate({
      left: - slideWidth
    }, 200, function () {
      $('#slider ul li:first-child').appendTo('#slider ul');
      $('#slider ul').css('left', '');
    });
  };

  $('a.control_prev').click(function () {
    moveLeft();
  });

  $('a.control_next').click(function () {
    moveRight();
  });
});
  //----------AUTOPLAY du slider ----------//

  $(document).ready(function() {
    setInterval(moveRight, 3000);
  });

  //=========== Plugin Bubble ============================

  $(document).ready(function() {
    var $element = $('#bubble');
    var phrases = [
      "Pourquoi les chats n'aiment-ils pas l'eau ?",
      "Parce qu'avec l'eau minet râle (^-^) !",
      "Toute la dromadaire aux jeux de mollets."
    ];
    var index = -1;
    (function loopAnimation() {
      index = (index + 1) % phrases.length;
      bubbleText({
        element: $element,
        newText: phrases[index],
        letterSpeed: 70,
        callback: function() {
          setTimeout(loopAnimation, 2000);
        },
      });
    })();
  });

  // =============================================================================
  // Passage du formulaire de connexion vers celui d'inscription

  // En javascript :

  // Il faudrait rajouter onclick entre ou et s'inscrire (~ligne 51)

  // var btn_inscrip = document.getElementById('btn-inscription');
  // var connex = document.getElementById('form-connex');
  // var inscrip = document.getElementById('form-inscrip');

  // function btn_inscrire(){

  // connex.style.display="none";
  // inscrip.style.display="block";
  // };

  // En JQuery :

  var connex = $('#form-connex');
  var inscrip = $('#form-inscrip');
  var btn_inscrip = $('#btn-inscription');
  var retour = $('#form-connex');
  var btn_retour = $('#btn-retour');

  btn_inscrip.click(function (){
    connex.css('display', 'none');
    inscrip.css('display', 'block');
  });

  btn_retour.click(function (){
    retour.css('display', 'block');
    inscrip.css('display', 'none');

  });

  // =============================================================================
  // Création en JQuery du calendrier pour la date de naissance !
$("#flatpickr").flatpickr({
    "locale": "fr", // locale for this instance only
    dateFormat : "d-m-Y",
});

  // =============================================================================
  // SCRIPT PAGE CATEGORIES
  // =============================================================================
  $('.filter').on('click', function(event) {
    className = $(this).attr('target');
    $('.card').hide();
    $('.card.'+ className).show();
  });
  $('.tout').on('click', function(event) {
    $('.card').show();
  });
  // =============================================================================
