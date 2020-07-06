<?php
	include 'model.php';
	include 'view.php';
	
	class Controller{
		public function action(){
			$messege =  (new Model())->getMessage();
			return (new View($messege))->render();
		}
	}


?>