<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenu");
$query->setAction("select");
$query->setPriority("");

${'menu_srl139_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl139_argument'}->checkFilter('number');
${'menu_srl139_argument'}->checkNotNull();
${'menu_srl139_argument'}->createConditionValue();
if(!${'menu_srl139_argument'}->isValid()) return ${'menu_srl139_argument'}->getErrorMessage();
if(${'menu_srl139_argument'} !== null) ${'menu_srl139_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl139_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>