<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl120_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl120_argument'}->checkNotNull();
if(!${'site_srl120_argument'}->isValid()) return ${'site_srl120_argument'}->getErrorMessage();
if(${'site_srl120_argument'} !== null) ${'site_srl120_argument'}->setColumnType('number');

${'addon121_argument'} = new Argument('addon', $args->{'addon'});
${'addon121_argument'}->checkNotNull();
if(!${'addon121_argument'}->isValid()) return ${'addon121_argument'}->getErrorMessage();
if(${'addon121_argument'} !== null) ${'addon121_argument'}->setColumnType('varchar');

${'is_used122_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used122_argument'}->ensureDefaultValue('N');
${'is_used122_argument'}->checkNotNull();
if(!${'is_used122_argument'}->isValid()) return ${'is_used122_argument'}->getErrorMessage();
if(${'is_used122_argument'} !== null) ${'is_used122_argument'}->setColumnType('char');

${'is_used_m123_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m123_argument'}->ensureDefaultValue('N');
if(!${'is_used_m123_argument'}->isValid()) return ${'is_used_m123_argument'}->getErrorMessage();
if(${'is_used_m123_argument'} !== null) ${'is_used_m123_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars124_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars124_argument'}->isValid()) return ${'extra_vars124_argument'}->getErrorMessage();
} else
${'extra_vars124_argument'} = NULL;if(${'extra_vars124_argument'} !== null) ${'extra_vars124_argument'}->setColumnType('text');

${'regdate125_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate125_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate125_argument'}->isValid()) return ${'regdate125_argument'}->getErrorMessage();
if(${'regdate125_argument'} !== null) ${'regdate125_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl120_argument'})
,new InsertExpression('`addon`', ${'addon121_argument'})
,new InsertExpression('`is_used`', ${'is_used122_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m123_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars124_argument'})
,new InsertExpression('`regdate`', ${'regdate125_argument'})
));
$query->setTables(array(
new Table('`rx_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>