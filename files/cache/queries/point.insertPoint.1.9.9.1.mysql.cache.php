<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl264_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl264_argument'}->checkFilter('number');
${'member_srl264_argument'}->checkNotNull();
if(!${'member_srl264_argument'}->isValid()) return ${'member_srl264_argument'}->getErrorMessage();
if(${'member_srl264_argument'} !== null) ${'member_srl264_argument'}->setColumnType('number');

${'point265_argument'} = new Argument('point', $args->{'point'});
${'point265_argument'}->checkFilter('number');
${'point265_argument'}->ensureDefaultValue('0');
${'point265_argument'}->checkNotNull();
if(!${'point265_argument'}->isValid()) return ${'point265_argument'}->getErrorMessage();
if(${'point265_argument'} !== null) ${'point265_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl264_argument'})
,new InsertExpression('`point`', ${'point265_argument'})
));
$query->setTables(array(
new Table('`rx_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>