<?php
/**
 * Created by PhpStorm.
 * User: andrea
 * Date: 07/04/18
 * Time: 16.43
 */

namespace test\fake;


class FakeMessageReceiver
{

  public function doNothing(\Message $message){}

  public function doThrowException(\Message $message)
  {
    throw new \Exception('YOU SHALL NOT PASS');
  }
}