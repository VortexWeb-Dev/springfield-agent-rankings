<?php
require_once __DIR__ . '/../crest/crest.php';

function getDeals()
{
    $result = CRest::call('crm.deal.list');
    $deals = $result['result'];

    return $deals;
}

function getDeal($deal_id)
{
    $result = CRest::call('crm.deal.get', ['ID' => $deal_id]);
    $deal = $result['result'];

    return $deal;
}
