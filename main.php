<?php
   
   if(isset($_POST['fname'])=="")
   {
	 echo '<script type="text/javascript">';  
     echo 'window.location.href = "index.html";';
     echo '</script>';
   }
   {
   $fname = $_POST['fname'];
   $mname  = $_POST['mname'];
   $lname = $_POST['lname'];
   $dob = $_POST['dob'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $mobile = $_POST['mobile'];
   $email = $_POST['email'];
   $bloodgroup = $_POST['blood'];
   $consultant = $_POST['con'];
   $refering_doctor = $_POST['doc'];
   $patient_code = $_POST['patient'];
   $organization_code = $_POST['org'];
   $staff_number = $_POST['staff'];
   $next_of_kin = $_POST['kin'];
   $relationship = $_POST['rel'];
   $old_regno = $_POST['old'];
   
   
   $marital_status = $_POST['marital'];
   $house_number = $_POST['house'];
   $street_name = $_POST['street'];
   $area = $_POST['area'];
   $zip_code = $_POST['zip'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $reg_date = $_POST['reg'];
   $validity_date = $_POST['val'];
   
   
   $emergency = $_POST['emergency'];
   $relation = $_POST['relation'];
   $phoneno = $_POST['phoneno'];
   $religion = $_POST['religion'];
   $education = $_POST['education'];
   $occupation = $_POST['occupation'];
   $monthly_income = $_POST['income'];
   
   
   $arr = array(
   "fname" => $fname,
   "mname" => $mname,
   "lname" => $lname,
   "dob"   => $dob,
   "age"   => $age,
   "gender"   => $gender,
   "mobile"   => $mobile,
   "email"   => $email,
   "bloodgroup"   => $bloodgroup,
   "consultant"   => $consultant,
   "refering_doctor"   => $refering_doctor,
   "patient_code"   => $patient_code,
   "organization_code"   => $organization_code,
   "staff_number"   => $staff_number,
   "next_of_kin"   => $next_of_kin,
   "relationship"   => $relationship,
   "old_regno"   => $old_regno,
   "marital_status"   => $marital_status,
   "house_number"   => $house_number,
   "street_name"   => $street_name,
   "area"   => $area,
   "zip_code"   => $zip_code,
   "city"   => $city,
   "state"   => $state,
   "country"   => $country,
   "reg_date"   => $reg_date,
   "validity_date"   => $validity_date,
   "emergency"   => $emergency,
   "relation"   => $relation,
   "phoneno"   => $phoneno,
   "religion"   => $religion,
   "education"   => $education,
   "occupation"   => $occupation,
   "monthly_income"   => $monthly_income
   );
   $data[] = $arr;
   
 echo json_encode($data);
     echo '<script type="text/javascript">';  
     echo 'window.location.href = "";';
     echo '</script>';
   }
  ?>