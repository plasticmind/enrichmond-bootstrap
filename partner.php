<?php

$page_title = "Individual Partner";
$page_slug = "single-partner";
include('inc/header.php');

?>

    <div class="page-hero">
      <div class="container-fluid">
        <img src="http://www.unsplash.it/2000/1300/">
      </div>
    </div>


    <div class="page-content">
      
      <div class="page-header">
        <div class="container">

          <h1>17th Street Farmers Market</h1>

        </div>
      </div>

      <div class="page-body">
        <div class="container">

          <div class="partner-description">
            <p>I chose this partner instead of Forest Hill Park because there was a description for it available on the site. The 17th Street Farmers’ Market is located in the heart of downtown Richmond and is one of the oldest public markets in the United States. Weekly growers market is held Thursday through Sunday, and numerous special events, festivals and concerts are held throughout the year.</p>

            <p><em>2016 operating dates for the market are April 20th through November 3rd.</em></p>          
          </div>
          
          <div class="partner-map">
                <div id="gmap-partner" class="gmap"></div>
          </div>
        </div>
      </div>

<?php 

$footer_inject = <<<EOT
  <script src="http://maps.google.com/maps/api/js"></script>
  <script src="/assets/js/gmaps.js"></script>

  <script>

  var map = new GMaps({
        div: '#gmap-partner',
        lat: 0, 
        lng: 0
  });

  GMaps.geocode({
    address: "Richmond, VA",
    callback: function(results, status) {
      if (status == 'OK') {
        var latlng = results[0].geometry.location;
        map.fitBounds(results[0].geometry.viewport);
        map.addMarker({
          lat: latlng.lat(),
          lng: latlng.lng()
        });
      }
    }
  });

  </script>
EOT;

include('inc/footer.php');

?>