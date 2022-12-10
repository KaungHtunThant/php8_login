<?php

	Class User{
		public $username;
		public $password;

		function __construct($username, $password) {
			$this->username = $username;
			$this->password = $password;
		}
		
		function get_name() {
			return $this->username;
		}

		function get_pass() {
			return $this->password;
		}
	}

?>