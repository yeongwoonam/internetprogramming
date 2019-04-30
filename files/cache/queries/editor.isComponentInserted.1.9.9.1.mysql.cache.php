<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isComponentInserted");
$query->setAction("select");
$query->setPriority("");

${'component_name128_argument'} = new ConditionArgument('component_name', $args->component_name, 'equal');
${'component_name128_argument'}->checkNotNull();
${'component_name128_argument'}->createConditionValue();
if(!${'component_name128_argument'}->isValid()) return ${'component_name128_argument'}->getErrorMessage();
if(${'component_name128_argument'} !== null) ${'component_name128_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`rx_editor_components`', '`editor_components`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`component_name`',$component_name128_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>