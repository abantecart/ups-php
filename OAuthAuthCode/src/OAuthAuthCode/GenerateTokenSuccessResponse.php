<?php
/**
 * GenerateTokenSuccessResponse
 *
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

namespace UPS\OAuthAuthCode\OAuthAuthCode;

use \ArrayAccess;
use \UPS\OAuthAuthCode\ObjectSerializer;

/**
 * GenerateTokenSuccessResponse Class Doc Comment
 *
 * @category Class
 * @package  UPS\OAuthAuthCode
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GenerateTokenSuccessResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'generateTokenSuccessResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'refresh_token_expires_in' => 'string',
        'refresh_token_status' => 'string',
        'token_type' => 'string',
        'issued_at' => 'string',
        'client_id' => 'string',
        'access_token' => 'string',
        'refresh_token' => 'string',
        'scope' => 'string',
        'refresh_token_issued_at' => 'string',
        'expires_in' => 'string',
        'refresh_count' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'refresh_token_expires_in' => null,
        'refresh_token_status' => null,
        'token_type' => null,
        'issued_at' => null,
        'client_id' => null,
        'access_token' => null,
        'refresh_token' => null,
        'scope' => null,
        'refresh_token_issued_at' => null,
        'expires_in' => null,
        'refresh_count' => null,
        'status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'refresh_token_expires_in' => 'refresh_token_expires_in',
        'refresh_token_status' => 'refresh_token_status',
        'token_type' => 'token_type',
        'issued_at' => 'issued_at',
        'client_id' => 'client_id',
        'access_token' => 'access_token',
        'refresh_token' => 'refresh_token',
        'scope' => 'scope',
        'refresh_token_issued_at' => 'refresh_token_issued_at',
        'expires_in' => 'expires_in',
        'refresh_count' => 'refresh_count',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'refresh_token_expires_in' => 'setRefreshTokenExpiresIn',
        'refresh_token_status' => 'setRefreshTokenStatus',
        'token_type' => 'setTokenType',
        'issued_at' => 'setIssuedAt',
        'client_id' => 'setClientId',
        'access_token' => 'setAccessToken',
        'refresh_token' => 'setRefreshToken',
        'scope' => 'setScope',
        'refresh_token_issued_at' => 'setRefreshTokenIssuedAt',
        'expires_in' => 'setExpiresIn',
        'refresh_count' => 'setRefreshCount',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'refresh_token_expires_in' => 'getRefreshTokenExpiresIn',
        'refresh_token_status' => 'getRefreshTokenStatus',
        'token_type' => 'getTokenType',
        'issued_at' => 'getIssuedAt',
        'client_id' => 'getClientId',
        'access_token' => 'getAccessToken',
        'refresh_token' => 'getRefreshToken',
        'scope' => 'getScope',
        'refresh_token_issued_at' => 'getRefreshTokenIssuedAt',
        'expires_in' => 'getExpiresIn',
        'refresh_count' => 'getRefreshCount',
        'status' => 'getStatus'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['refresh_token_expires_in'] = isset($data['refresh_token_expires_in']) ? $data['refresh_token_expires_in'] : null;
        $this->container['refresh_token_status'] = isset($data['refresh_token_status']) ? $data['refresh_token_status'] : null;
        $this->container['token_type'] = isset($data['token_type']) ? $data['token_type'] : null;
        $this->container['issued_at'] = isset($data['issued_at']) ? $data['issued_at'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['access_token'] = isset($data['access_token']) ? $data['access_token'] : null;
        $this->container['refresh_token'] = isset($data['refresh_token']) ? $data['refresh_token'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['refresh_token_issued_at'] = isset($data['refresh_token_issued_at']) ? $data['refresh_token_issued_at'] : null;
        $this->container['expires_in'] = isset($data['expires_in']) ? $data['expires_in'] : null;
        $this->container['refresh_count'] = isset($data['refresh_count']) ? $data['refresh_count'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets refresh_token_expires_in
     *
     * @return string
     */
    public function getRefreshTokenExpiresIn()
    {
        return $this->container['refresh_token_expires_in'];
    }

    /**
     * Sets refresh_token_expires_in
     *
     * @param string $refresh_token_expires_in Expiration time for requested refresh token in seconds.
     *
     * @return $this
     */
    public function setRefreshTokenExpiresIn($refresh_token_expires_in)
    {
        $this->container['refresh_token_expires_in'] = $refresh_token_expires_in;

        return $this;
    }

    /**
     * Gets refresh_token_status
     *
     * @return string
     */
    public function getRefreshTokenStatus()
    {
        return $this->container['refresh_token_status'];
    }

    /**
     * Sets refresh_token_status
     *
     * @param string $refresh_token_status Status for requested refresh token.
     *
     * @return $this
     */
    public function setRefreshTokenStatus($refresh_token_status)
    {
        $this->container['refresh_token_status'] = $refresh_token_status;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string $token_type Type of requested access token
     *
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets issued_at
     *
     * @return string
     */
    public function getIssuedAt()
    {
        return $this->container['issued_at'];
    }

    /**
     * Sets issued_at
     *
     * @param string $issued_at Issue time of requested token in milliseconds.
     *
     * @return $this
     */
    public function setIssuedAt($issued_at)
    {
        $this->container['issued_at'] = $issued_at;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id Client id for requested token.
     *
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets access_token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string $access_token Token to be used in API requests.
     *
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets refresh_token
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token
     *
     * @param string $refresh_token Refresh token to be used in refresh requests when obtaining new access token.
     *
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        $this->container['refresh_token'] = $refresh_token;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope Scope for requested token.
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets refresh_token_issued_at
     *
     * @return string
     */
    public function getRefreshTokenIssuedAt()
    {
        return $this->container['refresh_token_issued_at'];
    }

    /**
     * Sets refresh_token_issued_at
     *
     * @param string $refresh_token_issued_at Time that refresh token was issued in milliseconds.
     *
     * @return $this
     */
    public function setRefreshTokenIssuedAt($refresh_token_issued_at)
    {
        $this->container['refresh_token_issued_at'] = $refresh_token_issued_at;

        return $this;
    }

    /**
     * Gets expires_in
     *
     * @return string
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     *
     * @param string $expires_in Expire time for requested token in seconds.
     *
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;

        return $this;
    }

    /**
     * Gets refresh_count
     *
     * @return string
     */
    public function getRefreshCount()
    {
        return $this->container['refresh_count'];
    }

    /**
     * Sets refresh_count
     *
     * @param string $refresh_count Number of refreshes for requested token.
     *
     * @return $this
     */
    public function setRefreshCount($refresh_count)
    {
        $this->container['refresh_count'] = $refresh_count;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status for requested token.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
