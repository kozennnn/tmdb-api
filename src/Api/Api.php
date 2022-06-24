<?php

namespace Kozennnn\TmdbAPI\Api;

use Kozennnn\TmdbAPI\TmdbClient;

abstract class Api
{

    protected $client;

    /**
     * Api constructor.
     * @param TmdbClient $client
     */

    public function __construct(TmdbClient $client)
    {

        $this->client = $client;

    }

    /**
     * Get method
     *
     * @param string $path
     * @param array $parameters
     * @return array
     */

    public function get(string $path, array $parameters = []): array {
        echo TmdbClient::API_URL . $path . "?api_key=" . $this->client->getApiKey() . "&" . http_build_query($parameters);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, TmdbClient::API_URL . $path . "?api_key=" . $this->client->getApiKey() . "&" . http_build_query($parameters));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $data = curl_exec($ch);
        echo $data;
        curl_close($ch);
        return json_decode($data, true);
    }

    /**
     * Return the TMDBClient
     *
     * @return TmdbClient
     */

    public function getClient(): TmdbClient {
        return $this->client;
    }

}