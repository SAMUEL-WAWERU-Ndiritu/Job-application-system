<?php
require_once ("../rootpath.php");
require_once ("../rootpath.php");
require_once (ROOT_PATH."/apps/text.php");
require_once(ROOT_PATH."/includes/header.php") ;

?>
<div class="container">
<div id="page_menus text-primary">
   <small> Press to continue to the next page</small>
	<a id="get_first" style="cursor:pointer"  class="text-primary p-2"><i class="fa fa-angle-double-right"> </i> <small>1. Personal Details</small></a>
    <a id="get_second" style="cursor:pointer" class="text-primary p-2"> <small>2. Vacancy </small></a>
	<a id="get_third" style="cursor:pointer"  class="text-primary p-2"><i class="fa fa-angle-double-right"></i> <small>3. Academic Details</small></a>
    <a id="get_fourth" style="cursor:pointer"  class="text-primary p-2"><i class="fa fa-angle-double-right"></i><small> 4. Employment Details</small></a>
    <a id="get_fivth" style="cursor:pointer"  class="text-primary p-2"><i class="fa fa-angle-double-right"></i> <small>5.  Personal Referees </small></a>
    <a id="get_sixth" style="cursor:pointer"  class="text-primary p-2"><i class="fa fa-angle-double-right"></i> <small>6. Submission</small></a>
</div>
    <div class="row my-5">
        <div class="col-md-10 m-auto">
     
<form class="form-group text-dark" method="post" action="application.php">
	<div id="first">
        <div class="">
             <h4 class="text-center text-info p-3">Personal Details</h4>
             
             <label for="applicant_name">Name of Applicant:</label>
             <input  type="text" name="applicant_name" placeholder="Surname ... Firstname..lastname.."  class="form-control">
             <label for="applicant_title">Title:</label>
             <input type="text" name="applicant_title" placeholder="MR/MISS" id="applicant_title"  class="form-control">
             <p> <label for="date_of_birth">Date of Birth</label>
                 <input type="date" id="date_of_birth" name="date_of_birth"  class="form-control">
                 <label for="Id_no">ID Number/Passport Number:</label>
                <input type="text" name="ID_number" id ="Id_no"  class="form-control">
                 <label for="gender">Gender:</label>
                 Male:
                 <input type="radio" value="male" name="gender">
                 Female:
                 <input type="radio" value="female" name="gender">
                 Other:
                 <input type="radio" value="other" name="gender">
            </p>
            <p>
                <label for="nationality">Ethnicity:</label>
                <input type="text" name="ethnicity" id="nationality"  class="form-control">
               
            </p>
            <p>
                <label for="permanent_address">Permanent Address:</label>
                <input type="text" name="permanent_address" id="permanent_address"  class="form-control">
                <label for="postal_code">Postal Code:</label>
                <input type="text" name="postal_code" id="postal_code"  class="form-control">
            </p>
            <p>
                <label for="home_district">Home County</label>Salary_1_name
                <input type="text" name="county" id="home_district"  class="form-control">
                <label for="Division">Division</label>
                <input type="text" name="Division" id="division"  class="form-control">
                <label for="ward">Ward</label>
                <input type="text" name="ward" id="ward"  class="form-control">
            </p>
            <p>
                <label for="postal_address">Current Postal Address:</label>
                <input type="text" name="postal_address" id="postal_address"  class="form-control">
                <label for="mobile">Mobile</label>
                <input type="tel" name="mobile" id="mobile"  class="form-control">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email"  class="form-control">
            </p>
            <p> 
                <label for="alternative_person">Alternative Contact Person</label>
                <input type="text" name="alternative_person" id="alternative_person" placeholder="Surname ... Firstname..lastname.."  class="form-control">
                <label for="alternative_mobile">Mobile</label>
                <input type="tel" name="alternative_mobile" id="alternative_mobile"  class="form-control">
            </p>
            <p>Indicate the language(s) you are proficient in:<br>
            <input type="text" name="proficient_languages"  class="form-control"></p>
            <p>
            <p>Do you suffer from any physical imparment?
                <input type="radio" name="physical_imparement" value="yes">Yes
                <input type="radio" name="physical_imparement" value="no">No
           </p>
           <p>If yes, give details:<br>
           <input type="text" name="imparement_details"  class="form-control">
           </p>
           <p>
           Have you ever been convicted of any criminal offemces or a subject of probation order?<br>
           <input type="radio" name="conviction_status" value="yes">Yes
            <input type="radio" name="conviction_status" value="no">No
           </p>
           <p>If yes, give details:<br>
           <input type="text" name="conviction_details"  class="form-control">
           </p>
           <p>
           Have you ever been dismissed or otherwise removed from empoyment?</br>
           <input type="radio" name="dismissal_job_status" value="yes">Yes
            <input type="radio" name="dismissal_job_status" value="no">No
           </p>
           <p>If yes, State reason (s) for dismissal/removal:<br>
           <input type="text" name="dismissal_details"  class="form-control">
           </p>
           <p>
           Have you ever been interviewed by Murang'a Public Service Board before?<br>
           <input type="radio" name="interview_status" value="yes">Yes
            <input type="radio" name="interview_status" value="no">No
           </p>
           <p>If yes, State the post:<br>
           <input type="text" name="interview_details"  class="form-control">
           </p>
           <p>Interview date:
           <input type="date" name="interview_date"  class="form-control">  
         </div>
         
	</div>
    <div id="second" style="display:none">
    <div class="">
    <h4 class="text-center text-info p-3">Vacancy</h4>
  
        <p>
             <label for="vacancy">Vacancy/post title</label>
             <select id="vacancy" name="vacancy"  required class="form-control" >
                 <option value="Economist" name="vacancy">Economist</option>
                 <option value="Economist" name="vacancy">ICT officer</option>
                 <option value="Economist" name="vacancy">Pharmacist</option>
                 <option value="Economist" name="vacancy">Driver</option>
                 <option value="Economist" name="vacancy">Trade development officer</option>
                 <option value="Economist" name="vacancy">Chief officer directorite development</option>
                 <option value="Economist" name="vacancy">Labotary Technologist</option>
                 <option value="Economist" name="vacancy">Medical specialist</option>
                 <option value="Economist" name="vacancy">Nutrition and Dietetics officer</option>
                 <option value="Economist" name="vacancy">Health records officer</option>
             </select>
             <label for="vacancy_no">Vacancy No:</label>
             <input type="text" name="vacancy_no" id="vacancy_no" class="form-control">
        </p>
             <p><label for="ministry">Ministry:</label>
            <input type="text" name="vacancy_ministry" id="ministry"  class="form-control">
            <label for="department">Department</label>
            <input type="text" name="vacancy_department" id="department"  class="form-control">
            </p>
         </div>
     
	</div>
	<div id="third" style="display:none">
    <div class="">
               <h4 class="text-center text-info p-3">Academic Details</h4>
               <h3>Primary Level</h3>
              <p> <label for="primary_school">Institution name</label>
               <input type="text" name="primary_institution" id="primary_school" class="form-control">
               <label for="primary_year">Year of Graduation</label>
               <input type="text" name="primary_gradution_year" id="primary_year" class="form-control">
               <label for="primary_qualification"> Qualification</label>
               <input type="text" name="primary_qualification" id="primary_qualification" class="form-control"></p>
               <h3>Secondary Level</h3>
              <p><label for="secondary_school">Institution name</label>
               <input type="text" name="secondary_institution" id="secondary_school" class="form-control">
               <label for="secondary_year">Year of Graduation</label>
               <input type="text" name="secondary_gradution_year" id="secondary_year" class="form-control">
               <label for="secondary_qualification"> Qualification</label>
               <input type="text" name="secondary_qualification" id="secondary_qualification" class="form-control"></p>
               <h3>Tertialy Level</h3>
               <h4>Certificate level</h4>
              <p>1. <label for="certificate_1_school">Institution name</label>
               <input type="text" name="certificate_1_institution" id="certificate_1_school"class="form-control" >
               <label for="certificate_1_year">Year of Graduation</label>
               <input type="text" name="certificate_1_gradution_year" id="certificate_1_year" class="form-control">
               <label for="certificate_1_qualification"> Qualification</label>
               <input type="text" name="certificate_1_qualification" id="certificate_1_qualification" class="form-control"></p>
               <p>2. <label for="certificate_2_school">Institution name</label>
               <input type="text" name="certificate_2_institution" id="certificate_2_school" class="form-control">
               <label for="certificate_2_year">Year of Graduation</label>
               <input type="text" name="certificate_2_gradution_year" id="certificate_2_year" class="form-control">
               <label for="certificate_2_qualification"> Qualification</label>
               <input type="text" name="certificate_2_qualification" id="certificate_2_qualification" class="form-control"></p>
               <p>3. <label for="certificate_3_school">Institution name</label>
               <input type="text" name="certificate_3_institution" id="certificate_3_school" class="form-control">
               <label for="certificate_3_year">Year of Graduation</label>
               <input type="text" name="certificate_3_gradution_year" id="certificate_3_year" class="form-control">
               <label for="certificate_3_qualification"> Qualification</label>
               <input type="text" name="certificate_3_qualification" id="certificate_3_qualification" class="form-control"></p>
               <p>4. <label for="certificate_4_school">Institution name</label>
               <input type="text" name="certificate_4_institution" id="certificate_4_school" class="form-control">
               <label for="certificate_4_year">Year of Graduation</label>
               <input type="text" name="certificate_4_gradution_year" id="certificate_4_year" class="form-control">
               <label for="certificate_4_qualification"> Qualification</label>
               <input type="text" name="certificate_4_qualification" id="certificate_4_qualification" class="form-control"></p>
               <h4>Diploma level</h4>
              <p>1. <label for="Diploma_1_school">Institution name</label>
               <input type="text" name="Diploma_1_institution" id="Diploma_1_school" class="form-control">
               <label for="Diploma_1_year">Year of Graduation</label>
               <input type="text" name="Diploma_1_gradution_year" id="Diploma_1_year" class="form-control">
               <label for="Diploma_1_qualification"> Qualification</label>
               <input type="text" name="Diploma_1_qualification" id="Diploma_1_qualification" class="form-control"></p>
               <p>2. <label for="Diploma_2_school">Institution name</label>
               <input type="text" name="Diploma_2_institution" id="Diploma_2_school" class="form-control">
               <label for="Diploma_2_year">Year of Graduation</label>
               <input type="text" name="Diploma_2_gradution_year" id="Diploma_2_year" class="form-control">
               <label for="Diploma_2_qualification"> Qualification</label>
               <input type="text" name="Diploma_2_qualification" id="Diploma_3_qualification" class="form-control"></p>
               <p>3. <label for="Diploma_3_school">Institution name</label>
               <input type="text" name="Diploma_3_institution" id="Diploma_3_school" class="form-control">
               <label for="Diploma_3_year">Year of Graduation</label>
               <input type="text" name="Diploma_3_gradution_year" id="Diploma_3_year" class="form-control">
               <label for="Diploma_3_qualification"> Qualification</label>
               <input type="text" name="Diploma_3_qualification" id="Diploma_3_qualification" class="form-control"></p>
               <p>4. <label for="Diploma_4_school">Institution name</label>
               <input type="text" name="Diploma_4_institution" id="Diploma_4_school" class="form-control">
               <label for="Diploma_4_year">Year of Graduation</label>
               <input type="text" name="Diploma_4_gradution_year" id="Diploma_4_year" class="form-control">
               <label for="Diploma_4_qualification"> Qualification</label>
               <input type="text" name="Diploma_4_qualification" id="Diploma_4_qualification" class="form-control"></p>
               <h4>Degree level</h4>
              <p>1. <label for="Degree_1_school">Institution name</label>
               <input type="text" name="Degree_1_institution" id="Degree_1_school" class="form-control">
               <label for="Degree_1_year">Year of Graduation</label>
               <input type="text" name="Degree_1_gradution_year" id="Degree_1_year" class="form-control">
               <label for="Degree_1_qualification"> Qualification</label>
               <input type="text" name="Degree_1_qualification" id="Degree_1_qualification" class="form-control"></p>
               <h4>Masters level</h4>
              <p><label for="Masters_1_school">Institution name</label>
               <input type="text" name="Masters_institution" id="Masters_1_school" class="form-control">
               <label for="Masters_1_year">Year of Graduation</label>
               <input type="text" name="Masters_gradution_year" id="Masters_1_year" class="form-control">
               <label for="Masters_1_qualification"> Qualification</label>
               <input type="text" name="Masters_qualification" id="Masters_1_qualification" class="form-control"></p>
               <h4>PHD level</h4>
              <p><label for="PHD_1_school">Institution name</label>
               <input type="text" name="PHD_institution" id="PHD_1_school" class="form-control">
               <label for="PHD_1_year">Year of Graduation</label>
               <input type="text" name="PHD_gradution_year" id="PHD_1_year" class="form-control">
               <label for="PHD_1_qualification"> Qualification</label>
               <input type="text" name="PHD_qualification" id="PHD_1_qualification" class="form-control"></p>
           
         </div>
        
	</div>
    <div id="four" style="display:none">
    <div class="">
    
               <h4 class="text-center text-info p-3">Employment Details(Starting with the most current)</h4>
               <p>1.
                   <label for="employer_1_name">Employer name</label>
                   <input type="text" name="employer_1_name" id="employer_name" class="form-control">
                   <label for="position_1_name">Position</label>
                   <input type="text" name="position_1_name" id="position_1_name" class="form-control">
                   <label for="role_1_name">Role</label>
                   <input type="text" name="role_1_name" id="role_1_name" class="form-control">
                   <label for="duration_1_name">Duration</label>
                   <input type="text" name="duration_1_name" id="duration_1_name" class="form-control">
                   <label for="Salary_1_name">Salary</label>
                   <input type="text" name="Salary_1_name" id="Salary_name" class="form-control">
                   

            </p>
            <p>2.
                   <label for="employer_2_name">Employer name</label>
                   <input type="text" name="employer_2_name" id="employer_2_name" class="form-control">
                   <label for="position_2_name">Position</label>
                   <input type="text" name="position_2_name" id="position_2_name" class="form-control">
                   <label for="role_2_name">Role</label>
                   <input type="text" name="role_2_name" id="role_2_name"class="form-control">
                   <label for="duration_2_name">Duration</label>
                   <input type="text" name="duration_2_name" id="duration_2_name" class="form-control">
                   <label for="Salary_2_name">Salary</label>
                   <input type="text" name="Salary_2_name" id="Salary_2_name"class="form-control">

            </p>
            <p>3.
                   <label for="employer_3_name">Employer name</label>
                   <input type="text" name="employer_3_name" id="employer_name"class="form-control">
                   <label for="position_3_name">Position</label>
                   <input type="text" name="position_3_name" id="position_3_name" class="form-control">
                   <label for="role_3_name">Role</label>
                   <input type="text" name="role_3_name" id="role_3_name" class="form-control">
                   <label for="duration_3_name">Duration</label>
                   <input type="text" name="duration_3_name" id="duration_3_name" class="form-control">
                   <label for="Salary_3_name">Salary</label>
                   <input type="text" name="Salary_3_name" id="Salary_3_name" class="form-control">

            </p>
            <p>4.
                   <label for="employer_4_name">Employer name</label>
                   <input type="text" name="employer_4_name" id="employer_name"class="form-control">
                   <label for="position_4_name">Position</label>
                   <input type="text" name="position_4_name" id="position_4_name" class="form-control">
                   <label for="role_4_name">Role</label>
                   <input type="text" name="role_4_name" id="role_4_name" class="form-control">
                   <label for="duration_4_name">Duration</label>
                   <input type="text" name="duration_4_name" id="duration_4_name" class="form-control">
                   <label for="Salary_4_name">Salary</label>
                   <input type="text" name="Salary_4_name" id="Salary_4_name" class="form-control">

            </p>
         </div>
       <div>
           <p>Briefly state your current duties, responsibilities and assignments</p>
           <p><textarea name="current_duties" cols="" rows=""  class="form-control"></textarea></p>
           
       </div>
       <div>
           <p>please give details of your abilities, skills and experience which you consider are relevant to the position applied for. The informaton may include an outline of your most recent achievements and your reasons for applying</p>
           <p><textarea name="relevant_abilities" cols="" rows=""  class="form-control"></textarea></p> 
       </div>
      

    </div>
    <div id="five" style="display:none">
    <div>
    <h4 class="text-center text-info p-3">Personal Referees </h4>
           <p>The names of the distinguished persons should not e used unless they really know you well; the names of relativesor those from whom you send tetimonilas should not be allowed.The names of members or staff of the Public Service Board of Murang'a should also not be used</p>
           <div>
          <p> <label for="referee_one">1. Full Name:</label>
        <input type="text" name="referee_one_name" id="referee_one" class="form-control"></p>
        <p><label for="referee_one_address" >Address:</label>
        <input type="text" name="referee_one_address" id="referee_one_address" class="form-control"></p>
        <p><label for="referee_one_tel">Telephone No:</label>
        <input type="text" name="referee_one_tel" id="referee_one_tel" class="form-control">
        <label for="referee_one_email">Email Address:</label>
        <input type="text" name="referee_one_email" id="referee_one_email" class="form-control"></p>
        <p>Period of which he/she known you: <br>
        <input type="text" name="referee_one_period_has_known_you" id="referee_one_period" class="form-control"></p>

       </div>
       <div>
          <p> <label for="referee_two">2. Full Name:</label>
        <input type="text" name="referee_two_name" id="referee_one" class="form-control"></p>
        <p><label for="referee_two_address">Address:</label>
        <input type="text" name="referee_two_address" id="referee_two_address" class="form-control"></p>
        <p><label for="referee_two_tel">Telephone No:</label>
        <input type="text" name="referee_two_tel" id="referee_two_tel" class="form-control">
        <label for="referee_two_email">Email Address:</label>
        <input type="text" name="referee_two_email" id="referee_two_email" class="form-control"></p>
        <p>Period of which he/she known you: <br>
        <input type="text" name='referee_two_period_has_known_you' id="referee_two_period" class="form-control"></p>
       </div>
       
     </div>
</div>
<div id="six" style="display:none">

     <h4 class="text-center text-info p-3">Submission:</h4>
     <p>Upload Any Supportive Documents: <br>
        <input type="file" name="file">
       </p>
           <p>I hereby certify to the best of my knowledge that the particulars given on this form are correct and I understand that any in correct information may lead to disqualification/legal action</p>
           <input type="radio" name="declaration_status" value="yes">Yes
            <input type="radio" name="declaration_status" value="no">No
            <p>If yes continue with submission</p>
            <p>
                <input class="btn btn-danger btn-lg" type="submit" value="RESET">
                <input class="btn btn-success btn-lg" type="submit"  name="submit" value="SUBMIT">
            </p>
           
    </div>

       </div>
    
</div>

</form>

        </div>
    </div>
</div>
<?php 
   require_once(ROOT_PATH."/includes/footer.php") ;
   ?>

