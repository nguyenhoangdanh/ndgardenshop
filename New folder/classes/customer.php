<?php
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>


 
<?php 
	/**
	* 
	*/
	class customer
	{
		private $db;
		private $fm;
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		public function show_customers_email($email)
		{
			$query = "SELECT * FROM tbl_customer WHERE email='$email' ";
			$result = $this->db->dem($query);
			return $result;
		}
		public function update_mk_email($pass, $email)
		{
			$query = "UPDATE tbl_customer SET password=md5('$pass')  where email='$email'";
			$result = $this->db->update($query);
			return $result;
		}
		public function insert_customer($date,$files)
		{
			$name = mysqli_real_escape_string($this->db->link, $date['name']);
			$city = mysqli_real_escape_string($this->db->link, $date['city']);
			$zipcode = mysqli_real_escape_string($this->db->link, $date['zipcode']);
			$email = mysqli_real_escape_string($this->db->link, $date['email']);
			$address = mysqli_real_escape_string($this->db->link, $date['address']);
			$country = mysqli_real_escape_string($this->db->link, $date['country']);
			$phone = mysqli_real_escape_string($this->db->link, $date['phone']);
			$password = mysqli_real_escape_string($this->db->link, md5($date['password']));

			$permited = array('jpg','jpeg','png','gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];
			
			$div =explode('.', $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0,10).'.'.$file_ext;
			$uploaded_image = "images/".$unique_image;

			if($name == "" || $city == "" || $zipcode == "" || $email == "" || $address == "" || $country == "" || $phone == "" || $password == ""){
				$alert = "<span class='error'>Các trường không được bỏ trống</span>";
				return $alert;
			}else{
				$check_email = "SELECT * FROM tbl_customer WHERE email='$email' LIMIT 1";
				$result_check = $this->db->select($check_email);
				if ($result_check) {
					$alert = "<span class='error'>Email đã tồn tại ??? Vui lòng nhập một email khác</span>";
					return $alert;
				}else {
					move_uploaded_file($file_temp, $uploaded_image);
					
					$query = "INSERT INTO tbl_customer(name,city,zipcode,email,address,country,phone,password,image) VALUES('$name','$city','$zipcode','$email','$address','$country','$phone','$password','$unique_image') ";
					$result = $this->db->insert($query);
					if($result){
						$alert = "<span class='success'>Đăng ký tài khỏan thành công</span>";
						return $alert;

					}else {
						$alert = "<span class='error'>Đăng ký tài khỏan không thành công</span>";
						return $alert;
					}
				}
			}
		}
		public function login_customer($date)
		{
			$email =  $date['email'];
			$password = md5($date['password']);
			if($email == '' || $password == ''){
				$alert = "<span class='error'>Email và Password không được bỏ trống</span>";
				return $alert;
			}else{
				$check_login = "SELECT * FROM tbl_customer WHERE email='$email' AND password='$password' ";
				$result_check = $this->db->select($check_login);
//				$result=$result_check->fetch_assoc();

				if ($result_check != false) {
					$value = $result_check->fetch_assoc();
					if($value['level']==0){
					Session::set('customer_login', true);
					Session::set('customer_id', $value['id']);
					Session::set('customer_name', $value['name']);
					echo "<script>window.open('index.php','_self')</script>";}
					else
					{
						$alert = "<span class='error'>Tài khoản của bạn đã bị khóa</span>";
						return $alert;
					}
				}else {
					$alert = "<span class='error'>Email hoặc mật khẩu  không đúng</span>";
					return $alert;
				}
			}
		}
		public function update_level($id)
		{

			$query = "UPDATE tbl_customer set level='1' where id='$id' ";
			$result = $this->db->update($query);
			return $result;
		}

		public function update_level1($id)
		{

			$query = "UPDATE tbl_customer set level='0' where id='$id' ";
			$result = $this->db->update($query);
			return $result;
		}
		public function show_customers($id)
		{
			$query = "SELECT * FROM tbl_customer WHERE id='$id' ";
			$result = $this->db->select($query);
			return $result;
		}
		public function show_customer(){
			$query = "SELECT * FROM tbl_customer  order by id desc";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_customers($data, $id,$files)
		{
			$name = mysqli_real_escape_string($this->db->link, $data['name']);
			$zipcode = mysqli_real_escape_string($this->db->link, $data['zipcode']);
			$email = mysqli_real_escape_string($this->db->link, $data['email']);
			$address = mysqli_real_escape_string($this->db->link, $data['address']);
			$phone = mysqli_real_escape_string($this->db->link, $data['phone']);


			$permited  = array('jpg', 'jpeg', 'png', 'gif');

			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];

			$div = explode('.', $file_name);
			$file_ext = strtolower(end($div));
			// $file_current = strtolower(current($div));
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "images/".$unique_image;
			
			if($name=="" || $zipcode=="" || $email=="" || $address=="" || $phone ==""){
				$alert = "<span class='error'>Fields must be not empty</span>";
				return $alert;
			}else{
				if(!empty($file_name)){
					//Nếu người dùng chọn ảnh
					
				     // echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";	
					move_uploaded_file($file_temp,$uploaded_image);
					$query = "UPDATE tbl_customer SET name='$name',zipcode='$zipcode',email='$email',address='$address',phone='$phone', image = '$unique_image'WHERE id ='$id'";
					
				}else{
					//Nếu người dùng không chọn ảnh
					$query = "UPDATE tbl_customer SET name='$name',zipcode='$zipcode',email='$email',address='$address',phone='$phone' WHERE id ='$id'";
					
				}
				$result = $this->db->update($query);
				if($result){
						$alert = "<span class='success'>Khách hàng cập nhật thành công</span>";
						return $alert;
				}else{
						$alert = "<span class='error'>Khách hàng cập nhật không thành công</span>";
						return $alert;
				}
				
			}
		}
		public function del_customer($id)
		{
			$query = "DELETE FROM tbl_customer where id = '$id' ";
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>Customer Deleted Successfully</span>";
				return $alert;
			}else {
				$alert = "<span class='success'>Customer Deleted Not Success</span>";
				return $alert;
			}
		}
		public function insert_customers($name,$address,$city,$country,$zipcode,$phone,$email,$password)
		{
			$name = $this->fm->validation($name);
			$address = $this->fm->validation($address);
			$city = $this->fm->validation($city);
			$country = $this->fm->validation($country);
			$zipcode = $this->fm->validation($zipcode);
			$phone = $this->fm->validation($phone);
			$email = $this->fm->validation($email);
			$password = $this->fm->validation($password);


			$name = mysqli_real_escape_string($this->db->link, $name);
			$address = mysqli_real_escape_string($this->db->link,$address);
			$city = mysqli_real_escape_string($this->db->link, $city);
			$country = mysqli_real_escape_string($this->db->link, $country);
			$zipcode = mysqli_real_escape_string($this->db->link, $zipcode);
			$phone = mysqli_real_escape_string($this->db->link, $phone);
			$email = mysqli_real_escape_string($this->db->link, $email);
			$password = mysqli_real_escape_string($this->db->link, md5($password));


			if(empty($name) || empty($address) || empty($city) || empty($country) || empty($zipcode) || empty($phone) || empty($email) || empty($password)){
				$alert = "<span class='error'Các trường không được bỏ trống</span>";
				return $alert;
			}else{
				$check_email = "SELECT * FROM tbl_customer WHERE email='$email' LIMIT 1";
				$result_check = $this->db->select($check_email);
				if ($result_check) {
					$alert = "<span class='error'>Email đã tồn tại ??? Vui lòng nhập một email khác</span>";
					return $alert;
				}else {
					$query = "INSERT INTO tbl_customer(name,address,city,country,zipcode,phone,email,password) VALUES('$name','$address','$city','$country','$zipcode','$phone','$email','$password') ";
					$result = $this->db->insert($query);
					if($result){
						$alert = "<span class='success'> Thêm khách hàng thành công</span>";
						return $alert;
					}else {
						$alert = "<span class='error'> Thêm khách hàng không thành công</span>";
						return $alert;
					}
				}
			}
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
						$query = "UPDATE tbl_customer SET password= md5('$password') WHERE id = '$id' ";
						$result = $this->db->update($query);
						if($result){
							$alert = "<span class='success'>Thay đổi mật khẩu thành công</span>";
							return $alert;
						}else {
							$alert = "<span class='error'>Thay đổi mật khẩu không thành công</span>";
							return $alert;
					
				}
			}


		}
		public function kiemtrapass($password,$id)
		{
			
			$query = "SELECT * FROM tbl_customer where password = md5('$password') AND  id='$id' ";
			$result = $this->db->select($query);
			return $result;
		}

	}
 ?>