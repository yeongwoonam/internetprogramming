<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSavedDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl255_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl255_argument'}->createConditionValue();
if(!${'module_srl255_argument'}->isValid()) return ${'module_srl255_argument'}->getErrorMessage();
} else
${'module_srl255_argument'} = NULL;if(${'module_srl255_argument'} !== null) ${'module_srl255_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl256_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl256_argument'}->createConditionValue();
if(!${'member_srl256_argument'}->isValid()) return ${'member_srl256_argument'}->getErrorMessage();
} else
${'member_srl256_argument'} = NULL;if(${'member_srl256_argument'} !== null) ${'member_srl256_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress257_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress257_argument'}->createConditionValue();
if(!${'ipaddress257_argument'}->isValid()) return ${'ipaddress257_argument'}->getErrorMessage();
} else
${'ipaddress257_argument'} = NULL;if(${'ipaddress257_argument'} !== null) ${'ipaddress257_argument'}->setColumnType('varchar');
if(isset($args->certify_key)) {
${'certify_key258_argument'} = new ConditionArgument('certify_key', $args->certify_key, 'equal');
${'certify_key258_argument'}->createConditionValue();
if(!${'certify_key258_argument'}->isValid()) return ${'certify_key258_argument'}->getErrorMessage();
} else
${'certify_key258_argument'} = NULL;if(${'certify_key258_argument'} !== null) ${'certify_key258_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl255_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl256_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress257_argument,"equal", 'and')
,new ConditionWithArgument('`certify_key`',$certify_key258_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>