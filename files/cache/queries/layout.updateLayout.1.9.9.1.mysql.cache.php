<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title208_argument'} = new Argument('title', $args->{'title'});
if(!${'title208_argument'}->isValid()) return ${'title208_argument'}->getErrorMessage();
} else
${'title208_argument'} = NULL;if(${'title208_argument'} !== null) ${'title208_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars209_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars209_argument'}->isValid()) return ${'extra_vars209_argument'}->getErrorMessage();
} else
${'extra_vars209_argument'} = NULL;if(${'extra_vars209_argument'} !== null) ${'extra_vars209_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout210_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout210_argument'}->isValid()) return ${'layout210_argument'}->getErrorMessage();
} else
${'layout210_argument'} = NULL;if(${'layout210_argument'} !== null) ${'layout210_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path211_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path211_argument'}->isValid()) return ${'layout_path211_argument'}->getErrorMessage();
} else
${'layout_path211_argument'} = NULL;if(${'layout_path211_argument'} !== null) ${'layout_path211_argument'}->setColumnType('varchar');

${'layout_srl212_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl212_argument'}->checkFilter('number');
${'layout_srl212_argument'}->checkNotNull();
${'layout_srl212_argument'}->createConditionValue();
if(!${'layout_srl212_argument'}->isValid()) return ${'layout_srl212_argument'}->getErrorMessage();
if(${'layout_srl212_argument'} !== null) ${'layout_srl212_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title208_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars209_argument'})
,new UpdateExpression('`layout`', ${'layout210_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path211_argument'})
));
$query->setTables(array(
new Table('`rx_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl212_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>