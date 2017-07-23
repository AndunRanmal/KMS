<?php
if(isset($_POST['page'])){
    //Include Pagination class file
    include('pagination.php');
    
    //Include database configuration file
    include('../config/config.php');
    
    $start = !empty($_POST['page'])?$_POST['page']:0;
    $limit = 10;
    
    //get number of rows
    $queryNum = $conn->query("SELECT COUNT(*) as Item_num FROM stock");
    $resultNum = $queryNum->fetch_assoc();
    $rowCount = $resultNum['Item_num'];
    
    //initialize Pagination class
    $pagConfig = array('baseURL'=>'getData.php', 'totalRows'=>$rowCount, 'currentPage'=>$start, 'perPage'=>$limit, 'contentDiv'=>'posts_content');
    $pagination =  new Pagination($pagConfig);
    
    //get rows
    $query = $conn->query("SELECT * FROM stock  LIMIT $start,$limit");
    
    if($rowCount > 0){ ?>
        <div class="posts_list">
        <?php
            while($row = $query->fetch_assoc()){ 
                $postID = $row['Item_id'];
        ?>
            <div class="list_item"><a href="javascript:void(0);"><h2><?php echo $row["title"]; ?></h2></a></div>
        <?php } ?>

        </div>
        <?php echo $pagination->createLinks(); ?>
<?php }
}
?>