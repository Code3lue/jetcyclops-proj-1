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


function initMap() {
 var map = new google.maps.Map(document.getElementById('map'), {
   center: {lat: 32.080695, lng: -81.093864},
   zoom: 11
 });
 var infoWindow = new google.maps.InfoWindow({map: map});
 // Try HTML5 geolocation.
 if (navigator.geolocation) {
   navigator.geolocation.getCurrentPosition(function(position) {
     var pos = {
       lat: position.coords.latitude,
       lng: position.coords.longitude
     };
     infoWindow.setPosition(pos);
     infoWindow.setContent('Location found.');
     map.setCenter(pos);
   }, function() {
     handleLocationError(true, infoWindow, map.getCenter());
   });
 } else {
   // Browser doesn't support Geolocation
   handleLocationError(false, infoWindow, map.getCenter());
 }
}
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
 infoWindow.setPosition(pos);
 infoWindow.setContent(browserHasGeolocation ?
                       'Error: The Geolocation service failed.' :
                       'Error: Your browser doesn\'t support geolocation.');
}
