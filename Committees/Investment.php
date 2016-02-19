<?php
session_start();
include("file:///wamp/www/AKPsi-Attendance/extra/body_gen_functions.php");
include("file:///wamp/www/AKPsi-Attendance/extra/data_grab.php");
head();
?>

	<script type='text/javascript'>
		<?php investment_info() ?>
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
			</tr>		
			<tr>
				<td> Stock Crash Course: </td>
				<td> February 14th, 2016 </td>
				<td class="finishedText"> Open </td>
				<td> <a class="item crashCourseEvent"> More info </a></td>
			</tr>		
			<tr>
				<td> Stock - Final Pitch: </td>
				<td> April 2016 </td>
				<td class="missedText"> Closed </td>
				<td> <a class="item stockPitch"> More info </a></td>
			</tr>
		</table>
	</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Committee Roles </h1>
		<table class="table">
			<tr>
				<th> Role </th>
				<th> # of Spots </th>
				<th> # of Years Existed </th>
				<th> Description </th>
			</tr>
			<tr>
				<td> Initial Pitch </td> 
				<td> No Limit </td>
				<td> 5+ </td>
				<td><a class="item initialPitchRole"> More Info </a></td>
			</tr>
			<tr>
				<td> Sector Research </td> 
				<td> No Limit </td>
				<td> 1 </td>
				<td><a class="item sectorRole"> More Info </a></td>
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

