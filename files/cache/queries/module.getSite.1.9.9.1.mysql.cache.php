<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSite");
$query->setAction("select");
$query->setPriority("");

${'site_srl135_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl135_argument'}->checkNotNull();
${'site_srl135_argument'}->createConditionValue();
if(!${'site_srl135_argument'}->isValid()) return ${'site_srl135_argument'}->getErrorMessage();
if(${'site_srl135_argument'} !== null) ${'site_srl135_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl135_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>