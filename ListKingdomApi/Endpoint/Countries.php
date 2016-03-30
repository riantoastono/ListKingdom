<?php
/**
 * This file contains the countries endpoint for ListKingdomApi PHP-SDK.
 * 
 * @author riantoastono <riantoastono@gmail.com>
 * @link https://github.com/riantoastono/listkingdom

 */
 
 
/**
 * ListKingdomApi_Endpoint_Countries handles all the API calls for handling the countries and their zones.
 * 
 * @author riantoastono <riantoastono@gmail.com>
 * @package ListKingdomApi
 * @subpackage Endpoint
 * @since 1.0
 */
class ListKingdomApi_Endpoint_Countries extends ListKingdomApi_Base
{
    /**
     * Get all available countries
     * 
     * Note, the results returned by this endpoint can be cached.
     * 
     * @param integer $page
     * @param integer $perPage
     * @return ListKingdomApi_Http_Response
     */
    public function getCountries($page = 1, $perPage = 10)
    {
        $client = new ListKingdomApi_Http_Client(array(
            'method'        => ListKingdomApi_Http_Client::METHOD_GET,
            'url'           => $this->config->getApiUrl('countries'),
            'paramsGet'     => array(
                'page'      => (int)$page, 
                'per_page'  => (int)$perPage
            ),
            'enableCache'   => true,
        ));
        
        return $response = $client->request();
    }
    
    /**
     * Get all available country zones
     * 
     * Note, the results returned by this endpoint can be cached.
     * 
     * @param integer $countryId
     * @param integer $page
     * @param integer $perPage
     * @return ListKingdomApi_Http_Response
     */
    public function getZones($countryId, $page = 1, $perPage = 10)
    {
        $client = new ListKingdomApi_Http_Client(array(
            'method'        => ListKingdomApi_Http_Client::METHOD_GET,
            'url'           => $this->config->getApiUrl(sprintf('countries/%d/zones', $countryId)),
            'paramsGet'     => array(
                'page'      => (int)$page, 
                'per_page'  => (int)$perPage
            ),
            'enableCache'   => true,
        ));
        
        return $response = $client->request();
    }
}