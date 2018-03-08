function myMap() {
  var myCenter = new google.maps.LatLng(43.6093566,3.8799937999999656);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}