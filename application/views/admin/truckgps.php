<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
<link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />
<style>
    body { margin:0; padding:0; }
    #map { position:relative; top:0; bottom:0; width:100%; height:600px; }
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Truck GPS
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url().'admin/homepage'?>"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Truck GPS</a></li>
      </ol>
    </section>

    <section class="content">
        <div id="map"></div>
            <!--
      <div class="error-page">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content"><br/>
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Page under Maintenance.</h3>

          <p>
            Sorry, page is currently under maintenance. We'll be back soon! <br/>
            Meanwhile, you may <a href="<?=base_url().'admin/dashboard'?>">return to dashboard</a>.
          </p>

        </div>
        <!-- /.error-content 
      </div>
      <!-- /.error-page -->
    </section>
     
</div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>The Fourcasters</b>
    </div>
    <strong>Copyright &copy; 2018 <a>Angelogistics Forwarder Corporation</a>.</strong> All rights
    reserved.
  </footer>
  
  
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyC_DiOtu2XQP2MVuyut3fLxkX9xknmUl1Y",
    authDomain: "haul-ready.firebaseapp.com",
    databaseURL: "https://haul-ready.firebaseio.com",
    projectId: "haul-ready",
    storageBucket: "haul-ready.appspot.com",
    messagingSenderId: "195745422949"
  };
  firebase.initializeApp(config);
</script>
  <script>
  var app_url = "<?= base_url()?>";
       var locations = [];

    
// var map;
var infoWindow;


function initMap() {
    var defaultLocation = {lat: 14.6038593, lng: 120.9885243};
    var latlong1 = {lat: -24.363, lng: 130.044}
    var myOptions = {
        center: defaultLocation,
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP
  
    };
    var map = new google.maps.Map(document.getElementById('map'),myOptions);
    infoWindow = new google.maps.InfoWindow();
    getDataLatLong(map);
    
    

    var current_lat, current_long;
    if (navigator.geolocation) {
        var curr_pos = navigator.geolocation.getCurrentPosition(function(position){
            current_lat = position.coords.latitude;
            current_long = position.coords.longitude;
            console.log("LATITUDE : " + position.coords.latitude);
            console.log("LONGITUDE : " + position.coords.longitude);
        });
        //navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }

   
    
    

}

function changeMarkerPosition(marker,lat,long) {
    if(marker != null){

    }
        var latlng = new google.maps.LatLng(lat, long);
        marker.setPosition(latlng);
        console.log(marker);
}

var markers = [];
var d_name = "";
function getDataLatLong(map){
    var fbaseRef = firebase.database().ref("drivers");
    var ref = firebase.database().ref('users/passenger');
    
    fbaseRef.on('value',function(datasnapshot){
        // console.log('hehehe');
        var i = 0;
        clearMarkers();
        var drivers = datasnapshot.val();
        Object.keys(drivers).forEach(function(key, val) {
            var lat = drivers[key].lat;
            var long = drivers[key].lng;
            console.log(key, lat, long);
            var icon = app_url + "images/marker.png";
            var latlngset = new google.maps.LatLng(lat, long);
            getDriver(key);
            var marker = new google.maps.Marker({
                map: map,
                title : d_name,
                position : latlngset,
                icon : icon
            });
            var content = "Driver : " + d_name;
                        
            var infowindow = new google.maps.InfoWindow({
                content: content
            });
    
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
    
            markers.push(marker);
            setMapOnAll(map);
        });
        
    });
    
    
}

function getDriver(key){
    var url = app_url + "mobile/fetch_driver";
    $.ajax({
        async : false,
        url : url,
        type : "POST",
        dataType : "json",
        data : { 'driver_id' : key },
        success:function(res){
            console.log(res);
            if(res.success){
                
                var driver = res.driver;
                d_name = driver.fname + ' ' + driver.lname;
            }
            else{
                d_name = "N/A";
            }
        },
        error:function(res){
            console.log(res);
        }
    });
}

function setMapOnAll(map){
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}

function clearMarkers(){
    setMapOnAll(null);
    markers = [];
    console.log(markers);
}


// getDataLatLong();    

</script>
<?php $API_KEY = "AIzaSyC_DiOtu2XQP2MVuyut3fLxkX9xknmUl1Y"; ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?= $API_KEY ?>&libraries=places,geometry&callback=initMap"
async defer></script>


