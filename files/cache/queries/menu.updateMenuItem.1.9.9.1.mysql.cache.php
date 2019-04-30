<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl293_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl293_argument'}->isValid()) return ${'menu_srl293_argument'}->getErrorMessage();
} else
${'menu_srl293_argument'} = NULL;if(${'menu_srl293_argument'} !== null) ${'menu_srl293_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl294_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl294_argument'}->isValid()) return ${'parent_srl294_argument'}->getErrorMessage();
} else
${'parent_srl294_argument'} = NULL;if(${'parent_srl294_argument'} !== null) ${'parent_srl294_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name295_argument'} = new Argument('name', $args->{'name'});
if(!${'name295_argument'}->isValid()) return ${'name295_argument'}->getErrorMessage();
} else
${'name295_argument'} = NULL;if(${'name295_argument'} !== null) ${'name295_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc296_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc296_argument'}->isValid()) return ${'desc296_argument'}->getErrorMessage();
} else
${'desc296_argument'} = NULL;if(${'desc296_argument'} !== null) ${'desc296_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url297_argument'} = new Argument('url', $args->{'url'});
if(!${'url297_argument'}->isValid()) return ${'url297_argument'}->getErrorMessage();
} else
${'url297_argument'} = NULL;if(${'url297_argument'} !== null) ${'url297_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut298_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut298_argument'}->isValid()) return ${'is_shortcut298_argument'}->getErrorMessage();
} else
${'is_shortcut298_argument'} = NULL;if(${'is_shortcut298_argument'} !== null) ${'is_shortcut298_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window299_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window299_argument'}->isValid()) return ${'open_window299_argument'}->getErrorMessage();
} else
${'open_window299_argument'} = NULL;if(${'open_window299_argument'} !== null) ${'open_window299_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand300_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand300_argument'}->isValid()) return ${'expand300_argument'}->getErrorMessage();
} else
${'expand300_argument'} = NULL;if(${'expand300_argument'} !== null) ${'expand300_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn301_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn301_argument'}->isValid()) return ${'normal_btn301_argument'}->getErrorMessage();
} else
${'normal_btn301_argument'} = NULL;if(${'normal_btn301_argument'} !== null) ${'normal_btn301_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn302_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn302_argument'}->isValid()) return ${'hover_btn302_argument'}->getErrorMessage();
} else
${'hover_btn302_argument'} = NULL;if(${'hover_btn302_argument'} !== null) ${'hover_btn302_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn303_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn303_argument'}->isValid()) return ${'active_btn303_argument'}->getErrorMessage();
} else
${'active_btn303_argument'} = NULL;if(${'active_btn303_argument'} !== null) ${'active_btn303_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls304_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls304_argument'}->isValid()) return ${'group_srls304_argument'}->getErrorMessage();
} else
${'group_srls304_argument'} = NULL;if(${'group_srls304_argument'} !== null) ${'group_srls304_argument'}->setColumnType('text');

${'menu_item_srl305_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl305_argument'}->checkFilter('number');
${'menu_item_srl305_argument'}->checkNotNull();
${'menu_item_srl305_argument'}->createConditionValue();
if(!${'menu_item_srl305_argument'}->isValid()) return ${'menu_item_srl305_argument'}->getErrorMessage();
if(${'menu_item_srl305_argument'} !== null) ${'menu_item_srl305_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl293_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl294_argument'})
,new UpdateExpression('`name`', ${'name295_argument'})
,new UpdateExpression('`desc`', ${'desc296_argument'})
,new UpdateExpression('`url`', ${'url297_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut298_argument'})
,new UpdateExpression('`open_window`', ${'open_window299_argument'})
,new UpdateExpression('`expand`', ${'expand300_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn301_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn302_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn303_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls304_argument'})
));
$query->setTables(array(
new Table('`rx_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl305_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>