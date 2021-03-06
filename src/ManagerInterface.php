<?php

namespace SQSManager;

interface ManagerInterface
{

  /**
   * ManagerInterface constructor.
   * @param $appId
   * @param $appSecret
   * @param $region
   * @param array $configs
   */
  public function __construct($appId, $appSecret, $region, array $configs = []);

  /**
   * @param $queueName
   * @param $callback
   * @param array $listenerConfigs
   */
  public function run($queueName, $callback, array $listenerConfigs = []);

  /**
   * @param $seconds
   */
  public function setVisibilityTimeout($seconds);

  /**
   * @param $seconds
   */
  public function setWaitTimeSeconds($seconds);

  /**
   * @param $number
   */
  public function setMaxNumberOfMessages($number);

}