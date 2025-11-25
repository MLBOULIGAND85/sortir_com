<?php

namespace Symfony\Config\MobileDetect\Redirect;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class FullConfig 
{
    private $isEnabled;
    private $host;
    private $statusCode;
    private $action;
    private $_usedProperties = [];

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function isEnabled($value): static
    {
        $this->_usedProperties['isEnabled'] = true;
        $this->isEnabled = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): static
    {
        $this->_usedProperties['host'] = true;
        $this->host = $value;

        return $this;
    }

    /**
     * @default 302
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function statusCode($value): static
    {
        $this->_usedProperties['statusCode'] = true;
        $this->statusCode = $value;

        return $this;
    }

    /**
     * @default 'redirect'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function action($value): static
    {
        $this->_usedProperties['action'] = true;
        $this->action = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('is_enabled', $value)) {
            $this->_usedProperties['isEnabled'] = true;
            $this->isEnabled = $value['is_enabled'];
            unset($value['is_enabled']);
        }

        if (array_key_exists('host', $value)) {
            $this->_usedProperties['host'] = true;
            $this->host = $value['host'];
            unset($value['host']);
        }

        if (array_key_exists('status_code', $value)) {
            $this->_usedProperties['statusCode'] = true;
            $this->statusCode = $value['status_code'];
            unset($value['status_code']);
        }

        if (array_key_exists('action', $value)) {
            $this->_usedProperties['action'] = true;
            $this->action = $value['action'];
            unset($value['action']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['isEnabled'])) {
            $output['is_enabled'] = $this->isEnabled;
        }
        if (isset($this->_usedProperties['host'])) {
            $output['host'] = $this->host;
        }
        if (isset($this->_usedProperties['statusCode'])) {
            $output['status_code'] = $this->statusCode;
        }
        if (isset($this->_usedProperties['action'])) {
            $output['action'] = $this->action;
        }

        return $output;
    }

}
