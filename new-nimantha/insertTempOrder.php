<?php require 'connection.php';?>
<?php
$error="";
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

    if($_POST["set"]=="insert"){
        $menu = $_POST["menu"];
        $item = $_POST["Item"];
        $qty = $_POST["qty"];
        $tot = $_POST["tot"];
        $id = $_POST["tempId"];

        $sql = "insert into `temporder` (`id`, `menu`, `item`, `qty`, `price`)
                values('".$id."','".$menu."','".$item."','".$qty."','".$tot."')";
        
        mysqli_query($con,$sql);
        
    }


    if($_POST["set"]=="table"){
        $id = $_POST["tempId"];
        

        $sql = "select * from `temporder` where `id` = '".$id."'";
        $res= mysqli_query($con,$sql);
        if(mysqli_num_rows($res)>0){
           while($row = mysqli_fetch_assoc($res)){ ?>
    

        <tr>
            <td>
                <center><label style="width: auto; " class="form-control"><?php echo $row["menu"]; ?></label></center>
            </td>

            <td>
                <center><label style="width: 100%" class="form-control"><?php echo $row["item"]; ?></label></center>
            </td>

            <td>
                <center><label class="form-control"><?php echo $row["qty"]; ?></label></center>
            </td>

            <td>
                <center><label style="width: auto; " class="form-control"><?php echo $row["price"]; ?></label></center>
            </td>
            <td>
                <center><a onclick="del(<?php echo $row["uniquID"]; ?>)" id='delete_row' class="pull-center btn btn-default btn-danger">Delete Order</a><center>
            </td>
        </tr>
    
    <?php   }
        }
        else{ ?>


                <tr>
                    <td colspan="5">
                        <center><label class="form-control">No Orders Yet</label></center>
                    </td>

                </tr>

    <?php   }
        
        
    }


    if($_POST["set"]=="del"){
        $id = $_POST["tempId"];
        $UnId = $_POST["unId"];

        $sql = "delete from `temporder` where id = '".$id."' and uniquID = '".$UnId."'";
        mysqli_query($con,$sql);
        echo $sql;
    }



     

?>