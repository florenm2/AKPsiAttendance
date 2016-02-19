<?php
session_start();
include("file:///wamp/www/AKPsi-Attendance/extra/body_gen_functions.php");
include("file:///wamp/www/AKPsi-Attendance/extra/data_grab.php");
head();
?>

	<script type='text/javascript'>
		$(document).ready(function () {
			var $subitem = $(".subitem");
			$('.item').on("click", "li", function () {
				$subitem.hide();
				$(".subitem", this).show();
			});
		});
	</script>

	<script type='text/javascript'>
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("cuprising")) {
				bootbox.alert("Here's some advice about cuprising...");
			} else if (($(this)).hasClass("phiDeltGates")) {
				bootbox.alert("Here's some advice about Phi Delt Gates...");
			}
        });				
	</script>
	
<header class="bgimage">
	<div class="Header container-fluid">
		<h1> AKPsi-Attendance </h1>
	</div>
</header>

<?php nav(); ?>

<div class="container-fluid">
<div class="row">
	<div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-6">
		<h1> Event Advice </h1>
		<table class="table">
			<tr> <td> <a class="item phiDeltGates"> Phi Delt Gates </a></td> </tr>
			<tr> <td> <a class="item cuprising"> Cuprising </a></td> </tr>
			<tr> <td> <a href=#> Green Beer Day </a></td> </tr>
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