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
		
		$(document).on("click", ".item", function(e) {
            if (($(this)).hasClass("requestHelp")) {
				bootbox.alert("The position has now been made public to apply for");
			} else if (($(this)).hasClass("stockPitch")) {
				bootbox.alert("This is info about the stock pitch!");
			} else if (($(this)).hasClass("someEvent")) {
				bootbox.alert("This is info about [X Event] (replace with html block)");
			}
        });
		
		$(document).on("click", ".memberRole", function(e) {
			bootbox.prompt({
				title: "Possition Filled: [Person's Name]",
				value: "Send member a message",
				callback: function(result) {               
					if (result === null) {                    	  
					} else {
						bootbox.alert("Your message has been sent!");                          
					}
				}
			});
		});

		$(document).on("click", ".memberComment", function(e) {
			bootbox.prompt({
				title: "Write comments about [Person's Name]",
				value: "Write comment",
				callback: function(result) {               
					if (result === null) {                    	  
					} else {
						bootbox.alert("Your comments have been saved!");                          
					}
				}
			});
		});

		$(document).on("click", ".memberMessage", function(e) {
			bootbox.prompt({
				title: "Send a message to [Person's Name]",
				value: "Send message",
				callback: function(result) {               
					if (result === null) {                    	  
					} else {
						bootbox.alert("Your message has been sent!");                          
					}
				}
			});
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
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-12">
		<h1> Scheduled Events </h1>
		<table class="table">
			<tr><th> Events </th> <th> Date </th> <th> Roles </th> <th> Status </th> </tr>
			<tr><td> 1st Cuprising </td> <td> January 30th, 2016 </td> <td class="finishedText"> Finished </td>  <td><a class="item someEvent"> More Info </a></td>  </tr>
			<tr><td> 1st Phi Delt Gates </td> <td> March 3rd, 2016 </td><td class="requiredText"> In Progress </td><td><a class="item someEvent"> More Info </a></td> <td> <button class="item requestHelp"> Request Help </button> </td> </tr>
			<tr><td> Green Beer Day Shirts </td> <td> March 10th, 2016 </td> <td class="requiredText"> In Progress </td>  <td><a class="item someEvent"> More Info </a><td> <button class="item requestHelp"> Request Help </button> </tr>
		</table>
		<button onclick=> Make New Event  </button>
	</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Committee Involvement </h1>
		<table class="table">
			<tr><th> Members </th> <th> Involvement </th> <th> Comments </th></tr>
			<tr><td> Person 1 </td> <td> 1st Cuprising: Event Supervisor </td> <td><a class="memberComment"> More Info </a><td><td><button class="memberMessage"> Send Message</button></td></tr>
			<tr><td> Person 2 </td> <td> 1st Phi Delt Gates: Logistics Manager </td> <td><a class="memberComment"> More Info </a><td><td><button class="memberMessage"> Send Message</button> </tr>
		</table>
		<button onclick=> Add New Member  </button>
		</div>
	<div class="col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-6">
		<h1> Past Data </h1>
		<table class="table">
			<tr><td> <ul class="item">
				    <li><a> Events </a> <ul class="subitem">
					<li> <a href="/AKPsi-Attendance/Committees/Fundraising/Events/Phi-Delt-Gates.php"> Phi Delt Gates </a></li>
					<li> <a href=#> Cuprising </a></li>
					<li> <a href=#> Green Beer Day </a></li>
					</li></ul>
			</td></tr></ul>
			<tr><td> <ul class="item">
				    <li><a> Committee Heads </a> <ul class="subitem">
							<li> <a href="/AKPsi-Attendance/Committees/Fundraising/Leadership/Person1.php"> Person1 </a> </li>
							<li> <a> Person2 </a> </li>
							<li> <a> Person3 </a> </li>
					</li> </ul>
			</td></tr></ul>
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

