<?php
// No direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$vs = new VslibVs();
$subdomain = $vs->getSubdomain();

$subdomain = 'Аксай'; //delete on production

$stock = modStockHelper::getStock($subdomain);


require JModuleHelper::getLayoutPath('mod_stock');
