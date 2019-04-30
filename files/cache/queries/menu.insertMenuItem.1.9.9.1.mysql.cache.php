<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl145_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl145_argument'}->checkFilter('number');
${'menu_item_srl145_argument'}->checkNotNull();
if(!${'menu_item_srl145_argument'}->isValid()) return ${'menu_item_srl145_argument'}->getErrorMessage();
if(${'menu_item_srl145_argument'} !== null) ${'menu_item_srl145_argument'}->setColumnType('number');

${'parent_srl146_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl146_argument'}->checkFilter('number');
${'parent_srl146_argument'}->ensureDefaultValue('0');
if(!${'parent_srl146_argument'}->isValid()) return ${'parent_srl146_argument'}->getErrorMessage();
if(${'parent_srl146_argument'} !== null) ${'parent_srl146_argument'}->setColumnType('number');

${'menu_srl147_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl147_argument'}->checkFilter('number');
${'menu_srl147_argument'}->checkNotNull();
if(!${'menu_srl147_argument'}->isValid()) return ${'menu_srl147_argument'}->getErrorMessage();
if(${'menu_srl147_argument'} !== null) ${'menu_srl147_argument'}->setColumnType('number');

${'name148_argument'} = new Argument('name', $args->{'name'});
${'name148_argument'}->checkNotNull();
if(!${'name148_argument'}->isValid()) return ${'name148_argument'}->getErrorMessage();
if(${'name148_argument'} !== null) ${'name148_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc149_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc149_argument'}->isValid()) return ${'desc149_argument'}->getErrorMessage();
} else
${'desc149_argument'} = NULL;if(${'desc149_argument'} !== null) ${'desc149_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url150_argument'} = new Argument('url', $args->{'url'});
if(!${'url150_argument'}->isValid()) return ${'url150_argument'}->getErrorMessage();
} else
${'url150_argument'} = NULL;if(${'url150_argument'} !== null) ${'url150_argument'}->setColumnType('varchar');

${'is_shortcut151_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut151_argument'}->ensureDefaultValue('N');
${'is_shortcut151_argument'}->checkNotNull();
if(!${'is_shortcut151_argument'}->isValid()) return ${'is_shortcut151_argument'}->getErrorMessage();
if(${'is_shortcut151_argument'} !== null) ${'is_shortcut151_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window152_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window152_argument'}->isValid()) return ${'open_window152_argument'}->getErrorMessage();
} else
${'open_window152_argument'} = NULL;if(${'open_window152_argument'} !== null) ${'open_window152_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand153_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand153_argument'}->isValid()) return ${'expand153_argument'}->getErrorMessage();
} else
${'expand153_argument'} = NULL;if(${'expand153_argument'} !== null) ${'expand153_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn154_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn154_argument'}->isValid()) return ${'normal_btn154_argument'}->getErrorMessage();
} else
${'normal_btn154_argument'} = NULL;if(${'normal_btn154_argument'} !== null) ${'normal_btn154_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn155_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn155_argument'}->isValid()) return ${'hover_btn155_argument'}->getErrorMessage();
} else
${'hover_btn155_argument'} = NULL;if(${'hover_btn155_argument'} !== null) ${'hover_btn155_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn156_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn156_argument'}->isValid()) return ${'active_btn156_argument'}->getErrorMessage();
} else
${'active_btn156_argument'} = NULL;if(${'active_btn156_argument'} !== null) ${'active_btn156_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls157_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls157_argument'}->isValid()) return ${'group_srls157_argument'}->getErrorMessage();
} else
${'group_srls157_argument'} = NULL;if(${'group_srls157_argument'} !== null) ${'group_srls157_argument'}->setColumnType('text');

${'listorder158_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder158_argument'}->checkNotNull();
if(!${'listorder158_argument'}->isValid()) return ${'listorder158_argument'}->getErrorMessage();
if(${'listorder158_argument'} !== null) ${'listorder158_argument'}->setColumnType('number');

${'regdate159_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate159_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate159_argument'}->isValid()) return ${'regdate159_argument'}->getErrorMessage();
if(${'regdate159_argument'} !== null) ${'regdate159_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl145_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl146_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl147_argument'})
,new InsertExpression('`name`', ${'name148_argument'})
,new InsertExpression('`desc`', ${'desc149_argument'})
,new InsertExpression('`url`', ${'url150_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut151_argument'})
,new InsertExpression('`open_window`', ${'open_window152_argument'})
,new InsertExpression('`expand`', ${'expand153_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn154_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn155_argument'})
,new InsertExpression('`active_btn`', ${'active_btn156_argument'})
,new InsertExpression('`group_srls`', ${'group_srls157_argument'})
,new InsertExpression('`listorder`', ${'listorder158_argument'})
,new InsertExpression('`regdate`', ${'regdate159_argument'})
));
$query->setTables(array(
new Table('`rx_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>