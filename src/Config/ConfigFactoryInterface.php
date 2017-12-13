<?php
/**

 * 
 * @Date: 2017/6/30 23:22
 */

namespace Kerisy\Config;


interface ConfigFactoryInterface
{
    /**
     * Create config instance.
     *
     * @param string $configPath
     * @param string $configGroup
     * @param string $filetype
     * @param string $environment
     * @param string $language
     * @return ConfigInterface
     */
    public function createConfig(string $configPath = '/', string $configGroup = 'config', string $filetype = 'php',
                                 string $environment = '', string $language = ''): ConfigInterface;
}