<?php
/**
 * This file contains the autoloader class for the ListKingdomApi PHP-SDK.
 *
 * @author riantoastono <riantoastono@gmail.com>
 * @link https://github.com/riantoastono/listkingdom

 */
 
 
/**
 * The ListKingdomApi Autoloader class.
 * 
 * From within a Yii Application, you would load this as:
 * 
 * <pre>
 * require_once(Yii::getPathOfAlias('application.vendors.ListKingdomApi.Autoloader').'.php');
 * Yii::registerAutoloader(array('ListKingdomApi_Autoloader', 'autoloader'), true);
 * </pre>
 * 
 * Alternatively you can:
 * <pre>
 * require_once('Path/To/ListKingdomApi/Autoloader.php');
 * ListKingdomApi_Autoloader::register();
 * </pre>
 * 
 * @author riantoastono <riantoastono@gmail.com>
 * @package ListKingdomApi
 * @since 1.0
 */
class ListKingdomApi_Autoloader
{
    /**
     * The registrable autoloader
     * 
     * @param string $class
     */
    public static function autoloader($class)
    {
        if (strpos($class, 'ListKingdomApi') === 0) {
            $className = str_replace('_', '/', $class);
            $className = substr($className, 12);
            
            if (is_file($classFile = dirname(__FILE__) . '/'. $className.'.php')) {
                require_once($classFile);
            }
        }
    }
    
    /**
     * Registers the ListKingdomApi_Autoloader::autoloader()
     */
    public static function register()
    {
        spl_autoload_register(array('ListKingdomApi_Autoloader', 'autoloader'));
    }
}