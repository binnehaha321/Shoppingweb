<style>
#banner img{
    margin: 10px 155px;
    border-radius: 10px;
}
</style>
<!DOCTYPE html>
<html>
        <title>OTABASTORE</title>
        <?php 
            require'header.php';
        ?>
        <?php 
            require'export_cate.php';
        ?>
        <div id = "banner">
            <img src="images/banner.jpg"/>
        </div>       
        <?php 
            require'export_img.php';
        ?>
     <?php
        require'footer.php';
     ?>

</html>

