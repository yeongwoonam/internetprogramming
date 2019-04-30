<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertComponent");
$query->setAction("insert");
$query->setPriority("");

${'component_name129_argument'} = new Argument('component_name', $args->{'component_name'});
${'component_name129_argument'}->checkNotNull();
if(!${'component_name129_argument'}->isValid()) return ${'component_name129_argument'}->getErrorMessage();
if(${'component_name129_argument'} !== null) ${'component_name129_argument'}->setColumnType('varchar');

${'enabled130_argument'} = new Argument('enabled', $args->{'enabled'});
${'enabled130_argument'}->ensureDefaultValue('N');
if(!${'enabled130_argument'}->isValid()) return ${'enabled130_argument'}->getErrorMessage();
if(${'enabled130_argument'} !== null) ${'enabled130_argument'}->setColumnType('char');

${'list_order131_argument'} = new Argument('list_order', $args->{'list_order'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'list_order131_argument'}->ensureDefaultValue($sequence);
if(!${'list_order131_argument'}->isValid()) return ${'list_order131_argument'}->getErrorMessage();
if(${'list_order131_argument'} !== null) ${'list_order131_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`component_name`', ${'component_name129_argument'})
,new InsertExpression('`enabled`', ${'enabled130_argument'})
,new InsertExpression('`list_order`', ${'list_order131_argument'})
));
$query->setTables(array(
new Table('`rx_editor_components`', '`editor_components`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>