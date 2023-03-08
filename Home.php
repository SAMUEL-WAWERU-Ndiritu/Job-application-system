
<?php
require_once 'rootpath.php';
require_once (ROOT_PATH."/apps/connect.php");
require_once(ROOT_PATH."/includes/header.php") ;


$count= 0;
if(isset($_POST['submit'])){
    $Applicant_first_name=trim($_POST['Applicant_first_name']);
    $Applicant_last_name= trim($_POST["Applicant_last_name"]);

$sql= "SELECT * FROM application_form ORDER BY id ASC WHERE Applicant_first_name=$Applicant_first_name || Applicant_last_name=$Applicant_first_name";
$result= mysqli_query($conn,$sql);
}
?>
<div class="form_responsive text-center">
<form action="Home.php" method="POST">
<label for="fname">First Name</label>
<input type="text" name="Applicant_first_name" id="fname">
<label for ="lastname">Last Name</label>
<input type="text" name="Applicant_last_name" id="lastname"><br>
<button type="submit" name="submit" class="my-3 mx-5 btn btn-lg btn-success">SEARCH RECORD</button>

</form>
</div>
<div class="container">
            <div class="row">
                <h3 class="text-center">APPLICANT RECORD</h3>
                <div class="table-responsive"    id="table_style">
                <table class="table table-border table-striped " >

<?php
$sql= "SELECT * FROM  application_form ORDER BY id ASC";
$result= mysqli_query($conn,$sql);

?>
        
        <tr>
                <th col>Id</th>
                <th col>Job Application Title</th>
                <th col>Name</th>
                <th col>ID number</th>
                <th col>Gender</th>
                <th col>Year Of Birth</th>
                <th col>Ethnicity</th>
                <th col>Tel_contact</th>
                <th col>Home County</th>
                <th col>Home Constituency</th>
                <th col>ward</th>
                <th col>PWD</th>
               <th col>Qualification and Year of graduation</th>
                      </tr>
    <?php
 if($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
            $count = $count + 1;
            $output .= '
    
             <tr>
                                   <td>  '.$row["id"].'</td>
                                   <td> '.$row["vacancy"].'</td>
                                    <td> '.$row["applicant_name"].'</td>
                                    <td> '.$row["ID_number"].'</td>
                                    <td> '.$row["gender"].'</td>
                                    <td> '.$row["date_of_birth"].'</td>
                                    <td> '.$row['ethnicity'].'</td>
                                    <td> '.$row["Tel_contact"].'</td>
                                    <td> '.$row["county"].'</td>
                                    <td> '.$row["Division"].'</td>
                                    <td> '.$row["ward"].'</td>
                                    <td> '.$row["physical_imparement"].'</td>
                                    <td><ul>
                                    <li>'.$row['PHD_graduation_year'].'-'.$row['PHD_qualification'].' </li>
                                    <li>'.$row['Masters_graduation_year'].'-'.$row['Masters_qualification'].' </li>
                                    <li>'.$row['Degree_1_graduation_year'].'-'.$row['Degree_1_qualification'].'</li>
                                    <li>'.$row['Degree_2_graduation_year'].'-'.$row['Degree_2_qualification'].'</li>
                                    <li>'.$row['Masters_graduation_year'].'-'.$row['Masters_qualification'].'</li>
                                    <li>
                                    <ul>
                                           <li>'.$row['Diploma_1_graduation_year'].'-'.$row['Diploma_1_qualification'].'</li>
                                           <li>'.$row['Diploma_2_graduation_year'].'-'.$row['Diploma_2_qualification'].'</li>
                                           <li>'.$row['Diploma_3_graduation_year'].'-'.$row['Diploma_3_qualification'].'</li>
                                           <li>'.$row['Diploma_4_graduation_year'].'-'.$row['Diploma_4_qualification'].'</li>

                                  </ul></li>
                                    <li><ul>
                                    <li>'.$row['certificate_1_graduation_year'].'-'.$row['certificate_1_qualification'].'</li>
                                    <li>'.$row['certificate_2_graduation_year'].'-'.$row['certificate_2_qualification'].'</li>
                                    <li>'.$row['certificate_2_graduation_year'].'-'.$row['certificate_2_qualification'].'</li>
                                    <li>'.$row['certificate_3_graduation_year'].'-'.$row['certificate_3_qualification'].'</li>
                                    <li>'.$row['certificate_4_graduation_year'].'-'.$row['certificate_4_qualification'].'</li>
                                    </ul></li>
                                    <li>'.$row['secondary_graduation_year'].'-'.$row['secondary_qualification'].'</li>
                                    </ul></td>
                                    
             </tr>';
             
                        
                                    
                                    
                                   
                                    
                                }
                            }
                            ?>
                            <div class="text-center   my-3 text-white icon" >TOTAL APPLICANTS  &nbsp;&nbsp;&nbsp;<span class="text-light p-1"> <?php  echo $count ?></span></div>
                       
                </table>
                
    </div>
    </div>
    </div>
        
<?php 
include (ROOT_PATH."/includes/footer.php") ;
?>