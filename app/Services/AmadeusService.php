<?php

namespace App\Services;

use GuzzleHttp\Client;

use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\GuzzleException; // Import this for error handling

use Exception;



class AmadeusService

{

    protected $client;

    protected $token;



    public function __construct()

    {

        $this->client = new Client();

        $this->token = $this->getToken();
    }



    // Method to get the authorization token

    private function getToken()

    {

        $response = $this->client->post('https://test.api.amadeus.com/v1/security/oauth2/token', [

            'headers' => [

                'Content-Type' => 'application/x-www-form-urlencoded',

            ],

            'form_params' => [

                'grant_type' => 'client_credentials',

                'client_id' => config('services.amadeus.client_id'),

                'client_secret' => config('services.amadeus.client_secret'),

            ],

        ]);



        $data = json_decode($response->getBody(), true);

        return $data['access_token'];
    }

    public function getHotelOffers($cityCode, $checkInDate, $checkOutDate, $adults, $roomQuantity)
    {
        try {
            //dd($roomQuantity);
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->token,
            ])->get('https://test.api.amadeus.com/v3/shopping/hotel-offers', [
                'cityCode' => $cityCode,
                'checkInDate' => $checkInDate,
                'checkOutDate' => $checkOutDate,
                'adults' => $adults,
                'roomQuantity' => $roomQuantity,
            ]);


            if ($response->failed()) {
                $errorData = $response->json();
                dd($errorData);
            }

            //dd($response->json());

            return $response->json();
        } catch (GuzzleException $exception) {
            \Log::error('Guzzle Exception: ' . $exception->getMessage());
            return null;
        } catch (Exception $e) {
            \Log::error('General Exception: ' . $e->getMessage());
            return null;
        }
    }

    // Method to search for flights

    public function searchFlights($origin, $destination, $departureDate, $adults)

    {

        //dd($adults);

        $url = 'https://test.api.amadeus.com/v2/shopping/flight-offers'; // Ensure correct version

        $access_token = $this->token;

        $data = [

            'originLocationCode' => $origin,

            'destinationLocationCode' => $destination,

            'departureDate' => $departureDate,

            'adults' => $adults,

            'max' => 30,
            'currencyCode' => 'INR',

        ];



        $query = http_build_query($data);

        $url .= '?' . $query;



        try {



            $response = $this->client->get($url, [

                'headers' => [

                    'Accept' => 'application/json',

                    'Authorization' => 'Bearer ' . $access_token,

                ],

            ]);
            // Return response body as an array

            return json_decode($response->getBody(), true); // Decode to an array for easier handling

        } catch (GuzzleException $exception) {

            // Log the error for debugging

            \Log::error('Guzzle Exception: ' . $exception->getMessage());

            return null; // Return null in case of error

        } catch (Exception $e) {

            \Log::error('General Exception: ' . $e->getMessage());

            return null;
        }
    }

    public function getReferenceDataHotel(array $params)

    {

        $keyword = $params['keyword'];

        $url = 'https://test.api.amadeus.com/v1/reference-data/locations/hotels/by-city'; // API URL

        $access_token = $this->token;

        $data = [

            'cityCode' => $keyword,
        ];



        $query = http_build_query($data);

        $url .= '?' . $query;

        //dd($url);

        try {

            // Make the GET request to the Amadeus API

            $response = $this->client->get($url, [

                'headers' => [

                    'Accept' => 'application/json',

                    'Authorization' => 'Bearer ' . $access_token,

                ],

            ]);

            return json_decode($response->getBody(), true);
        } catch (ClientException $e) {

            \Log::error('Client Exception: ' . $e->getMessage());

            return ['error' => 'Client error while fetching locations'];
        } catch (GuzzleException $e) {



            \Log::error('Guzzle Exception: ' . $e->getMessage());

            return ['error' => 'Error while fetching locations'];
        } catch (Exception $e) {



            \Log::error('General Exception: ' . $e->getMessage());

            return ['error' => 'General error occurred'];
        }
    }

    public function getReferenceDataLocations(array $params)

    {

        $subType = $params['subType'];

        $keyword = $params['keyword'];



        $url = 'https://test.api.amadeus.com/v1/reference-data/locations'; // API URL

        $access_token = $this->token;



        $data = [

            'subType' => $subType,

            'keyword' => $keyword,

        ];



        $query = http_build_query($data);

        $url .= '?' . $query;



        try {

            // Make the GET request to the Amadeus API

            $response = $this->client->get($url, [

                'headers' => [

                    'Accept' => 'application/json',

                    'Authorization' => 'Bearer ' . $access_token,

                ],

            ]);



            return json_decode($response->getBody(), true);
        } catch (ClientException $e) {



            \Log::error('Client Exception: ' . $e->getMessage());

            return ['error' => 'Client error while fetching locations'];
        } catch (GuzzleException $e) {



            \Log::error('Guzzle Exception: ' . $e->getMessage());

            return ['error' => 'Error while fetching locations'];
        } catch (Exception $e) {



            \Log::error('General Exception: ' . $e->getMessage());

            return ['error' => 'General error occurred'];
        }
    }
}
