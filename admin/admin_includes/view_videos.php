<table class="table table-stripped">
                        <tr>
                            <td>ID</td>
                            <td>Video Title</td>
                            <td>Video Path</td>
                            <td>Category</td>                            
                            <td colspan="2">Operations</td>
                        </tr>
                        <tr>
                        <?php

                            $query = "select * from videos";
                            $result = mysqli_query($con,$query);

                            while($row=mysqli_fetch_assoc($result))
                            {
                                
                        ?>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['Title']?></td>
                            <td><?php echo $row['url']?></td>
                            <td><?php echo $row['Category']?></td>                            
                            <td><a href="./video.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                            <td><a href="./video.php?opt=edit_video&v_id=<?php echo $row['id']; ?>" class="btn btn-info"><span class="fa fa-edit"></span></a></td>
                            </tr>
                        <?php       
                            }
                        ?>                            
                        
                     </table>   

                        <?php
                        
                            if(isset($_GET['del']))
                            {
                                $Del_ID = $_GET['del'];
                                $sql ="delete from audios where id = '$Del_ID'";
                                $result = mysqli_query($con,$sql);

                                    if($result)
                                    {   
                                        unlink("../Uploads/$old");
                                        header("location: music.php");
                                    }
                            }

                        ?>