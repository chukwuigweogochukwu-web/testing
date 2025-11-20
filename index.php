<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
   
    
    
</head>
<body>
 
<h1 style="margin-left: 200px;">Registration Form</h1>
   <div class="container-fluid">
      <div class="row" style="padding-left: 90px;">
         <div class="col-md-6">
          <form action="proc-registration.php" method="post">
               <div class="mb-4">
    
               <label class="form-label"><strong>Firstname</strong></label>
                  <input type="text" class="form-control" name="fname" placeholder="Enter Name">
               </div>
               <div class="mb-4">
                  <label class="form-label"><strong>Lastname</strong></label>
                  <input type="text" class="form-control" name="lname" placeholder="Enter Name">
               </div>
               
               <div class="mb-4 ">
                 <label class="form-label"><strong>Gender</strong></label>
             <div class="d-flex gap-5">
                <div class="form-check d-flex gap-2">
              <input class="form-check-input" type="radio" name="gender" id="radioDefault1">
            <label class="form-check-label" for="radioDefault1">
              Male
            </label>
          </div>
          <div class="form-check d-flex gap-2">
            <input class="form-check-input" type="radio" name="gender" id="radioDefault2">
            <label class="form-check-label" for="radioDefault2">
              Female
            </label>
          </div>
             </div>
               </div>
               <div class="mb-4">
                  <label class="form-label"><strong>Date Of Birth</strong></label>
                  <input type="date" class="form-control" name="dob">
               </div>
        <div class="mb-5">
            <label for="state" class="form-label"> <strong>State Of Origin</strong></label>
            <select class="form-select" name="state" id="state" aria-label="Select Nigerian State">
              <option value="" selected disabled>Select State</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa-Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nasarawa">Nasarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
              <option value="FCT">Federal Capital Territory (FCT)</option>
            </select>
        </div>

                
            <div class="mb-5">
                <label for="academicQualification" class="form-label"><strong>Select Academic Qualification</strong></label>
                <select class="form-select" name="academicQualification" id="academicQualification" aria-label="Select highest academic qualification">
                  <option value="" selected disabled>Select a qualification</option>
                  <option value="no_formal">No formal qualification</option>
                  <option value="secondary_school">Secondary School Certificate / High School Diploma</option>
                  <option value="nce">Nigerian Certificate in Education (NCE)</option>
                  <option value="nd">National Diploma (ND)</option>
                  <option value="hnd">Higher National Diploma (HND)</option>
                  <option value="bachelor">Bachelor’s Degree (B.Sc, B.A, etc.)</option>
                  <option value="postgrad_diploma">Postgraduate Diploma (PGD)</option>
                  <option value="master">Master’s Degree (M.Sc, M.A, MBA, etc.)</option>
                  <option value="doctoral">Doctoral Degree (PhD, etc.)</option>
                </select>
                <div class="invalid-feedback">
                  Please select your highest academic qualification.
                </div>
           </div>

              <div class="mb-5">
                  <label for="classOfDegree" class="form-label"><strong>Class of Degree</strong></label>
                  <select class="form-select" name="classOfDegree" id="classOfDegree" aria-label="Select class of degree">
                    <option value="" selected disabled>Select degree</option>
                    <option value="firstClass">First Class Honours</option>
                    <option value="secondClassUpper">Second Class Honours (Upper Division)</option>
                    <option value="secondClassLower">Second Class Honours (Lower Division)</option>
                    <option value="thirdClass">Third Class Honours</option>
                    <option value="passDegree">Pass Degree</option>
                    <option value="noDegree">No Degree Awarded</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select your class of degree.
                  </div>
              </div>


            <form class="needs-validation" novalidate>
              <div class="form-check mb-5">
                <input class="form-check-input" type="checkbox" value="" id="termsCheck">
                <label class="form-check-label" for="termsCheck">
                  I agree to the <a href="YOUR_TERMS_LINK" target="_blank">Terms &amp; Conditions</a>
                </label>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
              
               <input class="btn bg-black text-white" style="width:100%;" type="submit" value="Submit"></input>
            </form>


         
            </div>

         </div>
        
      </div>
   </div>

   
</body>
</html>