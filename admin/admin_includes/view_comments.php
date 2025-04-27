<table class="table table-stripped">
                        <tr>
                            <td>ID</td>
                            <td>Author</td>
                            <td>Comment</td>
                            <td>Email</td>
                            <td>Response to</td>
                            <td>Status</td>
                            <td>Date</td>
                            <td>Approve</td>
                            <td>UnApprove</td>
                            <td colspan="2">Operations</td>
                        </tr>
                        <tr>
                        <?php

                            $query = "select * from comments";
                            $comments = mysqli_query($con,$query);

                            while($row=mysqli_fetch_assoc($comments))
                            {
                                $comment_id = $row['comments_id'];
                                $comment_post_id = $row['comments_post_id'];
                                 
                        ?>
                            <td><?php echo $row['comments_id']?></td>
                            <td><?php echo $row['comments_author']?></td>
                            <td><?php echo $row['comments_content']?></td> 
                            <td><?php echo $row['comments_email']?></td>

                            <?php 

                                $query = "select * from posts where post_id = '$comment_post_id'";
                                $result = mysqli_query($con,$query);

                                while($value = mysqli_fetch_assoc($result))
                                {
                                    $post_id = $value['post_id'];
                                    $post_title= $value['post_title'];
                                    
                            ?>

                                <td><a href="../post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title ?></a></td>
                            
                            <?php
                              }
                            
                            ?>

                                                         
                            <td><?php echo $row['comments_status']?></td>
                            <td><?php echo $row['comments_date']?></td>
                            <td><a href="./comments.php?approve=<?php echo $comment_id ?>">Approve </a></td>
                            <td><a href="./comments.php?unapprove=<?php echo $comment_id ?>">UnApprove </a></td>
                            <td><a href="./comments.php?del=<?php echo $comment_post_id ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                            
                            </tr>
                        <?php       
                            }
                            //Deleting Comments

                            if(isset($_GET['del']))
                            {
                                
                                $sql_comment = "delete from comments where comments_id = '$comment_id'";
                                $comment_query = mysqli_query($con,$sql_comment);

                                if($comment_query)
                                {
                                    header('location: comments.php');
                                }

                            }

                            //Approve
                            if(isset($_GET['approve']))
                            {
                                $cmt_id = $_GET['approve'];
                                $sql_comment = "update comments set comments_status = 'Approved'
                                where comments_id='$cmt_id'";
                                $sql_result = mysqli_query($con,$sql_comment);

                                if($sql_result)
                                {
                                    header('location: comments.php');
                                }
                                                                
                            }

                        //UnApprove
                        if(isset($_GET['unapprove']))
                            {
                                $cmt_id = $_GET['unapprove'];
                                $sql_comment = "update comments set comments_status = 'UnApproved'
                                where comments_id='$cmt_id'";
                                $sql_result = mysqli_query($con,$sql_comment);

                                if($sql_result)
                                {
                                    header('location: comments.php');
                                }
                                                                
                            }



                        ?>                            
                        
</table>