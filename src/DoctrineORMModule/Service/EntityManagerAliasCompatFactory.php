<?php

namespace DoctrineORMModule\Service;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\FactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;

/**
 * Factory that provides the `Doctrine\ORM\EntityManager` alias for `doctrine.entitymanager.orm_default`
 */
class EntityManagerAliasCompatFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     *
     * @return \Doctrine\ORM\EntityManager
     *
     * @deprecated this method was introduced to allow aliasing of service `Doctrine\ORM\EntityManager`
     *             from `doctrine.entitymanager.orm_default`
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return $container->get('doctrine.entitymanager.orm_default');
    }

    /**
     * {@inheritDoc}
     *
     * @return \Doctrine\ORM\EntityManager
     *
     * @deprecated this method was introduced to allow aliasing of service `Doctrine\ORM\EntityManager`
     *             from `doctrine.entitymanager.orm_default`
     */
    public function createService(ServiceLocatorInterface $container)
    {
        return $this($container, \Doctrine\ORM\EntityManager::class);
    }
}
