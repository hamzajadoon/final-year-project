<?php
session_start();
$date = date('Y-m-d');
if(!isset($_SESSION['username']))
{
 $_SESSION['guest']=1;
}
if (!isset($_SESSION['username']) && !isset($_SESSION['guest']))
{
 $_SESSION['msg'] = "You must log in first";
 header('location: login.php');
}
if (isset($_GET['logout'])==1)
{
 session_destroy();
 unset($_SESSION['username']);
 header("location: login.php");
}
if (isset($_GET['logout'])==2)
{
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

include("master/header.php");
?>

<div class="club-middle-container">
  <div class="container">
    <div class="my_div">
      <h3><b>Here you can see the most known cricket clubs in London</b></h3>
    </div>
    <br>
    <div id="map"></div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(51.550198, -0.187756),
          zoom: 11
        });
        var infoWindow = new google.maps.InfoWindow;
            downloadUrl('php/maps.php', function(data) {
              var xml = data.responseXML;
              var markers = xml.documentElement.getElementsByTagName('marker');
              Array.prototype.forEach.call(markers, function(markerElem) {
                var id = markerElem.getAttribute('id');
                var name = markerElem.getAttribute('name');
                var address = markerElem.getAttribute('address');
                var type = markerElem.getAttribute('type');
                var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

                var infowincontent = document.createElement('div');
                var strong = document.createElement('strong');
                strong.textContent = name
                infowincontent.appendChild(strong);
                infowincontent.appendChild(document.createElement('br'));

                var text = document.createElement('text');
                text.textContent = address
                infowincontent.appendChild(text);
                var icon = customLabel[type] || {};
                var marker = new google.maps.Marker({
                  map: map,
                  position: point,
                  label: icon.label
                });
                marker.addListener('click', function() {
                  infoWindow.setContent(infowincontent);
                  infoWindow.open(map, marker);
                });
              });
            });
          }

          function downloadUrl(url, callback) {
            var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

            request.onreadystatechange = function() {
              if (request.readyState == 4) {
                request.onreadystatechange = doNothing;
                callback(request, request.status);
              }
            };
            request.open('GET', url, true);
            request.send(null);
          }

          function doNothing() {}
        </script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGPKIxxUo32JLPCOBflcGbApA_z3SWQ84&callback=initMap">
        </script>
    </div>
  </div>

  <?php include("master/footer.php"); ?>
