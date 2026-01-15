<?php include 'event_handler.php'; 


$club_id_session = $_SESSION['moderator_Club_ID'];
?>



<div class="right_wrap">	
	<div class="create_club">
		<a href="http://localhost/NUVCLUBS/NUVCHATS/login.php"><button id="message_button" class="msg_btn"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Send Message</button></a>
	</div>

</div>



<?php include 'send_message.php';  ?>




<style type="text/css">



.msg_btn {

	margin-top: 20%;
	padding-top: 10px;
	padding-bottom: 30px;
	padding-right: 10px;
	padding-left: 10px;
	font-family: Tw Cen MT,ROBOTO, 'Raleway', sans-serif;
	text-overflow: ellipsis;
	text-align: center;
	white-space: nowrap;
	overflow: hidden;
	font-size: 17px;
	height: 32px;
	background-color: #BD181F;
	color: #fff;
	border: 2px solid rgba(255, 255, 255, 1);
	border-radius: 3px;
	-webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
	transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}

.msg_btn:hover,
.msg_btn:focus {
	cursor: pointer;
	background-color: #000;
	color: #fff;
	border-color: rgba(255, 255, 255, 0.3);
	box-shadow: 0 0 rgba(0, 0, 0, 0);
}


.right_wrap{

	float: right;
	border: 1px solid #000;
	margin: 80px 20px;
	padding: 0px 0 60px 0;
	background-color : rgba(15, 15, 15,0.7);
	border: 3px inset #bfbfbf;
	border-radius: 10px;
	width: 300px;
}
	

</style>








<script type="text/javascript">


function postEvent(){

	var flag = true;
	
	a = document.getElementById("err_msg");
	

	if(document.event_form.fileToUpload.value.length==0 || document.event_form.ev_head.value.length==0 || document.event_form.ev_head.value.length==0 || document.event_form.event_box.value.length==0 || document.event_form.venue.value.length==0 || document.event_form.capacity.value.length==0 || document.event_form.day.value.length==0 || document.event_form.month.value.length==0
	|| document.event_form.year.value.length==0 || document.event_form.time.value.length==0 || document.event_form.day_night.value.length==0){

	
		a.innerHTML = "Some fields are empty.";
		a.style.color="#fff";
		a.style.padding = "5px 10px 5px 10px";
		a.style.width = "250px";
		a.style.borderRadius= "2px";
		a.style.margin = "0px 38% 20px 38%";
		a.style.backgroundColor= "#CF4847";
		flag = false;
	}


return flag;

}
</script>







<div class="join_request" style="margin-top: 30px;">



	<form enctype="multipart/form-data" method="POST" name="event_form" id="event_form" action="">

<?php 

	include('ev_error.php');

 ?>

		<h3>Events :</h3>
		<p id="err_msg"></p>
		<div class="event">
			<label>Select Image : </label>
			<input type="file" name="fileToUpload" id="fileToUpload"><br>

			<input type="text" name="ev_head" id="ev_head" size="66" style="padding: 5px 0px 5px 5px;" placeholder="Write Event Header"><br><br>

			<textarea name="event_box" id="event_box" style="padding: 10px 0 0 10px;" rows="2" cols="50" placeholder="Write Event Detail here" size="200"></textarea>
		</div><br>


		<input type="text" name="venue" id="venue" placeholder="Venue"><br>

		<input type="text" name="capacity" id="capacity" placeholder="Capacity"><br><br>

		Date :
		<select name="day" class="combine" id="ev_d"> 
			  <option value="">Day</option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
			  <option value="11">11</option>
			  <option value="12">12</option>
			  <option value="13">13</option>
			  <option value="14">14</option>
			  <option value="15">15</option>
			  <option value="16">16</option>
			  <option value="17">17</option>
			  <option value="18">18</option>
			  <option value="19">19</option>
			  <option value="20">20</option>
			  <option value="21">21</option>
			  <option value="22">22</option>
			  <option value="23">23</option>
			  <option value="24">24</option>
			  <option value="25">25</option>
			  <option value="26">26</option>
			  <option value="27">27</option>
			  <option value="28">28</option>
			  <option value="29">29</option>
			  <option value="30">30</option>
			  <option value="31">31</option>
			</select>

			 <select name="month" class="combine" id="ev_m">
			  <option value="">Month</option>
			  <option value="01">Jan</option>
			  <option value="02">Feb</option>
			  <option value="03">Mar</option>
			  <option value="04">Apr</option>
			  <option value="05">May</option>
			  <option value="06">Jun</option>
			  <option value="07">July</option>
			  <option value="08">Aug</option>
			  <option value="09">Sep</option>
			  <option value="10">Oct</option>
			  <option value="11">Nov</option>
			  <option value="12">Dec</option>
			</select>

			 <select name="year" class="combine" id="ev_y">
			  <option value="">Year</option>
			  <option value="2018">2018</option>
			  <option value="2019">2019</option>
			  <option value="2020">2020</option>
			  <option value="2021">2021</option>
			</select><br><br>


		Time :
		<select name="time" class="combine1" id="ev_t">
			  <option value="01:00">01:00</option>
			  <option value="02:00">02:00</option>
			  <option value="03:00">03:00</option>
			  <option value="04:00">04:00</option>
			  <option value="05:00">05:00</option>
			  <option value="06:00">06:00</option>
			  <option value="07:00">07:00</option>
			  <option value="08:00">08:00</option>
			  <option value="09:00">09:00</option>
			  <option value="10:00">10:00</option>
			  <option value="11:00">11:00</option>
			  <option value="12:00">12:00</option>
			  <option value="13:00">13:00</option>
			  <option value="14:00">14:00</option>
			  <option value="15:00">15:00</option>
			  <option value="16:00">16:00</option>
			  <option value="17:00">17:00</option>
			  <option value="18:00">18:00</option>
			  <option value="19:00">19:00</option>
			  <option value="20:00">20:00</option>
			  <option value="21:00">21:00</option>
			  <option value="22:00">22:00</option>
			  <option value="23:00">23:00</option>
			  <option value="00:00">00:00</option>
		</select>
<br><br>


		<input type="submit" onclick = "return postEvent();" value="Post Event" name="post_event" class="btn btn-block btn-primary"/>
	</form>
</div>
<br>
<div>


<script type="text/javascript">	
function Notice() {


    var msg = document.getElementById('notice_msg');

	if(document.notice_form.notice_box.value.length==0){

		msg.innerHTML = "Write notice first.";
		msg.style.color="#b35c00";
		msg.style.padding = "5px 10px 5px 10px";
		msg.style.width = "250px";
		msg.style.borderRadius= "2px";
		msg.style.margin = "0px 35% 20px 35%";
		msg.style.backgroundColor= "#ffe6cc";

	}

	else{

	var	user = "<?php echo $_SESSION['moderator_name']; ?>";
	var	club = "<?php echo $_SESSION['moderator_Club_ID']; ?>";
	var xmlhttp = new XMLHttpRequest();
    var str=document.getElementById('notice_box').value;

    var ntc_all = 0;

    document.getElementById("ntc_spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {

		document.getElementById("ntc_spinner").style.visibility= "hidden";
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
	
		msg.innerHTML = xmlhttp.responseText ;
		
		}
	};
 	var url="notice.php?notice="+str+"&user="+user+"&club="+club;
    
	xmlhttp.open("GET", url,true);
	xmlhttp.send();
	}
}
	

</script>
<div class="join_request" style='width: 67.5%;'>
	<form  action="notice.php" method="GET" name="notice_form">
		<h3>Post Notice :</h3>
		<img id="ntc_spinner" src="loading.gif" width="23px" height="23px" style="visibility:hidden; position: relative;">
		<p id="notice_msg"></p>

		<textarea style="padding: 10px 0 0 10px; height: 200px; width: 70%;" rows="4" cols="50" name="notice_box" id="notice_box" placeholder="Write Notice here" size="500"></textarea><br>

	<button class="btn btn-block btn-primary" type="button" onclick="Notice()">Post Notice</button> 
	</form>
	
</div>
<br>
</div>

 <div class="mng_zone">Manage Zone</div>

<?php 

	if(isset($_GET['decision'])){
 		   	
 		   	echo "<div style=

					'color: #b35c00;
					background-color: #ffe6cc;
					padding: 5px 0;
					border-radius: 2px;
					width:300px;
					margin-left: 40%;
					margin-right: 40%;
					margin-top: 20px;
					margin-bottom: 20px;
					text-align: center;
					border:1px solid #cc6900;'
					>".$_GET['decision']."</div>";

 		   
			}
			else{
				echo "";
			}

 ?>


<!-- <div class="join_request" style="width:max-content">
	
	<h3>Join Requests :</h3>

<table class="join_table">

	<tr>
		<th>Club Name</th>
		<th>ID</th>
		<th>Name</th>
		<th>Request Date</th>
		<th>State</th>
		<th colspan='2'>Accept/Reject</th>
	</tr>

<?php
	
	$sql = "SELECT * FROM studentinfo WHERE clubID = $club_id_session AND (is_active='N' OR is_active='D')";
	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) > 0) {

		echo "<div class='.show_m' style='font-family: ROBOTO,helvetica; color: #fff; font-size: 16px; background-color: #46a049; padding: 5px 5px;'>New request(s)!</div>";

		while($row = mysqli_fetch_assoc($result)) {

	    	$_SESSION['user'] = $row["username"];//$sql="UPDATE studentinfo SET is_active = 'verify".$row["username"]."' WHERE username='".$row["username"]."'";
	    	
	    	echo "<tr>
	    			<td>" . $row["clubname"]."</td>".
    				"<td>" . $row["username"]."</td>".
	    			"<td>" . $row["name"]."</td>".
	    			"<td>" . $row["dateTime"]."</td>";

	    		if($row["is_active"]=='D')
	    		{
	    		echo "<td style='background-color: rgba(230, 115, 0,0.9);'>Deactivated</td>";
	    		}
	    		else{
	    			echo "<td>".$row["is_active"]."</td>";
	    		}

	    	echo "<td>
                <a style='color:#fff;' href='approve.php?username=". $row["username"]."&value=Y'><i class='cmnrow fa fa-check' aria-hidden='true'></i></a>
                <a style='color:#fff;' href='approve.php?username=". $row["username"]."&value=X'><i class='cmnrow fa fa-times' aria-hidden='true'></i></a>
			</td>
			</tr>";


	    }



	} else {
	    echo "No Request";
	}

	
	
?>

	</table>




</div>
<br>



<br> -->
<div class="join_request" style="width:max-content">
	
	<h3>Member List :</h3>


<table  class="join_table">

	<tr>
		<th>Club Name</th>
		<th>ID</th>
		<th>Name</th>
		<th>Request Date</th>
		<th>State</th>
		
	</tr>

<?php

	
	
	$sql = "SELECT * FROM studentinfo where clubID = '$club_id_session'";
	$result = mysqli_query($db, $sql);


	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {

	    	$_SESSION['user'] = $row["username"];//$sql="UPDATE studentinfo SET is_active = 'verify".$row["username"]."' WHERE username='".$row["username"]."'";
	    	
	    	echo "<tr>
	    			<td>" . $row["clubname"]."</td>".
    				"<td>" . $row["username"]."</td>".
	    			"<td>" . $row["name"]."</td>".
	    			"<td>" . $row["dateTime"]."</td>".
	    			"<td>".$row["is_active"]."</td>".
	    			"</tr>";


	    }
	} else {
	    echo "No Members";
	}

	
	
?>
	
	</table><br>
	<button style=' margin: 0 0 0 70%;' class='btn btn-block btn-primary' id='viewDetail'>View All info</button>
</div>
<?php include 'viewInfo.php'; ?>

<?php include 'notice_list.php'; ?>

<br><br>
<?php 

	if(isset($_GET['eventlist'])){
 		   	
 		   	echo "<div style=

					'color: #b35c00;
					background-color: #ffe6cc;
					padding: 5px 0;
					border-radius: 2px;
					width:300px;
					
					margin-top: 20px;
					margin-bottom: 20px;
					margin-left: 40%;
					margin-right: 40%;
					text-align: center;
					border:1px solid #cc6900;'
					>".$_GET['eventlist']."</div>";

 		   
			}
			else{
				echo "";
			}

 ?>





	<div class="join_request" style="width: 95%;">
		
		<h3>Event List</h3>
		<table>
				<tr class="t_head">
					<th>Event Image</th>
					<th>Name</th>
					<th>Detail</th>
					<th>Venue</th>
					<th>Date</th>
					<th>Time</th>
					<th>Capacity</th>
					<th>Delete</th>
				</tr>
				
<?php
	include '../../dbconnect.php';
	$sql = "SELECT * FROM event_table WHERE club_ID = '$club_id_session'";
	$result = mysqli_query($db, $sql);



	if (mysqli_num_rows($result) > 0) {
	   
	    while($row = mysqli_fetch_assoc($result)) {

	    	
	    	echo "<tr>
	    			<td><img src='../../slider\\".$row["event_img"]."' alt='slider image' style='width:100px; height: 50px;'>
	    			</td>".
	    			"<td>" . $row["event_head"]."</td>".
	    			"<td><div class='long_text'>" . $row["event_detail"]."</div></td>".
    				"<td>" . $row["venue"]."</td>".
	    			"<td>" . $row["date"]."</td>".
	    			"<td>" . $row["time"]."</td>".
	    			"<td>".$row["capacity"]."</td>".
	    			"
	    			<td>
               
                <a style='color:#fff;' href='event_delete.php?id=". $row["id"]."&value=N'><i class='cmnrow fa fa-times' aria-hidden='true'></i></a>
             				
				</td>

	    		</tr>";


	    }
	} else {
	    echo "0 results";
	}

	
	
?>
</table>

</div>


<br><br>

<div class="join_request" style="width:max-content">
		
		<h3>Event Joined Member List</h3>
		<table>
				<tr>
					<th>Event Name</th>
					<th>Member Name</th>
					<th>Member ID</th>
				</tr>
				
<?php



	$sql = "SELECT a.* , b.*, c.* FROM event_table a, event_join b, studentinfo c where a .id= b .event_ID and b .joined_Member_ID = c .username and b .club_ID = '$club_id_session' and b .show_Event = 'Y'";

	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) > 0) {
	   
	    while($row = mysqli_fetch_assoc($result)) {

	    	
	    	echo "<tr>
					<td>" . $row["event_head"]."</td>".
    				"<td>" . $row["name"]."</td>".
	    			"<td>" . $row["username"]."</td>
	    		</tr>";


	    }
	} else {
	    echo "0 results";
	}

	
	
?>
</table>
<div class="Download">
	<a href="download.php">
			<input type="link"  value="Download Report">
	</a>
</div>
</div>

	<style type="text/css">


.Download input{
  height: 45px;
  width: max-content;
  border: none;
  color: #fff;
  font-size: 15px;
  background: #000;
  border-radius: 5px;
  cursor: pointer;
  text-align: center;
  margin-top: 50px;
}
.Download:hover input{
  background-color: #000;
  transition: 0.7s;
}
	



	.mod_wel{

		font-weight: bold;
		font-family: Tw Cen MT,ROBOTO,helvetica;
		background-color: rgb(77, 0, 31);
		color: #D8D8D9;
		padding: 10px 0;
		font-size: 19px;
		border-top: 1px solid #D8D8D9;

	}

	
	.join_request .fa-check:hover{
		background-color: #66cc00;
			
		color: #fff;
		font-size: 22px;
	}
	

	.cmnrow{
		padding: 0 10px;
		transition: 300ms;
	}



	.join_request table tr th{
			padding: 0px 40px 0px 40px;


		}

		.join_request th{
			border: 1px solid #bfbfbf;
			background-color: #000;
		}


		.join_request h3{
			color: #fff;
			background-image: linear-gradient(rgba(0, 0, 0,0),rgba(26, 26, 26,0.7),rgba(0, 0, 0,0));
			padding: 20px 0;

		}

		.join_request{

			color: #fff;
			border: 3px inset #bfbfbf;
			border-radius: 10px;
			margin: 0 0px 0 50px;
			padding-bottom: 20px;
			background-color : rgba(15, 15, 15,0.7);
			width: 930px;
			word-wrap: break-word;
		}

		.join_request tr td{
			width: 200px;
			word-wrap: break-word;
			padding: 13px 0;
			border-bottom: 1px solid #DDDDDE;
			border-bottom-width: 70%
		}

		.long_text{
			width: 280px;
			height: auto;
			overflow: auto;
			word-break: break-all;
			background-color: #e6e6e6;
			color: #333;
		}

	
textarea
{

	font-family: 'Poppins','Roboto', sans-serif;
	height:130px;
	width:50%;
	display: inline-block;
	vertical-align: middle;
	padding: 0 10px;
	margin-top: 3px;
	margin-bottom: 10px;
	font-size: 14px;
	line-height: 20px;
	border: 1px solid #fff;
	background-color: #e6e6e6;
	color: rgba(0, 0, 0, 0.7);
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border-radius: 2px;
}

input[type="text"],
input[type="password"],
input[type="email"]
{
	font-family: 'Poppins','Roboto', sans-serif;
  height:30px;
  width:50%;;
  display: inline-block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 20px;
  border: 1px solid #fff;
  background-color: #e6e6e6;
  color: rgba(0, 0, 0, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
}

	select{
		font-family: 'Poppins','Roboto', sans-serif;
  height:30px;
  width:15%;
  display: inline-block;
  vertical-align: middle;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 14px;
  line-height: 20px;
  border: 1px solid #fff;
  background-color: #e6e6e6;
  color: rgba(0, 0, 0, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
	}



.btn {
	padding: 3px;
	font-family: Tw Cen MT,ROBOTO, 'Raleway', sans-serif;
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden;
	font-size: 17px;
	line-height: 20px;
	height: 32px;
	background-color: #BD181F;
	color: #fff;
	border: 1px solid rgba(255, 255, 255, 0.5);
	border-radius: 5px;
	-webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
	transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}

.btn:hover,
.btn:focus {
	cursor: pointer;
	background-color: #000;
	color: #fff;
	border-color: rgba(255, 255, 255, 0.3);
	box-shadow: 0 0 rgba(0, 0, 0, 0);
}


.mng_zone{
	margin-bottom: 10px;
	text-align: center;
	padding: 10px 0;
	background-color: #BD181F;
	color: #fff;
	width: auto;
	font-size: 23px;
	font-weight: bold;
	font-family: Tw Cen MT,ROBOTO,helvetica;
	border: 5px solid rgba(0, 0, 0, 1);

}
	</style>