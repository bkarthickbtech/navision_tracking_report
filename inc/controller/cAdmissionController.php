<?php include_once('cController.php');
class cAdmissionController extends cController {
 public $action="viewall";
    public $id="";
    public $view_controls=array("photo"=>"image","father_photo"=>"image","mother_photo"=>"image","person1_photo"=>"image","person2_phot"=>"image");
    function __construct() {
        parent::__construct();
        $this->table = "admission";
        
    }
    
 function curd() {
        if($this->action=="viewall"){
            $this->column=array("admission.id","admission.photo","admission.application_no","DATE_FORMAT(admission.registration_date,'".AppDateFormatDb."') as registration_date","admission.enrollment","admission.first_name","admission.last_name","admission.middle_name","mclass.class as current_class","DATE_FORMAT(admission.date_of_birth,'".AppDateFormatDb."') as date_of_birth","admission.height","admission.weight","admission.sex as sex","admission.nationality","admission.religion","admission.caste","admission.community","admission.blood_group","admission.mother_tongue","admission.lang_speak_at_home","admission.father_photo","admission.father_name","admission.mobile_phone","admission.work_phone","admission.email","admission.employer","admission.occupation","admission.annual_income","admission.mother_photo","admission.mother_name","admission.mmobile_phone","admission.mwork_phone","admission.memail","admission.memployer","admission.moccupation","admission.mannual_income","admission.home_address","admission.haddress_line2","admission.haddress_city","admission.pincode","admission.home_phone","admission.landmark","admission.doctors_name","admission.daddress_line2","admission.daddress_city","admission.dphone","admission.dmobile","admission.doctors_address","admission.child_allergies","admission.any_special_info","admission.physically_challenged as physically_challenged","admission.previous_school","admission.ps_standard","admission.psacademic_yr","admission.ps_address","admission.saddress_line2","admission.scity","admission.transport as transport","admission.person1_photo","admission.pick_up_person_1","admission.prelationship","admission.person2_phot","admission.pick_up_person_2","admission.prelationship2","admission.route","admission.stage","admission.cost","admission.sname","admission.sage","admission.sclass","admission.sschool","admission.sname1","admission.sage1","admission.sclass1","admission.sschool1","admission.emergency_name","admission.emergency_mobile","admission.relationship","admission.copy_birth_certificate","admission.tc","admission.assessment_report_card","admission.status","admission.screening_id","admission.branch_id","1 as action");
            $this->join_condition="Left Join mclass on mclass.id=admission.current_class";    
        }elseif($this->action=="view"){
            $this->column=array("admission.photo","admission.application_no","DATE_FORMAT(admission.registration_date,'".AppDateFormatDb."') as registration_date","admission.enrollment","admission.first_name","admission.last_name","admission.middle_name","mclass.class as current_class","DATE_FORMAT(admission.date_of_birth,'".AppDateFormatDb."') as date_of_birth","admission.height","admission.weight","admission.sex as sex","admission.nationality","admission.religion","admission.caste","admission.community","admission.blood_group","admission.mother_tongue","admission.lang_speak_at_home","admission.father_photo","admission.father_name","admission.mobile_phone","admission.work_phone","admission.email","admission.employer","admission.occupation","admission.annual_income","admission.mother_photo","admission.mother_name","admission.mmobile_phone","admission.mwork_phone","admission.memail","admission.memployer","admission.moccupation","admission.mannual_income","admission.home_address","admission.haddress_line2","admission.haddress_city","admission.pincode","admission.home_phone","admission.landmark","admission.doctors_name","admission.daddress_line2","admission.daddress_city","admission.dphone","admission.dmobile","admission.doctors_address","admission.child_allergies","admission.any_special_info","admission.physically_challenged as physically_challenged","admission.previous_school","admission.ps_standard","admission.psacademic_yr","admission.ps_address","admission.saddress_line2","admission.scity","admission.transport as transport","admission.person1_photo","admission.pick_up_person_1","admission.prelationship","admission.person2_phot","admission.pick_up_person_2","admission.prelationship2","admission.route","admission.stage","admission.cost","admission.sname","admission.sage","admission.sclass","admission.sschool","admission.sname1","admission.sage1","admission.sclass1","admission.sschool1","admission.emergency_name","admission.emergency_mobile","admission.relationship","admission.copy_birth_certificate","admission.tc","admission.assessment_report_card","admission.status","admission.screening_id","admission.branch_id");
            $this->join_condition="Left Join mclass on mclass.id=admission.current_class";    
        
        
        }elseif($this->action=="editview"){
            $this->column=array("admission.photo","admission.application_no","admission.registration_date","admission.enrollment","admission.first_name","admission.last_name","admission.middle_name","admission.current_class","admission.date_of_birth","admission.height","admission.weight","admission.sex","admission.nationality","admission.religion","admission.caste","admission.community","admission.blood_group","admission.mother_tongue","admission.lang_speak_at_home","admission.father_photo","admission.father_name","admission.mobile_phone","admission.work_phone","admission.email","admission.employer","admission.occupation","admission.annual_income","admission.mother_photo","admission.mother_name","admission.mmobile_phone","admission.mwork_phone","admission.memail","admission.memployer","admission.moccupation","admission.mannual_income","admission.home_address","admission.haddress_line2","admission.haddress_city","admission.pincode","admission.home_phone","admission.landmark","admission.doctors_name","admission.daddress_line2","admission.daddress_city","admission.dphone","admission.dmobile","admission.doctors_address","admission.child_allergies","admission.any_special_info","admission.physically_challenged","admission.previous_school","admission.ps_standard","admission.psacademic_yr","admission.ps_address","admission.saddress_line2","admission.scity","admission.transport","admission.person1_photo","admission.pick_up_person_1","admission.prelationship","admission.person2_phot","admission.pick_up_person_2","admission.prelationship2","admission.route","admission.stage","admission.cost","admission.sname","admission.sage","admission.sclass","admission.sschool","admission.sname1","admission.sage1","admission.sclass1","admission.sschool1","admission.emergency_name","admission.emergency_mobile","admission.relationship","admission.copy_birth_certificate","admission.tc","admission.assessment_report_card","admission.status","admission.screening_id","admission.branch_id");
            $this->join_condition="Left Join mclass on mclass.id=admission.current_class";    
        
        }elseif($this->action=="add"){
            $this->column=array('photo'=>$_POST['photo'],'application_no'=>$_POST['application_no'],'registration_date'=>$_POST['registration_date'],'enrollment'=>$_POST['enrollment'],'first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'middle_name'=>$_POST['middle_name'],'current_class'=>$_POST['current_class'],'date_of_birth'=>$_POST['date_of_birth'],'height'=>$_POST['height'],'weight'=>$_POST['weight'],'sex'=>$_POST['sex'],'nationality'=>$_POST['nationality'],'religion'=>$_POST['religion'],'caste'=>$_POST['caste'],'community'=>$_POST['community'],'blood_group'=>$_POST['blood_group'],'mother_tongue'=>$_POST['mother_tongue'],'lang_speak_at_home'=>$_POST['lang_speak_at_home'],'father_photo'=>$_POST['father_photo'],'father_name'=>$_POST['father_name'],'mobile_phone'=>$_POST['mobile_phone'],'work_phone'=>$_POST['work_phone'],'email'=>$_POST['email'],'employer'=>$_POST['employer'],'occupation'=>$_POST['occupation'],'annual_income'=>$_POST['annual_income'],'mother_photo'=>$_POST['mother_photo'],'mother_name'=>$_POST['mother_name'],'mmobile_phone'=>$_POST['mmobile_phone'],'mwork_phone'=>$_POST['mwork_phone'],'memail'=>$_POST['memail'],'memployer'=>$_POST['memployer'],'moccupation'=>$_POST['moccupation'],'mannual_income'=>$_POST['mannual_income'],'home_address'=>$_POST['home_address'],'haddress_line2'=>$_POST['haddress_line2'],'haddress_city'=>$_POST['haddress_city'],'pincode'=>$_POST['pincode'],'home_phone'=>$_POST['home_phone'],'landmark'=>$_POST['landmark'],'doctors_name'=>$_POST['doctors_name'],'daddress_line2'=>$_POST['daddress_line2'],'daddress_city'=>$_POST['daddress_city'],'dphone'=>$_POST['dphone'],'dmobile'=>$_POST['dmobile'],'doctors_address'=>$_POST['doctors_address'],'child_allergies'=>$_POST['child_allergies'],'any_special_info'=>$_POST['any_special_info'],'physically_challenged'=>$_POST['physically_challenged'],'previous_school'=>$_POST['previous_school'],'ps_standard'=>$_POST['ps_standard'],'psacademic_yr'=>$_POST['psacademic_yr'],'ps_address'=>$_POST['ps_address'],'saddress_line2'=>$_POST['saddress_line2'],'scity'=>$_POST['scity'],'transport'=>$_POST['transport'],'person1_photo'=>$_POST['person1_photo'],'pick_up_person_1'=>$_POST['pick_up_person_1'],'prelationship'=>$_POST['prelationship'],'person2_phot'=>$_POST['person2_phot'],'pick_up_person_2'=>$_POST['pick_up_person_2'],'prelationship2'=>$_POST['prelationship2'],'route'=>$_POST['route'],'stage'=>$_POST['stage'],'cost'=>$_POST['cost'],'sname'=>$_POST['sname'],'sage'=>$_POST['sage'],'sclass'=>$_POST['sclass'],'sschool'=>$_POST['sschool'],'sname1'=>$_POST['sname1'],'sage1'=>$_POST['sage1'],'sclass1'=>$_POST['sclass1'],'sschool1'=>$_POST['sschool1'],'emergency_name'=>$_POST['emergency_name'],'emergency_mobile'=>$_POST['emergency_mobile'],'relationship'=>$_POST['relationship'],'copy_birth_certificate'=>$_POST['copy_birth_certificate'],'tc'=>$_POST['tc'],'assessment_report_card'=>$_POST['assessment_report_card'],'status'=>$_POST['status'],'screening_id'=>$_POST['screening_id'],'branch_id'=>$_POST['branch_id']);
         
        }        
        else{
            $this->column=array('photo'=>$_POST['photo'],'application_no'=>$_POST['application_no'],'registration_date'=>$_POST['registration_date'],'enrollment'=>$_POST['enrollment'],'first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'middle_name'=>$_POST['middle_name'],'current_class'=>$_POST['current_class'],'date_of_birth'=>$_POST['date_of_birth'],'height'=>$_POST['height'],'weight'=>$_POST['weight'],'sex'=>$_POST['sex'],'nationality'=>$_POST['nationality'],'religion'=>$_POST['religion'],'caste'=>$_POST['caste'],'community'=>$_POST['community'],'blood_group'=>$_POST['blood_group'],'mother_tongue'=>$_POST['mother_tongue'],'lang_speak_at_home'=>$_POST['lang_speak_at_home'],'father_photo'=>$_POST['father_photo'],'father_name'=>$_POST['father_name'],'mobile_phone'=>$_POST['mobile_phone'],'work_phone'=>$_POST['work_phone'],'email'=>$_POST['email'],'employer'=>$_POST['employer'],'occupation'=>$_POST['occupation'],'annual_income'=>$_POST['annual_income'],'mother_photo'=>$_POST['mother_photo'],'mother_name'=>$_POST['mother_name'],'mmobile_phone'=>$_POST['mmobile_phone'],'mwork_phone'=>$_POST['mwork_phone'],'memail'=>$_POST['memail'],'memployer'=>$_POST['memployer'],'moccupation'=>$_POST['moccupation'],'mannual_income'=>$_POST['mannual_income'],'home_address'=>$_POST['home_address'],'haddress_line2'=>$_POST['haddress_line2'],'haddress_city'=>$_POST['haddress_city'],'pincode'=>$_POST['pincode'],'home_phone'=>$_POST['home_phone'],'landmark'=>$_POST['landmark'],'doctors_name'=>$_POST['doctors_name'],'daddress_line2'=>$_POST['daddress_line2'],'daddress_city'=>$_POST['daddress_city'],'dphone'=>$_POST['dphone'],'dmobile'=>$_POST['dmobile'],'doctors_address'=>$_POST['doctors_address'],'child_allergies'=>$_POST['child_allergies'],'any_special_info'=>$_POST['any_special_info'],'physically_challenged'=>$_POST['physically_challenged'],'previous_school'=>$_POST['previous_school'],'ps_standard'=>$_POST['ps_standard'],'psacademic_yr'=>$_POST['psacademic_yr'],'ps_address'=>$_POST['ps_address'],'saddress_line2'=>$_POST['saddress_line2'],'scity'=>$_POST['scity'],'transport'=>$_POST['transport'],'person1_photo'=>$_POST['person1_photo'],'pick_up_person_1'=>$_POST['pick_up_person_1'],'prelationship'=>$_POST['prelationship'],'person2_phot'=>$_POST['person2_phot'],'pick_up_person_2'=>$_POST['pick_up_person_2'],'prelationship2'=>$_POST['prelationship2'],'route'=>$_POST['route'],'stage'=>$_POST['stage'],'cost'=>$_POST['cost'],'sname'=>$_POST['sname'],'sage'=>$_POST['sage'],'sclass'=>$_POST['sclass'],'sschool'=>$_POST['sschool'],'sname1'=>$_POST['sname1'],'sage1'=>$_POST['sage1'],'sclass1'=>$_POST['sclass1'],'sschool1'=>$_POST['sschool1'],'emergency_name'=>$_POST['emergency_name'],'emergency_mobile'=>$_POST['emergency_mobile'],'relationship'=>$_POST['relationship'],'copy_birth_certificate'=>$_POST['copy_birth_certificate'],'tc'=>$_POST['tc'],'assessment_report_card'=>$_POST['assessment_report_card'],'status'=>$_POST['status'],'screening_id'=>$_POST['screening_id'],'branch_id'=>$_POST['branch_id']);
        }
        
        
        $result=parent::curd($this->action,$this->id);
        
        
        return $result; 
        }
        public function beforeWrite(){
        
        }
        public function afterWrite(){
        
        }
    } 
 ?>