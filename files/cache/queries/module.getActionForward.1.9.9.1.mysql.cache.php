<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act115_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act115_argument'}->createConditionValue();
if(!${'act115_argument'}->isValid()) return ${'act115_argument'}->getErrorMessage();
} else
${'act115_argument'} = NULL;if(${'act115_argument'} !== null) ${'act115_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act115_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>