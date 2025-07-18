<?php
/**
 * OAuthAuthCodeApi
 * PHP version 5
 *
 * @category Class
 * @package  UPS\OAuthAuthCode
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OAuth Authorization Code API
 *
 * The UPS OAuth Authorization Code API helps integrate UPS services into your business application for providing the service your application grants your customers. For example, you can create UPS shipping labels with shipping rates for merchants from within your application. Since your application will not have access to your customer's UPS login credentials, the OAuth authorization code flow is used to let your customer use their UPS credentials, within your application, in a simple and secure way.  The PKCE-enhanced Authorization Code Flow introduces a secret created by the calling application that can be verified by the authorization server; this secret is called the Code Verifier. Additionally, the calling app creates a transform value of the Code Verifier called the Code Challenge  and sends this value over HTTPS to retrieve an Authorization Code. This way, a malicious attacker can only intercept the Authorization Code, and they cannot exchange it for a token without the Code Verifier.  Key Business Values:   - **Enhanced Transaction Security**: The OAuth Authorization Code flow is more secure and reliable since the access token and the refresh token are never exposed in the browser's URL, thus reducing the risk of leakage or theft.   - **Operational Efficiency**: With the ability to obtain a refresh token when the token expires, your application can maintain a long-term and uninterrupted access to the protected resources, without requiring the user to re-authenticate or re-login.  Overview of steps in OAuth Authorization Code flow:  1. When user selects Login, the client application redirects to the authorization server's /authorize endpoint. 2. The Authorization Server authenticates the user by asking for their login credentials, and after successful login, the authorization server responds back to the application with an authorization code contained within a redirection URI. 3. The application then sends the authorization code and the redirection URI to the authorization server's /oauth/token endpoint. 4. The authorization server's /token endpoint verifies the authorization code and the application's client ID contained in the redirect URI, and responds with a with an access token, as well as a refresh token. 5. The Client application uses the access token to request information from an UPS API.  Overview of steps in OAuth Authorization Code PKCE flow: 1. When user selects Login, the client application redirects to the authorization server's /authorize endpoint with Code Challenge   - **Note:** Prior to redirecting to the authorization server, the application generates and **code_challenge** and **code_verifier** that are related in this way: code_challenge = BASE64URL-ENCODE(SHA256(ASCII(code_verifier))) 2. The Authorization Server authenticates the user by asking for their login credentials, and after successful login, the authorization server responds back to the application with an authorization code contained within a redirection URI. 4. The application then sends the authorization code , code_verifer and the redirection URI to the authorization server's /oauth/token endpoint.   - **Note:** When utlizing the PKCE flow, the BASIC Authorization header should **not** be included, just the **client_id** parameter in the body. 5. The authorization server's /token endpoint verifies the authorization code, code_verifier and the application's client ID contained in the redirect URI, and responds with a with an access token, as well as a refresh token. 6. The Client application uses the access token to request information from an UPS API.  - <a href=\"https://developer.ups.com/api/reference/oauth/authorization-code\" target=\"_blank\" rel=\"noopener\">Setting-up OAuth Authorization Code flow</a> - <a href=\"https://github.com/UPS-API/UPS-SDKs\" target=\"_blank\" rel=\"noopener noreferrer\">Accelerate API Integration with UPS SDKs</a></br>  </br><p>Try out UPS APIs with example requests using Postman. Explore API documentation and sample applications through GitHub.</p> <a href=\"https://god.gw.postman.com/run-collection/29542085-f15285f0-2ffd-4895-b9e4-fcf496f8059a?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-f15285f0-2ffd-4895-b9e4-fcf496f8059a%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"></a> <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://www.ups.com/assets/resources/webcontent/images/gitHubButton.svg\" alt=\"Open in GitHub \" style=\"width: 128px; height: 32px;\"> </a>
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.71
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\OAuthAuthCode\Request;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use UPS\OAuthAuthCode\ApiException;
use UPS\OAuthAuthCode\Configuration;
use UPS\OAuthAuthCode\HeaderSelector;
use UPS\OAuthAuthCode\ObjectSerializer;

/**
 * OAuthAuthCodeApi Class Doc Comment
 *
 * @category Class
 * @package  UPS\OAuthAuthCode
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OAuthAuthCodeApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation authorizeClient
     *
     * Authorize Client
     *
     * @param  string $client_id The public identifier for your application, obtained when you, the developer first registered the application. (required)
     * @param  string $redirect_uri URL that tells the authorization server where to send the user back to after they approve the request. (required)
     * @param  string $response_type Valid Values: code (required)
     * @param  string $state A random string generated by the application and included in the request to prevent CSRF attacks. The application checks that the same value is returned after the user authorizes the app. (optional)
     * @param  string $scope One or more space-separated strings indicating which permissions the application is requesting. (optional)
     * @param  string $code_challenge Base64 URL-Encoded SHA256 value of Code Verifier that can be used to verify the code_verifier in the /token step. (optional)
     *
     * @throws \UPS\OAuthAuthCode\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function authorizeClient($client_id, $redirect_uri, $response_type, $state = null, $scope = null, $code_challenge = null)
    {
        $this->authorizeClientWithHttpInfo($client_id, $redirect_uri, $response_type, $state, $scope, $code_challenge);
    }

    /**
     * Operation authorizeClientWithHttpInfo
     *
     * Authorize Client
     *
     * @param  string $client_id The public identifier for your application, obtained when you, the developer first registered the application. (required)
     * @param  string $redirect_uri URL that tells the authorization server where to send the user back to after they approve the request. (required)
     * @param  string $response_type Valid Values: code (required)
     * @param  string $state A random string generated by the application and included in the request to prevent CSRF attacks. The application checks that the same value is returned after the user authorizes the app. (optional)
     * @param  string $scope One or more space-separated strings indicating which permissions the application is requesting. (optional)
     * @param  string $code_challenge Base64 URL-Encoded SHA256 value of Code Verifier that can be used to verify the code_verifier in the /token step. (optional)
     *
     * @throws \UPS\OAuthAuthCode\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function authorizeClientWithHttpInfo($client_id, $redirect_uri, $response_type, $state = null, $scope = null, $code_challenge = null)
    {
        $returnType = '';
        $request = $this->authorizeClientRequest($client_id, $redirect_uri, $response_type, $state, $scope, $code_challenge);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation authorizeClientAsync
     *
     * Authorize Client
     *
     * @param  string $client_id The public identifier for your application, obtained when you, the developer first registered the application. (required)
     * @param  string $redirect_uri URL that tells the authorization server where to send the user back to after they approve the request. (required)
     * @param  string $response_type Valid Values: code (required)
     * @param  string $state A random string generated by the application and included in the request to prevent CSRF attacks. The application checks that the same value is returned after the user authorizes the app. (optional)
     * @param  string $scope One or more space-separated strings indicating which permissions the application is requesting. (optional)
     * @param  string $code_challenge Base64 URL-Encoded SHA256 value of Code Verifier that can be used to verify the code_verifier in the /token step. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authorizeClientAsync($client_id, $redirect_uri, $response_type, $state = null, $scope = null, $code_challenge = null)
    {
        return $this->authorizeClientAsyncWithHttpInfo($client_id, $redirect_uri, $response_type, $state, $scope, $code_challenge)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation authorizeClientAsyncWithHttpInfo
     *
     * Authorize Client
     *
     * @param  string $client_id The public identifier for your application, obtained when you, the developer first registered the application. (required)
     * @param  string $redirect_uri URL that tells the authorization server where to send the user back to after they approve the request. (required)
     * @param  string $response_type Valid Values: code (required)
     * @param  string $state A random string generated by the application and included in the request to prevent CSRF attacks. The application checks that the same value is returned after the user authorizes the app. (optional)
     * @param  string $scope One or more space-separated strings indicating which permissions the application is requesting. (optional)
     * @param  string $code_challenge Base64 URL-Encoded SHA256 value of Code Verifier that can be used to verify the code_verifier in the /token step. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function authorizeClientAsyncWithHttpInfo($client_id, $redirect_uri, $response_type, $state = null, $scope = null, $code_challenge = null)
    {
        $returnType = '';
        $request = $this->authorizeClientRequest($client_id, $redirect_uri, $response_type, $state, $scope, $code_challenge);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'authorizeClient'
     *
     * @param  string $client_id The public identifier for your application, obtained when you, the developer first registered the application. (required)
     * @param  string $redirect_uri URL that tells the authorization server where to send the user back to after they approve the request. (required)
     * @param  string $response_type Valid Values: code (required)
     * @param  string $state A random string generated by the application and included in the request to prevent CSRF attacks. The application checks that the same value is returned after the user authorizes the app. (optional)
     * @param  string $scope One or more space-separated strings indicating which permissions the application is requesting. (optional)
     * @param  string $code_challenge Base64 URL-Encoded SHA256 value of Code Verifier that can be used to verify the code_verifier in the /token step. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function authorizeClientRequest($client_id, $redirect_uri, $response_type, $state = null, $scope = null, $code_challenge = null)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null || (is_array($client_id) && count($client_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling authorizeClient'
            );
        }
        // verify the required parameter 'redirect_uri' is set
        if ($redirect_uri === null || (is_array($redirect_uri) && count($redirect_uri) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $redirect_uri when calling authorizeClient'
            );
        }
        // verify the required parameter 'response_type' is set
        if ($response_type === null || (is_array($response_type) && count($response_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $response_type when calling authorizeClient'
            );
        }

        $resourcePath = '/v1/oauth/authorize';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($client_id !== null) {
            $queryParams['client_id'] = ObjectSerializer::toQueryValue($client_id, null);
        }
        // query params
        if ($redirect_uri !== null) {
            $queryParams['redirect_uri'] = ObjectSerializer::toQueryValue($redirect_uri, null);
        }
        // query params
        if ($response_type !== null) {
            $queryParams['response_type'] = ObjectSerializer::toQueryValue($response_type, null);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = ObjectSerializer::toQueryValue($state, null);
        }
        // query params
        if ($scope !== null) {
            $queryParams['scope'] = ObjectSerializer::toQueryValue($scope, null);
        }
        // query params
        if ($code_challenge !== null) {
            $queryParams['code_challenge'] = ObjectSerializer::toQueryValue($code_challenge, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation generateToken
     *
     * @param  string $grant_type grant_type (optional)
     * @param  string $code code (optional)
     * @param  string $redirect_uri redirect_uri (optional)
     * @param  string $code_verifier code_verifier (optional)
     * @param  string $client_id client_id (optional)
     *
     * @throws \UPS\OAuthAuthCode\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \UPS\OAuthAuthCode\OAuthAuthCode\GenerateTokenSuccessResponse
     */
    public function generateToken($grant_type = null, $code = null, $redirect_uri = null, $code_verifier = null, $client_id = null)
    {
        list($response) = $this->generateTokenWithHttpInfo($grant_type, $code, $redirect_uri, $code_verifier, $client_id);
        return $response;
    }

    /**
     * Operation generateTokenWithHttpInfo
     *
     * @param  string $grant_type (optional)
     * @param  string $code (optional)
     * @param  string $redirect_uri (optional)
     * @param  string $code_verifier (optional)
     * @param  string $client_id (optional)
     *
     * @throws \UPS\OAuthAuthCode\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \UPS\OAuthAuthCode\OAuthAuthCode\GenerateTokenSuccessResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function generateTokenWithHttpInfo($grant_type = null, $code = null, $redirect_uri = null, $code_verifier = null, $client_id = null)
    {
        $returnType = '\UPS\OAuthAuthCode\OAuthAuthCode\GenerateTokenSuccessResponse';
        $request = $this->generateTokenRequest($grant_type, $code, $redirect_uri, $code_verifier, $client_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\GenerateTokenSuccessResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation generateTokenAsync
     *
     * 
     *
     * @param  string $grant_type (optional)
     * @param  string $code (optional)
     * @param  string $redirect_uri (optional)
     * @param  string $code_verifier (optional)
     * @param  string $client_id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateTokenAsync($grant_type = null, $code = null, $redirect_uri = null, $code_verifier = null, $client_id = null)
    {
        return $this->generateTokenAsyncWithHttpInfo($grant_type, $code, $redirect_uri, $code_verifier, $client_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation generateTokenAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $grant_type (optional)
     * @param  string $code (optional)
     * @param  string $redirect_uri (optional)
     * @param  string $code_verifier (optional)
     * @param  string $client_id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function generateTokenAsyncWithHttpInfo($grant_type = null, $code = null, $redirect_uri = null, $code_verifier = null, $client_id = null)
    {
        $returnType = '\UPS\OAuthAuthCode\OAuthAuthCode\GenerateTokenSuccessResponse';
        $request = $this->generateTokenRequest($grant_type, $code, $redirect_uri, $code_verifier, $client_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'generateToken'
     *
     * @param  string $grant_type (optional)
     * @param  string $code (optional)
     * @param  string $redirect_uri (optional)
     * @param  string $code_verifier (optional)
     * @param  string $client_id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function generateTokenRequest($grant_type = null, $code = null, $redirect_uri = null, $code_verifier = null, $client_id = null)
    {

        $resourcePath = '/v1/oauth/token';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = ObjectSerializer::toFormValue($grant_type);
        }
        // form params
        if ($code !== null) {
            $formParams['code'] = ObjectSerializer::toFormValue($code);
        }
        // form params
        if ($redirect_uri !== null) {
            $formParams['redirect_uri'] = ObjectSerializer::toFormValue($redirect_uri);
        }
        // form params
        if ($code_verifier !== null) {
            $formParams['code_verifier'] = ObjectSerializer::toFormValue($code_verifier);
        }
        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = ObjectSerializer::toFormValue($client_id);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation refreshToken
     *
     * Refresh Token
     *
     * @param  string $grant_type grant_type (optional)
     * @param  string $refresh_token refresh_token (optional)
     *
     * @throws \UPS\OAuthAuthCode\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \UPS\OAuthAuthCode\OAuthAuthCode\RefreshTokenSuccessResponse
     */
    public function refreshToken($grant_type = null, $refresh_token = null)
    {
        list($response) = $this->refreshTokenWithHttpInfo($grant_type, $refresh_token);
        return $response;
    }

    /**
     * Operation refreshTokenWithHttpInfo
     *
     * Refresh Token
     *
     * @param  string $grant_type (optional)
     * @param  string $refresh_token (optional)
     *
     * @throws \UPS\OAuthAuthCode\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \UPS\OAuthAuthCode\OAuthAuthCode\RefreshTokenSuccessResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function refreshTokenWithHttpInfo($grant_type = null, $refresh_token = null)
    {
        $returnType = '\UPS\OAuthAuthCode\OAuthAuthCode\RefreshTokenSuccessResponse';
        $request = $this->refreshTokenRequest($grant_type, $refresh_token);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\RefreshTokenSuccessResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\OAuthAuthCode\OAuthAuthCode\TokenErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation refreshTokenAsync
     *
     * Refresh Token
     *
     * @param  string $grant_type (optional)
     * @param  string $refresh_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function refreshTokenAsync($grant_type = null, $refresh_token = null)
    {
        return $this->refreshTokenAsyncWithHttpInfo($grant_type, $refresh_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation refreshTokenAsyncWithHttpInfo
     *
     * Refresh Token
     *
     * @param  string $grant_type (optional)
     * @param  string $refresh_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function refreshTokenAsyncWithHttpInfo($grant_type = null, $refresh_token = null)
    {
        $returnType = '\UPS\OAuthAuthCode\OAuthAuthCode\RefreshTokenSuccessResponse';
        $request = $this->refreshTokenRequest($grant_type, $refresh_token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'refreshToken'
     *
     * @param  string $grant_type (optional)
     * @param  string $refresh_token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function refreshTokenRequest($grant_type = null, $refresh_token = null)
    {

        $resourcePath = '/v1/oauth/refresh';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = ObjectSerializer::toFormValue($grant_type);
        }
        // form params
        if ($refresh_token !== null) {
            $formParams['refresh_token'] = ObjectSerializer::toFormValue($refresh_token);
        }
        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
