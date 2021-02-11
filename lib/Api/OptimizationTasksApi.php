<?php
/**
 * OptimizationTasksApi
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
 * OptimizationTasksApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OptimizationTasksApi
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
     * Operation optimizationTasksGetLink
     *
     * Optimization Tasks: Get Link
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $task_ids  (required)
     * @param  string $location_ids  (required)
     * @param  string $mode  (required)
     * @param  string $account_id  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function optimizationTasksGetLink($api_key, $v, $task_ids, $location_ids, $mode, $account_id)
    {
        $this->optimizationTasksGetLinkWithHttpInfo($api_key, $v, $task_ids, $location_ids, $mode, $account_id);
    }

    /**
     * Operation optimizationTasksGetLinkWithHttpInfo
     *
     * Optimization Tasks: Get Link
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $task_ids  (required)
     * @param  string $location_ids  (required)
     * @param  string $mode  (required)
     * @param  string $account_id  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function optimizationTasksGetLinkWithHttpInfo($api_key, $v, $task_ids, $location_ids, $mode, $account_id)
    {
        $returnType = '';
        $request = $this->optimizationTasksGetLinkRequest($api_key, $v, $task_ids, $location_ids, $mode, $account_id);

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
     * Operation optimizationTasksGetLinkAsync
     *
     * Optimization Tasks: Get Link
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $task_ids  (required)
     * @param  string $location_ids  (required)
     * @param  string $mode  (required)
     * @param  string $account_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function optimizationTasksGetLinkAsync($api_key, $v, $task_ids, $location_ids, $mode, $account_id)
    {
        return $this->optimizationTasksGetLinkAsyncWithHttpInfo($api_key, $v, $task_ids, $location_ids, $mode, $account_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation optimizationTasksGetLinkAsyncWithHttpInfo
     *
     * Optimization Tasks: Get Link
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $task_ids  (required)
     * @param  string $location_ids  (required)
     * @param  string $mode  (required)
     * @param  string $account_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function optimizationTasksGetLinkAsyncWithHttpInfo($api_key, $v, $task_ids, $location_ids, $mode, $account_id)
    {
        $returnType = '';
        $request = $this->optimizationTasksGetLinkRequest($api_key, $v, $task_ids, $location_ids, $mode, $account_id);

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
     * Create request for operation 'optimizationTasksGetLink'
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $task_ids  (required)
     * @param  string $location_ids  (required)
     * @param  string $mode  (required)
     * @param  string $account_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function optimizationTasksGetLinkRequest($api_key, $v, $task_ids, $location_ids, $mode, $account_id)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null || (is_array($api_key) && count($api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $api_key when calling optimizationTasksGetLink'
            );
        }
        // verify the required parameter 'v' is set
        if ($v === null || (is_array($v) && count($v) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $v when calling optimizationTasksGetLink'
            );
        }
        // verify the required parameter 'task_ids' is set
        if ($task_ids === null || (is_array($task_ids) && count($task_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $task_ids when calling optimizationTasksGetLink'
            );
        }
        // verify the required parameter 'location_ids' is set
        if ($location_ids === null || (is_array($location_ids) && count($location_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $location_ids when calling optimizationTasksGetLink'
            );
        }
        // verify the required parameter 'mode' is set
        if ($mode === null || (is_array($mode) && count($mode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $mode when calling optimizationTasksGetLink'
            );
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null || (is_array($account_id) && count($account_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_id when calling optimizationTasksGetLink'
            );
        }

        $resourcePath = '/accounts/{accountId}/optimizationlink';
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
        if ($task_ids !== null) {
            $queryParams['taskIds'] = ObjectSerializer::toQueryValue($task_ids);
        }
        // query params
        if ($location_ids !== null) {
            $queryParams['locationIds'] = ObjectSerializer::toQueryValue($location_ids);
        }
        // query params
        if ($mode !== null) {
            $queryParams['mode'] = ObjectSerializer::toQueryValue($mode);
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                '{' . 'accountId' . '}',
                ObjectSerializer::toPathValue($account_id),
                $resourcePath
            );
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation optimizationTasksList
     *
     * Optimization Tasks: List
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $task_ids  (required)
     * @param  string $location_ids  (required)
     * @param  string $account_id  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function optimizationTasksList($api_key, $v, $task_ids, $location_ids, $account_id)
    {
        $this->optimizationTasksListWithHttpInfo($api_key, $v, $task_ids, $location_ids, $account_id);
    }

    /**
     * Operation optimizationTasksListWithHttpInfo
     *
     * Optimization Tasks: List
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $task_ids  (required)
     * @param  string $location_ids  (required)
     * @param  string $account_id  (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function optimizationTasksListWithHttpInfo($api_key, $v, $task_ids, $location_ids, $account_id)
    {
        $returnType = '';
        $request = $this->optimizationTasksListRequest($api_key, $v, $task_ids, $location_ids, $account_id);

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
     * Operation optimizationTasksListAsync
     *
     * Optimization Tasks: List
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $task_ids  (required)
     * @param  string $location_ids  (required)
     * @param  string $account_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function optimizationTasksListAsync($api_key, $v, $task_ids, $location_ids, $account_id)
    {
        return $this->optimizationTasksListAsyncWithHttpInfo($api_key, $v, $task_ids, $location_ids, $account_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation optimizationTasksListAsyncWithHttpInfo
     *
     * Optimization Tasks: List
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $task_ids  (required)
     * @param  string $location_ids  (required)
     * @param  string $account_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function optimizationTasksListAsyncWithHttpInfo($api_key, $v, $task_ids, $location_ids, $account_id)
    {
        $returnType = '';
        $request = $this->optimizationTasksListRequest($api_key, $v, $task_ids, $location_ids, $account_id);

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
     * Create request for operation 'optimizationTasksList'
     *
     * @param  string $api_key  (required)
     * @param  string $v  (required)
     * @param  string $task_ids  (required)
     * @param  string $location_ids  (required)
     * @param  string $account_id  (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function optimizationTasksListRequest($api_key, $v, $task_ids, $location_ids, $account_id)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null || (is_array($api_key) && count($api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $api_key when calling optimizationTasksList'
            );
        }
        // verify the required parameter 'v' is set
        if ($v === null || (is_array($v) && count($v) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $v when calling optimizationTasksList'
            );
        }
        // verify the required parameter 'task_ids' is set
        if ($task_ids === null || (is_array($task_ids) && count($task_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $task_ids when calling optimizationTasksList'
            );
        }
        // verify the required parameter 'location_ids' is set
        if ($location_ids === null || (is_array($location_ids) && count($location_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $location_ids when calling optimizationTasksList'
            );
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null || (is_array($account_id) && count($account_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_id when calling optimizationTasksList'
            );
        }

        $resourcePath = '/accounts/{accountId}/optimizationtasks';
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
        if ($task_ids !== null) {
            $queryParams['taskIds'] = ObjectSerializer::toQueryValue($task_ids);
        }
        // query params
        if ($location_ids !== null) {
            $queryParams['locationIds'] = ObjectSerializer::toQueryValue($location_ids);
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                '{' . 'accountId' . '}',
                ObjectSerializer::toPathValue($account_id),
                $resourcePath
            );
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
