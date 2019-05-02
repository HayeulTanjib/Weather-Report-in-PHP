<?php require 'header.php'; ?>
	<!-- header -->



	<div class="panel panel-default">
		<div class="panel-heading">
			<center><h3>Search your city's weather info</h3></center>
	</div>
	
	
</div>



<div class="paanel-body">
	<center>
		
		<form action="getdata.php" method="GET">
      <input type="text" class="fadeIn first" name="city" placeholder="Enter your city">
      <input type="text"  class="fadeIn first" name="country" placeholder="Enter your country">
      <input type="submit" class="fadeIn fourth"  value="Search">
    </form>

	</center>

</div>





<!-- footer	 -->
<?php require 'footer.php'; ?>

