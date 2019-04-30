<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act132_argument'} = new Argument('act', $args->{'act'});
${'act132_argument'}->checkNotNull();
if(!${'act132_argument'}->isValid()) return ${'act132_argument'}->getErrorMessage();
if(${'act132_argument'} !== null) ${'act132_argument'}->setColumnType('varchar');

${'module133_argument'} = new Argument('module', $args->{'module'});
${'module133_argument'}->checkNotNull();
if(!${'module133_argument'}->isValid()) return ${'module133_argument'}->getErrorMessage();
if(${'module133_argument'} !== null) ${'module133_argument'}->setColumnType('varchar');

${'type134_argument'} = new Argument('type', $args->{'type'});
${'type134_argument'}->checkNotNull();
if(!${'type134_argument'}->isValid()) return ${'type134_argument'}->getErrorMessage();
if(${'type134_argument'} !== null) ${'type134_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act132_argument'})
,new InsertExpression('`module`', ${'module133_argument'})
,new InsertExpression('`type`', ${'type134_argument'})
));
$query->setTables(array(
new Table('`rx_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>