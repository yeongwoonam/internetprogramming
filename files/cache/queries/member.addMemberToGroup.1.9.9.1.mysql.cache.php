<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("addMemberToGroup");
$query->setAction("insert");
$query->setPriority("");

${'group_srl103_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl103_argument'}->checkNotNull();
if(!${'group_srl103_argument'}->isValid()) return ${'group_srl103_argument'}->getErrorMessage();
if(${'group_srl103_argument'} !== null) ${'group_srl103_argument'}->setColumnType('number');

${'member_srl104_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl104_argument'}->checkNotNull();
if(!${'member_srl104_argument'}->isValid()) return ${'member_srl104_argument'}->getErrorMessage();
if(${'member_srl104_argument'} !== null) ${'member_srl104_argument'}->setColumnType('number');

${'site_srl105_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl105_argument'}->ensureDefaultValue('0');
if(!${'site_srl105_argument'}->isValid()) return ${'site_srl105_argument'}->getErrorMessage();
if(${'site_srl105_argument'} !== null) ${'site_srl105_argument'}->setColumnType('number');

${'regdate106_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate106_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate106_argument'}->isValid()) return ${'regdate106_argument'}->getErrorMessage();
if(${'regdate106_argument'} !== null) ${'regdate106_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`group_srl`', ${'group_srl103_argument'})
,new InsertExpression('`member_srl`', ${'member_srl104_argument'})
,new InsertExpression('`site_srl`', ${'site_srl105_argument'})
,new InsertExpression('`regdate`', ${'regdate106_argument'})
));
$query->setTables(array(
new Table('`rx_member_group_member`', '`member_group_member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>