<?php
// @see http://docs.openstack.org/api/openstack-identity-service/2.0/content/POST_updateTenant_v2.0_tenants__tenantId__Admin_API_Service_Developer_Operations-d1e1356.html
return array(
    'url' => '/v2.0/tenants/' . urlencode($params[0]['id']),
    'header' => array(
        'Content-Type' => 'application/json'
    ),
    'method' => 'POST',
    'body' => json_encode(array(
        'tenant' => array(
            'id'          => $params[0]['id'],
            'name'        => $params[0]['name'],
            'description' => $params[0]['description'],
            'enabled'     => true
        )
    )),
    'response' => array(
        'format' => 'json',
        'valid_codes' => array('200')
    )
);
