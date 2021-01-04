<?php


namespace WilokeUnit\Controllers;


class PostController
{
	protected $aData;

	public function validation(array $aData)
	{
		if (!isset($aData['title']) || empty($aData['title'])) {
			return [
				'success' => false,
				'msg'     => 'The title is required'
			];
		}

		if (!isset($aData['content']) || empty($aData['content'])) {
			return [
				'success' => false,
				'msg'     => 'The content is required'
			];
		}

		$this->aData = $aData;

		return [
			'success' => true,
			'data'    => $aData
		];
	}

	public function post()
	{
		return 1;
	}
}
