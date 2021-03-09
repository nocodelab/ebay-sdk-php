<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Negotiation\Services;

class NegotiationService extends \DTS\eBaySDK\Negotiation\Services\NegotiationBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'FindEligibleItems' => [
            'method' => 'GET',
            'resource' => 'find_eligible_items',
            'responseClass' => '\DTS\eBaySDK\Negotiation\Types\FindEligibleItemsRestResponse',
            'params' => [
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'SendOfferToInterestedBuyers' => [
            'method' => 'POST',
            'resource' => 'send_offer_to_interested_buyers',
            'responseClass' => '\DTS\eBaySDK\Negotiation\Types\SendOfferToInterestedBuyersRestResponse',
            'params' => []
        ]
    ];

    /**
     * @param \DTS\eBaySDK\Negotiation\Types\SendOfferToInterestedBuyersRestRequest $request
     * @return \DTS\eBaySDK\Negotiation\Types\SendOfferToInterestedBuyersRestResponse
     */
    public function sendOfferToInterestedBuyers(\DTS\eBaySDK\Negotiation\Types\SendOfferToInterestedBuyersRestRequest $request)
    {
        return $this->sendOfferToInterestedBuyersAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Negotiation\Types\SendOfferToInterestedBuyersRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendOfferToInterestedBuyersAsync(\DTS\eBaySDK\Negotiation\Types\SendOfferToInterestedBuyersRestRequest $request)
    {
        return $this->callOperationAsync('SendOfferToInterestedBuyers', $request);
    }

    /**
     * @param \DTS\eBaySDK\Negotiation\Types\FindEligibleItemsRestRequest $request
     * @return \DTS\eBaySDK\Negotiation\Types\FindEligibleItemsRestResponse
     */
    public function findEligibleItems(\DTS\eBaySDK\Negotiation\Types\FindEligibleItemsRestRequest $request)
    {
        return $this->findEligibleItemsAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Negotiation\Types\FindEligibleItemsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findEligibleItemsAsync(\DTS\eBaySDK\Negotiation\Types\FindEligibleItemsRestRequest $request)
    {
        return $this->callOperationAsync('FindEligibleItems', $request);
    }
}
