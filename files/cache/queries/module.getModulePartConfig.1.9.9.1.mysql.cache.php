<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module215_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module215_argument'}->checkNotNull();
${'module215_argument'}->createConditionValue();
if(!${'module215_argument'}->isValid()) return ${'module215_argument'}->getErrorMessage();
if(${'module215_argument'} !== null) ${'module215_argument'}->setColumnType('varchar');

${'module_srl216_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl216_argument'}->checkNotNull();
${'module_srl216_argument'}->createConditionValue();
if(!${'module_srl216_argument'}->isValid()) return ${'module_srl216_argument'}->getErrorMessage();
if(${'module_srl216_argument'} !== null) ${'module_srl216_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`rx_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module215_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl216_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>