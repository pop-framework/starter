<?php
/**
 * POP-Framework
 * Database Configuration
 * 
 * This file contains the configuration of database connections
 * 
 * @version 1.0
 * 
 * @param string name         Connection name
 * @param string driver       Database driver
 * @param string charset      Connection charset
 * @param string host         Database host
 * @param int    port         Database port
 * @param string user         Database user name
 * @param string pass         Database user password
 * @param string schema       Database schema
 * @param string table_prefix Database table prefix
 */
return [
    [
        'name'         => "main",
        'driver'       => "mysql",
        'charset'      => "utf8mb4",
        'host'         => "127.0.0.1",
        'port'         => 3306,
        'user'         => "",
        'pass'         => "",
        'schema'       => "",
        'table_prefix' => "",
    ],
];