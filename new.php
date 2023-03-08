<?php ?>
<div class="container">
<div class="row">
    <div class="col-md-12">
        <form action="#"  method="POST">
         <p> Please complete this form </p>
         <div class="text-center">
             <label for="vacancy">Vacancy/post title</label>
             <select id="vacancy" name="vacancy"  required>
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
             <input type="text" name="vacancy_no" id="vacancy_no">
             <p><label for="ministry">Ministry:</label>
            <input type="text" name="ministry" id="ministry">
            <label for="department">Department</label>
            <input type="text" name="department" id="department">
            </p>
         </div>
         <div class="text-center">
             <h5>Personal Details</h5>
             <label for="applicant_name">Name of Applicant:</label>
             <input  type="text" name="applicat_name" placeholder="Surname ... Firstname..lastname.." >
             <label for="applicant_title">Title:</label>
             <input type="text" name="applicant_title" placeholder="MR/MISS" id="applicant_title">
             <p> <label for="date_of_birth">Date of Birth</label>
                 <input type="date" id="date_of_birth" name="date_of_birth">
                 <label for="gender">Gender:</label>
                 Male:
                 <input type="radio" value="male" name="gender">
                 Female:
                 <input type="radio" value="female" name="gender">
                 Other:
                 <input type="radio" value="other" name="gender">
            </p>
            <p>
                <label for="nationality">Nationality:</label>
                <input type="text" name="nationality" id="nationality">
                <label for="Id_no">ID Number/Passport Number:</label>
                <input type="text" name="Id_no" id ="Id_no">
            </p>
            <p>
                <label for="permanent_address">Permanent Address:</label>
                <input type="text" name="permanent_address" id="permanent_address">
                <label for="postal_code">Postal Code:</label>
                <input type="text" name="postal_code" id="postal_code">
            </p>
            <p>
                <label for="home_district">Home District/ Sub County:</label>
                <input type="text" name="home_district" id="home_district">
                <label for="Division">Division</label>
                <input type="text" name="Division" id="division">
            </p>
            <p>
                <label for="postal_address">Current Postal Address:</label>
                <input type="text" name="postal_address" id="postal_address">
                <label for="mobile">Mobile</label>
                <input type="tel" name="mobile" id="mobile">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email">
            </p>
            <p> 
                <label for="alternative_person">Alternative Contact Person</label>
                <input type="text" name="alternative_person" id="alternative_person" placeholder="Surname ... Firstname..lastname..">
                <label for="alternative_mobile">Mobile</label>
                <input type="tel" name="alternative_mobile" id="alternative_mobile">
            </p>
            <p>Indicate the language(s) you are proficient in:<br>
            <input type="text" name="proficient_languages"></p>
            <p>
            <p>Do you suffer from any physical imparment?
                <input type="radio" name="physical_imparement" value="yes">Yes
                <input type="radio" name="physical_imparement" value="no">No
           </p>
           <p>If yes, give details:<br>
           <input type="text" name="imparement_details">
           </p>
           <p>
           Have you ever been convicted of any criminal offemces or a subject of probation order?<br>
           <input type="radio" name="conviction_status" value="yes">Yes
            <input type="radio" name="conviction_status" value="no">No
           </p>
           <p>If yes, give details:<br>
           <input type="text" name="conviction_details">
           </p>
           <p>
           Have you ever been dismissed or otherwise removed from empoyment?</br>
           <input type="radio" name="dismissal_job_status" value="yes">Yes
            <input type="radio" name="dismissal_job_status" value="no">No
           </p>
           <p>If yes, State reason (s) for dismissal/removal:<br>
           <input type="text" name="dismissal_details">
           </p>
           <p>
           Have you ever been interviewed by Murang'a Public Service Board before?<br>
           <input type="radio" name="interview_status" value="yes">Yes
            <input type="radio" name="interview_status" value="no">No
           </p>
           <p>If yes, State the post:<br>
           <input type="text" name="interview_details">
           </p>
           <p>Interview date:
           <input type="date" name="interview_date">  
         </div>
         <div class="text-center">
             <h5>Academic Details</h5>
           <table>
               <tr>
                   <th>YEAR <br> FROM</th>
                   <th>TO</th>
                   <th>University/College/Institution/School</th>
                   <th>Award/Attainment (eg Degree,Diploma,Certificate)</th>
                   <th>Courses (Phd,Msc,BA)</th>
                   <th>Subject (Ecom,Maths,e.t.c)</th>
                   <th>Class/Grade</th>
               </tr>
               <tr>
                   <td><input type="date" name="period_one_start_year"></td>
                   <td><input type="date" name="period_one_end_year"></td>
                   <td><input type="text" name="period_one_institution"></td>
                   <td><input type="text" name="period_one_award"></td>
                   <td><input type="text" name="period_one_courses"></td>
                   <td><input type="text" name="period_one_subject"></td>
                   <td><input type="text" name="period_one_class_grade"></td>

               </tr>
               <tr>
                   <td><input type="date" name="period_two_start_year"></td>
                   <td><input type="date" name="period_two_end_year"></td>
                   <td><input type="text" name="period_two_institution"></td>
                   <td><input type="text" name="period_two_award"></td>
                   <td><input type="text" name="period_two_courses"></td>
                   <td><input type="text" name="period_two_subject"></td>
                   <td><input type="text" name="period_two_class_grade"></td>
               </tr>
               <tr>
                   <td><input type="date" name="period_three_start_year"></td>
                   <td><input type="date" name="period_three_end_year"></td>
                   <td><input type="text" name="period_three_institution"></td>
                   <td><input type="text" name="period_three_award"></td>
                   <td><input type="text" name="period_three_courses"></td>
                   <td><input type="text" name="period_three_subject"></td>
                   <td><input type="text" name="period_three_class_grade"></td>
               </tr>
               <tr>
                   <td><input type="date" name="period_four_start_year"></td>
                   <td><input type="date" name="period_four_end_year"></td>
                   <td><input type="text" name="period_four_institution"></td>
                   <td><input type="text" name="period_four_award"></td>
                   <td><input type="text" name="period_four_courses"></td>
                   <td><input type="text" name="period_four_subject"></td>
                   <td><input type="text" name="period_four_class_grade"></td>
               </tr>
               <tr>
                   <td><input type="date" name="period_five_start_year"></td>
                   <td><input type="date" name="period_five_end_year"></td>
                   <td><input type="text" name="period_five_institution"></td>
                   <td><input type="text" name="period_five_award"></td>
                   <td><input type="text" name="period_five_courses"></td>
                   <td><input type="text" name="period_five_subject"></td>
                   <td><input type="text" name="period_five_class_grade"></td>
               </tr>
           </table>
         </div>
         <div class="text-center">
       <h5>Employment Details(Starting with the most current)</h5>
       <table>
               <tr>
                   <th>YEAR <br> FROM</th>
                   <th>TO</th>
                   <th>Employer's Name</th>
                   <th>	Position/Rank/Designation and<br> Roles involved</th>
                   <th>Job Group/Gross Monthly Salary (ksh</th>
               </tr>
               <tr>
                   <td><input type="date" name="period_one_start_day_employement"></td>
                   <td><input type="date" name="period_one_end_day_employement"></td>
                   <td><input type="text" name="period_one_employer_name"></td>
                   <td><input type="text" name="period_one_rank_name"></td>
                   <td><input type="text" name="period_one_jobgroup_name"></td> 
               </tr>
               <tr>
                   <td><input type="date" name="period_two_start_day_employement"></td>
                   <td><input type="date" name="period_two_end_day_employement"></td>
                   <td><input type="text" name="period_two_employer_name"></td>
                   <td><input type="text" name="period_two_rank_name"></td>
                   <td><input type="text" name="period_two_jobgroup_name"></td> 
               </tr>
               <tr>
                   <td><input type="date" name="period_three_start_day_employement"></td>
                   <td><input type="date" name="period_three_end_day_employement"></td>
                   <td><input type="text" name="period_three_employer_name"></td>
                   <td><input type="text" name="period_three_rank_name"></td>
                   <td><input type="text" name="period_three_jobgroup_name"></td> 
               </tr>
               <tr>
                   <td><input type="date" name="period_four_start_day_employement"></td>
                   <td><input type="date" name="period_four_end_day_employement"></td>
                   <td><input type="text" name="period_four_employer_name"></td>
                   <td><input type="text" name="period_four_rank_name"></td>
                   <td><input type="text" name="period_four_jobgroup_name"></td> 
               </tr>
               <tr>
                   <td><input type="date" name="period_five_start_day_employement"></td>
                   <td><input type="date" name="period_five_end_day_employement"></td>
                   <td><input type="text" name="period_five_employer_name"></td>
                   <td><input type="text" name="period_five_rank_name"></td>
                   <td><input type="text" name="period_five_jobgroup_name"></td> 
               </tr>
      </table>
         </div>
       <div>
           <p>Briefly state your current duties, responsibilities and assignments</p>
           <p><textarea name="current_duties" cols="" rows=""></textarea></p>
           
       </div>
       <div>
           <p>please give details of your abilities, skills and experience which you consider are relevant to the position applied for. The informaton may include an outline of your most recent achievements and your reasons for applying</p>
           <p><textarea name="relevant_abilities" cols="" rows=""></textarea></p> 
       </div>
       <div>
           <h5> Referees and Declaration</h5>
           <p>The names of the distinguished persons should not e used unless they really know you well; the names of relativesor those from whom you send tetimonilas should not be allowed.The names of members or staff of the Public Service Board of Murang'a should also not be used</p>
           <div>
          <p> <label for="referee_one">1. Full Name:</label>
        <input type="text" name="referee_one_name" id="referee_one"></p>
        <p><label for="referee_one_address">Address:</label>
        <input type="text" name="referee_one_address" id="referee_one_address"></p>
        <p><label for="referee_one_tel">Telephone No:</label>
        <input type="text" name="referee_one_tel" id="referee_one_tel">
        <label for="referee_one_email">Email Address:</label>
        <input type="text" name="referee_one_email" id="referee_one_email"></p>
        <p>Period of which he/she known you: <br>
        <input type="text" name="referee_one_period" id="referee_one_period"></p>

       </div>
       <div>
          <p> <label for="referee_two">2. Full Name:</label>
        <input type="text" name="referee_two_name" id="referee_one"></p>
        <p><label for="referee_two_address">Address:</label>
        <input type="text" name="referee_two_address" id="referee_two_address"></p>
        <p><label for="referee_two_tel">Telephone No:</label>
        <input type="text" name="referee_two_tel" id="referee_two_tel">
        <label for="referee_two_email">Email Address:</label>
        <input type="text" name="referee_two_email" id="referee_two_email"></p>
        <p>Period of which he/she known you: <br>
        <input type="text" name="referee_two_period" id="referee_two_period"></p>
       </div>
       <p>Upload Any Supportive Documents: <br>
        <input type="file" name="file">
       </p>
       <div>
           <h5>Declaration:</h5>
           <p>I hereby certify to the best of my knowledge that the particulars given on this form are correct and I understand that any in correct information may lead to disqualification/legal action</p>
           <input type="radio" name="declaration_status" value="yes">Yes
            <input type="radio" name="declaration_status" value="no">No
            <p>If yes continue with submission</p>
            <p>
                <button class="btn btn-danger btn-lg" type="button" value="RESET">RESET</button>
                <button class="btn btn-success btn-lg" type="button" value="SUBMIT" name="submit">SUBMIT</button>
            </p>
       </div>

       </div>
        </form>
    </div>
</div>


</div>


