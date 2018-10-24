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
    
    var x = document.getElementById("warning-text");
    

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
        // console.log(marker);
}

var markers = [];
var d_name;
function getDataLatLong(map){
    var fbaseRef = firebase.database().ref("drivers");
    var ref = firebase.database().ref('users/passenger');
    
    fbaseRef.on('value',function(datasnapshot){
        // console.log('hehehe');
        var i = 0;
        clearMarkers();
        console.log(datasnapshot.val());
        var drivers = datasnapshot.val();
        console.log(drivers);
        var lat = drivers.lat;
        var long = drivers.lng;
        var icon = app_url + "images/logo.jpg";
            var latlngset = new google.maps.LatLng(lat, long);
            var marker = new google.maps.Marker({
                map: map,
                title : "Driver",
                position : latlngset,
                icon : icon
            });
            
            var content = "Driver : ";
                        
            var infowindow = new google.maps.InfoWindow({
                content: content
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });

            markers.push(marker);
            setMapOnAll(map);
            console.log(markers)
        // Object.keys(drivers).forEach(function(key) {
        //     console.log(key)
        //     // var l = drivers[key].l;
        //     // var lat = l[0];
        //     // var long = l[1];
            
        //     // getDriver(key);
        //     // var url = app_url + "executeadmin/fetch_driver";
            
        //     // var driver = null;
        //     // var car = null;
        //     // $.ajax({
        //     //     async : false,
        //     //     url : url,
        //     //     type : "POST",
        //     //     dataType : "json",
        //     //     data : { 'uid' : key },
        //     //     success:function(res){
        //     //         console.log(res);
        //     //         driver = res.driver;
        //     //         car = res.vehicle;
        //     //         // console.log(driver);
        //     //         // return driver;
        //     //         // console.log(d_name);
        //     //         // d_name = driver.name;
        //     //         // console.log(d_name);
        //     //     },
        //     //     error:function(res){
        //     //         console.log(res);
        //     //     }
        //     // });

        //     var icon = app_url + "images/logo.jpg";
        //     var latlngset = new google.maps.LatLng(lat, long);
        //     var marker = new google.maps.Marker({
        //         map: map,
        //         title : "Driver",
        //         position : latlngset,
        //         icon : icon
        //     });
            
        //     var content = "Driver : " + driver.name;
                        
        //     var infowindow = new google.maps.InfoWindow({
        //         content: content
        //     });

        //     google.maps.event.addListener(marker, 'click', function() {
        //         infowindow.open(map,marker);
        //     });

        //     markers.push(marker);
        //     setMapOnAll(map);
            
          
        // });
        
        
    });
    
    
}

function getDriver(key){
    var url = app_url + "executeadmin/fetch_driver";
    // var d_name = "hehe";
    $.ajax({
        url : url,
        type : "POST",
        dataType : "json",
        data : { 'uid' : key },
        success:function(res){
            console.log(res);
            var driver = res.driver;
            d_name = driver;
            // console.log(driver);
            // return driver;
            // console.log(d_name);
            // d_name = driver.name;
            // console.log(d_name);
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
    // console.log(markers);
}


getDataLatLong();    

</script>
<?php $API_KEY = "AIzaSyC_DiOtu2XQP2MVuyut3fLxkX9xknmUl1Y"; ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?= $API_KEY ?>&libraries=places,geometry&callback=initMap"
async defer></script>


