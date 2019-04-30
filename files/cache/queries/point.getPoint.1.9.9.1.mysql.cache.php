<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPoint");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl263_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl263_argument'}->createConditionValue();
if(!${'member_srl263_argument'}->isValid()) return ${'member_srl263_argument'}->getErrorMessage();
} else
${'member_srl263_argument'} = NULL;if(${'member_srl263_argument'} !== null) ${'member_srl263_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl263_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>