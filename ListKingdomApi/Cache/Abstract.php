<?php
/**
 * This file contains the base class for implementing caching in the ListKingdomApi PHP-SDK.
 * 
 * Each class extending this one needs to implement the abstract methods.
 * 
 * @author riantoastono <riantoastono@gmail.com>
 * @link https://github.com/riantoastono/listkingdom

 */
 
 
/**
 * ListKingdomApi_Cache_Abstract is the base class that all the caching classes should extend.
 * 
 * @author riantoastono <riantoastono@gmail.com>
 * @package ListKingdomApi
 * @subpackage Cache
 * @since 1.0
 */
abstract class ListKingdomApi_Cache_Abstract extends ListKingdomApi_Base
{
    /**
     * @var array keeps a history of loaded keys for easier and faster reference
     */
    protected $_loaded = array();
    
    /**
     * Set data into the cache
     * 
     * @param string $key
     * @param mixed $value
     * @return bool
     */
    abstract public function set($key, $value);
    
    /**
     * Get data from the cache
     * 
     * @param string $key
     * @return mixed
     */
    abstract public function get($key);
    
    /**
     * Delete data from cache
     * 
     * @param string $key
     * @return bool
     */
    abstract public function delete($key);
    
    /**
     * Delete all data from cache
     * 
     * @return bool
     */
    abstract public function flush();
}