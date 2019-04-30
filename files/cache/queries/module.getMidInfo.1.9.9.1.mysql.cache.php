<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid167_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid167_argument'}->createConditionValue();
if(!${'mid167_argument'}->isValid()) return ${'mid167_argument'}->getErrorMessage();
} else
${'mid167_argument'} = NULL;if(${'mid167_argument'} !== null) ${'mid167_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl168_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl168_argument'}->createConditionValue();
if(!${'module_srl168_argument'}->isValid()) return ${'module_srl168_argument'}->getErrorMessage();
} else
${'module_srl168_argument'} = NULL;if(${'module_srl168_argument'} !== null) ${'module_srl168_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl169_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl169_argument'}->createConditionValue();
if(!${'site_srl169_argument'}->isValid()) return ${'site_srl169_argument'}->getErrorMessage();
} else
${'site_srl169_argument'} = NULL;if(${'site_srl169_argument'} !== null) ${'site_srl169_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid167_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl168_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl169_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>