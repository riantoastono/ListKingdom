<?php
/**
 * This file contains the lists fields endpoint for ListKingdomApi PHP-SDK.
 * 
 * @author riantoastono <riantoastono@gmail.com>
 * @link https://github.com/riantoastono/listkingdom

 */
 
 
/**
 * ListKingdomApi_Endpoint_ListFields handles all the API calls for handling the list custom fields.
 * 
 * @author riantoastono <riantoastono@gmail.com>
 * @package ListKingdomApi
 * @subpackage Endpoint
 * @since 1.0
 */
class ListKingdomApi_Endpoint_ListFields extends ListKingdomApi_Base
{
    /**
     * Get fields from a certain mail list
     * 
     * Note, the results returned by this endpoint can be cached.
     * 
     * @param string $listUid
     * @return ListKingdomApi_Http_Response
     */
    public function getFields($listUid)
    {
        $client = new ListKingdomApi_Http_Client(array(
            'method'        => ListKingdomApi_Http_Client::METHOD_GET,
            'url'           => $this->config->getApiUrl(sprintf('lists/%s/fields', $listUid)),
            'paramsGet'     => array(),
            'enableCache'   => true,
        ));
        
        return $response = $client->request();
    }
}