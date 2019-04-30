<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid259_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid259_argument'}->ensureDefaultValue('Y');
${'isvalid259_argument'}->checkNotNull();
if(!${'isvalid259_argument'}->isValid()) return ${'isvalid259_argument'}->getErrorMessage();
if(${'isvalid259_argument'} !== null) ${'isvalid259_argument'}->setColumnType('char');

${'upload_target_srl260_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl260_argument'}->checkFilter('number');
${'upload_target_srl260_argument'}->checkNotNull();
${'upload_target_srl260_argument'}->createConditionValue();
if(!${'upload_target_srl260_argument'}->isValid()) return ${'upload_target_srl260_argument'}->getErrorMessage();
if(${'upload_target_srl260_argument'} !== null) ${'upload_target_srl260_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid259_argument'})
));
$query->setTables(array(
new Table('`rx_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl260_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>