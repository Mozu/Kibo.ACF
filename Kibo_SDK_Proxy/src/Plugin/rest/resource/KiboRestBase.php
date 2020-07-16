<?php

namespace Drupal\kibo_sdk_proxy\Plugin\rest;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Psr\Log\LoggerInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

class KiboRestBase extends ResourceBase {

  /**
   *
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  protected $currentUser;
  /**
   *
   * @var \Symfony\Component\HttpFoundation\Request
   */
  protected $currentRequest;

  /**
   * 
   * @param array $configuration
   * @param type $pluginId
   * @param type $pluginDefinition
   * @param array $serializerFormats
   * @param \Drupal\api\Plugin\rest\resource\LoggerInterface $logger
   */
  public function __construct(array $configuration, $pluginId, $pluginDefinition, array $serializerFormats, LoggerInterface $logger, AccountProxyInterface $currentUser, Request $currentRequest) {
    parent::__construct($configuration, $pluginId, $pluginDefinition, $serializerFormats, $logger);

    $this->currentUser = $currentUser;
    $this->currentRequest = $currentRequest;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $pluginId, $pluginDefinition) {
    return new static(
        $configuration, 
        $pluginId, 
        $pluginDefinition, 
        $container->getParameter('serializer.formats'), 
        $container->get('logger.factory')->get('rest'), 
        $container->get('current_user'),
        $container->get('request_stack')->getCurrentRequest()
    );
  }

}