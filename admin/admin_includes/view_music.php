<table class="table table-stripped">
                        <tr>
                            <td>ID</td>
                            <td>Song Name</td>
                            <td>Artist</td>
                            <td>File Path</td>
                            <td>Image</td>
                            <td>Genre</td>
                            <td colspan="2">Operations</td>
                        </tr>
                        <tr>
                        <?php

                            $query = "select * from audios";
                            $result = mysqli_query($con,$query);

                            while($row=mysqli_fetch_assoc($result))
                            {
                                
                        ?>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['song']?></td>
                            <td><?php echo $row['artist']?></td>
                            <td><?php echo $row['filename']?></td>
                            <td><img width="50" height="50" class="img-responsive" src="<?php echo $row['image']?>"></td>
                            <td><?php echo $row['Genre']?></td>
                            <td><a href="./music.php?del=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>
                            <td><a href="./music.php?opt=edit_music&m_id=<?php echo $row['id']; ?>" class="btn btn-info"><span class="fa fa-edit"></span></a></td>
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