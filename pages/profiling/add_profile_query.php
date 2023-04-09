<?php
include('../../includes/sms_db.php');
if(isset($_POST['submit'])) {
	$stud_id = $_POST['stud_id'];
	$course = $_POST['course'];
	$year_section = $_POST['year_section'];
	$status = $_POST['status'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$nname = $_POST['nname'];
	$date_of_birth = $_POST['date_of_birth'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$contact_number = $_POST['contact_number'];
	$per_address = $_POST['per_address'];
	$nationality = $_POST['nationality'];
	$civil_status = $_POST['civil_status'];
	$religion = $_POST['religion'];
	$spouse  = $_POST['spouse'];
	$spuse_occupation = $_POST['spuse_occupation'];
	$birth_order = $_POST['birth_order'];
	$brother = $_POST['brother'];
	$sister = $_POST['sister'];
	$living_with = $_POST['living_with'];
	$name_of_father = $_POST['name_of_father'];
	$name_of_mother = $_POST['name_of_mother'];
	$father_address = $_POST['father_address'];
	$mother_address = $_POST['mother_address'];
	$father_nationality = $_POST['father_nationality'];
	$mother_nationality = $_POST['mother_nationality'];
	$father_religion = $_POST['father_religion'];
	$mother_religion = $_POST['mother_religion'];
	$father_educ = $_POST['father_educ'];
	$mother_educ = $_POST['mother_educ'];
	$father_occupation = $_POST['father_occupation'];
	$mother_occupation = $_POST['mother_occupation'];
	$father_company = $_POST['father_company'];
	$mother_company = $_POST['mother_company'];
	$father_birthdate = $_POST['father_birthdate'];
	$mother_birthdate = $_POST['mother_birthdate'];
	$father_contact = $_POST['father_contact'];
	$mother_contact = $_POST['mother_contact'];
	$father_email = $_POST['father_email'];
	$mother_email = $_POST['mother_email'];
	$name_of_gurdian = $_POST['name_of_gurdian'];
	$gurdian_relationship = $_POST['gurdian_relationship'];
	$gurdian_address = $_POST['gurdian_address'];
	$gurdian_contact = $_POST['gurdian_contact'];
	$gurdian_email = $_POST['gurdian_email'];
	$emergency_person = $_POST['emergency_person'];
	$emergency_contact = $_POST['emergency_contact'];
	$years = $_POST['years'];
	$school_name_tertiary = $_POST["school_name_tertiary"];
	$school_add_tertiary = $_POST['school_add_tertiary'];
	$year_attended_tertiary = $_POST['year_attended_tertiary'];
	$honors_tertiary = $_POST['honors_tertiary'];
	$school_name_als = $_POST['school_name_als'];
	$school_add_als = $_POST['school_add_als'];
	$year_attended_als = $_POST['year_attended_als'];
	$honors_als = $_POST['honors_als'];
	$school_name_second = $_POST['school_name_second'];
	$school_add_second = $_POST['school_add_second'];
	$year_attended_second = $_POST['year_attended_second'];
	$honors_second = $_POST['honors_second'];
	$schoo_name_elem = $_POST['schoo_name_elem'];
	$school_add_elem = $_POST['school_add_elem'];
	$year_attended_elem = $_POST['year_attended_elem'];
	$honors_elem = $_POST['honors_elem'];
	$name_of_org = $_POST['name_of_org'];
	$affilition = $_POST['affilition'];
	$affli_year = $_POST['affli_year'];
	$affli_status = $_POST['affli_status'];
	$company_name = $_POST['company_name'];
	$position = $_POST['position'];
	$from_to = $_POST['from_to'];
	$interest = $_POST['interest'];
	$counseling_role = 'individual';
	$a = implode(',' , $interest );
	$talent = $_POST['talent'];
	$b = implode(',' , $talent );
	$characteristic = $_POST['characteristic'];
	$c = implode(',' , $characteristic);


	$sql = $conn -> prepare ("INSERT INTO guidance_profiling (stud_id,course,year_section,status,lname,fname,mname,nname,date_of_birth,gender,email,contact_number,per_address,nationality,civil_status,religion,spouse,spuse_occupation,birth_order,brother,sister,living_with,name_of_father,name_of_mother,father_address,mother_address,father_nationality,mother_nationality,father_religion,mother_religion,father_educ,mother_educ,father_occupation,mother_occupation,father_company,mother_company,father_birthdate,mother_birthdate,father_contact,mother_contact,father_email,mother_email,name_of_gurdian,gurdian_relationship,gurdian_address,gurdian_contact,gurdian_email,emergency_person,emergency_contact,years,school_name_tertiary,school_add_tertiary,year_attended_tertiary,honors_tertiary,school_name_als,school_add_als,year_attended_als,honors_als,school_name_second,school_add_second,year_attended_second,honors_second,schoo_name_elem,school_add_elem,year_attended_elem,honors_elem,name_of_org,affilition,affli_year,affli_status,company_name,position,from_to,interest,counseling_role,talent,characteristic)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$sql->execute(array($stud_id,$course,$year_section,$status,$lname,$fname,$mname,$nname,$date_of_birth,$gender,$email,$contact_number,$per_address,$nationality,$civil_status,$religion,$spouse,$spuse_occupation,$birth_order,$brother,$sister,$living_with,$name_of_father,$name_of_mother,$father_address,$mother_address,$father_nationality,$mother_nationality,$father_religion,$mother_religion,$father_educ,$mother_educ,$father_occupation,$mother_occupation,$father_company,$mother_company,$father_birthdate,$mother_birthdate,$father_contact,$mother_contact,$father_email,$mother_email,$name_of_gurdian,$gurdian_relationship,$gurdian_address,$gurdian_contact,$gurdian_email,$emergency_person,$emergency_contact,$years,$school_name_tertiary,$school_add_tertiary,$year_attended_tertiary,$honors_tertiary,$school_name_als,$school_add_als,$year_attended_als,$honors_als,$school_name_second,$school_add_second,$year_attended_second,$honors_second,$schoo_name_elem,$school_add_elem,$year_attended_elem,$honors_elem,$name_of_org,$affilition,$affli_year,$affli_status,$company_name,$position,$from_to,$a,$counseling_role,$b,$c));
	echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = '../../profiling.php';
      </script>
      ";
	
}
?>

