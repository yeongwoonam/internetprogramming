<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url290_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url290_argument'}->checkNotNull();
${'url290_argument'}->createConditionValue();
if(!${'url290_argument'}->isValid()) return ${'url290_argument'}->getErrorMessage();
if(${'url290_argument'} !== null) ${'url290_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut291_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut291_argument'}->createConditionValue();
if(!${'is_shortcut291_argument'}->isValid()) return ${'is_shortcut291_argument'}->getErrorMessage();
} else
${'is_shortcut291_argument'} = NULL;if(${'is_shortcut291_argument'} !== null) ${'is_shortcut291_argument'}->setColumnType('char');

${'site_srl292_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl292_argument'}->checkNotNull();
${'site_srl292_argument'}->createConditionValue();
if(!${'site_srl292_argument'}->isValid()) return ${'site_srl292_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('MI.`url`',$url290_argument,"equal", 'and')
,new ConditionWithArgument('MI.`is_shortcut`',$is_shortcut291_argument,"equal", 'and')
,new ConditionSubquery('MI.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`rx_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('M.`site_srl`',$site_srl292_argument,"equal", 'and')),'and')
),
array(),
array(),
null
),"in", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>