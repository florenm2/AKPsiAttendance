<?php
session_start();
include("file:///wamp/www/AKPsi-Attendance/extra/body_gen_functions.php");
include("file:///wamp/www/AKPsi-Attendance/extra/data_grab.php");
head();
?>

	<script type='text/javascript'>
			<?php member_professional_info(); ?>
/*		$(document).on("click", ".item", function(e) {
			
			if (($(this)).hasClass("springIce")) { //Spring Ice Description
				bootbox.alert("This is info about spring ice!");
			} else if (($(this)).hasClass("anotherEvent")) { //A Networking Event Description
				bootbox.alert("This is info about a networking event!");
			} else if (($(this)).hasClass("anotherEventRole")) { //Networking Event Role
				bootbox.alert("This is info about the networking event coordinator role!");
			} else if (($(this)).hasClass("springIceRole")) { //Spring Ice Role
				bootbox.alert("This is info about the spring ice role!");
            } else if (($(this)).hasClass("delete")) { // Delete Message Button
				bootbox.alert("This message has been deleted!");
            } else if (($(this)).hasClass("message")) { //Message View
				bootbox.alert("This is info about a message!");
            } else if (($(this)).hasClass("requestHelp")) { //Request Help button 
				bootbox.alert("The position has now been made public to apply for");

			// Investment Page
			} else if (($(this)).hasClass("crashCourseEvent")) {
				bootbox.alert("This is info about the stock crash course!");
			} else if (($(this)).hasClass("stockPitch")) { //Stock - Pitch Final Description
				bootbox.alert("This is info about the stock pitch!");
			} else if (($(this)).hasClass("initialPitchRole")) {
				bootbox.alert("This is info about the initial stock pitch role!");
			} else if (($(this)).hasClass("sectorRole")) {
				bootbox.alert("This is info about the sector research role!");
			}
  
	});	
*/		
		<?php send_text("'Send a message to your committee chair'", "'Your message has been sent!'", "\".networkRole\"") ?>
	</script>


	
	<!--
		function toggleBox( id ){
			var speed = 800;
			$('.infoBox').slideUp(speed, function(){
				$('#'+id).slideToggle(speed);
			});
		}

		function toggleBox( id ){
			var speed = 800;
			$('.infoBox:not(#'+id+')').slideUp(speed, function(){
				$('#'+id).slideToggle(speed);
			});
		}
		
-->
	
<header class="bgimage">
	<div class="Header container-fluid">
		<h1> AKPsi-Attendance </h1>
	</div>
</header>

<?php nav(); ?>


<div class="container-fluid">
<div class="jumbotron infoBox" id="springIce">
	<h1>This is for sprign ice</h1>
</div>
<div class="jumbotron infoBox" id="anotherEvent">
	<h1>This is for antoher event</h1>
</div>
<div class="row">
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Events </h1>
		<table class="table">
			<tr>
				<th> Name </th>
				<th> Date </th>
				<th> Type </th>
				<th> Description </a></th>
			</tr>			<tr>
				<td> Spring Ice: </td>
				<td> February 10th, 2016 </td>
				<td class="requiredText"> REQUIRED </td>
				<td> <a class="item springIce"> More info </a></td>
			</tr>
			<tr>
				<td> A Networking Event: </td>
				<td> March 22nd, 2016 </td>
				<td class="extraText"> Extra </td>
				<td> <a class="item anotherEvent"> More info </a></td>
			</tr>		
		</table>
	</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Committee Roles </h1>
		<table class="table">
			<tr>
				<th> Role </th>
				<th> Available Spots </th>
				<th> Status </th>
				<th> Description </th>
			</tr>
			<tr>
				<td> Spring Ice Coordinator </td> 
				<td> 0 </td>
				<td class="missedText"> Filled </td>
				<td> <a class="item springIceRole"> More info </a></td>
			</tr>
			<tr>
				<td> Networking Event Coordinator </td> 
				<td> 2 </td>
				<td class="finishedText"> Open </td>
				<td> <a class="item anotherEventRole"> More info </a></td>				
				<td><button class="networkRole"> Apply </button><td>
			</tr>
		</table>
	</div>

</div>
</div>
		
<div class="container-fluid">
<div class="row">

</div>
</div>


</div>

<?php footer(); ?>

</body>
</html>

