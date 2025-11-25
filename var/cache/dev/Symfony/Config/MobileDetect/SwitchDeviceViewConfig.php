<?php

namespace Symfony\Config\MobileDetect;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SwitchDeviceViewConfig 
{
    private $saveRefererPath;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function saveRefererPath($value): static
    {
        $this->_usedProperties['saveRefererPath'] = true;
        $this->saveRefererPath = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('save_referer_path', $value)) {
            $this->_usedProperties['saveRefererPath'] = true;
            $this->saveRefererPath = $value['save_referer_path'];
            unset($value['save_referer_path']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['saveRefererPath'])) {
            $output['save_referer_path'] = $this->saveRefererPath;
        }

        return $output;
    }

}
