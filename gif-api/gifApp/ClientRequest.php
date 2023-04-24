<?php

namespace gifApp;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ClientRequest
{
    private const BASE_URI = 'http://api.giphy.com/v1/gifs/';
    private array $searchResults;
    private object $response;

    public function __construct($searchPhrase, $resultLimit)
    {
        $API_KEY = $_ENV['API_KEY'];
        $client = new Client(['base_uri' => self::BASE_URI]);

        try {
            $this->response = $client->request('GET',
                "search?q=$searchPhrase&api_key=$API_KEY&limit=$resultLimit");

        } catch
        (GuzzleException $e) {
        }

        $this->searchResults = json_decode($this->response->getBody(), true)['data'];
    }

    public function getGifResource(): array
    {
        return $this->searchResults;
    }
}

