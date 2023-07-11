<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>

<?php 
	/**
	* 
	*/
	class Admin
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		public function changepass($password,$id)
		{
			// $sId = session_id();
			$password = $this->fm->validation($password); //gọi ham validation từ file Format để ktra
			$password = mysqli_real_escape_string($this->db->link, $password);
			// $id = mysqli_real_escape_string($this->db->link, $id);
			if(empty($password)){
				$alert = "<span class='error'>Mật khẩu không được để trống!</span>";
				return $alert;
			}else{
						$query = "UPDATE tbl_admin SET adminPass= md5('$password') WHERE adminId = '$id' ";
						$result = $this->db->update($query);
						if($result){
							$alert = "<span class='success'>Thay đổi mật khẩu thành công</span>";
							return $alert;
						}else {
							$alert = "<span class='error'>Thay đổi mật khẩu không thành công</span>";
							return $alert;
					
				}
			}


		}

		public function kiemtrapass($password,$id)
		{
			
			$query = "SELECT * FROM tbl_admin where adminPass = md5('$password') AND  adminId='$id' ";
			$result = $this->db->select($query);
			return $result;
		}
		public function show_admin()
		{
			$query = "SELECT * FROM tbl_admin order by adminId desc ";
			$result = $this->db->select($query);
			return $result;
		}

		public function getadminbyId($id)
		{
			$query = "SELECT * FROM tbl_admin where adminId = '$id' ";
			$result = $this->db->select($query);
			return $result;
		}


		public function del_admin($id)
		{
			$query = "DELETE FROM tbl_admin where adminId = '$id' ";
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>Xóa tài khoản thành công</span>";
				return $alert;
			}else {
				$alert = "<span class='success'>Xóa tài khoản không thành công</span>";
				return $alert;
			}
		}
		public function insertadmin($data){

			$adminName = mysqli_real_escape_string($this->db->link,$data['adminName']);
			$adminEmail = mysqli_real_escape_string($this->db->link, $data['adminEmail']);
			$adminUser = mysqli_real_escape_string($this->db->link,$data['adminUser']);

			$adminPass = mysqli_real_escape_string($this->db->link,md5($data['adminPass']));
			$level = mysqli_real_escape_string($this->db->link, $data['level']);
			$status = mysqli_real_escape_string($this->db->link,$data['status']);

//			if($adminName == "" || $adminEmail == "" || $adminUser == "" || $adminPass == "" || $level == "" || $status == "" ){
//				$alert = "<span class='error'>Các trường không được bỏ trống</span>";
//				return $alert;
//			}else{

					$query_admin = "INSERT INTO tbl_admin(adminName, adminEmail, adminUser, adminPass, level, status) VALUES('$adminName', '$adminEmail', '$adminUser', '$adminPass', '$level', '$status') ";
					$resultadmin = $this->db->insert($query_admin);
					if($resultadmin){
						$alert = "<span class='success'>Đăng ký tài khỏan thành công</span>";
						return $alert;

					}else {
						$alert = "<span class='error'>Đăng ký tài khỏan không thành công</span>";
						return $alert;
					}
//				}

		}
		public function update_status($id)
		{

			$query = "UPDATE tbl_admin set status='1' where adminId='$id' ";
			$result = $this->db->update($query);
			return $result;
		}

		public function update_status1($id)
		{

			$query = "UPDATE tbl_admin set status='0' where adminId='$id' ";
			$result = $this->db->update($query);
			return $result;
		}
		public function update_admin($id,$adminName, $adminEmail,$adminUser,$level, $status )
		{
			$adminName = $this->fm->validation($adminName);
			$adminEmail = $this->fm->validation($adminEmail);
			$adminUser = $this->fm->validation($adminUser);
			$level = $this->fm->validation($level);
			$status= $this->fm->validation($status);

			$adminName = mysqli_real_escape_string($this->db->link, $adminName);
			$adminEmail = mysqli_real_escape_string($this->db->link, $adminEmail);
			$adminUser = mysqli_real_escape_string($this->db->link, $adminUser);

			$level = mysqli_real_escape_string($this->db->link, $level);
			$status = mysqli_real_escape_string($this->db->link,$status);
			$id = mysqli_real_escape_string($this->db->link,$id);

			$query = "UPDATE tbl_admin SET adminName='$adminName', adminEmail='$adminEmail', adminUser='$adminUser', level='$level', status='$status' WHERE adminId ='$id'";

				$result = $this->db->update($query);
				if($result){
					$alert = "<span class='success'>Người dùng cập nhật thành công</span>";
					return $alert;
				}else{
					$alert = "<span class='error'>Người dùng cập nhật không thành công</span>";
					return $alert;
				}


		}

		
	}

 ?>