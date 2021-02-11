<?php
/**
 * EntitiesUpdateApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * developer.yext.com (FINAL)
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19-SNAPSHOT
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
 * EntitiesUpdateApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EntitiesUpdateApi
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
     * Operation entitiesUpdateLocation
     *
     * Entities: Update (Location)
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $template_id  (required)
     * @param  string $template_fields  (required)
     * @param  string $content_type  (required)
     * @param  \Swagger\Client\Model\EntitiesUpdateLocationRequest $body  (required)
     * @param  string $account_id  (required)
     * @param  string $entity_id  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function entitiesUpdateLocation($api_key, $v, $template_id, $template_fields, $content_type, $body, $account_id, $entity_id)
    {
        $this->entitiesUpdateLocationWithHttpInfo($api_key, $v, $template_id, $template_fields, $content_type, $body, $account_id, $entity_id);
    }

    /**
     * Operation entitiesUpdateLocationWithHttpInfo
     *
     * Entities: Update (Location)
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $template_id  (required)
     * @param  string $template_fields  (required)
     * @param  string $content_type  (required)
     * @param  \Swagger\Client\Model\EntitiesUpdateLocationRequest $body  (required)
     * @param  string $account_id  (required)
     * @param  string $entity_id  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function entitiesUpdateLocationWithHttpInfo($api_key, $v, $template_id, $template_fields, $content_type, $body, $account_id, $entity_id)
    {
        $returnType = '';
        $request = $this->entitiesUpdateLocationRequest($api_key, $v, $template_id, $template_fields, $content_type, $body, $account_id, $entity_id);

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
            }
            throw $e;
        }
    }

    /**
     * Operation entitiesUpdateLocationAsync
     *
     * Entities: Update (Location)
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $template_id  (required)
     * @param  string $template_fields  (required)
     * @param  string $content_type  (required)
     * @param  \Swagger\Client\Model\EntitiesUpdateLocationRequest $body  (required)
     * @param  string $account_id  (required)
     * @param  string $entity_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function entitiesUpdateLocationAsync($api_key, $v, $template_id, $template_fields, $content_type, $body, $account_id, $entity_id)
    {
        return $this->entitiesUpdateLocationAsyncWithHttpInfo($api_key, $v, $template_id, $template_fields, $content_type, $body, $account_id, $entity_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation entitiesUpdateLocationAsyncWithHttpInfo
     *
     * Entities: Update (Location)
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $template_id  (required)
     * @param  string $template_fields  (required)
     * @param  string $content_type  (required)
     * @param  \Swagger\Client\Model\EntitiesUpdateLocationRequest $body  (required)
     * @param  string $account_id  (required)
     * @param  string $entity_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function entitiesUpdateLocationAsyncWithHttpInfo($api_key, $v, $template_id, $template_fields, $content_type, $body, $account_id, $entity_id)
    {
        $returnType = '';
        $request = $this->entitiesUpdateLocationRequest($api_key, $v, $template_id, $template_fields, $content_type, $body, $account_id, $entity_id);

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
     * Create request for operation 'entitiesUpdateLocation'
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $template_id  (required)
     * @param  string $template_fields  (required)
     * @param  string $content_type  (required)
     * @param  \Swagger\Client\Model\EntitiesUpdateLocationRequest $body  (required)
     * @param  string $account_id  (required)
     * @param  string $entity_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function entitiesUpdateLocationRequest($api_key, $v, $template_id, $template_fields, $content_type, $body, $account_id, $entity_id)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null || (is_array($api_key) && count($api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $api_key when calling entitiesUpdateLocation'
            );
        }
        // verify the required parameter 'v' is set
        if ($v === null || (is_array($v) && count($v) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $v when calling entitiesUpdateLocation'
            );
        }
        // verify the required parameter 'template_id' is set
        if ($template_id === null || (is_array($template_id) && count($template_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $template_id when calling entitiesUpdateLocation'
            );
        }
        // verify the required parameter 'template_fields' is set
        if ($template_fields === null || (is_array($template_fields) && count($template_fields) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $template_fields when calling entitiesUpdateLocation'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling entitiesUpdateLocation'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling entitiesUpdateLocation'
            );
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null || (is_array($account_id) && count($account_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_id when calling entitiesUpdateLocation'
            );
        }
        // verify the required parameter 'entity_id' is set
        if ($entity_id === null || (is_array($entity_id) && count($entity_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $entity_id when calling entitiesUpdateLocation'
            );
        }

        $resourcePath = '/accounts/{accountId}/entities/{entityId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($api_key !== null) {
            $queryParams['api_key'] = ObjectSerializer::toQueryValue($api_key);
        }
        // query params
        if ($v !== null) {
            $queryParams['v'] = ObjectSerializer::toQueryValue($v);
        }
        // query params
        if ($template_id !== null) {
            $queryParams['templateId'] = ObjectSerializer::toQueryValue($template_id);
        }
        // query params
        if ($template_fields !== null) {
            $queryParams['templateFields'] = ObjectSerializer::toQueryValue($template_fields);
        }
        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                '{' . 'accountId' . '}',
                ObjectSerializer::toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($entity_id !== null) {
            $resourcePath = str_replace(
                '{' . 'entityId' . '}',
                ObjectSerializer::toPathValue($entity_id),
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
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
            'PUT',
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
