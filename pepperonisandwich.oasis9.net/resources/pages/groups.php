<div id="groups-page" class="row">
  <div class="col s9">
    <div id="map"></div>
  </div>
  <div id="groups" class="col s3 white">
    <div data-group="Rick Sanchez" class="row group">
      <div class="col s3">
        <img src="images/rick.jpg">
      </div>
      <div class="col s9">
          <h5 id="name"></h5>
          <p>Travel Start: 10AM&nbsp; End: 10:30AM</p>
      </div>
    </div>
    <div class="divider"></div>
    <div data-group="Morty Smith" class="row group">
      <div class="col s3">
        <img src="images/morty.jpg">
      </div>
      <div class="col s9">
        <h5 id="name"></h5>
        <p>Travel Start: 10AM&nbsp; End: 10:30AM</p>
      </div>
    </div>
    <div class="divider"></div>
    <div data-group="Jerry Smith" class="row group">
      <div class="col s3">
        <img src="images/jerry.png">
      </div>
      <div class="col s9">
        <h5 id="name"></h5>
        <p>Travel Start: 12PM&nbsp; End: 11PM</p>
      </div>
    </div>
    <div class="divider"></div>
    <div data-group="Mr Poopybutthole" class="row group">
      <div class="col s3">
        <img src="images/mrpoopybutthole.png">
      </div>
      <div class="col s9">
        <h5 id="name"></h5>
        <p>Travel Start: 3PM&nbsp; End: 3:20PM</p>
      </div>
    </div>
    <div class="divider"></div>
  </div>
</div>
<script src="js/groups.js"></script>
<script src="js/markerclusterer.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4AFYIYPuzfR-7HOR7FzMLqwjqP77ZgPw&libraries=visualization&callback=initMap"></script>
