<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItems");
$query->setAction("select");
$query->setPriority("");

${'menu_srl196_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl196_argument'}->checkFilter('number');
${'menu_srl196_argument'}->checkNotNull();
${'menu_srl196_argument'}->createConditionValue();
if(!${'menu_srl196_argument'}->isValid()) return ${'menu_srl196_argument'}->getErrorMessage();
if(${'menu_srl196_argument'} !== null) ${'menu_srl196_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl197_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl197_argument'}->checkFilter('number');
${'parent_srl197_argument'}->createConditionValue();
if(!${'parent_srl197_argument'}->isValid()) return ${'parent_srl197_argument'}->getErrorMessage();
} else
${'parent_srl197_argument'} = NULL;if(${'parent_srl197_argument'} !== null) ${'parent_srl197_argument'}->setColumnType('number');

${'sort_index198_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index198_argument'}->ensureDefaultValue('listorder');
if(!${'sort_index198_argument'}->isValid()) return ${'sort_index198_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl196_argument,"equal", 'and')
,new ConditionWithArgument('`parent_srl`',$parent_srl197_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index198_argument'}, "desc")
));
$query->setLimit();
return $query; ?>