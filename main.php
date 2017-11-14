<?php
   class patient {
      public $fname = "";
      public $mname  = "";
      public $lname = "";
	  public $dob = "";
	  public $age = "";
      public $gender = "";
	  public $mobile = "";
      public $email = "";
	  public $bloodgroup = "";
	  public $consultant = "";
	  public $refering_doctor = "";
	  public $patient_code = "";
      public $organization_code = "";
	  public $staff_number = "";
	  public $next_of_kin = "";
	  public $relationship = "";
	  public $old_regno = "";

	  
	  public $marital_status = "";
	  public $house_number = "";
	  public $street_name = "";
	  public $area = "";
	  public $zip_code = "";
	  public $city = "";
	  public $state = "";
	  public $country = "";
	  public $reg_date = "";
	  public $validity_date = "";
	  
	  
	  public $emergency = "";
	  public $relation = "";
	  public $phoneno = "";
	  public $religion = "";
	  public $education = "";
	  public $occupation = "";
	  public $monthly_income = "";
	  
   }
	
   $p = new patient();
   $p->fname = $_POST['fname'];
   $p->mname  = $_POST['mname'];
   $p->lname = $_POST['lname'];
   $p->dob = $_POST['dob'];
   $p->age = $_POST['age'];
   $p->gender = $_POST['gender'];
   $p->mobile = $_POST['mobile'];
   $p->email = $_POST['email'];
   $p->bloodgroup = $_POST['blood'];
   $p->consultant = $_POST['con'];
   $p->refering_doctor = $_POST['doc'];
   $p->patient_code = $_POST['patient'];
   $p->organization_code = $_POST['org'];
   $p->staff_number = $_POST['staff'];
   $p->next_of_kin = $_POST['kin'];
   $p->relationship = $_POST['rel'];
   $p->old_regno = $_POST['old'];
   
   
   $p->marital_status = $_POST['marital'];
   $p->house_number = $_POST['house'];
   $p->street_name = $_POST['street'];
   $p->area = $_POST['area'];
   $p->zip_code = $_POST['zip'];
   $p->city = $_POST['city'];
   $p->state = $_POST['state'];
   $p->country = $_POST['country'];
   $p->reg_date = $_POST['reg'];
   $p->validity_date = $_POST['val'];
   
   
   $p->emergency = $_POST['emergency'];
   $p->relation = $_POST['relation'];
   $p->phoneno = $_POST['phoneno'];
   $p->religion = $_POST['religion'];
   $p->education = $_POST['education'];
   $p->occupation = $_POST['occupation'];
   $p->monthly_income = $_POST['income'];
    
  echo json_encode($p);
?>