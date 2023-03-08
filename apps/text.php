<?php
$host = "localhost";
$root = "root";
$password = "";
$dbname = "psb";

$conn= new mysqli($host,$root,$password,$dbname);
if(mysqli_connect_error()){
    die("Connection failed".$conn->mysqli_connect_error());
}

$d = $conn;
//set autocommit to false
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        if(isset($_POST["submit"])){
            
         $Id_no = trim($_POST['ID_number']);
         $vacancy = trim($_POST['vacancy']);
         $vacancy_no= trim($_POST['vacancy_no']);
         $vacancy_ministry= trim($_POST['vacancy_ministry']);
         $vacancy_department= trim($_POST['vacancy_department']);#vacancy department ends here
         $applicant_name = trim($_POST['applicant_name']);
          $applicant_title= trim($_POST['applicant_title']);
          $date_of_birth = trim($_POST['date_of_birth']);
          $gender = trim($_POST['gender']);
          $nationality= trim($_POST['ethnicity']);
          $permanent_address = trim($_POST['permanent_address']);
          $postal_code = trim($_POST['postal_code']);
          $home_district = trim($_POST['county']);
          $Division = trim($_POST['Division']);
          $ward = trim($_POST['ward']);
          $postal_address = trim($_POST['postal_address']);
          $mobile= trim($_POST['mobile']);
          $email=  trim($_POST['email']);
          $alternative_person = trim($_POST['alternative_person']);
          $alternative_mobile = trim($_POST['alternative_mobile']);
          $proficient_languages = trim($_POST['proficient_languages']);
          $physical_imparement = trim($_POST['physical_imparement']);
          $imparement_details = trim($_POST['imparement_details']);
          $conviction_status = trim($_POST['conviction_status']);
          $conviction_details = trim($_POST['conviction_details']);
          $dismissal_job_status = trim($_POST['dismissal_job_status']);
          $dismissal_details = trim($_POST['dismissal_details']);
          $interview_status = trim($_POST['interview_status']);
          $interview_details = trim($_POST['interview_details']);
          $interview_date = trim($_POST['interview_date']);
          $PHD_institution = trim($_POST['PHD_institution']);#education details phd level
          $PHD_gradution_year= trim($_POST['PHD_gradution_year']);
          $PHD_qualification= trim($_POST['PHD_qualification']);
              #Masters
              $Masters_institution = trim($_POST['Masters_institution']);
              $Masters_gradution_year= trim($_POST['Masters_gradution_year']);
              $Masters_qualification= trim($_POST['Masters_qualification']);
          #degree level
          $Degree_1_institution = trim($_POST['Degree_1_institution']);
          $Degree_1_gradution_year= trim($_POST['Degree_1_gradution_year']);
          $Degree_1_qualification= trim($_POST['Degree_1_qualification']);
         


          #diploma level
          $Diploma_1_institution = trim($_POST['Diploma_1_institution']);
          $Diploma_1_gradution_year= trim($_POST['Diploma_1_gradution_year']);
          $Diploma_1_qualification= trim($_POST['Diploma_1_qualification']);
          $Diploma_2_institution = trim($_POST['Diploma_2_institution']);
          $Diploma_2_gradution_year= trim($_POST['Diploma_2_gradution_year']);
          $Diploma_2_qualification= trim($_POST['Diploma_2_qualification']);
          $Diploma_3_institution = trim($_POST['Diploma_3_institution']);
          $Diploma_3_gradution_year= trim($_POST['Diploma_3_gradution_year']);
          $Diploma_3_qualification= trim($_POST['Diploma_3_qualification']);
          $Diploma_4_institution = trim($_POST['Diploma_4_institution']);
          $Diploma_4_gradution_year= trim($_POST['Diploma_4_gradution_year']);
          $Diploma_4_qualification= trim($_POST['Diploma_4_qualification']);

          #certificate level
          $certificate_1_institution = trim($_POST['certificate_1_institution']);
          $certificate_1_gradution_year= trim($_POST['certificate_1_gradution_year']);
          $certificate_1_qualification= trim($_POST['certificate_1_qualification']);
          $certificate_2_institution = trim($_POST['certificate_2_institution']);
          $certificate_2_gradution_year= trim($_POST['certificate_2_gradution_year']);
          $certificate_2_qualification= trim($_POST['certificate_2_qualification']);
          $certificate_3_institution = trim($_POST['certificate_3_institution']);
          $certificate_3_gradution_year= trim($_POST['certificate_3_gradution_year']);
          $certificate_3_qualification= trim($_POST['certificate_3_qualification']);
          $certificate_4_institution = trim($_POST['certificate_4_institution']);
          $certificate_4_gradution_year= trim($_POST['certificate_4_gradution_year']);
          $certificate_4_qualification= trim($_POST['certificate_4_qualification']);

          #o-level
          $secondary_institution= trim($_POST['secondary_institution']);
          $secondary_gradution_year = trim($_POST['secondary_gradution_year']);
          $secondary_qualification= trim($_POST['secondary_qualification']);

          #primary level
          $primary_institution= trim($_POST['primary_institution']);
          $primary_gradution_year= trim($_POST['primary_gradution_year']);
          $primary_qualification= trim($_POST['primary_qualification']);
          #employment detail
          $employer_1_name= trim($_POST['employer_1_name']);
          $position_1_name= trim($_POST['position_1_name']);
          $role_1_name= trim($_POST['role_1_name']);
          $duration_1_name= trim($_POST['duration_1_name']);
          $Salary_1_name= trim($_POST['Salary_1_name']);


          $employer_2_name= trim($_POST['employer_2_name']);
          $position_2_name= trim($_POST['position_2_name']);
          $role_2_name= trim($_POST['role_2_name']);
          $duration_2_name= trim($_POST['duration_2_name']);
          $Salary_2_name= trim($_POST['Salary_2_name']);

          $employer_3_name= trim($_POST['employer_3_name']);
          $position_3_name= trim($_POST['position_3_name']);
          $role_3_name= trim($_POST['role_3_name']);
          $duration_3_name= trim($_POST['duration_3_name']);
          $Salary_3_name= trim($_POST['Salary_3_name']);

          $employer_4_name= trim($_POST['employer_4_name']);
          $position_4_name= trim($_POST['position_4_name']);
          $role_4_name= trim($_POST['role_4_name']);
          $duration_4_name= trim($_POST['duration_4_name']);
          $Salary_4_name= trim($_POST['Salary_4_name']);


          $current_duties = trim($_POST['current_duties']);
          $relevant_abilities = trim($_POST['relevant_abilities']);
         $referee_one_name = trim($_POST['referee_one_name']);
         $referee_one_address = trim($_POST['referee_one_address']);
         $referee_one_tel = trim($_POST['referee_one_tel']);
         $referee_one_email = trim($_POST['referee_one_email']);
         $referee_one_period_has_known_you= trim($_POST['referee_one_period_has_known_you']);
         $referee_two_name = trim($_POST['referee_two_name']);
         $referee_two_address = trim($_POST['referee_two_address']);
         $referee_two_tel = trim($_POST['referee_two_tel']);
         $referee_two_email = trim($_POST['referee_two_email']);
         $referee_two_period_has_known_you= trim($_POST['referee_two_period_has_known_you']);
         $file = trim($_POST['file']);
         $declaration_status = trim($_POST['declaration_status']);
     
 
      
         $sql_2= 'INSERT INTO vacancy(vacancy, vacancy_no, vacancy_ministry, vacancy_department) VALUES (?,?,?,?)';
 
         $stmt_1 = $conn->prepare($sql_2);
         $stmt_1->bind_param("ssss",$vacancy,$vacancy_no,$vacancy_ministry,$vacancy_department);
          $a= $stmt_1->execute();
         $last_insert_id = $conn->insert_id;
        
        
        
          #personal details
          $sql_1='INSERT INTO personal_details(id,ID_number, applicant_name, applicant_title, date_of_birth, gender, ethnicity, permanent_address, postal_code, county, Division,ward, postal_address, mobile, email, alternative_person, alternative_mobile, proficient_languages, physical_imparement, imparement_details, conviction_status, conviction_details, dismissal_job_status, dismissal_details, interview_status, interview_details, interview_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)'; 
        
         $stmt_2 = $conn->prepare($sql_1);
         $stmt_2->bind_param("sssssssssssssssssssssssssss",$last_insert_id,$Id_no,$applicant_name ,$applicant_title,$date_of_birth ,$gender,$nationality,$permanent_address ,$postal_code,$home_district,$Division,$ward,$postal_address ,$mobile,$email ,$alternative_person , $alternative_mobile ,$proficient_languages ,$physical_imparement ,$imparement_details,$conviction_status ,$conviction_details , $dismissal_job_status ,$dismissal_details , $interview_status ,$interview_details ,$interview_date);
         $b= $stmt_2->execute();
         $last_insert_id = $conn->insert_id;
        
        
        
        
             #academic details
             #highlevel
        
         $sql_4='INSERT INTO high_level_education(id,Degree_1_institution, Degree_1_gradution_year, Degree_1_qualification, Masters_institution,Masters_gradution_year, Masters_qualification, PHD_institution,PHD_gradution_year, PHD_qualification) VALUES (?,?,?,?,?,?,?,?,?,?)' ;
        
         $stmt_3= $conn->prepare($sql_4);
         $stmt_3->bind_param("ssssssssss", $last_insert_id ,$Degree_1_institution, $Degree_1_gradution_year, $Degree_1_qualification,  $Masters_institution, $Masters_gradution_year, $Masters_qualification, $PHD_institution, $PHD_gradution_year, $PHD_qualification);
         $c=$stmt_3->execute();
         $last_insert_id = $conn->insert_id;
        
         #diploma level
         $sql_7= 'INSERT INTO diploma_level(id,Diploma_1_institution,Diploma_1_gradution_year, Diploma_1_qualification,Diploma_2_institution,Diploma_2_gradution_year, Diploma_2_qualification, Diploma_3_institution,Diploma_3_gradution_year, Diploma_3_qualification, Diploma_4_institution,Diploma_4_gradution_year, Diploma_4_qualification) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
         $stmt_7=$conn->prepare($sql_7);
         $stmt_7->bind_param('sssssssssssss' ,$last_insert_id ,$Diploma_1_institution,$Diploma_1_gradution_year, $Diploma_1_qualification,$Diploma_2_institution,$Diploma_2_gradution_year, $Diploma_2_qualification, $Diploma_3_institution, $Diploma_3_gradution_year, $Diploma_3_qualification, $Diploma_4_institution, $Diploma_4_gradution_year, $Diploma_4_qualification);
         $d=$stmt_7->execute();
         $last_insert_id = $conn->insert_id;
        
         #certificate level
          $sql_8='INSERT INTO certificate_level( id,certificate_1_institution,certificate_1_gradution_year,certificate_1_qualification, certificate_2_institution,certificate_2_gradution_year,certificate_2_qualification,certificate_3_institution, certificate_3_gradution_year, certificate_3_qualification,certificate_4_institution, certificate_4_gradution_year, certificate_4_qualification) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
         $stmt_8= $conn->prepare($sql_8);
         $stmt_8->bind_param('sssssssssssss',$last_insert_id,$certificate_1_institution, $certificate_1_gradution_year, $certificate_1_qualification, $certificate_2_institution, $certificate_2_gradution_year, $certificate_2_qualification, $certificate_3_institution, $certificate_3_gradution_year, $certificate_3_qualification, $certificate_4_institution, $certificate_4_gradution_year, $certificate_4_qualification);
         $f=$stmt_8->execute();
         $last_insert_id = $conn->insert_id;
         #o-level
         $sql_9 ='INSERT INTO o_level(id,secondary_institution, secondary_gradution_year, secondary_qualification) VALUES (?,?,?,?)';
         $stmt_9=$conn->prepare($sql_9);
         $stmt_9->bind_param('ssss',$last_insert_id ,$secondary_institution, $secondary_gradution_year, $secondary_qualification);
         $g=$stmt_9->execute();
         $last_insert_id = $conn->insert_id;
        
        
         $sql_10 = 'INSERT INTO primary_level(id,primary_institution, primary_gradution_year, primary_qualification) VALUES (?,?,?,?)';
         $stmt_10 = $conn->prepare($sql_10);
         $stmt_10->bind_param('ssss',$last_insert_id,$primary_institution, $primary_gradution_year, $primary_qualification);
         $h=$stmt_10->execute();
         $last_insert_id = $conn->insert_id;
        #employer
        $sql_11='INSERT INTO employement_details(id,employer_1_name, position_1_name, role_1_name, duration_1_name, Salary_1_name, employer_2_name, position_2_name, role_2_name, duration_2_name, Salary_2_name, employer_3_name, position_3_name, role_3_name, duration_3_name, Salary_3_name, employer_4_name, position_4_name, role_4_name, duration_4_name, Salary_4_name) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt_11=$conn->prepare($sql_11)  ;
        $stmt_11->bind_param("sssssssssssssssssssss",$last_insert_id,$employer_1_name, $position_1_name,$role_1_name, $duration_1_name, $Salary_1_name, $employer_2_name, $position_2_name, $role_2_name, $duration_2_name, $Salary_2_name, $employer_3_name, $position_3_name, $role_3_name, $duration_3_name, $Salary_3_name, $employer_4_name, $position_4_name, $role_4_name, $duration_4_name, $Salary_4_name)  ;
        $i=$stmt_11->execute();
        $last_insert_id = $conn->insert_id;
        
        
        # referee
        $sql= 'INSERT INTO referees( id,referee_one_name, referee_one_address, referee_one_tel, referee_one_email, referee_one_period_has_known_you, referee_two_name, referee_two_address, referee_two_tel, referee_two_email, referee_two_period_has_known_you, file, declaration_status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt_5=$conn->prepare($sql);
        $stmt_5->bind_param("sssssssssssss", $last_insert_id,$referee_one_name , $referee_one_address , $referee_one_tel ,$referee_one_email , $referee_one_period_has_known_you,$referee_two_name ,$referee_two_address, $referee_two_tel,$referee_two_email ,$referee_two_period_has_known_you, $file ,  $declaration_status);

        
        $j=$stmt_5->execute();
        $last_insert_id = $conn->insert_id;
        if (!$a || !$b || !$c || !$d || !$f || !$g || !$h || !$i || !$j) {
          mysqli_rollback($d);
        }else{
          header("location:application.php?reg_successful");
          exit();
        }
      }

       
     
    
       
       
        

?>