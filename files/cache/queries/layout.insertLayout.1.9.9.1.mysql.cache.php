<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl199_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl199_argument'}->checkFilter('number');
${'layout_srl199_argument'}->checkNotNull();
if(!${'layout_srl199_argument'}->isValid()) return ${'layout_srl199_argument'}->getErrorMessage();
if(${'layout_srl199_argument'} !== null) ${'layout_srl199_argument'}->setColumnType('number');

${'site_srl200_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl200_argument'}->checkFilter('number');
${'site_srl200_argument'}->ensureDefaultValue('0');
${'site_srl200_argument'}->checkNotNull();
if(!${'site_srl200_argument'}->isValid()) return ${'site_srl200_argument'}->getErrorMessage();
if(${'site_srl200_argument'} !== null) ${'site_srl200_argument'}->setColumnType('number');

${'layout201_argument'} = new Argument('layout', $args->{'layout'});
${'layout201_argument'}->checkNotNull();
if(!${'layout201_argument'}->isValid()) return ${'layout201_argument'}->getErrorMessage();
if(${'layout201_argument'} !== null) ${'layout201_argument'}->setColumnType('varchar');

${'title202_argument'} = new Argument('title', $args->{'title'});
${'title202_argument'}->checkNotNull();
if(!${'title202_argument'}->isValid()) return ${'title202_argument'}->getErrorMessage();
if(${'title202_argument'} !== null) ${'title202_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl203_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl203_argument'}->isValid()) return ${'module_srl203_argument'}->getErrorMessage();
} else
${'module_srl203_argument'} = NULL;if(${'module_srl203_argument'} !== null) ${'module_srl203_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars204_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars204_argument'}->isValid()) return ${'extra_vars204_argument'}->getErrorMessage();
} else
${'extra_vars204_argument'} = NULL;if(${'extra_vars204_argument'} !== null) ${'extra_vars204_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path205_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path205_argument'}->isValid()) return ${'layout_path205_argument'}->getErrorMessage();
} else
${'layout_path205_argument'} = NULL;if(${'layout_path205_argument'} !== null) ${'layout_path205_argument'}->setColumnType('varchar');

${'regdate206_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate206_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate206_argument'}->isValid()) return ${'regdate206_argument'}->getErrorMessage();
if(${'regdate206_argument'} !== null) ${'regdate206_argument'}->setColumnType('date');

${'layout_type207_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type207_argument'}->ensureDefaultValue('P');
if(!${'layout_type207_argument'}->isValid()) return ${'layout_type207_argument'}->getErrorMessage();
if(${'layout_type207_argument'} !== null) ${'layout_type207_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl199_argument'})
,new InsertExpression('`site_srl`', ${'site_srl200_argument'})
,new InsertExpression('`layout`', ${'layout201_argument'})
,new InsertExpression('`title`', ${'title202_argument'})
,new InsertExpression('`module_srl`', ${'module_srl203_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars204_argument'})
,new InsertExpression('`layout_path`', ${'layout_path205_argument'})
,new InsertExpression('`regdate`', ${'regdate206_argument'})
,new InsertExpression('`layout_type`', ${'layout_type207_argument'})
));
$query->setTables(array(
new Table('`rx_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>