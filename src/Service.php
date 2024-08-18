<?php

namespace ApiBrasil;

use GuzzleHttp\Exception\ClientException;

class Service extends Base
{

    public const BASE_URL = "https://gateway.apibrasil.io/api/v2/";

    public static function Server(array $data = []) {

        try {

            $base_uri = self::BASE_URL . "servers/";
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, "", $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function Auth(array $data = []) {

        try {

            $base_uri = self::BASE_URL;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
            ];

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, "", $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function Plan(String $action = '', array $data = []) {

        try {

            $base_uri = self::BASE_URL . "plans/";
            $method = $data['method'] ?? 'POST';

            if($action == "me"){
                $base_uri = self::BASE_URL . "plan/";
            }
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, "", $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }
    
    public static function Profile(array $data = []) {

        try {

            $base_uri = self::BASE_URL . "profile/";
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, "", $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function Device(String $action = '', array $data = []) {

        try {

            $base_uri = self::BASE_URL . "devices/";
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            // para criar um dispositivo é necessário informar o SecretKey
            if (isset($data['SecretKey'])) {
                $headers['SecretKey'] = $data['SecretKey'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function WhatsApp(String $action = '', array $data = []) {

        try {

            $base_uri = self::BASE_URL . "whatsapp/";
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            // para usar a classe é necessário informar o DeviceToken
            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function Vehicles(String $action = '', array $data = []) {

        try {

            $base_uri = self::BASE_URL . "vehicles/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function Correios(String $action = '', array $data = []) {

        try {

            $base_uri = self::BASE_URL . "correios/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function CNPJ(String $action = '', array $data = []) {

        try {

            $base_uri = self::BASE_URL . "dados/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];

            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function CEP(String $action = '', array $data = []) {

        try {

            $base_uri = self::BASE_URL . "cep/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];
            
            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

    public static function HoliDays(String $action = '', array $data = []) {

        try {

            $base_uri = self::BASE_URL . "holidays/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];
            
            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }
    
    public static function DDD(String $action = '', array $data = []) {

        try {

            $base_uri = self::BASE_URL . "ddd/".$action;
            $method = $data['method'] ?? 'POST';
            
            $headers = [
                "Content-Type" => "application/json",
                "Accept" => "application/json",
                "Authorization" => "Bearer ".$data['Bearer'],
            ];
            
            if (isset($data['DeviceToken'])) {
                $headers['DeviceToken'] = $data['DeviceToken'];
            }

            $body = $data['body'] ?? [];

            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);
            return $response;

        } catch (ClientException $e) {

            $response = $e->getResponse();
            return json_decode((string)($response->getBody()->getContents()));

        }

    }

}
