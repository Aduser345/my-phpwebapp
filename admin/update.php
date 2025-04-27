<?php 

    require_once('./admin_includes/header.php');

    if(isset($_POST['btn_edit_category']))
    {
        $up_id = $_POST['edit_id'];
        $up_cat = $_POST['edit_category'];
        $up_sub_cat = $_POST['edit_sub_category'];

        $sql = "update categories set cat_title='$up_cat', cat_sub='$up_sub_cat' where cat_id='$up_id'";
        $result = mysqli_query($con,$sql);

        if($result)
        {            
            header("location:categories.php");
            echo '<p class="alert alert-success"> Your Category has been Updated </p>';
        }
        else
        {
            echo" Query Failed";
        }
    }

?>