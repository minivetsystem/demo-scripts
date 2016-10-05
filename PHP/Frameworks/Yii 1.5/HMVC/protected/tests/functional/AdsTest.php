<?php

class AdsTest extends WebTestCase
{
	public $fixtures=array(
		'ads'=>'Ads',
	);

	public function testShow()
	{
		$this->open('?r=ads/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=ads/create');
	}

	public function testUpdate()
	{
		$this->open('?r=ads/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=ads/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=ads/index');
	}

	public function testAdmin()
	{
		$this->open('?r=ads/admin');
	}
}
