<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLastLogin");
$query->setAction("update");
$query->setPriority("");

${'member_srl111_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl111_argument'}->checkFilter('number');
${'member_srl111_argument'}->checkNotNull();
if(!${'member_srl111_argument'}->isValid()) return ${'member_srl111_argument'}->getErrorMessage();
if(${'member_srl111_argument'} !== null) ${'member_srl111_argument'}->setColumnType('number');

${'last_login112_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login112_argument'}->ensureDefaultValue(getInternalDateTime());
${'last_login112_argument'}->checkNotNull();
if(!${'last_login112_argument'}->isValid()) return ${'last_login112_argument'}->getErrorMessage();
if(${'last_login112_argument'} !== null) ${'last_login112_argument'}->setColumnType('date');

${'member_srl113_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl113_argument'}->checkFilter('number');
${'member_srl113_argument'}->checkNotNull();
${'member_srl113_argument'}->createConditionValue();
if(!${'member_srl113_argument'}->isValid()) return ${'member_srl113_argument'}->getErrorMessage();
if(${'member_srl113_argument'} !== null) ${'member_srl113_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`member_srl`', ${'member_srl111_argument'})
,new UpdateExpression('`last_login`', ${'last_login112_argument'})
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl113_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>