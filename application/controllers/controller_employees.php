<?php

class Controller_Employees extends Controller
{

	function action_index()
	{	
		$this->view->generate('employees_view.php', 'template_view.php');
	}
}