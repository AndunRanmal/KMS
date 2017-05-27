<?php
include("../config/config.php");
include("../include/nav.php");
include("../include/stock_keeper.php");
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="stock_handling.php">Stock Handling</a></li>
                </ol>
                <form style="float: left;" method="POST" action="Search_ingriedients.php">
                    <div class="form-group">
                	    <input list="items" type="text" name="search" class="form-control" placeholder="Search an Ingredient" size="30">
                	    <datalist id="items">
                	    	<?php 
                                $sql = "SELECT * FROM `items`";
                                $res = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($res)){
                                    $item = $row['Item_Name'];
                                    echo $item;
                                    ?>
                                    <option><?php echo $item; ?></option>
                            <?php    
                                }
                            ?>  
                	    </datalist>
                	    <input type="submit" name="submit" class=" btn btn-info fa fa-search" value="SEARCH">
                    </div>
                </form>
                <button class="btn btn-info" onclick="location.href='pr.html'"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>