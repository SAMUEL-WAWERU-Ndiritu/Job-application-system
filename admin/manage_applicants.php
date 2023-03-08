<?php
require_once ("../rootpath.php");
require_once('app/connect.php');
require_once(ROOT_PATH."/includes/header.php") ;
require_once('app/fetch_data.php');


$count = 0;
?>

   <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
        <div class="list-group">
        <h6>Date of Birth</h6>
        <?php
        $query="SELECT DISTINCT(date_of_birth) FROM personal_details  ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector date_of_birth" value="<?php echo $row['date_of_birth'];?>"><?php echo $row['date_of_birth'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div>

        <div class="list-group">
        <h6>Gender</h6>
        <?php
        $query="SELECT DISTINCT(gender) FROM personal_details ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector gender" value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?>  
                </label> 
            </div>
            <?php
        }
    }
    
        ?>
        </div>


        <div class="list-group">
        <h6>Imparement</h6>
        <?php
        $query="SELECT DISTINCT(physical_imparement) FROM personal_details ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector physical_imparement " value="<?php echo $row['physical_imparement'];?>"><?php echo $row['physical_imparement'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div>



        <div class="list-group">
        <h6>Vacancy</h6>
        <?php
        $query="SELECT DISTINCT(vacancy) FROM 	vacancy ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector 	vacancy" value="<?php echo $row['vacancy'];?>"><?php echo $row['vacancy'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div>



        <div class="list-group">
        <h6>PHD</h6>
        <?php
        $query="SELECT DISTINCT(PHD_qualification) FROM high_level_education ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector PHD_qualification" value="<?php echo $row['PHD_qualification'];?>"><?php echo $row['PHD_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div> 




        <div class="list-group">
        <h6>Masters</h6>
        <?php
        $query="SELECT DISTINCT(Masters_qualification) FROM high_level_education ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector Masters_qualification" value="<?php echo $row['Masters_qualification'];?>"><?php echo $row['Masters_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div> 




        <div class="list-group">
        <h6>Degree</h6>
        <?php
        $query="SELECT DISTINCT(Degree_1_qualification) FROM high_level_education ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector Degree_1_qualification" value="<?php echo $row['Degree_1_qualification'];?>"><?php echo $row['Degree_1_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div> 





        <div class="list-group">
        <h6>Diploma 1</h6>
        <?php
        $query="SELECT DISTINCT(Diploma_1_qualification) FROM diploma_level ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector Diploma_1_qualification" value="<?php echo $row['Diploma_1_qualification'];?>"><?php echo $row['Diploma_1_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div> 





        <div class="list-group">
        <h6>Diploma 2</h6>
        <?php
        $query="SELECT DISTINCT(Diploma_2_qualification) FROM diploma_level  ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector Diploma_2_qualification" value="<?php echo $row['Diploma_2_qualification'];?>"><?php echo $row['Diploma_2_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div> 



        <div class="list-group">
        <h6>Diploma 3</h6>
        <?php
        $query="SELECT DISTINCT(Diploma_3_qualification) FROM diploma_level  ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector Diploma_3_qualification" value="<?php echo $row['Diploma_3_qualification'];?>"><?php echo $row['Diploma_3_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div> 




        <div class="list-group">
        <h6>Diploma 4</h6>
        <?php
        $query="SELECT DISTINCT(Diploma_4_qualification) FROM diploma_level ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector Diploma_4_qualification" value="<?php echo $row['Diploma_4_qualification'];?>"><?php echo $row['Diploma_4_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div>
        

        <div class="list-group">
        <h6>Certificate 1</h6>
        <?php
        $query="SELECT DISTINCT(certificate_1_qualification) FROM certificate_level ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
                 ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector certificate_1_qualification" value="<?php echo $row['certificate_1_qualification'];?>"><?php echo $row['certificate_1_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div> 


        <div class="list-group">
        <h6>Certificate 2</h6>
        <?php
        $query="SELECT DISTINCT(certificate_2_qualification) FROM certificate_level ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector certificate_2_qualification" value="<?php echo $row['certificate_2_qualification'];?>"><?php echo $row['certificate_2_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div> 

        <div class="list-group">
        <h6>Certificate 3</h6>
        <?php
        $query="SELECT DISTINCT(certificate_3_qualification) FROM certificate_level ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector certificate_3_qualification" value="<?php echo $row['certificate_3_qualification'];?>"><?php echo $row['certificate_3_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div> 



        <div class="list-group">
        <h6>Certificate 4</h6>
        <?php
        $query="SELECT DISTINCT(certificate_4_qualification) FROM certificate_level ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector certificate_4_qualification" value="<?php echo $row['certificate_4_qualification'];?>"><?php echo $row['certificate_4_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div> 



        <div class="list-group my-2">
        <h6>KCSE</h6>
        <?php
        $query="SELECT DISTINCT(secondary_qualification) FROM o_level ORDER BY id DESC";
        $result= mysqli_query($conn,$query);
        $rowCount= mysqli_num_rows($result);
        if($rowCount > 0){
            while($row= mysqli_fetch_assoc($result)){
            ?>
            <div class="list-group-item checkbox">
                <label>
                    <input type="checkbox" class="common_selector secondary_qualification" value="<?php echo $row['secondary_qualification'];?>"><?php echo $row['secondary_qualification'];?>  
                </label> 
            </div>
            <?php
        }
    }
        ?>
        </div> 
    </div>


<div class="col-md-8">
    <button onclick="window.printpart()">Print this page</button>
    <div class="row filter_data" id="toprint">

   

    </div>
</div>






</div>
    </div>


<script>
function printpart () {
  var printwin = window.open("");
  printwin.document.write(document.getElementById("toprint").innerHTML);
  printwin.stop();
  printwin.print();
  printwin.close();
}
   </script>
 
   