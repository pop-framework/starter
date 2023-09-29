<?php 
/**
 * POP-Framework
 * Environment Configuration
 * 
 * This file contains the configuration of the POP-Framework execution environment
 * 
 * @version 1.0
 */
return [
    /**
     * Environment
     * 
     * @var string 
     * @default auto
     * 
     * @value "auto"
     * @value "dev" Force environment to Dev mode
     * @value "prod" Force environment to Production mode
     */
    'environment' => "auto",

    /**
     * Development Domains
     * List of areas that POP-Framework should consider as development environments
     * 
     * @var string[]
     */
    'dev_domains' => [
        "::1",
        "127.0.0.1",
        "localhost",
    ],
];