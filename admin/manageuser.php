<?php
require_once ("../rootpath.php");
require_once('app/connect.php');
require_once(ROOT_PATH."/includes/header.php") ;


  ?>  
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3  bg-success" >
                <div class="text-left  p-2 my-4 ">
                    <a href="adduser.php" class="text-white">Add user</a>
                </div >
                <div class="text-left  p-2 my-4">
                    <a href="manageuser.php" class="text-white">Manage user</a>
                </div>
                
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class="my-4 mx-4">
                    <button type="button" class="btn btn-lg btn-success"><a href="adduser.php" class="text-white">Add User</a></button>
                    <button type="button" class="btn btn-lg btn-success"><a href="manageuser.php" class="text-white">Manage Users</a></button>
                </div>
                <div>
                    <h3 class="text-center text-muted">Manage Users</h3>
                    <div class="mx-2">
                        <div class="table-responsive text-center mx-4">
                            <table class="table table-border">
                            <?php
                        $sql= "SELECT * FROM users";
                        $stmt=$conn->prepare($sql);
                         $stmt->execute();
                      
                           ?>
                                <tr>
                                    <th>SN</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                 $result= mysqli_stmt_get_result($stmt);
                                 $num= mysqli_num_rows($result);
                                 if($num > 0){
                                      while($rows=mysqli_fetch_assoc($result)){?>
                                        <tr>
                                        <td><?php echo $rows['id']?></td>
                                        <td><?php echo $rows['email']?></td>
                                        <td><?php echo $rows['firstname']?></td>
                                        <td><?php echo $rows['lastname']?></td>
                                        <td><a href="create/delete.php?action=deleted&id=<?php echo $rows['id']?>">Delete</a></td>
        
                                    </tr>
                                    <?php
                                    }
 
                                 }else{
                                     header('location:managetopic.php?error=norecord');
                                     exit();
                                 }
                                 
                                ?>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    