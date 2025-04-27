<table class="table table-stripped">
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Category</td>
                            <td>Status</td>
                            <td>Image</td>
                            <td>Date</td>
                            <td colspan="2">Operations</td>
                        </tr>
                        <tr>
                        <?php

                            $query = "select * from games";
                            $result = mysqli_query($con,$query);

                            while($row=mysqli_fetch_assoc($result))
                            {
                                $cat_id = $row['game_cat_id'];
                        ?>
                            <td><?php echo $row['game_id']?></td>
                            <td><?php echo $row['game_title']?></td>                            
                            
                            <?php
                            
                                $query ="select * from categories where cat_id='$cat_id'";
                                $data = mysqli_query($con,$query);

                                while($value = mysqli_fetch_assoc($data))
                                {
                            ?>
                                <td><?php echo $value['cat_title']?></td>
                            <?php       
                                }

                            ?>                            
                            
                            <td><?php echo $row['game_status']?></td>
                            <td><img width="50" height="50" class="img-responsive" src="../images/<?php echo $row['game_img']?>"></td>
                            <td><?php echo $row['game_date']?></td>
                            <td><a href="./posts.php?opt=games&del=<?php echo $row['game_id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                            <td><a href="./posts.php?opt=edit_game&p_id=<?php echo $row['game_id']; ?>" class="btn btn-info"><span class="fa fa-edit"></span></a></td>
                            </tr>
                        <?php       
                            }
                        ?>                            
                        
                     </table>   

                        <?php
                        
                            if(isset($_GET['del']))
                            {
                                $Del_ID = $_GET['del'];
                                $sql ="delete from games where game_id = '$Del_ID'";
                                $result = mysqli_query($con,$sql);

                                    if($result)
                                    {   
                                        unlink("../images/$old");
                                        header("location: posts.php?opt=games");
                                    }
                            }

                        ?>