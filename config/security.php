<?php 
/**
 * POP-Framework
 * Security configuration
 * 
 * This file contains the security settings of the Pop-Framework
 * 
 * @version 1.0
 */
return [
	/**
     * The name of the security table
     * 
     * @var string
     * @default "users"
     */
    'table' => "users",

	/**
     * The primary key of the security table
     * 
     * @var string
     * @default "id"
     */
    'property_id' => 'id',

	/**
     * The name of the property username
     * 
     * @var string
     * @default "username"
     */
    'property_username' => 'username',

	/**
     * The name of the property email
     * 
     * @var string
     * @default "email"
     */
    'property_email' => 'email',

	/**
     * The name of the property password
     * 
     * @var string
     * @default "password"
     */
    'property_password' => 'password',

	/**
     * The name of the property roles
     * 
     * @var string
     * @default "roles"
     */
    'property_roles' => 'roles',

	/**
     * The login route
     * 
     * @var string
     * @default "login"
     */
    'route_login' => 'login',

	/**
     * The logout route
     * 
     * @var string
     * @default "logout"
     */
    'route_logout' => 'logout',
];