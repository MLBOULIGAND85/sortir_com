<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'MobileDetect'.\DIRECTORY_SEPARATOR.'RedirectConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'MobileDetect'.\DIRECTORY_SEPARATOR.'SwitchDeviceViewConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class MobileDetectConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $redirect;
    private $switchDeviceView;
    private $cookieKey;
    private $cookiePath;
    private $cookieDomain;
    private $cookieSecure;
    private $cookieHttpOnly;
    private $cookieExpireDatetimeModifier;
    private $switchParam;
    private $_usedProperties = [];

    /**
     * @default {"mobile":{"is_enabled":false,"host":null,"status_code":302,"action":"redirect"},"tablet":{"is_enabled":false,"host":null,"status_code":302,"action":"redirect"},"full":{"is_enabled":false,"host":null,"status_code":302,"action":"redirect"},"detect_tablet_as_mobile":false}
    */
    public function redirect(array $value = []): \Symfony\Config\MobileDetect\RedirectConfig
    {
        if (null === $this->redirect) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = new \Symfony\Config\MobileDetect\RedirectConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "redirect()" has already been initialized. You cannot pass values the second time you call redirect().');
        }

        return $this->redirect;
    }

    /**
     * @default {"save_referer_path":true}
    */
    public function switchDeviceView(array $value = []): \Symfony\Config\MobileDetect\SwitchDeviceViewConfig
    {
        if (null === $this->switchDeviceView) {
            $this->_usedProperties['switchDeviceView'] = true;
            $this->switchDeviceView = new \Symfony\Config\MobileDetect\SwitchDeviceViewConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "switchDeviceView()" has already been initialized. You cannot pass values the second time you call switchDeviceView().');
        }

        return $this->switchDeviceView;
    }

    /**
     * @default 'device_view'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cookieKey($value): static
    {
        $this->_usedProperties['cookieKey'] = true;
        $this->cookieKey = $value;

        return $this;
    }

    /**
     * @default '/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cookiePath($value): static
    {
        $this->_usedProperties['cookiePath'] = true;
        $this->cookiePath = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cookieDomain($value): static
    {
        $this->_usedProperties['cookieDomain'] = true;
        $this->cookieDomain = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function cookieSecure($value): static
    {
        $this->_usedProperties['cookieSecure'] = true;
        $this->cookieSecure = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function cookieHttpOnly($value): static
    {
        $this->_usedProperties['cookieHttpOnly'] = true;
        $this->cookieHttpOnly = $value;

        return $this;
    }

    /**
     * @default '1 month'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cookieExpireDatetimeModifier($value): static
    {
        $this->_usedProperties['cookieExpireDatetimeModifier'] = true;
        $this->cookieExpireDatetimeModifier = $value;

        return $this;
    }

    /**
     * @default 'device_view'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function switchParam($value): static
    {
        $this->_usedProperties['switchParam'] = true;
        $this->switchParam = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'mobile_detect';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('redirect', $value)) {
            $this->_usedProperties['redirect'] = true;
            $this->redirect = new \Symfony\Config\MobileDetect\RedirectConfig($value['redirect']);
            unset($value['redirect']);
        }

        if (array_key_exists('switch_device_view', $value)) {
            $this->_usedProperties['switchDeviceView'] = true;
            $this->switchDeviceView = new \Symfony\Config\MobileDetect\SwitchDeviceViewConfig($value['switch_device_view']);
            unset($value['switch_device_view']);
        }

        if (array_key_exists('cookie_key', $value)) {
            $this->_usedProperties['cookieKey'] = true;
            $this->cookieKey = $value['cookie_key'];
            unset($value['cookie_key']);
        }

        if (array_key_exists('cookie_path', $value)) {
            $this->_usedProperties['cookiePath'] = true;
            $this->cookiePath = $value['cookie_path'];
            unset($value['cookie_path']);
        }

        if (array_key_exists('cookie_domain', $value)) {
            $this->_usedProperties['cookieDomain'] = true;
            $this->cookieDomain = $value['cookie_domain'];
            unset($value['cookie_domain']);
        }

        if (array_key_exists('cookie_secure', $value)) {
            $this->_usedProperties['cookieSecure'] = true;
            $this->cookieSecure = $value['cookie_secure'];
            unset($value['cookie_secure']);
        }

        if (array_key_exists('cookie_httpOnly', $value)) {
            $this->_usedProperties['cookieHttpOnly'] = true;
            $this->cookieHttpOnly = $value['cookie_httpOnly'];
            unset($value['cookie_httpOnly']);
        }

        if (array_key_exists('cookie_expire_datetime_modifier', $value)) {
            $this->_usedProperties['cookieExpireDatetimeModifier'] = true;
            $this->cookieExpireDatetimeModifier = $value['cookie_expire_datetime_modifier'];
            unset($value['cookie_expire_datetime_modifier']);
        }

        if (array_key_exists('switch_param', $value)) {
            $this->_usedProperties['switchParam'] = true;
            $this->switchParam = $value['switch_param'];
            unset($value['switch_param']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['redirect'])) {
            $output['redirect'] = $this->redirect->toArray();
        }
        if (isset($this->_usedProperties['switchDeviceView'])) {
            $output['switch_device_view'] = $this->switchDeviceView->toArray();
        }
        if (isset($this->_usedProperties['cookieKey'])) {
            $output['cookie_key'] = $this->cookieKey;
        }
        if (isset($this->_usedProperties['cookiePath'])) {
            $output['cookie_path'] = $this->cookiePath;
        }
        if (isset($this->_usedProperties['cookieDomain'])) {
            $output['cookie_domain'] = $this->cookieDomain;
        }
        if (isset($this->_usedProperties['cookieSecure'])) {
            $output['cookie_secure'] = $this->cookieSecure;
        }
        if (isset($this->_usedProperties['cookieHttpOnly'])) {
            $output['cookie_httpOnly'] = $this->cookieHttpOnly;
        }
        if (isset($this->_usedProperties['cookieExpireDatetimeModifier'])) {
            $output['cookie_expire_datetime_modifier'] = $this->cookieExpireDatetimeModifier;
        }
        if (isset($this->_usedProperties['switchParam'])) {
            $output['switch_param'] = $this->switchParam;
        }

        return $output;
    }

}
