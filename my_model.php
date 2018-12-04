<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_model extends CI_Model 
{
public function __construct() {
parent::__construct();
}
public function insert($data){

$this->db->insert('user', $data);

}
public function insert_user($data){

$this->db->insert('employee', $data);

}

public function insert_depart($data){

$this->db->insert('department', $data);

}
public function select_data(){

$query = $this->db->get('employee');  
return $query; 

}
public function get_userid($id)
{
$this->db->select('*');
$this->db->where('id',$id);
$query=$this->db->get('employee');
return $query;
}
public function update_user($data,$userid)
{

$this->db->set($data);
$this->db->where('id',$userid);
$query=$this->db->update('employee',$data);
return $query;
}
public function deleteuser($id){
$this->db->select('*');
$this->db->where('id',$id);
$query = $this->db->delete('employee');  
         return $query; 
}
public function login_access($data)
{
 $username1=$data['username'];
 $password1=$data['password'];
 $this->db->select('*');
 $this->db->where('username',$username1); 
 $this->db->where('password',$password1); 
 $query=$this->db->get('employee')->row_array();
 return $query;

}
public function select_teacherlist()
{
	
$query=$this->db->get('teacher');
return $query;
}

public function select_student_list()
{
$query=$this->db->get('student_1819');
return $query;
}
public function select_student()
{
$query=$this->db->get('student_1819');
return $query;
}

// read data from database and display in admin page

public function userdata_access($data)
{

//$condition="username="."'".$data['username']."'";
$this->db->select('*');
$this->db->where('username',$data['username']); 
$query=$this->db->get('employee');
if($query->num_rows()==1)
{
  return $query->row_array(); 
}
else
{
}
}


// password reset

public function reset_password($data,$userid)
{

$this->db->set('password',$data['password']);
$this->db->where('email',$userid);
$query=$this->db->update('employee',$data);
//$query=$this->db->get('name');
return $query; 
}

// mark entry selection

public function select_entrydata($data)
{

$acdyear=$data['acdyear'];
$course1=$data['classname'];
$batch1=$data['sectionname'];
$this->db->select('*');
 $this->db->where('acdyear',$acdyear); 
 $this->db->where('course',$course1); 
 $this->db->where('batch',$batch1); 

$query=$this->db->get('studentlist');

 return $query;
}




// insert marks

public function insert_marks($data){
$get_count=count($data['mark']);
//echo $get_count;
for($i=1;$i<$get_count;$i++)
{
 $batch[] = array( "acdyear" =>$data["acdyear"],
             "exam_id" => $data["exam_id"],
 "student_id" => $data["student_id"][$i],
 "class" => $data["class"],
 "section" => $data["section"],
 "subject" => $data["subject"],
 "mark" => $data["mark"][$i], "name" => $data["name"][$i],
             "remark" =>$data["remark"][$i]);
$this->db->insert_batch('marks', $batch);

}

}
public function select_marks($data)
{
//var_dump($data);
$acdyear=$data['acdyear'];
$course1=$data['classname'];
$batch1=$data['sectionname'];
$this->db->select('*');
 $this->db->where('acdyear',$acdyear); 
 $this->db->where('class',$course1); 
 $this->db->where('section',$batch1); 

$query=$this->db->get('marks');

 return $query;
}
public function select_departlist()
{
$this->db->distinct();
$this->db->select('department,designation');
$query=$this->db->get('department');
return $query;
}

}
