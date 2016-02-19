<?php
session_start();
include("file:///wamp/www/AKPsi-Attendance/extra/body_gen_functions.php");
include("file:///wamp/www/AKPsi-Attendance/extra/data_grab.php");
head();
?>

	<script type='text/javascript'>
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("message")) {
				bootbox.alert("This is info about a message!");
            } else if (($(this)).hasClass("delete")) {
				bootbox.alert("This message has been deleted!");
			}
        });


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
		<h1> Current Messages </h1>
		<table class="table">
			<tr>
				<th> Person </th>
				<th> Message </th>
				<th> </th>
			</tr>		
			<tr>
				<td> Person1 </td>
				<td> <a class="item message"> View </a></td>
				<td> <button class="item delete"> Delete Message </td>
			</tr>		
		</table>
	</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Sent Posts </h1>
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

