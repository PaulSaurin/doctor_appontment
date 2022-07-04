<?php
class Doc_cont extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct(); //default constructor
		$this->load->model('Doc_model'); //Model import
		// $this->load->helper('url'); //Loading url helper
	}
	

	public function savedata()
	{
		// $this->load->view('doc_front_view');
		$this->load->view('doc_signup');
		// $this->load->view('patient_signup');
		// $this->load->view('doc_signin');

		if($this->input->post('submit'))
		{
			$d_name=$this->input->post('d_name');
			$d_email=$this->input->post('d_email');
			$d_password=$this->input->post('d_password');
			$d_mobile=$this->input->post('d_mobile');
			$d_alt_mobile=$this->input->post('d_alt_mobile');
			$d_address=$this->input->post('d_address');
			$d_special=$this->input->post('d_special');
			$d_sex=$this->input->post('d_sex');
			$d_language=implode(",", $this->input->post('d_language'));
			
			$img1=$_FILES['d_image']['name'];
			$new_img1=rand(1111,9988).'_'.time().'_'.$img1;
			$d_upload_path1='upload/doctor/d_upload_image/'.$new_img1;
			$d_source_path1=$_FILES['d_image']['tmp_name'];

			move_uploaded_file($d_source_path1, $d_upload_path1);

			$img2=$_FILES['d_aadhar']['name'];
			$new_img2=rand(1111,9988).'_'.time().'_'.$img2;
			$d_upload_path2='upload/doctor/d_upload_aadhar/'.$new_img2;
			$d_source_path2=$_FILES['d_aadhar']['tmp_name'];

			move_uploaded_file($d_source_path2, $d_upload_path2);

			$img3=$_FILES['d_pan']['name'];
			$new_img3=rand(1111,9988).'_'.time().'_'.$img3;
			$d_upload_path3='upload/doctor/d_upload_pan/'.$new_img3;
			$d_source_path3=$_FILES['d_pan']['tmp_name'];

			move_uploaded_file($d_source_path3, $d_upload_path3);

			$img4=$_FILES['d_reg_cer']['name'];
			$new_img4=rand(1111,9988).'_'.time().'_'.$img4;
			$d_upload_path4='upload/doctor/d_upload_reg_cer/'.$new_img4;
			$d_source_path4=$_FILES['d_reg_cer']['tmp_name'];			
			
			move_uploaded_file($d_source_path4, $d_upload_path4);
			
				$data=array('d_name'=>$d_name,'d_email'=>$d_email,'d_password'=>$d_password,'d_mobile'=>$d_mobile,'d_alt_mobile'=>$d_alt_mobile,'d_address'=>$d_address,'d_special'=>$d_special,'d_sex'=>$d_sex,'d_language'=>$d_language,'d_image'=>$d_upload_path1,'d_aadhar'=>$d_upload_path2,'d_pan'=>$d_upload_path3,'d_reg_cer'=>$d_upload_path4);

			$result=$this->Doc_model->saverecords($data);
			if ($result==true) 
			{
				redirect('Doc_cont/dispdata');
			}
			else
			{
				echo "Data Not Inserted";
			}
		}
	}

	// public function dispdata()
	// {
	// 	$result['data']=$this->Hello_ModelQB->displayrecords();
	// 	if($result)
	// 	{
	// 		$this->load->view('display_recordsqb',$result);
	// 	}
	// 	else
	// 	{
	// 		echo "failed to display";
	// 	}	
	// }
	
}
?>







<!-- move_uploaded_file(($upload_path1, $d_image)&&($upload_path2, $d_aadhar)&&($upload_path3, $d_pan)&&($upload_path4, $d_reg_cer));
			
				$data=array('name'=>$name,'email'=>$email,'password'=>$password,'mobile'=>$mobile,'d_alt_mobile'=>$d_alt_mobile,'address'=>$address,'d_special'=>$d_special,'d_sex'=>$d_sex,'d_language'=>$d_language,'d_image'=>$d_image,'d_aadhar'=>$d_aadhar,'d_pan'=>$d_pan,'d_reg_cer'=>$d_reg_cer); -->