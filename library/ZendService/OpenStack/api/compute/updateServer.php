<?php
// @see http://docs.openstack.org/api/openstack-compute/2/content/ServerUpdate.html
$result =  array(
    'url' => '/servers/'. urlencode($params[0]),
    'header' => array(
        'Content-Type' => 'application/json'
    ),
    'body' => array(
        'server' => array()
    ),
    'method' => 'PUT',
    'response' => array(
        'format'      => 'json',
        'valid_codes' => array('200')
    )
);
if (isset($params[1]['name'])) {
    $result['body']['server']['name'] = $params[1]['name'];
} else {
    $result['body']['server']['accessIPv4'] = $params[1]['accessIPv4'];
    $result['body']['server']['accessIPv6'] = $params[1]['accessIPv6'];
}
$result['body'] = json_encode($result['body']);
return $result;
