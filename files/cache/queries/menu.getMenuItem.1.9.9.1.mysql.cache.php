<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItem");
$query->setAction("select");
$query->setPriority("");

${'menu_item_srl166_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl166_argument'}->checkFilter('number');
${'menu_item_srl166_argument'}->checkNotNull();
${'menu_item_srl166_argument'}->createConditionValue();
if(!${'menu_item_srl166_argument'}->isValid()) return ${'menu_item_srl166_argument'}->getErrorMessage();
if(${'menu_item_srl166_argument'} !== null) ${'menu_item_srl166_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl166_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>