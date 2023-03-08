<?php


require_once 'apps/connect.php';
require_once 'admin/app/fetch_data.php';
include 'rootpath.php';
include (ROOT_PATH."/includes/header.php") ;
$count = 0;





?>

    <div class="container">
        <div class="row">
            <h2 aligh n ="center">Product filter</h3>
            <div class="col-md-3">
               
                <div class="list-group">
                    <h3>job_application_Title</h3>
                    <?php
                   
                  
                    $query = "SELECT DISTINCT(Job_application_Title) FROM  application_form WHERE applicant_status= '1' ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                            $count = $count + 1;
                
                        ?>
                        <div class="list-group-item checkbox">
                           <label><input type="checkbox"  class="common_selector job_application_Title" value="<?php echo $row['Job_application_Title']; ?>"><?php echo $row['Job_application_Title'];?></label>
                        </div>
                        <?php
                    }
                }
                    
                    ?>
                </div>
                <div class="list-group">
                    <h3>Highest_Academic_level</h3>
                    <?php
                    $query = "SELECT DISTINCT(Highest_Academic_level) FROM  application_form Where applicant_status= '1' ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                            $count = $count + 1;
                        ?>
                        <div class="list-group-item checkbox">
                           <label><input type="checkbox"  class="common_selector Highest_Academic_level" value="<?php echo $row['Highest_Academic_level']; ?>"><?php echo $row['Highest_Academic_level'];?></label>
                        </div>
                        <?php
                    }
                }
                    
                    ?>
                </div>
                <div class="list-group">
                    <h3>Specialization</h3>
                    <?php
                    $query = "SELECT DISTINCT(specialization) FROM  application_form Where applicant_status= '1' ORDER BY specialization DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                            $count = $count + 1;{
                        ?>
                        <div class="list-group-item checkbox">
                           <label><input type="checkbox"  class="common_selector specialization" value="<?php echo $row['specialization']; ?>"><?php echo $row['specialization'];?></label>
                        </div>
                        <?php
                            }
                        }

                }
                    
                    ?>
                </div>

                <div class="list-group">
                    <h3>Year_of_Birth</h3>
                    <?php
                    $query = "SELECT DISTINCT(Year_of_Birth) FROM  application_form Where applicant_status= '1' ORDER BY Year_of_Birth DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                            $count = $count + 1;
                        ?>
                        <div class="list-group-item checkbox">
                           <label><input type="checkbox"  class="common_selector Year_of_Birth" value="<?php echo $row['Year_of_Birth']; ?>"><?php echo $row['Year_of_Birth'];?></label>
                        </div>
                        <?php
                    }
                }
                    
                    ?>
                </div>
              
                <div class="list-group">
                    <h3>Gender</h3>
                    <?php
                    $query = "SELECT DISTINCT(gender) FROM  application_form Where applicant_status= '1' ORDER BY gender DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                            $count = $count + 1;
                        ?>
                        <duv class="list-group-item checkbox">
                           <label><input type="checkbox"  class="common_selector gender" value="<?php echo $row['gender']; ?>"><?php echo $row['gender'];?></label>
                        </div>
                        <?php
                    }
                }
                    
                    ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row filter_data">
               
                </div>
            </div>
        </div>
    </div>
        

</body>
</html> 