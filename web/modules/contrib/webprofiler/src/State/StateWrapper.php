<?php

declare(strict_types=1);

namespace Drupal\webprofiler\State;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\KeyValueStore\KeyValueFactoryInterface;
use Drupal\Core\Lock\LockBackendInterface;
use Drupal\Core\State\State;
use Drupal\Core\State\StateInterface;
use Drupal\webprofiler\DataCollector\StateDataCollector;

/**
 * Wrap the state service to collect which keys are loaded.
 */
class StateWrapper extends State {

  /**
   * StateWrapper constructor.
   *
   * @param \Drupal\Core\KeyValueStore\KeyValueFactoryInterface $key_value_factory
   *   The key value store to use.
   * @param \Drupal\Core\Cache\CacheBackendInterface $cache
   *   The cache backend to use.
   * @param \Drupal\Core\Lock\LockBackendInterface $lock
   *   The lock backend to use.
   * @param \Drupal\Core\State\StateInterface $state
   *   The original state service.
   * @param \Drupal\webprofiler\DataCollector\StateDataCollector $dataCollector
   *   The state data collector.
   */
  public function __construct(
    KeyValueFactoryInterface $key_value_factory,
    CacheBackendInterface $cache,
    LockBackendInterface $lock,
    private readonly StateInterface $state,
    private readonly StateDataCollector $dataCollector,
  ) {
    parent::__construct($key_value_factory, $cache, $lock);
  }

  /**
   * {@inheritdoc}
   */
  public function get($key, $default = NULL) {
    $this->dataCollector->addState($key);

    return $this->state->get($key, $default);
  }

  /**
   * {@inheritdoc}
   */
  public function getMultiple(array $keys) {
    foreach ($keys as $key) {
      $this->dataCollector->addState($key);
    }

    return $this->state->getMultiple($keys);
  }

}
