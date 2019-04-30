<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl140_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl140_argument'}->checkFilter('number');
${'menu_srl140_argument'}->checkNotNull();
if(!${'menu_srl140_argument'}->isValid()) return ${'menu_srl140_argument'}->getErrorMessage();
if(${'menu_srl140_argument'} !== null) ${'menu_srl140_argument'}->setColumnType('number');

${'site_srl141_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl141_argument'}->checkFilter('number');
${'site_srl141_argument'}->ensureDefaultValue('0');
${'site_srl141_argument'}->checkNotNull();
if(!${'site_srl141_argument'}->isValid()) return ${'site_srl141_argument'}->getErrorMessage();
if(${'site_srl141_argument'} !== null) ${'site_srl141_argument'}->setColumnType('number');

${'title142_argument'} = new Argument('title', $args->{'title'});
${'title142_argument'}->checkNotNull();
if(!${'title142_argument'}->isValid()) return ${'title142_argument'}->getErrorMessage();
if(${'title142_argument'} !== null) ${'title142_argument'}->setColumnType('varchar');

${'listorder143_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder143_argument'}->checkNotNull();
if(!${'listorder143_argument'}->isValid()) return ${'listorder143_argument'}->getErrorMessage();
if(${'listorder143_argument'} !== null) ${'listorder143_argument'}->setColumnType('number');

${'regdate144_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate144_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate144_argument'}->isValid()) return ${'regdate144_argument'}->getErrorMessage();
if(${'regdate144_argument'} !== null) ${'regdate144_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl140_argument'})
,new InsertExpression('`site_srl`', ${'site_srl141_argument'})
,new InsertExpression('`title`', ${'title142_argument'})
,new InsertExpression('`listorder`', ${'listorder143_argument'})
,new InsertExpression('`regdate`', ${'regdate144_argument'})
));
$query->setTables(array(
new Table('`rx_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>