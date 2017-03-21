$(document).ready(function() {

	$('#myModal').modal('show');

});

$(function(){
       $("#exampleInputName2").prop('required',true);
       $("#exampleInputEmail2").prop('required', true);
});

$(".startButton").on("click", function() {

	event.preventDefault();

	$('#myModal').modal('hide');

});




