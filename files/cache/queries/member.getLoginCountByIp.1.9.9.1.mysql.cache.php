<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountByIp");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ipaddress)) {
${'ipaddress110_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress110_argument'}->createConditionValue();
if(!${'ipaddress110_argument'}->isValid()) return ${'ipaddress110_argument'}->getErrorMessage();
} else
${'ipaddress110_argument'} = NULL;if(${'ipaddress110_argument'} !== null) ${'ipaddress110_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress110_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>