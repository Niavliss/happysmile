// script pour le formulaire de modification 

$(document).ready(function() {
	var $mdp = $('#Mdp');
    var $confirmation = $('#Mdp2');
    
    $('#formu').on('submit', function(event) {
    	event.preventDefault();
      console.log("test");
      if ($mdp.val()!=$confirmation.val())
      {
      	$mdp.addClass('error');
      	$confirmation.addClass('error');
      }
      else{
      	$mdp.removeClass('error');
      	$confirmation.removeClass('error');
      }
  });
})