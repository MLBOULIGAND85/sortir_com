<?php

namespace Symfony\Config\MobileDetect;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Redirect'.\DIRECTORY_SEPARATOR.'MobileConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Redirect'.\DIRECTORY_SEPARATOR.'TabletConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Redirect'.\DIRECTORY_SEPARATOR.'FullConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class RedirectConfig 
{
    private $mobile;
    private $tablet;
    private $full;
    private $detectTabletAsMobile;
    private $_usedProperties = [];

    /**
     * @default {"is_enabled":false,"host":null,"status_code":302,"action":"redirect"}
    */
    public function mobile(array $value = []): \Symfony\Config\MobileDetect\Redirect\MobileConfig
    {
        if (null === $this->mobile) {
            $this->_usedProperties['mobile'] = true;
            $this->mobile = new \Symfony\Config\MobileDetect\Redirect\MobileConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "mobile()" has already been initialized. You cannot pass values the second time you call mobile().');
        }

        return $this->mobile;
    }

    /**
     * @default {"is_enabled":false,"host":null,"status_code":302,"action":"redirect"}
    */
    public function tablet(array $value = []): \Symfony\Config\MobileDetect\Redirect\TabletConfig
    {
        if (null === $this->tablet) {
            $this->_usedProperties['tablet'] = true;
            $this->tablet = new \Symfony\Config\MobileDetect\Redirect\TabletConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "tablet()" has already been initialized. You cannot pass values the second time you call tablet().');
        }

        return $this->tablet;
    }

    /**
     * @default {"is_enabled":false,"host":null,"status_code":302,"action":"redirect"}
    */
    public function full(array $value = []): \Symfony\Config\MobileDetect\Redirect\FullConfig
    {
        if (null === $this->full) {
            $this->_usedProperties['full'] = true;
            $this->full = new \Symfony\Config\MobileDetect\Redirect\FullConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "full()" has already been initialized. You cannot pass values the second time you call full().');
        }

        return $this->full;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function detectTabletAsMobile($value): static
    {
        $this->_usedProperties['detectTabletAsMobile'] = true;
        $this->detectTabletAsMobile = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('mobile', $value)) {
            $this->_usedProperties['mobile'] = true;
            $this->mobile = new \Symfony\Config\MobileDetect\Redirect\MobileConfig($value['mobile']);
            unset($value['mobile']);
        }

        if (array_key_exists('tablet', $value)) {
            $this->_usedProperties['tablet'] = true;
            $this->tablet = new \Symfony\Config\MobileDetect\Redirect\TabletConfig($value['tablet']);
            unset($value['tablet']);
        }

        if (array_key_exists('full', $value)) {
            $this->_usedProperties['full'] = true;
            $this->full = new \Symfony\Config\MobileDetect\Redirect\FullConfig($value['full']);
            unset($value['full']);
        }

        if (array_key_exists('detect_tablet_as_mobile', $value)) {
            $this->_usedProperties['detectTabletAsMobile'] = true;
            $this->detectTabletAsMobile = $value['detect_tablet_as_mobile'];
            unset($value['detect_tablet_as_mobile']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['mobile'])) {
            $output['mobile'] = $this->mobile->toArray();
        }
        if (isset($this->_usedProperties['tablet'])) {
            $output['tablet'] = $this->tablet->toArray();
        }
        if (isset($this->_usedProperties['full'])) {
            $output['full'] = $this->full->toArray();
        }
        if (isset($this->_usedProperties['detectTabletAsMobile'])) {
            $output['detect_tablet_as_mobile'] = $this->detectTabletAsMobile;
        }

        return $output;
    }

}
