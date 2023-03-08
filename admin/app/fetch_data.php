<?php
require_once 'connect.php';
if(isset($_POST['action'])){
  $query="SELECT
  vacancy.id,vacancy.vacancy,personal_details.applicant_name,personal_details.ID_number,personal_details.gender,personal_details.date_of_birth,personal_details.ethnicity,personal_details.mobile,personal_details.county,personal_details.Division,personal_details.ward,personal_details.physical_imparement,high_level_education.PHD_gradution_year,high_level_education.PHD_qualification,high_level_education.Masters_gradution_year,high_level_education.Masters_qualification,high_level_education.Degree_1_gradution_year,high_level_education.Degree_1_qualification,diploma_level.Diploma_1_gradution_year,diploma_level.Diploma_1_qualification,diploma_level.Diploma_2_gradution_year,diploma_level.Diploma_2_qualification,diploma_level.Diploma_3_gradution_year,diploma_level.Diploma_3_qualification,diploma_level.Diploma_4_gradution_year,diploma_level.Diploma_4_qualification,certificate_level.certificate_1_gradution_year,certificate_level.certificate_1_qualification,certificate_level.certificate_2_gradution_year,certificate_level.certificate_2_qualification,certificate_level.certificate_3_gradution_year,certificate_level.certificate_3_qualification,certificate_level.certificate_4_gradution_year,certificate_level.certificate_4_qualification,o_level.secondary_gradution_year,o_level.secondary_qualification
  FROM vacancy
  INNER JOIN personal_details ON vacancy.id = personal_details.id 
  INNER JOIN high_level_education ON vacancy.id= high_level_education.id
  INNER JOIN diploma_level ON vacancy.id=diploma_level.id
  INNER JOIN certificate_level ON  vacancy.id=certificate_level.id
  INNER JOIN o_level ON vacancy.id=o_level.id
  ";
  
if(isset($_POST['gender'])){
  $gender_filter = implode("','",$_POST['gender']);
  $query .="
  AND gender IN('".$gender_filter."')
  ";
}
if(isset($_POST['date_of_birth'])){
  $date_of_birth_filter = implode("','",$_POST['date_of_birth']);
  $query .="
  AND date_of_birth IN('".$date_of_birth_filter."')
  ";
}
if(isset($_POST['physical_imparement'])){
  $physical_imparement_filter = implode("','",$_POST['physical_imparement']);
  $query .="
  AND physical_imparement IN('".$physical_imparement_filter."')
  ";
}
if(isset($_POST['vacancy'])){
  $vacancy_filter = implode("','",$_POST['vacancy']);
  $query .="
  AND vacancy IN('".$vacancy_filter."')
  ";
}

if(isset($_POST['PHD_qualification'])){
  $PHD_qualification_filter = implode("','",$_POST['PHD_qualification']);
  $query .="
  AND PHD_qualification  IN('".$PHD_qualification_filter."')
  ";
}

if(isset($_POST['Masters_qualification'])){
  $Masters_qualification_filter = implode("','",$_POST['Masters_qualification']);
  $query .="
  AND Masters_qualification  IN('".$Masters_qualification_filter."')
  ";
}

if(isset($_POST['Degree_1_qualification'])){
  $Degree_1_qualification_filter = implode("','",$_POST['Degree_1_qualification']);
  $query .="
  AND Degree_1_qualification  IN('".$Degree_1_qualification_filter."')
  ";
}
if(isset($_POST['Diploma_1_qualification'])){
  $Diploma_1_qualification_filter = implode("','",$_POST['Diploma_1_qualification']);
  $query .="
  AND Diploma_1_qualification  IN('".$Diploma_1_qualification_filter."')
  ";
}

if(isset($_POST['Diploma_2_qualification'])){
  $Diploma_2_qualification_filter = implode("','",$_POST['Diploma_2_qualification']);
  $query .="
  AND Diploma_2_qualification  IN('".$Diploma_2_qualification_filter."')
  ";
}

if(isset($_POST['Diploma_3_qualification'])){
  $Diploma_3_qualification_filter = implode("','",$_POST['Diploma_3_qualification']);
  $query .="
  AND Diploma_3_qualification  IN('".$Diploma_3_qualification_filter."')
  ";
}
if(isset($_POST['Diploma_4_qualification'])){
  $Diploma_4_qualification_filter = implode("','",$_POST['Diploma_4_qualification']);
  $query .="
  AND Diploma_4_qualification  IN('".$Diploma_4_qualification_filter."')
  ";
}

if(isset($_POST['certificate_1_qualification'])){
  $certificate_1_qualification_filter = implode("','",$_POST['certificate_1_qualification']);
  $query .="
  AND certificate_1_qualification  IN('".$certificate_1_qualification."')
  ";
}

if(isset($_POST['certificate_2_qualification'])){
  $certificate_2_qualification_filter = implode("','",$_POST['certificate_2_qualification']);
  $query .="
  AND certificate_2_qualification  IN('".$certificate_2_qualification."')
  ";
}

if(isset($_POST['certificate_3_qualification'])){
  $certificate_3_qualification_filter = implode("','",$_POST['certificate_3_qualification']);
  $query .="
  AND certificate_3_qualification  IN('".$certificate_3_qualification."')
  ";
}

if(isset($_POST['certificate_4_qualification'])){
  $certificate_4_qualification_filter = implode("','",$_POST['certificate_4_qualification']);
  $query .="
  AND certificate_4_qualification  IN('".$certificate_4_qualification."')
  ";
}
  
if(isset($_POST['secondary_qualification'])){
  $secondary_qualification_filter = implode("','",$_POST['secondary_qualification']);
  $query .="
  AND secondary_qualification  IN('".$secondary_qualification ."')
  ";
}
    
    
    $result= mysqli_query($conn,$query);
    $rowCount= mysqli_num_rows($result);
    $output= '';
                    
    
    
    
    ?>
             
                <h3 class="text-center">APPLICANT RECORD</h3>
                <div class="table-responsive">
                <table class="table table-border table-striped">
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
               <th col>High level education(PHD,MASTERS,DEGREE)</th>
               <th col>Diploma level education</th>
               <th col>Certificate level education and KCSE</th>
                      </tr>
    <?php
    if($rowCount > 0){
      while($row= mysqli_fetch_assoc($result)){
           $output .= '
           <tr>
           <td>  '.$row["id"].'</td>
           <td> '.$row["vacancy"].'</td>
            <td> '.$row["applicant_name"].'</td>
            <td> '.$row["ID_number"].'</td>
            <td> '.$row["gender"].'</td>
            <td> '.$row["date_of_birth"].'</td>
            <td> '.$row['ethnicity'].'</td>
            <td> '.$row["mobile"].'</td>
            <td> '.$row["county"].'</td>
            <td> '.$row["Division"].'</td>
            <td> '.$row["ward"].'</td>
            <td> '.$row["physical_imparement"].'</td>
            <td>
            <li>PHD:'.$row['PHD_gradution_year'].'-'.$row['PHD_qualification'].' </li>
            <li>MASTERS:'.$row['Masters_gradution_year'].'-'.$row['Masters_qualification'].' </li>
            <li>DEGREE:'.$row['Degree_1_gradution_year'].'-'.$row['Degree_1_qualification'].'</li>
              </td>
            <td>
            <li>'.$row['Diploma_1_gradution_year'].'-'.$row['Diploma_1_qualification'].'</li>
            <li>'. $row['Diploma_2_gradution_year'].'-'.$row['Diploma_2_qualification'].'</li>
            <li>'.$row['Diploma_3_gradution_year'].'-'.$row['Diploma_3_qualification'].'</li>
            <li>'.$row['Diploma_4_gradution_year'].'-'.$row['Diploma_4_qualification'].'</li>
            </td>

          <td>
            <li>'.$row['certificate_1_gradution_year'].'-'.$row['certificate_1_qualification'].'</li>
            <li>'.$row['certificate_2_gradution_year'].'-'.$row['certificate_2_qualification'].'</li>
            <li>'.$row['certificate_3_gradution_year'].'-'.$row['certificate_3_qualification'].'</li>
            <li>'.$row['certificate_4_gradution_year'].'-'.$row['certificate_4_qualification'].'</li>
            <li>KCSE:'.$row['secondary_gradution_year'].'-'.$row['secondary_qualification'].'</li>
            </td>
            
</tr>

           
           
           ';
    }
}
   else
   {
     $output = '<h3>No Date Found</h3>';
   }
   echo $output;
  }
   ?>
</table>
</div>


  
