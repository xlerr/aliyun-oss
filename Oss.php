<?php
namespace xlerr\oss;

use yii\base\Object;
use OSS\OssClient;

/**
 * 
 */
class Oss extends Object
{
	public $client;

	public $accessKeyId;
	public $accessKeySecret;
	public $endpoint;

	public function init()
	{
		$this->client = new OssClient($this->accessKeyId, $this->accessKeySecret, $this->endpoint);
	}
}