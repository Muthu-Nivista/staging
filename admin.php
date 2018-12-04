<?php 
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class admin extends CI_Controller {
	public function __construct()
	{      	parent::__construct();
		$this->load->helper('url');
                $this->load->library(array('table','form_validation','javascript','upload','email'));
                $this->load->model('my_model');
                $this->form_data=new stdClass();
                $this->load->library('session');
	}

        public function index()
	{
		$this->load->view('admin/signin');
	}
        public function home()
	{
		$this->load->view('admin/index');
	}
        public function signup()
	{
		$this->load->view('admin/signup');
	}
       public function forget_page()
	{
		$this->load->view('admin/forget');
	}
       public function reset_page($usermail=NULL)
	{    
                $usermail1=$this->input->get('usermail');
               // $usermail1='muthu';
                $this->session->set_userdata('userid',$usermail1);
                $this->load->view('admin/reset_page');
	}
       public function testpage()
	{
		$this->load->view('admin/testpage');
	}
       public function pass_reset()
	{       
                $newpass = md5($this->input->post('new_password')); 
                $compass = md5($this->input->post('confirm_password')); 
				$userid=$this->input->post('userid');
				$data=array('password'=>$newpass);
				$query=$this->my_model->reset_password($data,$userid);
 if($query)
{

				$data1['message']="Password Reseted Sucessfully.";
				$this->load->view('admin/reset_page',$data1);
}
else
{

				$data1['message']="Password Unable to Reset, Please try again!";
				$this->load->view('admin/reset_page',$data1);
}
				
	}
		
	
     public function forget_reset()
	{      
    $from_email = "support@nivista.in"; 
                  $to_email = $this->input->post('email'); 
                  $userid=  $this->uri->segment($to_email);
                  $this->email->from($from_email, 'Nivista Support Team'); 
				  $this->email->to($to_email );
				  $this->email->subject('Password Reset'); 
                  $this->email->message('<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff" width="100%">
			<tbody>
				<tr>
					<td>
						&nbsp;</td>
					
					<td>
						&nbsp;</td>
				</tr>
				<tr>
					<td>
						&nbsp;</td>
					<td bgcolor="#fafafa" style="background-color:#fafafa;border-top:1px solid #e1e1e1;border-left:1px solid #e1e1e1;border-right:1px solid #e1e1e1;border-bottom:1px solid #e1e1e1" width="90%">
						<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody>
								<tr>
									<td width="24">
										&nbsp;</td>
									<td style="padding-top:16px">
										<img alt="Nivista" height="50" src="http://rahulmajithia.com/ci/assets/admin/images/logo.png" style="display:block;vertical-align:top;margin-left:-48px!important" width="180" height="100" class="CToWUd"></td>
									
																	</tr>
								<tr>
									<td width="24">
										&nbsp;</td>
									<td colspan="2" style="color:#858585;font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:20px;padding-top:24px">
										Hi muthu,</td>
									<td width="24">										&nbsp;</td>
								</tr>
								<tr>
									<td width="24">
										&nbsp;</td>
									<td colspan="2" style="color:#858585;font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:20px;padding-top:18px">
										To reset your <span class="il">password</span>, please click the link below. Your <span class="il">changes</span> here will update the <span class="il">password</span> for Nivista and any service in which you use your Nivista ID.</td>
									<td width="24">
										&nbsp;</td>
								</tr>
								<tr>
									<td width="24">
										&nbsp;</td>
							<td colspan="2" style="color:#858585;font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:20px;padding-top:18px">
				<a href="http://rahulmajithia.com/ci/admin/reset_page?usermail='.$to_email.'" style="color:#50b7f1;text-decoration:none;font-weight:bold" target="_blank" data-saferedirecturl="http://rahulmajithia.com/ci/admin/reset_page?usermail='.$to_email.'">Reset <span class="il">Password</span></a></td>
									<td width="24">
										&nbsp;</td>
								</tr>
								<tr>
									<td style="padding-top:18px;padding-bottom:32px;border-bottom:1px solid #e1e1e1" width="24">
										&nbsp;</td>
									<td colspan="2" style="color:#858585;font-family:Arial,Helvetica,sans-serif;font-size:14px;line-height:20px;padding-top:18px;padding-bottom:32px;border-bottom:1px solid #e1e1e1">
										Thank you,<br>
										The Nivista team</td>
									<td style="padding-top:18px;padding-bottom:32px;border-bottom:1px solid #e1e1e1" width="24">
										&nbsp;</td>
								</tr>
							</tbody>
						</table>
						
					</td>
					<td>
						&nbsp;</td>
				</tr>
				<tr>
					<td>
						&nbsp;</td>
					
					<td>
						&nbsp;</td>
				</tr>
			</tbody>
		</table>'); 
$this->email->set_mailtype('html');
        
   
         //Send mail 
         if($this->email->send()) 
         $data['email_confirm']="Email sent successfully."; 
         else 
         $data['email_confirm']="Error in sending Email."; 
         $this->load->view('admin/forget',$data); 
		 
	}
	public function login()
	{
        $username= $this->input->post('username');
        $password= md5($this->input->post('password'));
        $data=array('username'=>$username,'password'=>$password);
		$result=$this->my_model->login_access($data);    
		if(sizeof($result))
		{

		$this->session->set_userdata('username', $result['name']);
		$this->session->set_userdata('useremail', $result['email']);
		$this->load->view('admin/index');

		}
		else
		{
		$data=array('error message'=>'Invaild Username and Password');
		$this->load->view('admin/signin',$data);
		}
	}
	public function logout()
	{
		$sess_array=array('username'=>'');
		$this->session->unset_userdata('logged_in',$sess_array);
		$data['message_display']='Successfully Logout';
		$this->load->view('admin/signin',$data);               
	}
     public function add_department()
	{
		$this->load->view('admin/add_department');
	}
     public function add_user()
	{
		
		$this->load->view('admin/add_user');
	}


	public function user_list()
	{
		
		$data['h']=$this->my_model->select_data();  
        $this->load->view('admin/user_list', $data);  
               
	}
	public function teacher_list()
	{
		
		$data['tea']=$this->my_model->select_teacherlist();  
        $this->load->view('admin/teacherlist', $data);  
               
	}
	public function select_count_student()
	{
		
		$data['std']=$this->my_model->select_student();  
        $this->load->view('admin/index', $data);  
               
	}
	public function select_studentlist()
	{
		
		$data['std']=$this->my_model->select_student_list();  
        $this->load->view('admin/studentlist', $data);  
               
	}
	public function markentry()
	{
		
		$data['h']=$this->my_model->select_data();  
        $this->load->view('admin/mark_entry', $data);  
               
	}
	public function save_markentrylist()
	{
		 $acdyear= $this->input->post('acdyear');
$name= $this->input->post('name');
		 $exam_id= $this->input->post('exam_id');
		 $studentid= $this->input->post('studentid');
         $class= $this->input->post('class');
         $section= $this->input->post('section');
		 $subject= $this->input->post('subject');
         $mark= $this->input->post('mark');
         $remark= $this->input->post('remark');
		 $data=array('acdyear'=>$acdyear,'exam_id'=>$exam_id,'student_id'=>$studentid,'name'=>$name,'class'=>$class,'section'=>$section,'subject'=>$subject,'mark'=>$mark,'remark'=>$remark);
		$this->my_model->insert_marks($data);
/*
if(!empty($query))
{*/
 $data['message'] = 'Marks Saved Successfully';
		 $this->load->view('admin/mark_entry',$data);   // message load to view
/*
}
else
{
		 $data['message'] = 'Failure to Save,Please try again';
		 $this->load->view('admin/mark_entry',$data);   // message load to view

}
*/
	}
	public function viewmark()
	{
		
       $this->load->view('admin/view_mark');  
               
	}

	public function show_marklist()
	{
         $acdyear= $this->input->post('acdyear');
         $course= $this->input->post('class');
         $batch= $this->input->post('section');
         $data=array('acdyear'=>$acdyear,'classname'=>$course,'sectionname'=>$batch);
		 $data1['h']=$this->my_model->select_marks($data);  
         $this->load->view('admin/markslist', $data1);   
        
	}

	public function show_markentrylist()
	{
         $acdyear= $this->input->post('acdyear');
         $course= $this->input->post('class');
         $batch= $this->input->post('section');
         $data=array('acdyear'=>$acdyear,'classname'=>$course,'sectionname'=>$batch);
		 $data1['h']=$this->my_model->select_entrydata($data);  
         $this->load->view('admin/entrylist', $data1);   
        
	}
        public function delete_user()
	{
		
				$id= $this->input->get('id');
                $this->my_model->deleteuser($id);
                $this->user_list();

	}
	public function update_user()
	{
		$userid= $this->input->post('userid');
		$firstname= $this->input->post('firstname');
		$email= $this->input->post('email');
		$username= $this->input->post('username');
		$lastname= $this->input->post('lastname');
		$company= $this->input->post('company');
		$mobile= $this->input->post('contact');
		$address= $this->input->post('address');
		$website= $this->input->post('website');
		$p1= $this->input->post('firstname');
		$p2=rand(0,999);
		$password1= $p1+ "+" +$p2;
		$password1=md5($password1);
		$data=array('username'=>$username,'name'=>$firstname,'lastname'=>$lastname,'mobile'=>$mobile,'email'=>$email,'company'=>$company,'password'=>$password1,'address'=>$address,'website'=>$website);
		$this->my_model->update_user($data,$userid);
		$data['message'] = 'Data Updated Successfully';
		$this->user_list(); // message load to view

   }
	public function edit_user()
	{
		
		$id= $this->input->get('id');
		if(!empty($id))
		{
				$get_user=$this->my_model->get_userid($id)->row();
				$this->form_data->id=$get_user->id;
				$this->form_data->email=$get_user->email;
				$this->form_data->firstname=$get_user->name;
				$this->form_data->lastname=$get_user->lastname;
				$this->form_data->username=$get_user->username;
				$this->form_data->company=$get_user->company;
				$this->form_data->mobile=$get_user->mobile;
				$this->form_data->website=$get_user->website;
				$this->form_data->address=$get_user->address;
				$this->load->view('admin/add_user');
		}
		else
		{
				$data['h']=$this->my_model->select_data(); 
				$this->load->view('admin/user_list', $data);  
		}

      
	} 

	public function insert_user()
	{
		
		$firstname= $this->input->post('firstname');
		$username= $this->input->post('username');
		$lastname= $this->input->post('lastname');
		$company= $this->input->post('company');
		$mobile= $this->input->post('contact');
		$email= $this->input->post('email');
		$address= $this->input->post('address');
		$website= $this->input->post('website');
		$p1= $this->input->post('firstname');
		$p2=rand(0,999);
		$password1= $p1+ "+" +$p2;
		$password1=md5($password1);
		$data=array('username'=>$username,'name'=>$firstname,'email'=>$email,'lastname'=>$lastname,'mobile'=>$mobile,'company'=>$company,'password'=>$password1,'address'=>$address,'website'=>$website);
		$this->my_model->insert_user($data);
		$data['message'] = 'Data Inserted Successfully';
		$this->user_list(); // message load to view
	}



	function get_view_ajax()
	{
	  
	   $this->load->view('admin/entrylist',TRUE);
	  
	}	


	public function insert_depart()
	{
		
		$depart_name= $this->input->post('depart_name');
		$designation= $this->input->post('designation');          
		$data=array('department'=>$depart_name,'designation'=>$designation,'updated'=>date('d-m-Y'));
		$this->my_model->insert_depart($data);
		$data['message'] = 'Department added Successfully';
		$this->load->view('admin/add_department',$data); // message load to view
	}

	public function select_depart()
	{
		

		$data1['deptlist']=$this->my_model->select_departlist();
		
		$this->load->view('admin/department_list', $data1); // message load to view
	}
}


