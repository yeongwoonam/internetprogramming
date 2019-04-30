<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->user_id)) {
${'user_id76_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id76_argument'}->createConditionValue();
if(!${'user_id76_argument'}->isValid()) return ${'user_id76_argument'}->getErrorMessage();
} else
${'user_id76_argument'} = NULL;if(${'user_id76_argument'} !== null) ${'user_id76_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address77_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address77_argument'}->createConditionValue();
if(!${'email_address77_argument'}->isValid()) return ${'email_address77_argument'}->getErrorMessage();
} else
${'email_address77_argument'} = NULL;if(${'email_address77_argument'} !== null) ${'email_address77_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name78_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name78_argument'}->createConditionValue();
if(!${'nick_name78_argument'}->isValid()) return ${'nick_name78_argument'}->getErrorMessage();
} else
${'nick_name78_argument'} = NULL;if(${'nick_name78_argument'} !== null) ${'nick_name78_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`member_srl`')
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id76_argument,"equal", 'and')
,new ConditionWithArgument('`email_address`',$email_address77_argument,"equal", 'and')
,new ConditionWithArgument('`nick_name`',$nick_name78_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>