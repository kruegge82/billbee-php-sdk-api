<?php
/**
 * DeliveryNoteApi
 * PHP version 7.4
 *
 * @category Class
 * @package  kruegge82\billbee
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Billbee API
 *
 * Documentation of the Billbee REST API to connect a Billbee account to external aplications.  ## Endpoint  The Billbee API endpoint base url is https://api.billbee.io/api/v1   ## Activation  You have to enable the API in the settings of your Billbee account. In addition you need a Billbee API Key identifying the application you develop. To get an API key, send a mail to support@billbee.io and send us a short note about what you are building.  ## Authorization & security  Because you can access private data with the Billbee API, every request has to be sent over https and must  * Contain a valid API Key identifying the application/developer. It has to be sent as the HTTP header X-Billbee-Api-Key * Contain a valid user login with billbee username and api password in form of a basic auth HTTP header  ## Throttling  50 calls per second for each API Key.  10 calls per second for each API Key in combination with Billbee user.  Besides that each endpoint has a throttle of max 2 requests per second per combination of API Key and Billbee user.  When you exceed the throttle threshold, the API will return a HTTP 429 status code and a Retry-After-Header indicating how many seconds you will have to wait before you can call the API again.
 *
 * The version of the OpenAPI document: V1
 * Contact: support@billbee.io
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\billbee\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use kruegge82\billbee\ApiException;
use kruegge82\billbee\Configuration;
use kruegge82\billbee\HeaderSelector;
use kruegge82\billbee\ObjectSerializer;

/**
 * DeliveryNoteApi Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\billbee
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DeliveryNoteApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'orderApiCreateDeliveryNote' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation orderApiCreateDeliveryNote
     *
     * Create an delivery note for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes.
     *
     * @param  int $id The internal billbee id of the order (required)
     * @param  bool $include_pdf If true, the PDF is included in the response as base64 encoded string (optional, default to false)
     * @param  int $send_to_cloud_id Optionally specify the id of a billbee connected cloud device to send the pdf to (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['orderApiCreateDeliveryNote'] to see the possible values for this operation
     *
     * @throws \kruegge82\billbee\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return object
     */
    public function orderApiCreateDeliveryNote($id, $include_pdf = false, $send_to_cloud_id = null, string $contentType = self::contentTypes['orderApiCreateDeliveryNote'][0])
    {
        list($response) = $this->orderApiCreateDeliveryNoteWithHttpInfo($id, $include_pdf, $send_to_cloud_id, $contentType);
        return $response;
    }

    /**
     * Operation orderApiCreateDeliveryNoteWithHttpInfo
     *
     * Create an delivery note for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes.
     *
     * @param  int $id The internal billbee id of the order (required)
     * @param  bool $include_pdf If true, the PDF is included in the response as base64 encoded string (optional, default to false)
     * @param  int $send_to_cloud_id Optionally specify the id of a billbee connected cloud device to send the pdf to (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['orderApiCreateDeliveryNote'] to see the possible values for this operation
     *
     * @throws \kruegge82\billbee\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function orderApiCreateDeliveryNoteWithHttpInfo($id, $include_pdf = false, $send_to_cloud_id = null, string $contentType = self::contentTypes['orderApiCreateDeliveryNote'][0])
    {
        $request = $this->orderApiCreateDeliveryNoteRequest($id, $include_pdf, $send_to_cloud_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation orderApiCreateDeliveryNoteAsync
     *
     * Create an delivery note for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes.
     *
     * @param  int $id The internal billbee id of the order (required)
     * @param  bool $include_pdf If true, the PDF is included in the response as base64 encoded string (optional, default to false)
     * @param  int $send_to_cloud_id Optionally specify the id of a billbee connected cloud device to send the pdf to (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['orderApiCreateDeliveryNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderApiCreateDeliveryNoteAsync($id, $include_pdf = false, $send_to_cloud_id = null, string $contentType = self::contentTypes['orderApiCreateDeliveryNote'][0])
    {
        return $this->orderApiCreateDeliveryNoteAsyncWithHttpInfo($id, $include_pdf, $send_to_cloud_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation orderApiCreateDeliveryNoteAsyncWithHttpInfo
     *
     * Create an delivery note for an existing order. This request is extra throttled by order and api key to a maximum of 1 per 5 minutes.
     *
     * @param  int $id The internal billbee id of the order (required)
     * @param  bool $include_pdf If true, the PDF is included in the response as base64 encoded string (optional, default to false)
     * @param  int $send_to_cloud_id Optionally specify the id of a billbee connected cloud device to send the pdf to (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['orderApiCreateDeliveryNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderApiCreateDeliveryNoteAsyncWithHttpInfo($id, $include_pdf = false, $send_to_cloud_id = null, string $contentType = self::contentTypes['orderApiCreateDeliveryNote'][0])
    {
        $returnType = 'object';
        $request = $this->orderApiCreateDeliveryNoteRequest($id, $include_pdf, $send_to_cloud_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'orderApiCreateDeliveryNote'
     *
     * @param  int $id The internal billbee id of the order (required)
     * @param  bool $include_pdf If true, the PDF is included in the response as base64 encoded string (optional, default to false)
     * @param  int $send_to_cloud_id Optionally specify the id of a billbee connected cloud device to send the pdf to (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['orderApiCreateDeliveryNote'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function orderApiCreateDeliveryNoteRequest($id, $include_pdf = false, $send_to_cloud_id = null, string $contentType = self::contentTypes['orderApiCreateDeliveryNote'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling orderApiCreateDeliveryNote'
            );
        }




        $resourcePath = '/api/v1/orders/CreateDeliveryNote/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_pdf,
            'includePdf', // param base name
            'boolean', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $send_to_cloud_id,
            'sendToCloudId', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-Billbee-Api-Key');
        if ($apiKey !== null) {
            $headers['X-Billbee-Api-Key'] = $apiKey;
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
