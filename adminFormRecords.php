<!DOCTYPE html>
<html>
<head>
	<title>Admin Records</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/w3.css">
<?php
include('connection.php');

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
</head>
<body style="background-image: url('image/background.png');background-attachment: fixed;background-position: center;;background-repeat: no-repeat;background-size: cover;">
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-left-align w3-large" style=" background-image: url('image/background1.png');background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;">
 	<div class="w3-col w3-section w3-padding-32" style="width: 30%;">
	  <a href="#" class="w3-bar-item w3-right w3-padding-large">
  		<img src="image/caloocan-logo.jpg" class="w3-right" style="height:50px;width:50%" alt="logo">
	  </a> 		
 	</div>
 	<div class="w3-col" style="width: 40%;">
	  <div class="w3-padding-small w3-hide-small"></div>
	  <a href="#" class="w3-bar-item w3-padding-large" style="width:100%;text-decoration: none;">
	  	<table class="w3-row w3-center" style="font-family:Times-New-Roman; font-weight: bold;width: 100%;">
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
 	<div class="w3-rest w3-section w3-padding-32">
	  <a href="#" class="w3-bar-item w3-left w3-padding-large">
  		<img src="image/tao.png" class="w3-left" style="height:50px;width:50%" alt="logo">
	  </a> 		
 	</div>
  </div>
</div>
<div id="updateModal" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('updateModal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p >Update Record</p>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	                <button onclick="getLocation()" class="w3-button w3-green w3-block">get address</button>
					<p>latitude<span id="lat" name="latitude"></span></p>
					<p>longitude<span id="lon" name="longitude"></span></p>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<div id="googleMap" style="width:100%;height:300px;"></div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<center><img src="image/user.jpg" style="width:50%;height:200px;"></center>
	    </div>		       
	    <div class="w3-row-padding w3-margin">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
					<button class="w3-button w3-green w3-block">Upload</button>
	            </div>
	          </div>
	        </div>
	    </div>        
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Firstname</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="text" name='fname' class="w3-input w3-border w3-block" placeholder="Firstname">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Middlename</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="text" name='mname' class="w3-input w3-border w3-block" placeholder="Middlename">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Lastname</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="text" name='lname' class="w3-input w3-border w3-block" placeholder="Lastname">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Age</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="number" name='age' class="w3-input w3-border w3-block" placeholder="Age">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Gender</b></label>
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
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Birthday</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="date" name='bday' class="w3-input w3-border w3-block">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Occupation</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="text" name='occ' class="w3-input w3-border w3-block" placeholder="Occupation">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Street</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="text" name='street' class="w3-input w3-border w3-block" placeholder="Street">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Barangay</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="number" name='brgy' class="w3-input w3-border w3-block" placeholder="Barangay">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Zone</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="number" name='zone' class="w3-input w3-border w3-block" placeholder="Zone">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>District</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	        <input type="number" name='district' class="w3-input w3-border w3-block" placeholder="District">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Remarks</b></label>
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
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>ISF Classification</b></label>
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
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Spouse Name</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="text" name='sn' class="w3-input w3-border w3-block" placeholder="Spouse Name">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Occupation</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="text" name='occ1' class="w3-input w3-border w3-block" placeholder="Occupation">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Age</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="number" name='age1' class="w3-input w3-border w3-block" placeholder="Age">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Birthday</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<input type="date" name='bday1' class="w3-input w3-border w3-block">
        </div>
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Fill up</b></label>
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
        <div class="w3-row-padding">
	        <div class="w3-col m12">
	          <div class="w3-card-2 w3-round w3-white">
	            <div class="w3-container w3-padding">
	              <label class="w3-text-black"><b>Others</b></label>
	            </div>
	          </div>
	        </div>
        </div>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-padding-16">
	      	<p>
		      	<input class="w3-check" type="checkbox">
				<label>Birth Certificate</label>
			</p>
	      	<p>
		      	<input class="w3-check" type="checkbox">
				<label>Marriage</label>
			</p>
	      	<p>
		      	<input class="w3-check" type="checkbox">
				<label>Cedula</label>
			</p>
        </div>
        <div class="w3-container w3-margin w3-padding-16">
              <h4 class="w3-text-black w3-center" name="submit"><input type="submit" class="w3-button w3-block w3-green" name="submit" value="SAVE"></h4>
	    </div>
      </div>
    </div>
</div>
<div id="deleteModal" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container w3-padding-64 w3-center">
        <span onclick="document.getElementById('deleteModal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p>Are you sure you want to delete this file?</p>
        <button class="w3-button w3-green w3-padding-large" onclick="document.getElementById('deleteModal').style.display='none'">Yes</button>
        <button class="w3-button w3-red w3-padding-large" onclick="document.getElementById('deleteModal').style.display='none'">No</button>
      </div>
    </div>
</div>
<div class="w3-container w3-content w3-padding-32" style="max-width:1400px;margin-top:250px">    
	<div class="w3-padding-32 w3-hide-large w3-hide-medium"></div>
	<div class="w3-container">		
		<a href="index.php" class="w3-panel"><input type="button" class="w3-button w3-grey" value="Back"/></a>	
	</div>
	<div class="w3-responsive w3-card-4">
		<table class="w3-table-all">
			<th class="w3-blue w3-center" colspan="2">Action</th>
			<th class="w3-blue">#</th>
			<th class="w3-blue">First Name</th>
			<th class="w3-blue">Middle Name</th>
			<th class="w3-blue">Last Name</th>
			<th class="w3-blue">Age</th>
			<th class="w3-blue">Gender</th>
			<th class="w3-blue">Birthday</th>
			<th class="w3-blue">Occupation</th>
			<th class="w3-blue">Street</th>
			<th class="w3-blue">Barangay</th>
			<th class="w3-blue">Zone</th>
			<th class="w3-blue">District</th>
			<th class="w3-blue">Remarks</th>
			<th class="w3-blue">ISF</th>
			<th class="w3-blue">SpouseName</th>
			<th class="w3-blue">SpouseAge</th>
			<th class="w3-blue">SpouseBirthday</th>
			<th class="w3-blue">SpouseOccupation</th>
			<th class="w3-blue">latitude</th>
			<th class="w3-blue">longitude</th>
				<?php 

				$sql = "SELECT `latitude`, `longitude`, `FirstName`, `MiddleName`, `LastName`, `Age`, `Gender`, `Birthday`, `Occupation`, `Street`, `Barangay`, `Zone`, `District`, `Remarks`, `ISF`, `SpouseName`, `SpouseAge`, `SpouseBirthday`, `SpouseOccupation` FROM `censusform` ORDER BY id DESC";
				$result = $conn->query($sql);
				$tmp = 0;
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	$tmp++;
		    	?>
		    		<tr>
		    			<td><button class="w3-button w3-green w3-block" onclick="document.getElementById('updateModal').style.display='block'">Update</button></td>
		    			<td><button class="w3-button w3-red w3-block" onclick="document.getElementById('deleteModal').style.display='block'">Delete</button></td>
		    			<td><?php echo $tmp ?></td>
		    			<td><?php echo $row["FirstName"]?></td>
		    			<td><?php echo $row["MiddleName"]?></td>
		    			<td><?php echo $row["LastName"]?></td>
		    			<td><?php echo $row["Age"]?></td>
		    			<td><?php echo $row["Gender"]?></td>
		    			<td><?php echo $row["Birthday"]?></td>
		    			<td><?php echo $row["Occupation"]?></td>
		    			<td><?php echo $row["Street"]?></td>
		    			<td><?php echo $row["Barangay"]?></td>
		    			<td><?php echo $row["Zone"]?></td>
		    			<td><?php echo $row["District"]?></td>
		    			<td><?php echo $row["Remarks"]?></td>
		    			<td><?php echo $row["ISF"]?></td>
		    			<td><?php echo $row["SpouseName"]?></td>
		    			<td><?php echo $row["SpouseAge"]?></td>
		    			<td><?php echo $row["SpouseBirthday"]?></td>
		    			<td><?php echo $row["SpouseOccupation"]?></td>
		    			<td><?php echo $row["latitude"]?></td>
		    			<td><?php echo $row["longitude"]?></td>
		    		</tr>
		    	<?php         
				    }
					} else {
					    echo "0 results";
					}
					$conn->close();

				 ?>
		</table>
	</div>
</div>
</body>
</html>