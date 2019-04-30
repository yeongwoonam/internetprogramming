<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddons");
$query->setAction("select");
$query->setPriority("");

${'site_srl126_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl126_argument'}->checkNotNull();
${'site_srl126_argument'}->createConditionValue();
if(!${'site_srl126_argument'}->isValid()) return ${'site_srl126_argument'}->getErrorMessage();
if(${'site_srl126_argument'} !== null) ${'site_srl126_argument'}->setColumnType('number');

${'list_order127_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order127_argument'}->ensureDefaultValue('addon');
if(!${'list_order127_argument'}->isValid()) return ${'list_order127_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl126_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'list_order127_argument'}, "asc")
));
$query->setLimit();
return $query; ?>