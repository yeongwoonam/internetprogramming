<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id116_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id116_argument'}->checkNotNull();
if(!${'user_id116_argument'}->isValid()) return ${'user_id116_argument'}->getErrorMessage();
if(${'user_id116_argument'} !== null) ${'user_id116_argument'}->setColumnType('varchar');

${'regdate117_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate117_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate117_argument'}->isValid()) return ${'regdate117_argument'}->getErrorMessage();
if(${'regdate117_argument'} !== null) ${'regdate117_argument'}->setColumnType('date');

${'description118_argument'} = new Argument('description', $args->{'description'});
${'description118_argument'}->ensureDefaultValue('');
if(!${'description118_argument'}->isValid()) return ${'description118_argument'}->getErrorMessage();
if(${'description118_argument'} !== null) ${'description118_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order119_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order119_argument'}->isValid()) return ${'list_order119_argument'}->getErrorMessage();
} else
${'list_order119_argument'} = NULL;if(${'list_order119_argument'} !== null) ${'list_order119_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id116_argument'})
,new InsertExpression('`regdate`', ${'regdate117_argument'})
,new InsertExpression('`description`', ${'description118_argument'})
,new InsertExpression('`list_order`', ${'list_order119_argument'})
));
$query->setTables(array(
new Table('`rx_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>