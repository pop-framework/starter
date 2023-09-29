<?php
/**
 * POP-Framework
 * Cache System Configuration
 * 
 * This file contains the configuration of the POP-Framework cache system
 * 
 * @version 1.0
 */
return [
    /**
     * Enabled cache
     * This setting is used to enable or disable the framework's caching system.
     * 
     * @var bool
     * @default true 
     */
    'enabled' => true,

    /**
     * Cache expiration
     * This parameter allows you to define the validity period of cached files
     * 
     * @var integer
     * @default 3600
     */
    'expire' => 3600,

    /**
     * Cache directory
     * This parameter specifies the location of the cache directory
     * 
     * @var string 
     * @default "./cache"
     */
    'directory' => "./cache",
];