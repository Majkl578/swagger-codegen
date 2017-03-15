<?php
/**
 * UserApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use Http\Client\Exception;
use Http\Client\HttpClient;
use Swagger\Client\ApiException;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * UserApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserApi
{
    /**
     * @var HttpClient
     */
    protected $client;

    /**
     * @var ObjectSerializer
     */
    protected $serializer;

    /**
     * @param HttpClient $client
     */
    public function __construct(HttpClient $client, HeaderSelector $selector = null)
    {
        $this->client = $client;
        $this->serializer = new ObjectSerializer();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * Operation createUser
     *
     * Create user
     *
     * @param \Swagger\Client\Model\User $body Created user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createUser($body)
    {
        $this->createUserWithHttpInfo($body);
        
    }

    /**
     * Operation createUserWithHttpInfo
     *
     * Create user
     *
     * @param \Swagger\Client\Model\User $body Created user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUserWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUser');
        }

        $resourcePath = substr('/user', 1);
        $formParams = [];
        $queryParams = [];
        $httpBody= '';

        $headers = $this->headerSelector->selectHeaders(
            ['application/xml', 'application/json'],
            []
        );




        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
/**
*/

        $query = http_build_query($queryParams);

        try {
            $request = new Request(
                'POST',
                Uri::composeComponents('', '', $resourcePath, $query, ''),
                $headers,
                $httpBody
            );
            $response = $this->client->sendRequest($request);
            return [null, $response->getStatusCode(), []];
        } catch (Exception $exception) {
            throw new ApiException($exception->getMessage(), null, $exception);
        }
/**
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
*/
    }
    /**
     * Operation createUsersWithArrayInput
     *
     * Creates list of users with given input array
     *
     * @param \Swagger\Client\Model\User[] $body List of user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createUsersWithArrayInput($body)
    {
        $this->createUsersWithArrayInputWithHttpInfo($body);
        
    }

    /**
     * Operation createUsersWithArrayInputWithHttpInfo
     *
     * Creates list of users with given input array
     *
     * @param \Swagger\Client\Model\User[] $body List of user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUsersWithArrayInputWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUsersWithArrayInput');
        }

        $resourcePath = substr('/user/createWithArray', 1);
        $formParams = [];
        $queryParams = [];
        $httpBody= '';

        $headers = $this->headerSelector->selectHeaders(
            ['application/xml', 'application/json'],
            []
        );




        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
/**
*/

        $query = http_build_query($queryParams);

        try {
            $request = new Request(
                'POST',
                Uri::composeComponents('', '', $resourcePath, $query, ''),
                $headers,
                $httpBody
            );
            $response = $this->client->sendRequest($request);
            return [null, $response->getStatusCode(), []];
        } catch (Exception $exception) {
            throw new ApiException($exception->getMessage(), null, $exception);
        }
/**
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user/createWithArray'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
*/
    }
    /**
     * Operation createUsersWithListInput
     *
     * Creates list of users with given input array
     *
     * @param \Swagger\Client\Model\User[] $body List of user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function createUsersWithListInput($body)
    {
        $this->createUsersWithListInputWithHttpInfo($body);
        
    }

    /**
     * Operation createUsersWithListInputWithHttpInfo
     *
     * Creates list of users with given input array
     *
     * @param \Swagger\Client\Model\User[] $body List of user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUsersWithListInputWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUsersWithListInput');
        }

        $resourcePath = substr('/user/createWithList', 1);
        $formParams = [];
        $queryParams = [];
        $httpBody= '';

        $headers = $this->headerSelector->selectHeaders(
            ['application/xml', 'application/json'],
            []
        );




        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
/**
*/

        $query = http_build_query($queryParams);

        try {
            $request = new Request(
                'POST',
                Uri::composeComponents('', '', $resourcePath, $query, ''),
                $headers,
                $httpBody
            );
            $response = $this->client->sendRequest($request);
            return [null, $response->getStatusCode(), []];
        } catch (Exception $exception) {
            throw new ApiException($exception->getMessage(), null, $exception);
        }
/**
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user/createWithList'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
*/
    }
    /**
     * Operation deleteUser
     *
     * Delete user
     *
     * @param string $username The name that needs to be deleted (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteUser($username)
    {
        $this->deleteUserWithHttpInfo($username);
        
    }

    /**
     * Operation deleteUserWithHttpInfo
     *
     * Delete user
     *
     * @param string $username The name that needs to be deleted (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteUserWithHttpInfo($username)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling deleteUser');
        }

        $resourcePath = substr('/user/{username}', 1);
        $formParams = [];
        $queryParams = [];
        $httpBody= '';

        $headers = $this->headerSelector->selectHeaders(
            ['application/xml', 'application/json'],
            []
        );



        // path params
        if ($username !== null) {
            $resourcePath = str_replace('{' . 'username' . '}', $this->serializer->toPathValue($username), $resourcePath);
        }

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
/**
*/

        $query = http_build_query($queryParams);

        try {
            $request = new Request(
                'DELETE',
                Uri::composeComponents('', '', $resourcePath, $query, ''),
                $headers,
                $httpBody
            );
            $response = $this->client->sendRequest($request);
            return [null, $response->getStatusCode(), []];
        } catch (Exception $exception) {
            throw new ApiException($exception->getMessage(), null, $exception);
        }
/**
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user/{username}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
*/
    }
    /**
     * Operation getUserByName
     *
     * Get user by user name
     *
     * @param string $username The name that needs to be fetched. Use user1 for testing. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\User
     */
    public function getUserByName($username)
    {
        list($response) = $this->getUserByNameWithHttpInfo($username);
        return $response;
    }

    /**
     * Operation getUserByNameWithHttpInfo
     *
     * Get user by user name
     *
     * @param string $username The name that needs to be fetched. Use user1 for testing. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\User, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserByNameWithHttpInfo($username)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling getUserByName');
        }

        $resourcePath = substr('/user/{username}', 1);
        $formParams = [];
        $queryParams = [];
        $httpBody= '';

        $headers = $this->headerSelector->selectHeaders(
            ['application/xml', 'application/json'],
            []
        );



        // path params
        if ($username !== null) {
            $resourcePath = str_replace('{' . 'username' . '}', $this->serializer->toPathValue($username), $resourcePath);
        }

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
/**
*/

        $query = http_build_query($queryParams);

        try {
            $request = new Request(
                'GET',
                Uri::composeComponents('', '', $resourcePath, $query, ''),
                $headers,
                $httpBody
            );
            $response = $this->client->sendRequest($request);
            $content = json_decode($response->getBody()->getContents());
            return [
                ObjectSerializer::deserialize($content, '\Swagger\Client\Model\User', []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (Exception $exception) {
            throw new ApiException($exception->getMessage(), null, $exception);
        }
/**
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\User',
                '/user/{username}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\User', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\User', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
*/
    }
    /**
     * Operation loginUser
     *
     * Logs user into the system
     *
     * @param string $username The user name for login (required)
     * @param string $password The password for login in clear text (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function loginUser($username, $password)
    {
        list($response) = $this->loginUserWithHttpInfo($username, $password);
        return $response;
    }

    /**
     * Operation loginUserWithHttpInfo
     *
     * Logs user into the system
     *
     * @param string $username The user name for login (required)
     * @param string $password The password for login in clear text (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function loginUserWithHttpInfo($username, $password)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling loginUser');
        }
        // verify the required parameter 'password' is set
        if ($password === null) {
            throw new \InvalidArgumentException('Missing the required parameter $password when calling loginUser');
        }

        $resourcePath = substr('/user/login', 1);
        $formParams = [];
        $queryParams = [];
        $httpBody= '';

        $headers = $this->headerSelector->selectHeaders(
            ['application/xml', 'application/json'],
            []
        );


        // query params
        if ($username !== null) {
            $queryParams['username'] = $this->serializer->toQueryValue($username);
        }
        // query params
        if ($password !== null) {
            $queryParams['password'] = $this->serializer->toQueryValue($password);
        }


        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
/**
*/

        $query = http_build_query($queryParams);

        try {
            $request = new Request(
                'GET',
                Uri::composeComponents('', '', $resourcePath, $query, ''),
                $headers,
                $httpBody
            );
            $response = $this->client->sendRequest($request);
            $content = json_decode($response->getBody()->getContents());
            return [
                ObjectSerializer::deserialize($content, 'string', []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (Exception $exception) {
            throw new ApiException($exception->getMessage(), null, $exception);
        }
/**
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/user/login'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
*/
    }
    /**
     * Operation logoutUser
     *
     * Logs out current logged in user session
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function logoutUser()
    {
        $this->logoutUserWithHttpInfo();
        
    }

    /**
     * Operation logoutUserWithHttpInfo
     *
     * Logs out current logged in user session
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function logoutUserWithHttpInfo()
    {

        $resourcePath = substr('/user/logout', 1);
        $formParams = [];
        $queryParams = [];
        $httpBody= '';

        $headers = $this->headerSelector->selectHeaders(
            ['application/xml', 'application/json'],
            []
        );




        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
/**
*/

        $query = http_build_query($queryParams);

        try {
            $request = new Request(
                'GET',
                Uri::composeComponents('', '', $resourcePath, $query, ''),
                $headers,
                $httpBody
            );
            $response = $this->client->sendRequest($request);
            return [null, $response->getStatusCode(), []];
        } catch (Exception $exception) {
            throw new ApiException($exception->getMessage(), null, $exception);
        }
/**
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user/logout'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
*/
    }
    /**
     * Operation updateUser
     *
     * Updated user
     *
     * @param string $username name that need to be deleted (required)
     * @param \Swagger\Client\Model\User $body Updated user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateUser($username, $body)
    {
        $this->updateUserWithHttpInfo($username, $body);
        
    }

    /**
     * Operation updateUserWithHttpInfo
     *
     * Updated user
     *
     * @param string $username name that need to be deleted (required)
     * @param \Swagger\Client\Model\User $body Updated user object (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateUserWithHttpInfo($username, $body)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling updateUser');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateUser');
        }

        $resourcePath = substr('/user/{username}', 1);
        $formParams = [];
        $queryParams = [];
        $httpBody= '';

        $headers = $this->headerSelector->selectHeaders(
            ['application/xml', 'application/json'],
            []
        );



        // path params
        if ($username !== null) {
            $resourcePath = str_replace('{' . 'username' . '}', $this->serializer->toPathValue($username), $resourcePath);
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
/**
*/

        $query = http_build_query($queryParams);

        try {
            $request = new Request(
                'PUT',
                Uri::composeComponents('', '', $resourcePath, $query, ''),
                $headers,
                $httpBody
            );
            $response = $this->client->sendRequest($request);
            return [null, $response->getStatusCode(), []];
        } catch (Exception $exception) {
            throw new ApiException($exception->getMessage(), null, $exception);
        }
/**
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user/{username}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
*/
    }
}
