<?php
namespace App\Services;

class Model
{
	public $data = array(
						'main' => 'Это домашняя страница!',
						'page1' => 'Это страница №1!',
						'page2' => 'Это страница №2!',
						'page3' => 'Это страница №3!',
						'page4' => 'Это страница №4!',
						'page5' => 'Это страница №5!');


	function GetPageData()
	{
		return $this -> data;
	}
}