<?php

$page_title = "Individual Partner";
$page_slug = "single-partner";
include('inc/header.php');

?>

    <div class="page-hero">
      <div class="container-fluid">
        <img src="http://www.unsplash.it/2000/1300/" nopin="nopin">
      </div>
    </div>


    <div class="page-content">
      
      <div class="container">

        <div class="row-fluid">
          <div class="col-sm-9 ">

            <div class="page-header">
              <h1>17th Street Farmers Market</h1>
            </div>

            <div class="page-content">
              <div class="partner-description">
                <p>I chose this partner instead of Forest Hill Park because there was a description for it available on the site. The 17th Street Farmers’ Market is located in the heart of downtown Richmond and is one of the oldest public markets in the United States. Weekly growers market is held Thursday through Sunday, and numerous special events, festivals and concerts are held throughout the year.</p>
                <p><em>2016 operating dates for the market are April 20th through November 3rd.</em></p>
              </div>
              <div class="partner-map">
                <div id="gmap-partner" class="gmap" data-address="Richmond, VA"></div>
              </div>
            </div>

          </div>

          <div class="col-sm-3 entry-sidebar">
            
            <div class="widget widget-donate">
              <h4 class="widget-title">Donate to this Partner</h4>
              <form>
                <button type="button" class="btn btn-default">$25</button>
                <button type="button" class="btn btn-default">$50</button>
                <button type="button" class="btn btn-default">$100</button>
                <button type="button" class="btn btn-default">$500</button>
                <input type="text" placeholder="$Custom" class="btn btn-default" id="custom-amount">
                <button type="submit" class="btn btn-primary">Go</button>
              </form>
            </div>

            <div class="widget widget-events">

              <h4 class="widget-title">Upcoming Events</h4>

              <div class="media media-event">
                <a href="#">
                <div class="media-left">
                  <img src="http://www.unsplash.it/60/60/" alt="" class="d-flex align-self-start mr-3" width="60" height="60">
                </div>
                <div class="media-body">
                  <h5 class="media-heading">17th Annual Brunswick Stew and Stout Festival</h5>
                  <p class="media-details">Nov 5 2016 · Sat 11am</p>
                </div>
                </a>
              </div>

              <div class="media media-event">
                <a href="#">
                <div class="media-left">
                  <img src="http://www.unsplash.it/60/60/" alt="" class="d-flex align-self-start mr-3" width="60" height="60">
                </div>
                <div class="media-body">
                  <h5 class="media-heading">Richmond Cider Celebration</h5>
                  <p class="media-details">Nov 2 2016 · Thu 11am</p>
                </div>
                </a>
              </div>

              <div class="media media-event">
                <a href="#">
                <div class="media-left">
                  <img src="http://www.unsplash.it/60/60/" alt="" class="d-flex align-self-start mr-3" width="60" height="60">
                </div>
                <div class="media-body">
                  <h5 class="media-heading">Another Event</h5>
                  <p class="media-details">Oct 1 2016 · Sun 9am</p>
                </div>
                </a>
              </div>

            </div>

            <div class="widget widget-subscribe">
              <h4 class="widget-title">Newsletter Signup</h4>
               <form action="#">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Your email here...">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="button">Go!</button>
                    </span>
                  </div>
               </form>
            </div>

          </div>



<?php 

$footer_inject = <<<EOT
  <script src="http://maps.googleapis.com/maps/api/js?libraries=geometry,places&ext=.js"></script>
  <script src="/assets/js/gmaps.js"></script>

  <script>

  function initialize() {
    var map = new GMaps({
          div: '#gmap-partner',
          lat: 0, 
          lng: 0,
          zoom: 0
    });

    GMaps.geocode({
      address: $('#gmap-partner').attr('data-address'),
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
  }
  google.maps.event.addDomListener(window, "load", initialize);

  </script>
EOT;

include('inc/footer.php');

?>