<?php
include 'rootpath.php';
require_once (ROOT_PATH."/apps/connect.php");
require_once (ROOT_PATH."/apps/server.php") ;
require_once (ROOT_PATH."/includes/header.php") ;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="index.php" class="form-group"  enctype="multipart/form-data">
            <fieldset>
          

                <legend class="text-center text-info">Applicant details</legend>
                <div class="text">
                <div><label for="Job_application_Title">Job application title</label>
                <input type="text" name="Job_application_Title" id="fname"  class="form-control">
                </div>
                <div><label for="Applicant_first_name">Applicant_first_name</label>
                <input type="text" name="Applicant_first_name" id="Applicant_first_name"  class="form-control">
                </div>
                <div>
                <label for="Applicant_last_name">Applicant_last_name</label>
                <input type="text" name="Applicant_last_name" class="form-control" id="Applicant_last_name">
                 </div>
                
             </div>


             <div class="my-3 text-1">
                  <label for="ID_NO">ID_NO</label>
                    <input type="text" name="ID_NO" id="ID_NO" class="form-control"> 
                 </div>
                <div class="my-3 text-1">
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" value="male" id="gender">Male,
                    <input type="radio" name="gender" value="female" id="gender">Female,
                    <input type="radio" name="gender" value="other" id="gender">Other
                </div>
                <div class="my-3 text-1">
                    <label for="Year_of_Birth">Year_of_Birth</label>
                    <input type="text" name="Year_of_Birth" id="Year_of_Birth" class="form-control">
                </div>
                <div class="my-3 text-1">
                    <label for="Ethinicity">Ethinicity</label>
                    <input type="text" name="Ethinicity" id="Ethinicity" class="form-control">
                </div>

               
                

             <div class="text my-3">
                <div>
                    <label for ="Tel_contact">Tel_contact </label>
                        <input type="text" name="Tel_contact" id='Tel_contact' class="form-control">
                   
                </div>
                <div>
                    <label for="Home_County">Home County</label>
                        <input type="text"  name="Home_County" id="Home_County" class="form-control">
                    
                </div>
              </div>
         
             
                    <div class="text-1 my-3">
                        <label for="Home_Constituency">Home_Constituency</label>
                        <input type="text" name="Home_Constituency" id="Home_Constituency" class="form-control">
                    </div>
                    <div class="text-1 my-3">
                    <label for="ward">ward</label>
                    <input type="text" name="ward" id="ward" class="form-control">
                   </div>
                   <div class="text-1 my-3">
                       <label for="PWD">PWD </label>
                       <input type="text" name="PWD" id="PWD" class="form-control">
                  </div>
                   
                    <div class="text-1 my-3">
                    <label for="Qualification">Qualification</label>
                    <input type="text" name="Qualification" id="Qualification" class="form-control">
            
                <div class="text-1 my-3">
                    <label for="Year_Graduation">Year_Graduation</label>
                    <input type="text" name="Year_Graduation" id="Year_Graduation" class="form-control">
                   </div>
                   <div class="text-1 my-3">
                    <label for="Highest_Academic_level">Highest_Academic_level</label>
                    <input type="text" name="Highest_Academic_level" id="Highest_Academic_level" class="form-control">
                </div>
                <div class="text-1 my-3">
                    <label for="Specialization">Specialization</label>
                    <input type="text" name="Specialization" id="Specialization" class="form-control">
                </div>
             
                <div class="text-1 my-3">
                    <label for="applicant_status">Applicant_status</label>
                     <input type="radio" name="applicant_status" id="applicant_status" value="1" > YES
                     <input type="radio" name="applicant_status" id="applicant_status"  value="0"> NO
                </div>

             
               
               <div class="text-center">
                    <input type="submit" name="submit" value="SUBMIT" class="bg-success btn btn-lg">
                </div>
                </fieldset>

            </form>
            <div class="m-3"><p>Upload any Supportive Document here</p>
            <form action="<?php echo BASE_URL."/includes/upload.php"?>" method="post" enctype="multipart/form-data" class="form-group">
            <input type="file" name="file" class="form-control m-2">
             <button type="submit" name="submit">UPLOAD</button>
             </div>


</form>
        </div>
    </div>
</div>
<?php 
require_once (ROOT_PATH."/includes/footer.php") ;
?>