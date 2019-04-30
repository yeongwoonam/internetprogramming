<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl170_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl170_argument'}->ensureDefaultValue('0');
${'site_srl170_argument'}->checkNotNull();
if(!${'site_srl170_argument'}->isValid()) return ${'site_srl170_argument'}->getErrorMessage();
if(${'site_srl170_argument'} !== null) ${'site_srl170_argument'}->setColumnType('number');

${'module_srl171_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl171_argument'}->checkNotNull();
if(!${'module_srl171_argument'}->isValid()) return ${'module_srl171_argument'}->getErrorMessage();
if(${'module_srl171_argument'} !== null) ${'module_srl171_argument'}->setColumnType('number');

${'module_category_srl172_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl172_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl172_argument'}->isValid()) return ${'module_category_srl172_argument'}->getErrorMessage();
if(${'module_category_srl172_argument'} !== null) ${'module_category_srl172_argument'}->setColumnType('number');

${'mid173_argument'} = new Argument('mid', $args->{'mid'});
${'mid173_argument'}->checkNotNull();
if(!${'mid173_argument'}->isValid()) return ${'mid173_argument'}->getErrorMessage();
if(${'mid173_argument'} !== null) ${'mid173_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin174_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin174_argument'}->isValid()) return ${'skin174_argument'}->getErrorMessage();
} else
${'skin174_argument'} = NULL;if(${'skin174_argument'} !== null) ${'skin174_argument'}->setColumnType('varchar');

${'is_skin_fix175_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix175_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix175_argument'}->isValid()) return ${'is_skin_fix175_argument'}->getErrorMessage();
if(${'is_skin_fix175_argument'} !== null) ${'is_skin_fix175_argument'}->setColumnType('char');

${'is_mskin_fix176_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix176_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix176_argument'}->isValid()) return ${'is_mskin_fix176_argument'}->getErrorMessage();
if(${'is_mskin_fix176_argument'} !== null) ${'is_mskin_fix176_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin177_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin177_argument'}->isValid()) return ${'mskin177_argument'}->getErrorMessage();
} else
${'mskin177_argument'} = NULL;if(${'mskin177_argument'} !== null) ${'mskin177_argument'}->setColumnType('varchar');

${'browser_title178_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title178_argument'}->checkNotNull();
if(!${'browser_title178_argument'}->isValid()) return ${'browser_title178_argument'}->getErrorMessage();
if(${'browser_title178_argument'} !== null) ${'browser_title178_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl179_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl179_argument'}->isValid()) return ${'layout_srl179_argument'}->getErrorMessage();
} else
${'layout_srl179_argument'} = NULL;if(${'layout_srl179_argument'} !== null) ${'layout_srl179_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description180_argument'} = new Argument('description', $args->{'description'});
if(!${'description180_argument'}->isValid()) return ${'description180_argument'}->getErrorMessage();
} else
${'description180_argument'} = NULL;if(${'description180_argument'} !== null) ${'description180_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content181_argument'} = new Argument('content', $args->{'content'});
if(!${'content181_argument'}->isValid()) return ${'content181_argument'}->getErrorMessage();
} else
${'content181_argument'} = NULL;if(${'content181_argument'} !== null) ${'content181_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent182_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent182_argument'}->isValid()) return ${'mcontent182_argument'}->getErrorMessage();
} else
${'mcontent182_argument'} = NULL;if(${'mcontent182_argument'} !== null) ${'mcontent182_argument'}->setColumnType('bigtext');

${'module183_argument'} = new Argument('module', $args->{'module'});
${'module183_argument'}->checkNotNull();
if(!${'module183_argument'}->isValid()) return ${'module183_argument'}->getErrorMessage();
if(${'module183_argument'} !== null) ${'module183_argument'}->setColumnType('varchar');

${'is_default184_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default184_argument'}->ensureDefaultValue('N');
${'is_default184_argument'}->checkNotNull();
if(!${'is_default184_argument'}->isValid()) return ${'is_default184_argument'}->getErrorMessage();
if(${'is_default184_argument'} !== null) ${'is_default184_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl185_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl185_argument'}->checkFilter('number');
if(!${'menu_srl185_argument'}->isValid()) return ${'menu_srl185_argument'}->getErrorMessage();
} else
${'menu_srl185_argument'} = NULL;if(${'menu_srl185_argument'} !== null) ${'menu_srl185_argument'}->setColumnType('number');

${'open_rss186_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss186_argument'}->ensureDefaultValue('Y');
${'open_rss186_argument'}->checkNotNull();
if(!${'open_rss186_argument'}->isValid()) return ${'open_rss186_argument'}->getErrorMessage();
if(${'open_rss186_argument'} !== null) ${'open_rss186_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text187_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text187_argument'}->isValid()) return ${'header_text187_argument'}->getErrorMessage();
} else
${'header_text187_argument'} = NULL;if(${'header_text187_argument'} !== null) ${'header_text187_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text188_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text188_argument'}->isValid()) return ${'footer_text188_argument'}->getErrorMessage();
} else
${'footer_text188_argument'} = NULL;if(${'footer_text188_argument'} !== null) ${'footer_text188_argument'}->setColumnType('text');

${'regdate189_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate189_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate189_argument'}->isValid()) return ${'regdate189_argument'}->getErrorMessage();
if(${'regdate189_argument'} !== null) ${'regdate189_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl190_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl190_argument'}->isValid()) return ${'mlayout_srl190_argument'}->getErrorMessage();
} else
${'mlayout_srl190_argument'} = NULL;if(${'mlayout_srl190_argument'} !== null) ${'mlayout_srl190_argument'}->setColumnType('number');

${'use_mobile191_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile191_argument'}->ensureDefaultValue('N');
if(!${'use_mobile191_argument'}->isValid()) return ${'use_mobile191_argument'}->getErrorMessage();
if(${'use_mobile191_argument'} !== null) ${'use_mobile191_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl170_argument'})
,new InsertExpression('`module_srl`', ${'module_srl171_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl172_argument'})
,new InsertExpression('`mid`', ${'mid173_argument'})
,new InsertExpression('`skin`', ${'skin174_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix175_argument'})
,new InsertExpression('`is_mskin_fix`', ${'is_mskin_fix176_argument'})
,new InsertExpression('`mskin`', ${'mskin177_argument'})
,new InsertExpression('`browser_title`', ${'browser_title178_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl179_argument'})
,new InsertExpression('`description`', ${'description180_argument'})
,new InsertExpression('`content`', ${'content181_argument'})
,new InsertExpression('`mcontent`', ${'mcontent182_argument'})
,new InsertExpression('`module`', ${'module183_argument'})
,new InsertExpression('`is_default`', ${'is_default184_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl185_argument'})
,new InsertExpression('`open_rss`', ${'open_rss186_argument'})
,new InsertExpression('`header_text`', ${'header_text187_argument'})
,new InsertExpression('`footer_text`', ${'footer_text188_argument'})
,new InsertExpression('`regdate`', ${'regdate189_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl190_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile191_argument'})
));
$query->setTables(array(
new Table('`rx_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>