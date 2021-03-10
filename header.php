<html>
<div class="header">
  	<a href="Nike" class="logo">Nike</a>
  	<div class="header-right">
    	<a class="active" href="#home">Home</a>
    	<a href="#contact">Contact</a>
    	<a href="#about">About</a>
		<a href="#signin">Sign in</a>
  	</div>
	</div>
	<?php
		include 'db.php';
		$sql= "Select * from Product";
        $result= pg_query($link, $sql);
        $resultcheck=pg_num_rows($result);
	while ($row = pg_fetch_assoc($result)) {
		$image='images/'.$row['proImage'];
	?>
	<div class="card">
		<img src="<?php $image ?>" alt="Nike Air Force 1 '07 LX" style="width:20%">
		<h1><?php $row['proName'] ?></h1>
		<p class="price" style="opacity: 85%; font-size: 20px;"><?php $row['proCost'] ?></p>
		<p><?php $row['proDesc']; }?></p>
		<p><button>Add to Cart</button></p>
	  </div>
</html>