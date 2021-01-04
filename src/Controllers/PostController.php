<?php


namespace WilokeUnit\Controllers;


class PostController
{
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

		return [
			'success' => true,
			'msg'     => 'The data have been validated'
		];
	}
}
