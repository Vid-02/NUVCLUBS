
<td class="right_bar" >
		<div class="right_wrap">	
			<div class="create_club">
				<button id="createClb_button" class="create_club_btn"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Create Club</button>
			</div>

			<div class="create_club">
        <button id="moderator_button" class="create_club_btn"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Manage Moderators</button>
      </div>
      <div class="create_club">
				<a href="http://localhost/NUVCLUBS/NUVCHATS/login.php"><button id="message_button" class="msg_btn ><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Send Message



        </button></a>
			</div>
		</div>

</td>   

<script type="text/javascript">
  

  var old_count = 0;
  var i = 0;
  setInterval(function(){    
  $.ajax({
      type : "POST",
      url : "notify.php",
      success : function(data){
          if (data > old_count) { if (i == 0){old_count = data;} 
              else{
              alert('New Message!');
              old_count = data;}
          } i=1;
      }
  });
  },1000);


</script>




<?php include 'moderator.php'; ?>
<?php include 'create_club.php';  ?>
<?php include 'send_message.php';  ?>




<style type="text/css">



.msg_btn {
  cursor: pointer;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  font-size: 17px;
  height: 45px;
  width: 200px;
  background-color: #BD181F;
  color: #fff;
  border: 2px solid rgba(255, 255, 255, 1);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}

.msg_btn:hover,
.msg_btn:focus {
  background-color: #000;
  color: #ffffff;
  border: 2px solid rgba(255, 255, 255, 1);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}


.right_wrap{

	border: 1px solid #000;
	margin: 20px 20px;
	padding: 0px 0 60px 0;
	background-color : rgba(0, 0, 0,0.7);
	border: 3px inset #bfbfbf;
	border-radius: 10px;
}
	

.create_club{
margin-top: 20%;


}


.create_club_btn {
  cursor: pointer;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  font-size: 17px;
  border: 2px solid rgba(255, 255, 255, 1);
  height: 45px;
  width: 200px;
  background-color: #BD181F;
  color: #fff;
  border: 2px solid rgba(255, 255, 255, 1);
  border-radius: 2px;
  -webkit-transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
  transition: background-color 0.2s, box-shadow 0.2s, background-color 0.2s, border-color 0.2s, color 0.2s;
}

.create_club_btn:hover,
.create_club_btn:focus {
  background-color:#000;
  color: #ffffff;
  border: 2px solid rgba(255, 255, 255, 1);
  box-shadow: 0 0 rgba(0, 0, 0, 0);
}




</style>


