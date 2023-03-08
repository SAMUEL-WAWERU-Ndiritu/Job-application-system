<?php
#
#

$count = 0;
$sql= 'SELECT
vacancy.id,vacancy.vacancy,personal_details.applicant_name,personal_details.ID_number,personal_details.gender,personal_details.date_of_birth,personal_details.ethnicity,personal_details.mobile,personal_details.county,personal_details.Division,personal_details.ward,personal_details.physical_imparement,high_level_education.PHD_gradution_year,high_level_education.PHD_qualification,high_level_education.Masters_gradution_year,high_level_education.Masters_qualification,high_level_education.Degree_1_gradution_year,high_level_education.Degree_1_qualification,diploma_level.Diploma_1_gradution_year,diploma_level.Diploma_1_qualification,diploma_level.Diploma_2_gradution_year,diploma_level.Diploma_2_qualification,diploma_level.Diploma_3_gradution_year,diploma_level.Diploma_3_qualification,diploma_level.Diploma_4_gradution_year,diploma_level.Diploma_4_qualification,certificate_level.certificate_1_gradution_year,certificate_level.certificate_1_qualification,certificate_level.certificate_2_gradution_year,certificate_level.certificate_2_qualification,certificate_level.certificate_3_gradution_year,certificate_level.certificate_3_qualification,certificate_level.certificate_4_gradution_year,certificate_level.certificate_4_qualification,o_level.secondary_gradution_year,o_level.secondary_qualification
FROM vacancy
INNER JOIN personal_details ON vacancy.id = personal_details.id 
INNER JOIN high_level_education ON vacancy.id= high_level_education.id
INNER JOIN diploma_level ON vacancy.id=diploma_level.id
INNER JOIN certificate_level ON  vacancy.id=certificate_level.id
INNER JOIN o_level ON vacancy.id=o_level.id'; 

if (isset($_POST['search'])) {

    $search_term = trim($_POST['search-box']);
    $sql .= " WHERE applicant_name LIKE '%".$search_term."%'";
    $result= $conn->query($sql);
    $output = "";


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

if (!empty($result) && $result->num_rows > 0) {
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
else{
$output = '<h3>No Data Found</h3>';
}
echo $output;
}
?>
</table>
</div>
