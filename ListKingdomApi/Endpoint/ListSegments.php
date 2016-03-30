<?php
/**
 * This file contains the list segments endpoint for ListKingdomApi PHP-SDK.
 * 
 * @author riantoastono <riantoastono@gmail.com>
 * @link https://github.com/riantoastono/listkingdom

 */
 
 
/**
 * ListKingdomApi_Endpoint_ListSegments handles all the API calls for handling the list segments.
 * 
 * @author riantoastono <riantoastono@gmail.com>
 * @package ListKingdomApi
 * @subpackage Endpoint
 * @since 1.0
 */
class ListKingdomApi_Endpoint_ListSegments extends ListKingdomApi_Base
{
    /**
     * Get segments from a certain mail list
     * 
     * Note, the results returned by this endpoint can be cached.
     * 
     * @param string $listUid
     * @param integer $page
     * @param integer $perPage
     * @return ListKingdomApi_Http_Response
     */
    public function getSegments($listUid, $page = 1, $perPage = 10)
    {
        $client = new ListKingdomApi_Http_Client(array(
            'method'        => ListKingdomApi_Http_Client::METHOD_GET,
            'url'           => $this->config->getApiUrl(sprintf('lists/%s/segments', $listUid)),
            'paramsGet'     => array(
                'page'      => (int)$page, 
                'per_page'  => (int)$perPage
            ),
            'enableCache'   => true,
        ));
        
        return $response = $client->request();
    }
}