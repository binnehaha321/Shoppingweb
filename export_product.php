<?php
    $host = "ec2-34-201-248-246.compute-1.amazonaws.com";
    $db = "d42h9056e35279";
    $port = "5432";
    $user = "rponamderkkkmc";
    $pass = "105ab42d7801e58387e0c25b8415c697368496699430053faf5d1519a028106c";
    $ssl = "require";

    $link = pg_connect("host=".$host." dbname=".$dbname." port=".$port." user=".$user." password=".$pass." sslmode=".$ssl);

	$query = 'SELECT proID, proName, proCost, proImg, proDesc FROM "Product" ORDER BY "proID"';
	
    $prod = pg_query($link, $query);
	?>
<div class="row">	
	<?php   
while ($row = pg_fetch_row($prod)) { ?>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="<?php echo $row[1];?>">
      <div class="caption">
        <h3><?php echo $row[2];?></h3>
		<h6>Super toys <?php echo $row['2'];?> was made in Vietnam or some where.</h6>
		<h6><a href="datapro.php?pid=<?php echo $row[0]?>"><button type="button" class="btn btn-info">Buy</button></a></h6>
      </div>
    </div>		
  </div>


<?php } ?>