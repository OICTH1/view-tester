<?php

class Controller_Viewtest extends Controller_Template
{

	public function action_index()
	{
		return Response::forge(View::forge('viewtest/index'));
	}

	 public $template = 'viewtest/header';

	public function action_view()
	{
		//return Response::forge(View::forge('viewtest/index'));
		$this->template->content = View::forge('test/'.$_POST['viewname'],$_POST['data']);
	}
}
