<?php
/**
 * GuideCategoriesApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * YouTube Data
 *
 * Supports core YouTube features, such as uploading videos, creating and managing playlists, searching for content, and much more.
 *
 * OpenAPI spec version: v3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * GuideCategoriesApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GuideCategoriesApi
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
     * Operation youtubeGuideCategoriesList
     *
     * @param  string $part The part parameter specifies the guideCategory resource properties that the API response will include. Set the parameter value to snippet. (required)
     * @param  string $alt Data format for the response. (optional, default to json)
     * @param  string $fields Selector specifying which fields to include in a partial response. (optional)
     * @param  string $key API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. (optional)
     * @param  string $oauth_token OAuth 2.0 token for the current user. (optional)
     * @param  bool $pretty_print Returns response with indentations and line breaks. (optional, default to true)
     * @param  string $quota_user Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. (optional)
     * @param  string $user_ip IP address of the site where the request originates. Use this if you want to enforce per-user limits. (optional)
     * @param  string $hl The hl parameter specifies the language that will be used for text values in the API response. (optional, default to en-US)
     * @param  string $id The id parameter specifies a comma-separated list of the YouTube channel category ID(s) for the resource(s) that are being retrieved. In a guideCategory resource, the id property specifies the YouTube channel category ID. (optional)
     * @param  string $region_code The regionCode parameter instructs the API to return the list of guide categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GuideCategoryListResponse
     */
    public function youtubeGuideCategoriesList($part, $alt = 'json', $fields = null, $key = null, $oauth_token = null, $pretty_print = 'true', $quota_user = null, $user_ip = null, $hl = 'en-US', $id = null, $region_code = null)
    {
        list($response) = $this->youtubeGuideCategoriesListWithHttpInfo($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $hl, $id, $region_code);
        return $response;
    }

    /**
     * Operation youtubeGuideCategoriesListWithHttpInfo
     *
     * @param  string $part The part parameter specifies the guideCategory resource properties that the API response will include. Set the parameter value to snippet. (required)
     * @param  string $alt Data format for the response. (optional, default to json)
     * @param  string $fields Selector specifying which fields to include in a partial response. (optional)
     * @param  string $key API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. (optional)
     * @param  string $oauth_token OAuth 2.0 token for the current user. (optional)
     * @param  bool $pretty_print Returns response with indentations and line breaks. (optional, default to true)
     * @param  string $quota_user Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. (optional)
     * @param  string $user_ip IP address of the site where the request originates. Use this if you want to enforce per-user limits. (optional)
     * @param  string $hl The hl parameter specifies the language that will be used for text values in the API response. (optional, default to en-US)
     * @param  string $id The id parameter specifies a comma-separated list of the YouTube channel category ID(s) for the resource(s) that are being retrieved. In a guideCategory resource, the id property specifies the YouTube channel category ID. (optional)
     * @param  string $region_code The regionCode parameter instructs the API to return the list of guide categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GuideCategoryListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function youtubeGuideCategoriesListWithHttpInfo($part, $alt = 'json', $fields = null, $key = null, $oauth_token = null, $pretty_print = 'true', $quota_user = null, $user_ip = null, $hl = 'en-US', $id = null, $region_code = null)
    {
        $returnType = '\Swagger\Client\Model\GuideCategoryListResponse';
        $request = $this->youtubeGuideCategoriesListRequest($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $hl, $id, $region_code);

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
                if ($returnType !== 'string') {
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
                        '\Swagger\Client\Model\GuideCategoryListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation youtubeGuideCategoriesListAsync
     *
     * 
     *
     * @param  string $part The part parameter specifies the guideCategory resource properties that the API response will include. Set the parameter value to snippet. (required)
     * @param  string $alt Data format for the response. (optional, default to json)
     * @param  string $fields Selector specifying which fields to include in a partial response. (optional)
     * @param  string $key API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. (optional)
     * @param  string $oauth_token OAuth 2.0 token for the current user. (optional)
     * @param  bool $pretty_print Returns response with indentations and line breaks. (optional, default to true)
     * @param  string $quota_user Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. (optional)
     * @param  string $user_ip IP address of the site where the request originates. Use this if you want to enforce per-user limits. (optional)
     * @param  string $hl The hl parameter specifies the language that will be used for text values in the API response. (optional, default to en-US)
     * @param  string $id The id parameter specifies a comma-separated list of the YouTube channel category ID(s) for the resource(s) that are being retrieved. In a guideCategory resource, the id property specifies the YouTube channel category ID. (optional)
     * @param  string $region_code The regionCode parameter instructs the API to return the list of guide categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function youtubeGuideCategoriesListAsync($part, $alt = 'json', $fields = null, $key = null, $oauth_token = null, $pretty_print = 'true', $quota_user = null, $user_ip = null, $hl = 'en-US', $id = null, $region_code = null)
    {
        return $this->youtubeGuideCategoriesListAsyncWithHttpInfo($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $hl, $id, $region_code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation youtubeGuideCategoriesListAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $part The part parameter specifies the guideCategory resource properties that the API response will include. Set the parameter value to snippet. (required)
     * @param  string $alt Data format for the response. (optional, default to json)
     * @param  string $fields Selector specifying which fields to include in a partial response. (optional)
     * @param  string $key API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. (optional)
     * @param  string $oauth_token OAuth 2.0 token for the current user. (optional)
     * @param  bool $pretty_print Returns response with indentations and line breaks. (optional, default to true)
     * @param  string $quota_user Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. (optional)
     * @param  string $user_ip IP address of the site where the request originates. Use this if you want to enforce per-user limits. (optional)
     * @param  string $hl The hl parameter specifies the language that will be used for text values in the API response. (optional, default to en-US)
     * @param  string $id The id parameter specifies a comma-separated list of the YouTube channel category ID(s) for the resource(s) that are being retrieved. In a guideCategory resource, the id property specifies the YouTube channel category ID. (optional)
     * @param  string $region_code The regionCode parameter instructs the API to return the list of guide categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function youtubeGuideCategoriesListAsyncWithHttpInfo($part, $alt = 'json', $fields = null, $key = null, $oauth_token = null, $pretty_print = 'true', $quota_user = null, $user_ip = null, $hl = 'en-US', $id = null, $region_code = null)
    {
        $returnType = '\Swagger\Client\Model\GuideCategoryListResponse';
        $request = $this->youtubeGuideCategoriesListRequest($part, $alt, $fields, $key, $oauth_token, $pretty_print, $quota_user, $user_ip, $hl, $id, $region_code);

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
     * Create request for operation 'youtubeGuideCategoriesList'
     *
     * @param  string $part The part parameter specifies the guideCategory resource properties that the API response will include. Set the parameter value to snippet. (required)
     * @param  string $alt Data format for the response. (optional, default to json)
     * @param  string $fields Selector specifying which fields to include in a partial response. (optional)
     * @param  string $key API key. Your API key identifies your project and provides you with API access, quota, and reports. Required unless you provide an OAuth 2.0 token. (optional)
     * @param  string $oauth_token OAuth 2.0 token for the current user. (optional)
     * @param  bool $pretty_print Returns response with indentations and line breaks. (optional, default to true)
     * @param  string $quota_user Available to use for quota purposes for server-side applications. Can be any arbitrary string assigned to a user, but should not exceed 40 characters. Overrides userIp if both are provided. (optional)
     * @param  string $user_ip IP address of the site where the request originates. Use this if you want to enforce per-user limits. (optional)
     * @param  string $hl The hl parameter specifies the language that will be used for text values in the API response. (optional, default to en-US)
     * @param  string $id The id parameter specifies a comma-separated list of the YouTube channel category ID(s) for the resource(s) that are being retrieved. In a guideCategory resource, the id property specifies the YouTube channel category ID. (optional)
     * @param  string $region_code The regionCode parameter instructs the API to return the list of guide categories available in the specified country. The parameter value is an ISO 3166-1 alpha-2 country code. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function youtubeGuideCategoriesListRequest($part, $alt = 'json', $fields = null, $key = null, $oauth_token = null, $pretty_print = 'true', $quota_user = null, $user_ip = null, $hl = 'en-US', $id = null, $region_code = null)
    {
        // verify the required parameter 'part' is set
        if ($part === null || (is_array($part) && count($part) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $part when calling youtubeGuideCategoriesList'
            );
        }

        $resourcePath = '/guideCategories';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($alt !== null) {
            $queryParams['alt'] = ObjectSerializer::toQueryValue($alt);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = ObjectSerializer::toQueryValue($fields);
        }
        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key);
        }
        // query params
        if ($oauth_token !== null) {
            $queryParams['oauth_token'] = ObjectSerializer::toQueryValue($oauth_token);
        }
        // query params
        if ($pretty_print !== null) {
            $queryParams['prettyPrint'] = ObjectSerializer::toQueryValue($pretty_print);
        }
        // query params
        if ($quota_user !== null) {
            $queryParams['quotaUser'] = ObjectSerializer::toQueryValue($quota_user);
        }
        // query params
        if ($user_ip !== null) {
            $queryParams['userIp'] = ObjectSerializer::toQueryValue($user_ip);
        }
        // query params
        if ($hl !== null) {
            $queryParams['hl'] = ObjectSerializer::toQueryValue($hl);
        }
        // query params
        if ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($part !== null) {
            $queryParams['part'] = ObjectSerializer::toQueryValue($part);
        }
        // query params
        if ($region_code !== null) {
            $queryParams['regionCode'] = ObjectSerializer::toQueryValue($region_code);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
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