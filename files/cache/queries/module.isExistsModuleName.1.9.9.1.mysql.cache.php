<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl136_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl136_argument'}->createConditionValue();
if(!${'site_srl136_argument'}->isValid()) return ${'site_srl136_argument'}->getErrorMessage();
} else
${'site_srl136_argument'} = NULL;if(${'site_srl136_argument'} !== null) ${'site_srl136_argument'}->setColumnType('number');

${'mid137_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid137_argument'}->checkNotNull();
${'mid137_argument'}->createConditionValue();
if(!${'mid137_argument'}->isValid()) return ${'mid137_argument'}->getErrorMessage();
if(${'mid137_argument'} !== null) ${'mid137_argument'}->setColumnType('varchar');

${'module_srl138_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl138_argument'}->ensureDefaultValue('0');
${'module_srl138_argument'}->checkNotNull();
${'module_srl138_argument'}->createConditionValue();
if(!${'module_srl138_argument'}->isValid()) return ${'module_srl138_argument'}->getErrorMessage();
if(${'module_srl138_argument'} !== null) ${'module_srl138_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`rx_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl136_argument,"equal", 'and')
,new ConditionWithArgument('`mid`',$mid137_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl138_argument,"notequal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>