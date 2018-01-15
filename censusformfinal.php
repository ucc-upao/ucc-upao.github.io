<?php
include('connection.php');


$latitude = $_POST['latitude1'];
$longitude = $_POST['longitude2'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$street = $_POST['street'];
$brgy = $_POST['brgy'];
$zone = $_POST['zone'];
$district = $_POST['district'];
$remarks = $_POST['remarks'];
$isf = $_POST['isf'];

$bday = $_POST['bday'];
$occ = $_POST['occ'];
$sn = $_POST['sn'];
$bday1 = $_POST['bday1'];
$age1 = $_POST['age1'];
$occ1 = $_POST['occ1'];

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `censusform`(`latitude`, `longitude`, `FirstName`, `MiddleName`, `LastName`, `Age`, `Gender`, `Birthday`, `Occupation`, `Street`, `Barangay`, `Zone`, `District`, `Remarks`, `ISF`, `SpouseName`, `SpouseAge`, `SpouseBirthday`, `SpouseOccupation`) VALUES ('$latitude','$longitude','$fname','$mname','$lname','$age','$gender','$bday','$occ','$street','$brgy','$zone','$district','$remarks','$isf','$sn','$age1','$bday1','$occ1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>

<!DOCTYPE html>
<html>

<head>
  <title>censusform</title>
</head>
<body>

</div>
  </ul>
      <img src="PICTURE/caloocan-logo.jpg" class="img-responsive"></a>
        
       <p><B>REPUBLIC OF THE PHILIPPINES</P>
       <p>CITY OF CALOOCAN</P>
      
       <h2>URBAN POOR AFFAIRS OFFICE</h2></B>
    <img src="PICTURE/tao-una.jpg" class="img-responsive" ></a>
    

    <a href="adminFormRecords.php">Admin</a>





<button onclick="getLocation()">get address</button>

<div id="mapholder"></div>

<form method="post" action=""><br><br>



<h1>latitude<p id="lat" name="latitude"></p>
<h1>longitude<p id="lon" name="longitude"></p>
<input type="text" id="lat1" name="latitude1" style="display:none;"></input>
<input type="text" id="lon1" name="longitude2" style="display:none;"></input>


<h1>Firstname <input type="text" name='fname'><br>
<h1>Middlename <input type="text" name='mname'><br>
<h1>Lastname <input type="text" name='lname'><br>
<h1>Age<input type="number" name='age'><br>
<label >Gender:</label>
  <select class="form-control" id="gender" name="gender">
    <option>Male</option>
    <option>Female</option>
</select><br>
<span>Address:<br></span>
<h1>Street <input type="text" name='street'><br>
<h1>Barangay <input type="number" name='brgy'><br>
<h1>Zone <input type="number" name='zone'><br>
<h1>District <input type="number" name='district'><br>
<label>Remarks:</label>
  <select class="form-control" id="remarks" name="remarks">
    <option>Road Right Way</option>
    <option>Water Ways</option>
    <option>Danger Area</option>
    <option>Private Lot</option>
    <option>Government Lot</option>
</select><br>
<label>ISF Classification:</label>
  <select class="form-control" id="isf" name="isf">
    <option>Owner</option>
    <option>Sharer</option>
    <option>Renter</option>
</select><br>

<span>Birthday <input type="date" name='bday'><br></span>
<span>Occupation <input type="text" name='occ'><br></span>
<span>Spouse Name <input type="text" name='sn'><br></span>
<span>Birthday <input type="date" name='bday1'><br></span>
<span>Age<input type="number" name='age1'><br></span>
<span>Occupation <input type="text" name='occ1'><br></span>



 
<input type="submit" name='submit'><br>





<script>
var x = document.getElementById("demo");
var lat = document.getElementById("lat");
var lon = document.getElementById("lon");
var lat1 = document.getElementById("lat1");
var lon1 = document.getElementById("lon1");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;
    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=400x300&key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";


     lat.innerHTML = position.coords.latitude;
      lon.innerHTML =position.coords.longitude;

      lat1.value = lat.innerHTML;
      lon1.value = lon.innerHTML;





  var myCenter = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

}
//To use this code on your website, get a free API key from Google.
//Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>





</body>
</html>




