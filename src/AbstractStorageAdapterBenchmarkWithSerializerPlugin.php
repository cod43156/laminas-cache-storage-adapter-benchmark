<?php

declare(strict_types=1);

namespace Laminas\Cache\Storage\Adapter\Benchmark;

use Laminas\Cache\Storage\Plugin\Serializer;
use Laminas\Cache\Storage\PluginAwareInterface;
use Laminas\Cache\Storage\StorageInterface;
use Laminas\Serializer\AdapterPluginManager;
use Laminas\ServiceManager\ServiceManager;

abstract class AbstractStorageAdapterBenchmarkWithSerializerPlugin extends AbstractStorageAdapterBenchmark
{
    /**
     * @param PluginAwareInterface&StorageInterface $storage
     */
    public function __construct(PluginAwareInterface $storage)
    {
        $storage->addPlugin(new Serializer(new AdapterPluginManager(new ServiceManager())));
        parent::__construct($storage);
    }
}
