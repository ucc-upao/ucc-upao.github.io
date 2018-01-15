 <link rel="manifest" href="manifest.json">
 <link rel="javascript" href="service-worker.js">

<?php
include('connection.php');

if(isset($_POST['submit'])){

$latitude = $_POST['latitude1'];
$longitude = $_POST['longitude1'];
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
$others = $_POST['others'];
$sss = $_POST['sss'];
$tin = $_POST['tin'];
$gsis = $_POST['gsis'];
$pi = $_POST['pi'];
$pc = $_POST['pc'];

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `censusform`(`id`, `latitude`, `longitude`, `FirstName`, `MiddleName`, `LastName`, `Age`, `Gender`, `Birthday`, `Occupation`, `Street`, `Barangay`, `Zone`, `District`, `Remarks`, `ISF`, `SpouseName`, `SpouseAge`, `SpouseBirthday`, `SpouseOccupation`, `others`, `sss`, `tin`, `gsis`, `pagibig`, `policeclearance`) VALUES ('$latitude','$longitude','$fname','$mname','$lname','$age','$gender','$bday','$occ','$street','$brgy','$zone','$district','$remarks','$isf','$sn','$age1','$bday1','$occ1','$sss','$tin','$gsis','$pi','$pc')";





if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>

<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["upload"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
  <!DOCTYPE html>
<html>

<script type="text/javascript">
  if('serviceWorker' in navigator){
  navigator.serviceWorker
  .register('service-worker.js')
  .then(function () { console.log('Service Worker Registered'); })}
</script>

<title>UPAO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/w3.css">



<body style="background-image: url('image/background.png');background-attachment: fixed;background-position: center;;background-repeat: no-repeat;background-size: cover;">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-left-align w3-large" style=" background-image: url('image/background1.png');background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
 	<div class="w3-col w3-section w3-padding-32" style="width: 30%;">
	  <a href="#" class="w3-bar-item w3-right w3-padding-large">
  		<img src="image/caloocan-logo.jpg" class="w3-right" style="height:100px;width:100px" alt="logo">
	  </a> 		
 	</div>
 	<div class="w3-col" style="width: 40%;">
	  <div class="w3-padding-small w3-hide-small"></div>
	  <a href="#" class="w3-bar-item w3-padding-large" style="width:100%;text-decoration: none;">
	  	<table class="w3-row w3-center w3" style="font-family:Times-New-Roman; font-weight: bold;width: 100%;">
	  		<tr>
	  			<td class="w3-text-black"><h2>Republic of the Philippines</h2></td>
	  		</tr>
	  		<tr>
	  			<td class="w3-text-black">City of Caloocan</td>
	  		</tr>
	  		<tr>
	  			<td class="w3-text-white"><b>URBAN POOR AFFAIRS</b></td>
	  		</tr>
	  	</table>
	  </a>		
 	</div>
 	<div class="w3-col w3-section w3-padding-32" style="width: 30%">
	  <a href="#" class="w3-bar-item w3-left w3-padding-large">
  		<img src="image/tao.png" class="w3-right" style="height:100px;width:100px" alt="logo">
	  </a> 		
 	</div>
  </div>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:250px">    
	<div class="w3-padding-32 w3-hide-large w3-hide-medium"></div>
	<div class="w3-container">		
		<a href="adminFormRecords.php" class="w3-panel"><input type="button" class="w3-button w3-grey" value="Records"/></a>	
	</div>
	<!-- The Grid -->
	<div class="w3-row">
    	<!-- Left Column -->	
	    <div class="w3-col m6 l8">
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
						<button onclick="getLocation()">get address</button>
						<p>latitude<span id="lat" name="latitude"></span></p>
						<p>longitude<span id="lon" name="longitude"></span></p>
						<form method="post" action="">
						<input type="text" id="lat1" name="latitude1" style="display:none;"/>
						<input type="text" id="lon1" name="longitude1" style="display:none;"/>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
				<div id="googleMap" style="width:100%;height:300px;"></div>
			  </div>
	    	</div>
	    <!-- End Left Column -->
	    </div>
	    <!-- Right Column -->	
	    <div class="w3-col m6 l4">
		    <div> 
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<img src="image/user.jpg" style="width:100%;height:300px;">
			  </div>		       
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		            <form action="upload.php" method="post" enctype="multipart/form-data">
   						 Select image to upload:
  					  <input type="file" name="fileToUpload" id="fileToUpload">
    			

						<button class="w3-button w3-green w3-block"  type="submit" name="upload">Upload</button>
						</form>

		            </div>
		          </div>
		        </div>
		      </div>
	    	</div>
	    <!-- End Right Column -->
	    </div>
	<!-- End Grid -->
	 </div>

	  <!-- The Grid -->
	  <div class="w3-row">
	    <!-- Left Column -->
	    <div class="w3-col m3">
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Firstname</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="text" name='fname' class="w3-input w3-border w3-block" placeholder="Firstname">
		      </div>
	    	</div>
	    <!-- End Left Column -->
	    </div>
	    <!-- Middle Column -->
	    <div class="w3-col m3">    
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Middlename</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="text" name='mname' class="w3-input w3-border w3-block" placeholder="Middlename">
		      </div>
	    	</div>
	    </div>
	    <div class="w3-col m3">    
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Lastname</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="text" name='lname' class="w3-input w3-border w3-block" placeholder="Lastname">
		      </div>
	    	</div>
		<!-- End Middle Column -->
	    </div>
	    <!-- Right Column -->
	    <div class="w3-col m3">
	      <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Age</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		       <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="number" name='age' class="w3-input w3-border w3-block" placeholder="Age">
		      </div>
	    	</div>      
	    <!-- End Right Column -->
	    </div>    
	  <!-- End Grid -->
	  </div>
	  <!-- The Grid -->
	  <div class="w3-row">
	    <!-- Left Column -->
	    <div class="w3-col m3">
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Gender</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<select class="w3-input w3-border" id="gender" name="gender">
				    <option>Male</option>
				    <option>Female</option>
				</select>
		      </div>
	    	</div>
	    <!-- End Left Column -->
	    </div>
	    <!-- Middle Column -->
	    <div class="w3-col m3">    
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Birthday</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="date" name='bday' class="w3-input w3-border w3-block">
		      </div>
	    	</div>
	    </div>
	    <div class="w3-col m3">    
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Occupation</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="text" name='occ' class="w3-input w3-border w3-block" placeholder="Occupation">
		      </div>
	    	</div>
		<!-- End Middle Column -->		
	    </div>
	  <!-- End Grid -->
	  </div>
	  <!-- The Grid -->
	  <div class="w3-row">
	    <!-- Left Column -->
	    <div class="w3-col m3">
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Street</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="text" name='street' class="w3-input w3-border w3-block" placeholder="Street">
		      </div>
	    	</div>
	    <!-- End Left Column -->
	    </div>
	    <!-- Middle Column -->
	    <div class="w3-col m3">    
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Barangay</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="number" name='brgy' class="w3-input w3-border w3-block" placeholder="Barangay">
		      </div>
	    	</div>
	    </div>
	    <div class="w3-col m3">    
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Zone</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="number" name='zone' class="w3-input w3-border w3-block" placeholder="Zone">
		      </div>
	    	</div>
		<!-- End Middle Column -->
	    </div>
	    <!-- Right Column -->
	    <div class="w3-col m3">
	      <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">District</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		       <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="number" name='district' class="w3-input w3-border w3-block" placeholder="District">
		      </div>
	    	</div>      
	    <!-- End Right Column -->
	    </div>    
	  <!-- End Grid -->
	  </div>
	  <!-- The Grid -->
	  <div class="w3-row">
	    <!-- Left Column -->
	    <div class="w3-col m3">
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Remarks</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<select class="w3-input w3-border" id="remarks" name="remarks">
				    <option>Road Right Way</option>
				    <option>Water Ways</option>
				    <option>Danger Area</option>
				    <option>Private Lot</option>
				    <option>Government Lot</option>
				</select>
		      </div>
	    	</div>
	    <!-- End Left Column -->
	    </div>
	    <!-- Middle Column -->
	    <div class="w3-col m3">    
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">ISF Classification</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<select class="w3-input w3-border" id="isf" name="isf">
				    <option>Owner</option>
				    <option>Sharer</option>
				    <option>Renter</option>
				</select>
		      </div>
	    	</div>
	    </div>
	     <div class="w3-col m6">    
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Spouse Name</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="text" name='sn' class="w3-input w3-border w3-block" placeholder="Spouse Name">
		      </div>
	    	</div>
		<!-- End Middle Column -->
	    </div>
	  <!-- End Grid -->
	  </div>
	  <!-- The Grid -->
	  <div class="w3-row">
	    <!-- Left Column -->
	    <div class="w3-col m3">
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Occupation</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="text" name='occ1' class="w3-input w3-border w3-block" placeholder="Occupation">
		      </div>
	    	</div>
	    <!-- End Left Column -->
	    </div>
	    <!-- Middle Column -->
	    <div class="w3-col m3">    
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Age</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="number" name='age1' class="w3-input w3-border w3-block" placeholder="Age">
		      </div>
	    	</div>
		<!-- End Middle Column -->
	    </div>
	    <!-- Right Column -->
	    <div class="w3-col m3">
	      <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Birthday</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<input type="date" name='bday1' class="w3-input w3-border w3-block">
		      </div>
	    	</div>      
	    <!-- End Right Column -->
	    </div>    
	  <!-- End Grid -->
	  </div>
	  <!-- The Grid -->
	  <div class="w3-row">
	    <!-- Left Column -->
	    <div class="w3-col m3">    
		    <div>    
		      <div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Fill up</h4>
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<p>
	  				<label>SSS #</label>
			      	<input type="text" name='sss' class="w3-input w3-border">
  				</p>
		      	<p>
	  				<label>TIN #</label>
			      	<input type="text" name='tin' class="w3-input w3-border">
  				</p>
		      	<p>
	  				<label>GSIS #</label>
			      	<input type="text" name='gsis' class="w3-input w3-border">
  				</p>
		      	<p>
	  				<label>Pag-Ibig #</label>
			      	<input type="text" name='pi' class="w3-input w3-border">
  				</p>
		      	<p>
	  				<label>Police Clearance #</label>
			      	<input type="text" name='pc' class="w3-input w3-border">
  				</p>
				
		      </div>
	    	</div>
	    <!-- End Left Column -->
	    </div>
	    <!-- Middle Column -->
	    <div class="w3-col m3">
	      <div>    
	      	<div class="w3-row-padding">
		        <div class="w3-col m12">
		          <div class="w3-card-2 w3-round w3-white">
		            <div class="w3-container w3-padding">
		              <h4 class="w3-text-black">Others</h4>
		            </div>
		          </div>
		        </div>
	       	</div>
		    <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
		      	<p>
			      	<input class="w3-check"  id="others1" type="checkbox" onclick="mycheck()">
			      <label>Birth Certificate</label>
			      <p id="demo1" style="display:none;" ></p>
			      <input  name="others"  id="ot1"  onchange="mycheck()" type="text" style="display:none;">
  				</p>
		      	<p> 
			      	<input class="w3-check"  value="Marriage" id="others2" type="checkbox">
			      	<label>Marriage</label>
			      	 <p id="demo2" style="display:none;" ></p>
			      	<input  name="others" id="ot2"  onchange="mycheck()"  type="text" style="display:none;" >
	  				
  				</p>
		      	<p>
			      	<input class="w3-check"  value="Cedula" id="others3" type="checkbox">
			      	<label>Cedula</label>
			      	 <p id="demo3" style="display:none;" ></p>
			      	<input class="w3-check" id="ot3"  onchange="mycheck()" name="others"  type="text" style="display:none;">
	  				
  				</p>
				
		    </div>
	       </div>      
	    <!-- End Middle Column -->
	    </div>  
	    <!-- Right Column -->
	    <div class="w3-col m6">
	      <div>    
		    <div class="w3-container w3-margin w3-padding-16">
              <h4 class="w3-text-black w3-center" name="submit"><input type="submit" class="w3-button w3-block w3-green" name="submit" value="SAVE"></h4>
		    </div>
	       </div>      
	    <!-- End Right Column -->
	    </div>      
	  <!-- End Grid -->
	  </div>	  
	</form>
<!-- End Page Container -->
</div>
<br>
<script>


function mycheck(){

var others1 = document.getElementById("others1");

var others2 = document.getElementById("others2");

var others3 = document.getElementById("others3");

var demo1 = document.getElementById("demo1");
var demo2 = document.getElementById("demo2");
var demo2 = document.getElementById("demo2");

var x = others1.checked;
var y = others2.checked;
var z = others3.checked;


 var demo11= document.getElementById("demo1").innerHTML = x;

 var demo12= document.getElementById("demo2").innerHTML = y;
 var demo13= document.getElementById("demo3").innerHTML = z;

if(demo11 = true){

document.getElementById("ot1").value = "Birth Certificate";


}else if (demo11 = false){


document.getElementById("ot1").value = "";

}

if(demo12 = true){

document.getElementById("ot2").value = "Marriage";


}else if (demo12 = false){


document.getElementById("ot2").value = "";

}
if(demo13 = true){

document.getElementById("ot3").value = "Cedula";


}else if (demo13 = false){


document.getElementById("ot3").value = "";

}



}










var x = document.getElementById("lat");
var y = document.getElementById("lon");
var lat1 = document.getElementById("lat1");
var lon1 = document.getElementById("lon1");


function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = position.coords.latitude;
    y.innerHTML =  position.coords.longitude;

   
    myMap();
  lat1.value = x.innerHTML ;
 lon1.value = y.innerHTML ;

}


function myMap() {
  var myCenter = new google.maps.LatLng(x.innerHTML,y.innerHTML);
  var mapCanvas = document.getElementById("googleMap");
  var mapOptions = {center: myCenter, zoom: 20};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}




</script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBP46nw0QbqzQ3wRQZTc_QK3WVmBRGogQQ&callback=myMap"></script>
</body>
</html>
