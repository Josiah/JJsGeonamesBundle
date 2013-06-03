<?php

namespace JJs\Bundle\GeonamesBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Geonames Container Extension
 *
 * @author Josiah <josiah@jjs.id.au>
 */
class JJsGeonamesExtension extends Extension
{
    /**
     * XML Namespace Url
     *
     * @var string
     */
    const NAMESPACE_URL = "http://jjs.id.au/bundles/geonames";

    /**
     * {@inheritdoc}
     * 
     * @return string
     */
    public function getNamespace()
    {
        return self::NAMESPACE_URL;
    }

    /**
     * {@inheritdoc}
     *
     * @param array            $config    An array of configuration values
     * @param ContainerBuilder $container A ContainerBuilder instance
     *
     * @throws InvalidArgumentException When provided tag is not defined in this extension
     */
    public function load(array $config, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__."/../Resources/config"));
        $loader->load('country.xml');
        $loader->load('timezone.xml');
        $loader->load('locality.xml');
    }
}