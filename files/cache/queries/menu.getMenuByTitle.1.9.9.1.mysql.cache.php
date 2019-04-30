<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title164_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title164_argument'}->checkNotNull();
${'title164_argument'}->createConditionValue();
if(!${'title164_argument'}->isValid()) return ${'title164_argument'}->getErrorMessage();
if(${'title164_argument'} !== null) ${'title164_argument'}->setColumnType('varchar');
if(isset($args->site_srl)) {
${'site_srl165_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl165_argument'}->checkFilter('number');
${'site_srl165_argument'}->createConditionValue();
if(!${'site_srl165_argument'}->isValid()) return ${'site_srl165_argument'}->getErrorMessage();
} else
${'site_srl165_argument'} = NULL;if(${'site_srl165_argument'} !== null) ${'site_srl165_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title164_argument,"in", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl165_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>