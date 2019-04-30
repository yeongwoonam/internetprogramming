<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl193_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl193_argument'}->checkFilter('number');
${'module_srl193_argument'}->checkNotNull();
if(!${'module_srl193_argument'}->isValid()) return ${'module_srl193_argument'}->getErrorMessage();
if(${'module_srl193_argument'} !== null) ${'module_srl193_argument'}->setColumnType('number');

${'name194_argument'} = new Argument('name', $args->{'name'});
${'name194_argument'}->checkNotNull();
if(!${'name194_argument'}->isValid()) return ${'name194_argument'}->getErrorMessage();
if(${'name194_argument'} !== null) ${'name194_argument'}->setColumnType('varchar');

${'value195_argument'} = new Argument('value', $args->{'value'});
${'value195_argument'}->checkNotNull();
if(!${'value195_argument'}->isValid()) return ${'value195_argument'}->getErrorMessage();
if(${'value195_argument'} !== null) ${'value195_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl193_argument'})
,new InsertExpression('`name`', ${'name194_argument'})
,new InsertExpression('`value`', ${'value195_argument'})
));
$query->setTables(array(
new Table('`rx_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>