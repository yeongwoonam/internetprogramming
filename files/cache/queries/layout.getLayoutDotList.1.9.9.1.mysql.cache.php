<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl160_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl160_argument'}->checkFilter('number');
${'site_srl160_argument'}->ensureDefaultValue('0');
${'site_srl160_argument'}->checkNotNull();
${'site_srl160_argument'}->createConditionValue();
if(!${'site_srl160_argument'}->isValid()) return ${'site_srl160_argument'}->getErrorMessage();
if(${'site_srl160_argument'} !== null) ${'site_srl160_argument'}->setColumnType('number');

${'layout_type161_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type161_argument'}->ensureDefaultValue('P');
${'layout_type161_argument'}->createConditionValue();
if(!${'layout_type161_argument'}->isValid()) return ${'layout_type161_argument'}->getErrorMessage();
if(${'layout_type161_argument'} !== null) ${'layout_type161_argument'}->setColumnType('char');

${'layout162_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout162_argument'}->ensureDefaultValue('.');
${'layout162_argument'}->createConditionValue();
if(!${'layout162_argument'}->isValid()) return ${'layout162_argument'}->getErrorMessage();
if(${'layout162_argument'} !== null) ${'layout162_argument'}->setColumnType('varchar');

${'sort_index163_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index163_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index163_argument'}->isValid()) return ${'sort_index163_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl160_argument,"equal", 'and')
,new ConditionWithArgument('`layout_type`',$layout_type161_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout162_argument,"like", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index163_argument'}, "desc")
));
$query->setLimit();
return $query; ?>