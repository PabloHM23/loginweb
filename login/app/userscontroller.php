<?php  
	include "usermodel.php"

	if($action == "create_user"){
		$name = $_POST['lastname']
		$name = $_POST['lastname']
		$name = $_POST['lastname']

		$name = $_POST['lastname']
		$name = $_POST['lastname']
	}
	/**
	 * 
	 */
class UsersControllers
	{
		private $User;
		function __construct(argument)
		{
			$this->User = new UserModel();
		}

		public function getAll(){
			returm $this->User->get();
		}

		public function create(){
			return $this->User->create();
		}
	}

?>