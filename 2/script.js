$(document).ready(function(){

	var stepNumber = 1;

	$('#button-next').click(function(){
		$('#button-back').show();
		$('#step'+stepNumber).hide();
		stepNumber++;
		$('#step'+stepNumber).show();
		if(stepNumber == 3){
			$('#button-next').hide();
			$('#button-finish').show();
		}
	});


	$('#button-back').click(function(){
		$('#step'+stepNumber).hide();
		stepNumber--;
		$('#step'+stepNumber).show();
		if(stepNumber == 2) {
			$('#button-finish').hide();
			$('#button-next').show();
		}
		if(stepNumber == 1){
			$('#button-back').hide();
		}
	});


	$('#button-finish').click(function(){
		if(stepNumber == 3) {
			finish();
		}
	});


	function isFormValid(){
		var result = $('#step1 input').val() != '' &&
		$('#step2 input').val() != '' &&
		validateEmail($('#step3 input').val());
		console.log(result);
		return result;
	}

	function finish(){
		if(isFormValid()){

			$('form').hide();
			$('body').html("<p>Спасибо!</p>")
		} else {
			alert("Введите все данные корректно, пожалуйста.");
		}
	}

	function validateEmail(email) {
  		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  		return re.test(email);
	}
	
});
