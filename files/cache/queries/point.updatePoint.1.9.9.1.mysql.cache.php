<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePoint");
$query->setAction("update");
$query->setPriority("");
if(isset($args->point)) {
${'point267_argument'} = new Argument('point', $args->{'point'});
if(!${'point267_argument'}->isValid()) return ${'point267_argument'}->getErrorMessage();
} else
${'point267_argument'} = NULL;if(${'point267_argument'} !== null) ${'point267_argument'}->setColumnType('number');

${'member_srl268_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl268_argument'}->checkFilter('number');
${'member_srl268_argument'}->checkNotNull();
${'member_srl268_argument'}->createConditionValue();
if(!${'member_srl268_argument'}->isValid()) return ${'member_srl268_argument'}->getErrorMessage();
if(${'member_srl268_argument'} !== null) ${'member_srl268_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`point`', ${'point267_argument'})
));
$query->setTables(array(
new Table('`rx_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl268_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>