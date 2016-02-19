<?php
session_start();
include("file:///wamp/www/AKPsi-Attendance/extra/body_gen_functions.php");
include("file:///wamp/www/AKPsi-Attendance/extra/data_grab.php");
head();
?>

	<script type='text/javascript'>
		<?php news() ?>
		<?php send_text("\"Send a message to [Person's Name] now!\"", "\"Your message has been sent!\"", "\".apply\"") ?>		

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
<div class="row">
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> AKPsi Events </h1>
		<table class="table">
			<tr>
				<th> Name </th>
				<th> Date </th>
				<th> Description </th>
			</tr>
			<tr>
				<td> Spring Ice: </td>
				<td> February 10th, 2016 </td>
				<td> <a class="item springIce"> More info </a></td>
			</tr>
			<tr>
				<td> Another Event: </td>
				<td> March 22nd, 2016 </td>
				<td> <a class="item anotherEvent"> More info </a></td>
			</tr>		
		</table>
	</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Requested Events </h1>
		<table class="table">
			<tr>
				<th> Event Name </th>
				<th> Person </th>
				<th> Date </th>
				<th> Description </th>
			</tr>
			<tr>
				<td> Business Idea: Need Help </td>
				<td> Person 1 </td>
				<td> None </td>
				<td> <a class="item businessIdea1"> More info </a></td>
				<td> <button class="apply"> Apply </button>
			</tr>
			<tr>
				<td> Group for P&G Case Competition </td>
				<td> Person 2 </td>
				<td> March 8th, 2016 </td>
				<td> <a class="item businessIdea1"> More info </a></td>
				<td> <button class="apply"> Apply </button>
			</tr>
		</table>
	</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Open Committee Events</h1>
		<table class="table">
			<tr>
				<th> Name </th>
				<th> Date </th>
				<th> Description </th>
			</tr>
			<tr>
				<td> Stock Crash Course: </td>
				<td> February 14th, 2016 </td>
				<td> <a class="item crashCourseEvent"> More info </a></td>
				<td> <button class="item requestSent"> Attend </button>
			</tr>
		</table>
	</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Open Roles </h1>
		<table class="table">
			<tr>
				<th> Event </th>
				<th> Role </th>
				<th> Date </th>
				<th> Description </th>
			</tr>
			<tr>
				<td> Green Beer Day Shirts </td>
				<td> Shirt Designer </td>
				<td> February 14th, 2016 </td>
				<td> <a class="item greenBeerDayRole"> More info </a></td>
				<td> <button class="apply"> Apply </button>
			</tr>
		</table>
	</div>
</div>
</div>
		


</div>

<?php footer(); ?>

</body>
</html>

