<?php
/**
 * This file contains the ListKingdomApi_Http_Client class used in the ListKingdomApi PHP-SDK.
 * 
 * @author riantoastono <riantoastono@gmail.com>
 * @link https://github.com/riantoastono/listkingdom

 */
 
 
/**
 * ListKingdomApi_Http_Client is the http client interface used to make the remote requests and receive the responses.
 * 
 * @author riantoastono <riantoastono@gmail.com>
 * @package ListKingdomApi
 * @subpackage Http
 * @since 1.0
 */
class ListKingdomApi_Http_Client extends ListKingdomApi_Base
{
    /**
     * Marker for GET requests.
     */
    const METHOD_GET     = 'GET';
    
    /**
     * Marker for POST requests.
     */
    const METHOD_POST    = 'POST';
    
    /**
     * Marker for PUT requests.
     */
    const METHOD_PUT     = 'PUT';
    
    /**
     * Marker for DELETE requests.
     */
    const METHOD_DELETE = 'DELETE';
    
    /**
     * Marker for the client version.
     */
    const CLIENT_VERSION = '1.0';

    /**
     * @var ListKingdomApi_Params the GET params sent in the request.
     */
    public $paramsGet = array();
    
    /**
     * @var ListKingdomApi_Params the POST params sent in the request.
     */
    public $paramsPost = array();
    
    /**
     * @var ListKingdomApi_Params the PUT params sent in the request.
     */
    public $paramsPut = array();
    
    /**
     * @var ListKingdomApi_Params the DELETE params sent in the request.
     */
    public $paramsDelete = array();
    
    /**
     * @var ListKingdomApi_Params the headers sent in the request.
     */
    public $headers = array();

    /**
     * @var string the url where the remote calls will be made.
     */
    public $url;

    /**
     * @var int the default timeout for request.
     */
    public $timeout = 30;
    
    /**
     * @var bool whether to sign the request.
     */
    public $signRequest = true;
    
    /**
     * @var bool whether to get the response headers.
     */
    public $getResponseHeaders = false;
    
    /**
     * @var bool whether to cache the request response.
     */
    public $enableCache = false;
    
    /**
     * @var string the method used in the request.
     */
    public $method = self::METHOD_GET;

    /**
     * Constructor.
     * 
     * @param mixed $options
     */
    public function __construct(array $options = array())
    {
        $this->populateFromArray($options);
        
        foreach (array('paramsGet', 'paramsPost', 'paramsPut', 'paramsDelete', 'headers') as $param) {
            if (!($this->$param instanceof ListKingdomApi_Params)) {
                $this->$param = new ListKingdomApi_Params($this->$param);
            }
        }
    }

    /**
     * Whether the request method is a GET method.
     * 
     * @return bool
     */
    public function getIsGetMethod() 
    {
        return strtoupper($this->method) === self::METHOD_GET;
    }
    
    /**
     * Whether the request method is a POST method.
     * 
     * @return bool
     */
    public function getIsPostMethod() 
    {
        return strtoupper($this->method) === self::METHOD_POST;
    }
    
    /**
     * Whether the request method is a PUT method.
     * 
     * @return bool
     */
    public function getIsPutMethod() 
    {
        return strtoupper($this->method) === self::METHOD_PUT;
    }
    
    /**
     * Whether the request method is a DELETE method.
     * 
     * @return bool
     */
    public function getIsDeleteMethod() 
    {
        return strtoupper($this->method) === self::METHOD_DELETE;
    }
    
    /**
     * Makes the request to the remote host.
     * 
     * @return ListKingdomApi_Http_Response
     */
    public function request()
    {
        $request = new ListKingdomApi_Http_Request($this);
        return $response = $request->send();
    }
}