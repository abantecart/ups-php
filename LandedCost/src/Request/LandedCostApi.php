<?php
/**
 * LandedCostApi
 * PHP version 5
 *
 * @category Class
 * @package  UPS\LandedCost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Landed Cost Quote API
 *
 * The Landed Cost Quote API allows you to estimate the all-inclusive cost of international shipments - including applicable duties, VAT, taxes, brokerage fees, and other fees. Required parameters include the currency and shipment details, such as the commodity ID, price, quantity, and country code of origin.  Key Business Values: - **Enhanced Customer Experience**: Get a quick and accurate quote on the landed cost of a shipment, including the cost of goods, transportation, and any other fees associated with getting the goods to their destination. - **Operational Efficiency**: Simplify the process of calculating landed costs by eliminating the need to manually research and calculate all of the different fees involved. - **Data-Driven Decision Making**: Improve decision-making by having a clear understanding of the total cost of shipping goods before you commit to a purchase.. - **Optimizing Cash Flow**: Streamline your shipping process by integrating the Landed Cost Quote API into your existing systems.  # Reference - <a href=\"https://developer.ups.com/api/reference/landedcostquoting/business-rules\" target=\"_blank\" rel=\"noopener\">Business Rules</a> - <a href=\"https://developer.ups.com/api/reference/landedcostquoting/appendix\" target=\"_blank\" rel=\"noopener\">Appendix</a> - <a href=\"https://developer.ups.com/api/reference/landedcostquoting/errors\" target=\"_blank\" rel=\"noopener\">Errors</a>  <br/><p>Try out UPS APIs with example requests using Postman. Explore API documentation and sample applications through GitHub.</p>  <a href=\"https://god.gw.postman.com/run-collection/29542085-bea3b8e9-3a1f-4642-a0ca-22945c18cf00?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D29542085-bea3b8e9-3a1f-4642-a0ca-22945c18cf00%26entityType%3Dcollection%26workspaceId%3D7e7595f0-4829-4f9a-aee1-75c126b9d417\" target=\"_blank\" rel=\"noopener\">   <img src=\"https://run.pstmn.io/button.svg\" alt=\"Run In Postman\" style=\"width: 128px; height: 32px;\"></a> <a href=\"https://github.com/UPS-API\" target=\"_blank\" rel=\"noopener noreferrer\">   <img src=\"https://www.ups.com/assets/resources/webcontent/images/gitHubButton.svg\" alt=\"Open in GitHub \" style=\"width: 128px; height: 32px;\"> </a>
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.71
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\LandedCost\Request;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use UPS\LandedCost\ApiException;
use UPS\LandedCost\Configuration;
use UPS\LandedCost\HeaderSelector;
use UPS\LandedCost\ObjectSerializer;

/**
 * LandedCostApi Class Doc Comment
 *
 * @category Class
 * @package  UPS\LandedCost
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LandedCostApi
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
     * Operation landedCost
     *
     * Landed Cost Quote API
     *
     * @param  \UPS\LandedCost\LandedCost\LandedCostRequest $body Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \&quot;Authorize\&quot; and enter your application credentials, then populate the required parameters above and click \&quot;Try it out\&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length: 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request. Length: 512 (required)
     * @param  string $version Version of the API. (required)
     * @param  string $account_number The UPS account number. (optional)
     *
     * @throws \UPS\LandedCost\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \UPS\LandedCost\LandedCost\LandedCostResponse
     */
    public function landedCost($body, $trans_id, $transaction_src, $version, $account_number = null)
    {
        list($response) = $this->landedCostWithHttpInfo($body, $trans_id, $transaction_src, $version, $account_number);
        return $response;
    }

    /**
     * Operation landedCostWithHttpInfo
     *
     * Landed Cost Quote API
     *
     * @param  \UPS\LandedCost\LandedCost\LandedCostRequest $body Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \&quot;Authorize\&quot; and enter your application credentials, then populate the required parameters above and click \&quot;Try it out\&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length: 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request. Length: 512 (required)
     * @param  string $version Version of the API. (required)
     * @param  string $account_number The UPS account number. (optional)
     *
     * @throws \UPS\LandedCost\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \UPS\LandedCost\LandedCost\LandedCostResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function landedCostWithHttpInfo($body, $trans_id, $transaction_src, $version, $account_number = null)
    {
        $returnType = '\UPS\LandedCost\LandedCost\LandedCostResponse';
        $request = $this->landedCostRequest($body, $trans_id, $transaction_src, $version, $account_number);

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
                        '\UPS\LandedCost\LandedCost\LandedCostResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\LandedCost\LandedCost\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\LandedCost\LandedCost\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\LandedCost\LandedCost\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\UPS\LandedCost\LandedCost\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation landedCostAsync
     *
     * Landed Cost Quote API
     *
     * @param  \UPS\LandedCost\LandedCost\LandedCostRequest $body Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \&quot;Authorize\&quot; and enter your application credentials, then populate the required parameters above and click \&quot;Try it out\&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length: 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request. Length: 512 (required)
     * @param  string $version Version of the API. (required)
     * @param  string $account_number The UPS account number. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function landedCostAsync($body, $trans_id, $transaction_src, $version, $account_number = null)
    {
        return $this->landedCostAsyncWithHttpInfo($body, $trans_id, $transaction_src, $version, $account_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation landedCostAsyncWithHttpInfo
     *
     * Landed Cost Quote API
     *
     * @param  \UPS\LandedCost\LandedCost\LandedCostRequest $body Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \&quot;Authorize\&quot; and enter your application credentials, then populate the required parameters above and click \&quot;Try it out\&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length: 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request. Length: 512 (required)
     * @param  string $version Version of the API. (required)
     * @param  string $account_number The UPS account number. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function landedCostAsyncWithHttpInfo($body, $trans_id, $transaction_src, $version, $account_number = null)
    {
        $returnType = '\UPS\LandedCost\LandedCost\LandedCostResponse';
        $request = $this->landedCostRequest($body, $trans_id, $transaction_src, $version, $account_number);

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
     * Create request for operation 'landedCost'
     *
     * @param  \UPS\LandedCost\LandedCost\LandedCostRequest $body Generate sample code for popular API requests by selecting an example below. To view a full sample request and response, first click \&quot;Authorize\&quot; and enter your application credentials, then populate the required parameters above and click \&quot;Try it out\&quot;. (required)
     * @param  string $trans_id An identifier unique to the request. Length: 32 (required)
     * @param  string $transaction_src An identifier of the client/source application that is making the request. Length: 512 (required)
     * @param  string $version Version of the API. (required)
     * @param  string $account_number The UPS account number. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function landedCostRequest($body, $trans_id, $transaction_src, $version, $account_number = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling landedCost'
            );
        }
        // verify the required parameter 'trans_id' is set
        if ($trans_id === null || (is_array($trans_id) && count($trans_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $trans_id when calling landedCost'
            );
        }
        // verify the required parameter 'transaction_src' is set
        if ($transaction_src === null || (is_array($transaction_src) && count($transaction_src) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transaction_src when calling landedCost'
            );
        }
        // verify the required parameter 'version' is set
        if ($version === null || (is_array($version) && count($version) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version when calling landedCost'
            );
        }

        $resourcePath = '/landedcost/{version}/quotes';
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
        // header params
        if ($account_number !== null) {
            $headerParams['AccountNumber'] = ObjectSerializer::toHeaderValue($account_number);
        }

        // path params
        if ($version !== null) {
            $resourcePath = str_replace(
                '{' . 'version' . '}',
                ObjectSerializer::toPathValue($version),
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
