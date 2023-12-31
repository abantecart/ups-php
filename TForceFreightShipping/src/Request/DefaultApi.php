<?php
/**
 * DefaultApi
 * PHP version 5
 *
 * @category Class
 * @package  UPS\TForceFreightShipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Freight Ship
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\TForceFreightShipping\Request;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use UPS\TForceFreightShipping\ApiException;
use UPS\TForceFreightShipping\Configuration;
use UPS\TForceFreightShipping\HeaderSelector;
use UPS\TForceFreightShipping\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  UPS\TForceFreightShipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DefaultApi
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
     * Operation freightShip
     *
     * TForce Freight Ship
     *
     * @param  \UPS\TForceFreightShipping\TForceFreightShipping\FREIGHTSHIPRequestWrapper $body Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (required)
     * @param  string $version When TForce Freight introduces new elements  in the response that are not associated with new  request elements, version is used. This ensures  backward compatibility. To get such elements you need to have the right  version. The value of the version is explained in  the Response element Description. Example: Itemized Charges are returned only  when the version element is present and greater  than or equal to &#x27;v1601&#x27;.  Format: YYMM &#x3D; Year and month of the release. Example: v1601 &#x3D; 2016 Januaryrelease.  Supported values: v1, v1601, v1607. Length 5 (required)
     * @param  string $reqoption Valid Values:  Ground, Air . Length 15 (required)
     *
     * @throws \UPS\TForceFreightShipping\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \UPS\TForceFreightShipping\TForceFreightShipping\FREIGHTSHIPResponseWrapper
     */
    public function freightShip($body, $trans_id, $transaction_src, $version, $reqoption)
    {
        list($response) = $this->freightShipWithHttpInfo($body, $trans_id, $transaction_src, $version, $reqoption);
        return $response;
    }

    /**
     * Operation freightShipWithHttpInfo
     *
     * TForce Freight Ship
     *
     * @param  \UPS\TForceFreightShipping\TForceFreightShipping\FREIGHTSHIPRequestWrapper $body Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (required)
     * @param  string $version When TForce Freight introduces new elements  in the response that are not associated with new  request elements, version is used. This ensures  backward compatibility. To get such elements you need to have the right  version. The value of the version is explained in  the Response element Description. Example: Itemized Charges are returned only  when the version element is present and greater  than or equal to &#x27;v1601&#x27;.  Format: YYMM &#x3D; Year and month of the release. Example: v1601 &#x3D; 2016 Januaryrelease.  Supported values: v1, v1601, v1607. Length 5 (required)
     * @param  string $reqoption Valid Values:  Ground, Air . Length 15 (required)
     *
     * @throws \UPS\TForceFreightShipping\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \UPS\TForceFreightShipping\TForceFreightShipping\FREIGHTSHIPResponseWrapper, HTTP status code, HTTP response headers (array of strings)
     */
    public function freightShipWithHttpInfo($body, $trans_id, $transaction_src, $version, $reqoption)
    {
        $returnType = '\UPS\TForceFreightShipping\TForceFreightShipping\FREIGHTSHIPResponseWrapper';
        $request = $this->freightShipRequest($body, $trans_id, $transaction_src, $version, $reqoption);

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
                        '\UPS\TForceFreightShipping\TForceFreightShipping\FREIGHTSHIPResponseWrapper',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation freightShipAsync
     *
     * TForce Freight Ship
     *
     * @param  \UPS\TForceFreightShipping\TForceFreightShipping\FREIGHTSHIPRequestWrapper $body Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (required)
     * @param  string $version When TForce Freight introduces new elements  in the response that are not associated with new  request elements, version is used. This ensures  backward compatibility. To get such elements you need to have the right  version. The value of the version is explained in  the Response element Description. Example: Itemized Charges are returned only  when the version element is present and greater  than or equal to &#x27;v1601&#x27;.  Format: YYMM &#x3D; Year and month of the release. Example: v1601 &#x3D; 2016 Januaryrelease.  Supported values: v1, v1601, v1607. Length 5 (required)
     * @param  string $reqoption Valid Values:  Ground, Air . Length 15 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function freightShipAsync($body, $trans_id, $transaction_src, $version, $reqoption)
    {
        return $this->freightShipAsyncWithHttpInfo($body, $trans_id, $transaction_src, $version, $reqoption)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation freightShipAsyncWithHttpInfo
     *
     * TForce Freight Ship
     *
     * @param  \UPS\TForceFreightShipping\TForceFreightShipping\FREIGHTSHIPRequestWrapper $body Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (required)
     * @param  string $version When TForce Freight introduces new elements  in the response that are not associated with new  request elements, version is used. This ensures  backward compatibility. To get such elements you need to have the right  version. The value of the version is explained in  the Response element Description. Example: Itemized Charges are returned only  when the version element is present and greater  than or equal to &#x27;v1601&#x27;.  Format: YYMM &#x3D; Year and month of the release. Example: v1601 &#x3D; 2016 Januaryrelease.  Supported values: v1, v1601, v1607. Length 5 (required)
     * @param  string $reqoption Valid Values:  Ground, Air . Length 15 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function freightShipAsyncWithHttpInfo($body, $trans_id, $transaction_src, $version, $reqoption)
    {
        $returnType = '\UPS\TForceFreightShipping\TForceFreightShipping\FREIGHTSHIPResponseWrapper';
        $request = $this->freightShipRequest($body, $trans_id, $transaction_src, $version, $reqoption);

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
     * Create request for operation 'freightShip'
     *
     * @param  \UPS\TForceFreightShipping\TForceFreightShipping\FREIGHTSHIPRequestWrapper $body Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click &quot;Authorize&quot; and enter your application credentials, then populate the required parameters above and click &quot;Try it out&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request.Length 512 (required)
     * @param  string $version When TForce Freight introduces new elements  in the response that are not associated with new  request elements, version is used. This ensures  backward compatibility. To get such elements you need to have the right  version. The value of the version is explained in  the Response element Description. Example: Itemized Charges are returned only  when the version element is present and greater  than or equal to &#x27;v1601&#x27;.  Format: YYMM &#x3D; Year and month of the release. Example: v1601 &#x3D; 2016 Januaryrelease.  Supported values: v1, v1601, v1607. Length 5 (required)
     * @param  string $reqoption Valid Values:  Ground, Air . Length 15 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function freightShipRequest($body, $trans_id, $transaction_src, $version, $reqoption)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling freightShip'
            );
        }
        // verify the required parameter 'trans_id' is set
        if ($trans_id === null || (is_array($trans_id) && count($trans_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $trans_id when calling freightShip'
            );
        }
        // verify the required parameter 'transaction_src' is set
        if ($transaction_src === null || (is_array($transaction_src) && count($transaction_src) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transaction_src when calling freightShip'
            );
        }
        // verify the required parameter 'version' is set
        if ($version === null || (is_array($version) && count($version) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version when calling freightShip'
            );
        }
        // verify the required parameter 'reqoption' is set
        if ($reqoption === null || (is_array($reqoption) && count($reqoption) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $reqoption when calling freightShip'
            );
        }

        $resourcePath = '/freight/{version}/shipments/{reqoption}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($trans_id !== null) {
            $headerParams['transId'] = ObjectSerializer::toHeaderValue($trans_id);
        }
        // header params
        if ($transaction_src !== null) {
            $headerParams['transactionSrc'] = ObjectSerializer::toHeaderValue($transaction_src);
        }

        // path params
        if ($version !== null) {
            $resourcePath = str_replace(
                '{' . 'version' . '}',
                ObjectSerializer::toPathValue($version),
                $resourcePath
            );
        }
        // path params
        if ($reqoption !== null) {
            $resourcePath = str_replace(
                '{' . 'reqoption' . '}',
                ObjectSerializer::toPathValue($reqoption),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
