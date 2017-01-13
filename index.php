<!-- MALCOLM MALLOY PORTFOLIO -->
<!-- Home Page -->

<!-- Header Include -->
<?php
	include('includes/header.php');
?>

<!-- Page Title -->
<title>Malcolm Malloy - Portfolio</title>

<!-- Layout Include -->
<?php	
	include('includes/layout.php');
?>


<!-- Slide Plugin JavaScript -->
<script type="text/javascript">
	<!--
	//var image1=new Image()
	//image1.src="images/photo1.jpg"
	//var image2=new Image()
	//image2.src="images/photo2.jpg"
	//var image3=new Image()
	//image3.src="images/photo3.jpg"
	//-->
</script>

           
        
<!-- Content Div -->
<div id="content">

	<!-- Header Div -->    
	<div id="header">
		
		<h1>Malcolm Malloy<span style="font-size:38px; letter-spacing:2px; ">'</span>s</h1>
		<h3>-  Information Technology Portfolio  -</h3>
		
	</div>
	
	<!-- Slide Plugin -->
	<div id="slide">
		<img src="images/photo1.jpg" name="slide" width=600 height=400> 
			<script>
				var step=1
				function slideit(){
				if (!document.images)
				return
				document.images.slide.src=eval("image"+step+".src")
				if (step<3)
				step++
				else
				step=1
				setTimeout("slideit()",5000)
				}
				slideit()
			</script>   
	</div>
</div>

<!-- Footer Include -->
<?php	
	include('includes/footer.php');
?>

<!-- Website created by Malcolm Malloy 2015 -->