
<script src="jQuery.js"></script>
<script src="script.js"></script>



<script type="text/javascript">


function updateProfile() {

	a = document.getElementById("msg");

	var xmlhttp = new XMLHttpRequest();
	var str=document.getElementById('sid').innerHTML;
	var e2 = document.getElementById('gen');
    var gn = e2.options[e2.selectedIndex].text;
    document.getElementById("updateSpinner").style.visibility= "visible";

	xmlhttp.onreadystatechange = function() {
		//alert(xmlhttp.rxmlhttpeadyState);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {			
			//document.getElementById("spinner").style.visibility= "hidden";
		//a.style.color="#86b300";
		document.getElementById("updateSpinner").style.visibility= "hidden";
		//m.innerHTML="Name field cannot be empty.";
		a.innerHTML = xmlhttp.responseText ;

			
		}
	};
 	var url="server.php?username="+str+"&gndr="+gn;
    
	xmlhttp.open("GET", url,true);
	xmlhttp.send();


}
		
  function edit(){
		 
		//  document.getElementById("dpt").style.display='none';
		 // d.innerHTML="gghgdh";
		document.getElementById("gen").style.visibility = 'visible';
		document.getElementById("_visible").style.visibility = 'visible';

		  
	  }

	  function edit2(){

	  	
		document.getElementById("gen").style.visibility = 'hidden';
		document.getElementById("_visible").style.visibility = 'hidden';
	  
	  }

</script>


<?php

require_once '../dbconnect.php';

	$user = $_SESSION['username'];



		//$password = md5($password);
		$query = "SELECT * FROM admininfo WHERE username='$user'";
		$results = mysqli_query($db, $query);

		
	while($row = mysqli_fetch_assoc($results)) {

		
		$username=$row["username"];
		$full_name=$row["name"];
		$avatar=$row["avatar"];
		$gender=$row["gender"];
		
	

	}


	
?>







	<div class="profile_container">
		<fieldset>
			<legend align="center"><?php echo $full_name ?></legend>
			
			<table>
				<tr>
					<p id="msg"></p>
					<img id="updateSpinner" src="ajax-spinner-preloader.svg" style="visibility:hidden; margin-left: 47%;margin-right: 47%; margin-top: 20%; position:absolute;
   						z-index:1000; width: 100px;">
					<td>
						
						<div class="profile_1">
							<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
								<div id="image_preview"><img id="previewing" style="height:180px; width:160px; ;display: block; border:5px solid rgba(51, 51, 51, 0.8); margin-left: 12%;" src=<?php echo '../profile_images\\'.$avatar; ?> /></div>
								<div id="selectImage">
								<input type="file" name="file" id="file" required /><br><br>
								<input type="submit" value="Update Image" class="btn" style="width: 171px; margin-left: 12%;" />
								</div>
								<img id="loading" src="ajax-spinner-preloader.svg">
							</form>
							<!-- <div id="message"></div> -->
						</div>
					</td>


		<td class='profile_right'>
				<form action="deactive.php" method="POST" enctype="multipart/form-data">		
				<div class="info_table">
				<table>
					<tr>
						<td><h4>ID :</h4></td>
						<td class="info"><p id="sid"><?php echo $username ?></p></td>
							<td>
							<a onclick="edit();" href="#">Edit</a>
							

						</td>

						<td><a id="_visible" onclick="edit2();" href="#" style="color:#fff" class="fa fa-eye-slash" aria-hidden="true"></a>

						<script>
		               		document.getElementById("_visible").style.visibility = "hidden";
					   	</script></td>

						

						
					</tr>
					<tr>
						<td><h4>Gender :</h4></td>
						<td class="info"><p><?php echo $gender ?></p></td>
						<td>
						 <select name="gender" id="gen" value="">
				         <option value="">Select Gender</option selected>
				         <option value="Male">Male</option>
				         <option value="Female">Female</option>
				         <option value="Others">Others</option>
					 </select> 
					 
					 	 <script type="text/javascript">
		               document.getElementById("gen").style.visibility = "hidden";
					   		//document.getElementById("dept").style.visibility = 'visible';

		 
                     </script>
					 
						</td>
					
					</tr>
					

					<tr>
						<td>

							<input  class="btn" type="submit" value="Deactivate" name="deactivate">
						</td>
						<td>

							<input  class="btn" type="button" value="Update Profile" onclick="updateProfile()"></td>

					</tr>
								
				</table>
			</div>
					</form>
					</td>
				</tr>

			</table>
		
			
		</fieldset>
		
	
</div>

<style type="text/css">


.profile_right{
	padding-left: 75px;

}



.success_wrap{

	margin-top: 10px;
	width: 210px;
	height: 200px;
	border: 1px dashed #333;
	background-color: rgba(51, 51, 51,0.6);
	padding: 5px 10px;
	border-radius: 10px;
	word-wrap: break-word;
	color: #e6e6e6;
}





#file {
color: #fff;
padding: 5px;
border: 2px solid #8c8c8c;
background-color: rgba(38, 38, 38,0.6);
margin-top: 10px;
border-radius: 5px;
box-shadow: 0 0 15px #626F7E;
width: 190px;
margin-left: 7px;
}




#success
{
color:#f2f2f2;
font-weight: bold;
}


#error
{
color:red;
}


#loading
{
display:none;

width: 100px;
height: 60px;
margin-left: 30%;
margin-right: 30%;
}




	tr td h4{
		width: 140px;

	}
	
	.profile_container{
	position: relative;
	left:17%;
	right:22%;
	top:20%;
	bottom: 20%;
	width: 58%;
	height: auto;
	background-color: rgba(179, 179, 179,0.4);
	padding-top: 15px;
	padding-bottom: 2%;
	padding-left: 2%;
	padding-right: 2%;
	margin-bottom: 15%;
	}

legend{
	font-size: 25px;
	font-weight: bold;

	}

	.info{
		padding-left: 20px;
		
	}

	.info p{
		font-size: 15px;
		font-weight: bold;
	}

	.profile_container h4{
		font-size: 17px;
		font-weight: normal;

	}

	
.btn, .info_table a {
	position: relative;
	
	cursor : pointer;
	text-overflow: ellipsis;
	white-space: nowrap;
	overflow: hidden;
	font-size: 15px;
	background-color: rgba(51, 51, 51,0.8);
	color: #fff;
	border: 1px solid rgba(255, 255, 255, 0.15);
	box-shadow: 0 0 rgba(0, 0, 0, 0);
	border-radius: 2px;
	padding: 10px 30px;
	transition: 0.3s;
}

.btn:hover,
.btn:focus, .info_table a {
  background-color: rgba(51, 51, 51,1);
}




table{
	margin-top: 20px;
	margin-left: 10px;
}


.info_table a{


	text-decoration: none;
	color: #f2f2f2;
	/*border: 1px solid #4d4d4d;
	*/border-radius: 2px;
	background-color: rgba(51, 51, 51,0.6);
	padding: 2px 10px;
	margin: 5px 0;

}


.info_table a:hover{
	color: #f2f2f2;
	background-color: rgba(51, 51, 51,1);

}

.info_table{
	
	
	margin-bottom: 5%;
	margin-left: 0;


}

td h4, td p{
	border-bottom: 1px solid rgba(100,100,100,1);
}

select,
textarea,
input[type="text"],
input[type="password"]
{
  height:30px;
  width:100%;;
  display: inline-block;
  vertical-align: middle;
  height: 34px;
  padding: 0 10px;
  margin-top: 3px;
  margin-bottom: 10px;
  font-size: 15px;
  line-height: 20px;
  border: 1px solid rgb(255, 255, 255);
  background-color: rgba(255, 255, 255, 0.8);
  color: rgba(0, 0, 0, 0.7);
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 2px;
}

#submit{

	margin-top:10px;
	margin-left: 20%;

}

.profile_1{
margin-bottom: 90%;

}


.combine1{

	width: 54px;
}

#_visible{
	 background-color: rgba(255, 77, 77,0.6);
	 margin-top:10px;
	 padding: 6px 10px;
	 text-decoration: none;
	 color: #fff;
}

.info_table #_visible:hover{
	background-color: rgba(255, 77, 77,1);
}

</style>