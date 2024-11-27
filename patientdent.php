<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbdental";
$conn = new mysqli($servername, $username, $password, $dbname);
$doctorid=1;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM patient WHERE doctorid='$doctorid'";
$t=258;
																										$l=228;
$result = $conn->query($sql);	
																													
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
			
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Split Centered Container</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton:wght@400;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Content:wght@400;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            overflow: hidden;
        }
		span{
		margin:0;
		padding:0;
		}
        .left-container {
    width: 10.7%;
    height: 100%;
    background: linear-gradient(to bottom, #0C3B67, #2CA6B6);
    box-shadow: 4px 0px 4px 0px rgba(0, 0, 0, 0.25);
    z-index: 2; /* Bring the left container in front */
    display: flex;
    flex-direction: column; /* Stack items vertically */
    align-items: center; /* Center items horizontally */
    
    color: white; /* Text color for better visibility */
}
		.picture{
		width: 85px;
		height: 85px;
		border-radius: 85px;
		margin-top:11px;
background: url(<path-to-image>), lightgray 50% / cover no-repeat;
		}
		
		.pictext1{
		color: #FFF;text-align: center;font-family: Amiri;font-size: 20px;font-style: normal;font-weight: normal;line-height: normal;margin-top:6px;
		}
		.pictext2{
		color: #FFF;text-align: center;font-family: Amiri;font-size: 15px;font-style: normal;margin-top:-12px;line-height: normal;
		}
        .right-container {
            width: 89.3%;
            height: 100%;
            display: flex;
            flex-direction: column; /* Stack top and bottom sections vertically */
        }
        .top-section {

            height:	9.1%;	background: linear-gradient(to right, #0C3C68, #2DA6B6);     z-index: 1;    display: flex;            align-items: center;            justify-content: center;
        }

        .bottom-section {
             display: flex;
  flex-direction: row; /* Default: left to right */
            background-color: white;
            height:90.9%;
        }

		
		.logotext{
		color: #FFF;text-align: center;font-family: Anton;font-size: 20px;font-style: normal;font-weight: 400;line-height: normal;margin-top: -1px;
		}
		
		.margintop {
			margin-top:20px;
			width:100%;
			height:100%;
        }
        

		hr{
		background-color:white;
		width:76%;
		margin-top:9px;
		}
		/* ... Existing styles ... */
#notactive{
	border-color:transparent;
}
#active{
	border-color:white;
}
.dashboard1st {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 3px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.dashboard2 {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 17px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.dashboard3 {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 17px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.dashboard3 {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 20px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.dashboard4 {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 2px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.dashboard5 {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 20px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.icons {
    margin-left: 30px;
	width:20px;
	height:20px;
}

.dashtext {
	
	display:block;
    color: #FFF;
    font-family: Anton;
    font-size: 0.98rem;
	
    font-weight: 400 !important;
	transform: scaleX(1.1) scaleY(1);
    margin-left: 21px; /* Add some space between icon and text */
}

.dashboard6 {
text-decoration:none;
    width: 98%;
    height: 5%;
    margin-top: 450px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: block; 
	text-align: center;
    align-items: center; /* Align items vertically center */
	
}
.dashtextlogout {
	
    color: #FFFFFF;
    font-family: Content;
    font-size: 15px;

    line-height: normal;
    margin-left: 10px; /* Add some space between icon and text */
}
.logouticons {
vertical-align: middle;
margin-left:0px;
	width:19px;
	height:22px;
}
.fullbody{
	width:100%;
	height:100%;
	margin-top:0;
	display: flex;
    flex-direction: row;
	
}

.filter{
	width:77px;
	height:32px;
	position:absolute;
	top:170px;
	left:240px;
	border:none;
	background:#FFFFFF;
	border-radius:7px;
	box-shadow: 2px 1px 0px rgba(0, 0, 0, 0.15);
	display: flex;
  align-items: center; 
  justify-content: flex-start; /* Aligns items to the left */
	font-family:Amiri;
	font-size:13px;
	font-weight:bold;
}

.search {
  width: 100%;position: relative;  display: flex;
}

.searchTerm {
  width: 100%;  border: 3px solid #00B4CC;  border-right: none;  padding: 5px;  height: 16px;  border-radius: 5px 0 0 5px;  outline: none;  color: #9DBFAF;
  }

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;  height: 32px;  border: 1px solid #00B4CC;  background: #00B4CC;  text-align: center;  color: #fff;  border-radius: 0 5px 5px 0;  cursor: pointer;  font-size: 20px;
  }

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 20%;  position: absolute;  top: 19.6%;  left:27.8%;  transform: translate(-50%, -50%);
}
.addpatientimg{
	width:16px;
	height:16px;
}
.grey{
	width:700px;
	height:22px;
	border-radius:6px;
	background:#F3F4F8;
	border:#EFEFEF 1px solid;
	position:absolute;
	top:232px;
	left:228px;
	
}
.heads{
	font-family:Roboto;
	font-size:10px;
	font-weight:bold;
	
}
.data{
	left:228px;
	height:60px;
	width:700px;
	border-bottom:1px;border-top:0px;border-right:0px;border-left:0px;border-color:#D3D3D3;
	border-style:solid;
	position:absolute;
	
	display: flex;
    align-items: center;
	
}

.dataname{
	font-family:Roboto;
	font-size:12px;
	font-weight:bold;
	margin-left:18px;
	width:195px;
}
.dataname1{
	font-family:Roboto;
	font-size:10px;
	font-weight:bold;
	margin-left:18px;	
	color:#7C7E8E;
	
}
.text-container{
display: flex;
    flex-direction: column; /* Stack text vertically */
    margin-left: 0px;
}


    </style>
</head>
<body>
    <div class="left-container">
        <img src="goldenlogo.png" style="width:24px; height:24px; display:block; margin:14px auto 0;">
		<span class="logotext" style="margin-top:2px;">GOLDEN DENTAL</span>
		<div class="picture"></div>
		<span class="pictext1">Dr. Trio</span>
		<span class="pictext2">Admin</span>
		<hr></hr>
		<a href="dashdent.html"	 class="dashboard1st" id="notactive"><img src="dashboardicon.png" class="icons"><span class="dashtext" style="font-weight:normal;">Dashboard</span></a>
		<a href="appdent.html"	 class="dashboard2" id="notactive"><img src="appointments.png" class="icons"><span class="dashtext">Appointment</span></a>
		<a href="profdent.html"	 class="dashboard3" id="notactive"><img src="profileicon.png" class="icons"><span class="dashtext">Profile</span></a>
		<a href="patdent.html"	 class="dashboard5" id="active"><img src="patient.png" class="icons"><span class="dashtext">Patients</span></a>
		<div style="width: 100%;
    height: auto;
    text-align: center;"><div style="width: 126px;height:29px;margin: 0 auto;background-color: #EB480B;border-radius:8px;box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);"><a href="logout.html"	 class="dashboard6" id="notactive"><img src="exit.png" class="logouticons"><span class="dashtextlogout">Log Out</span></a></div></div>
    </div>
    <div class="right-container">
        <div class="top-section">
            <!-- Top content goes here -->
            
        </div>
        <div class="bottom-section">
            <div class="margintop">
				<div class="fullbody">                      <div style="width:100%;height:72px;display:flex;flex-direction:row;">
																<div style="display:inline-block;;
																width:14.5%;height:72px;margin-left:25px;"><span style="													
																color:#248AA2;font-family: Anton;font-size: 25px;font-style: normal;font-weight: 400;line-height: normal;
																												">Patients</span>
																										</div>
																										<div style="display:inline-block;height:72px;width:84.05%;"></div>					
															</div>
															<button class="filter"><img src="filter.png" style="width:18px;height:18px;position: relative;margin-right:5px;">Filters</button> 
															
																				<!-- -->
																				<!-- -->
															<form>
																<div class="wrap">
																   <div class="search">
																	  <input type="text" class="searchTerm" placeholder="Search Patient">
																	  <button type="submit" class="searchButton">
																		<i class="fa fa-search"></i>
																	 </button>
																   </div>
																</div>	

															</form>						
															<a href="" style="width:121px; height:30px; border-radius:8px; border: 1px solid #4182F1; text-align:left; text-decoration:none; position:absolute; top:169px; left:988px; display:flex; align-items:center; font-size:13px;font-weight:bold;font-size:Amiri;color:#4182F1;display:none;">
																<img src="add.png" class="addpatientimg" style="margin-left:16px;margin-right:6px;">Add Patient
															</a>
															<div style="position:absolute;transform:scale(1.2);top:-40px;left:-30px;">
															<div class="grey"><span class="heads" style="margin-right:225px;margin-left:20px;">NAME</span><span class="heads" style="margin-right:145px;">ID</span><span class="heads">LAST DIAGNOSIS</span></div>
															
																										<?php 	
																										
																										
																										//$sql="SELECT diagnosisName FROM diagnosis WHERE patientid='$row['id']' ORDER BY diagnosisDate DESC LIMIT 1";						
																										//$resultq = $conn->query($sql);
																										//while ($row = $resultq->fetch_assoc())//
																										//while($fets = $resultq->fetch_assoc()){//
																										echo '<div class="data" style="top:'.$t.'px;"><div class="datapic"></div>';
																										echo '<div class="text-container">';
																										echo '<span class="dataname">'.$row['firstName'].' '.$row['middleName'].' '.$row['lastName'].'</span><span class="dataname1" style="display:none;">Next Appointment : 11 Dec - 8:00 AM </span></div>';
																										echo'<span style="font-family:Roboto;font-size:10px;margin-left:64px;width:158px;">P-'.$row['id'].'</span>';
																										
																										echo'<span style="font-family:Roboto;font-size:10px;font-weight:bold;width:190px;">'.$row['lastDiagnosis'].'</span>';
																										echo '<a href="patientrec.php?id='.$row['id'].'"><span style="text-decoration:none;font-family:Roboto;font-size:10px;font-weight:bold;;color:#0046C4">Profile</span></a>';
																										echo '<span style="margin-left:15px;color:#D3D3D3;font:size:1px;display:none;">|</span>';
																										echo '<button style="outline:none;border:none;ia:none; margin-left:5px; display:none;"><img src="ellip.png" style="width:20px;height:20px;"></button>';
																										echo' </div>';
																										$t=$t+70;
																															}
																														}
																										
																										
																													
																										?>
																										
																										
																										
																										
																										
																										
																										
																										
				</div>																					
				
				
			</div>																						
            </div>																					
																										
			
        </div>
		
		
    </div>
</body>
</html>
