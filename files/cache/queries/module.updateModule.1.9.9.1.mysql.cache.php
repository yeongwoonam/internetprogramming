<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module269_argument'} = new Argument('module', $args->{'module'});
${'module269_argument'}->checkNotNull();
if(!${'module269_argument'}->isValid()) return ${'module269_argument'}->getErrorMessage();
if(${'module269_argument'} !== null) ${'module269_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl270_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl270_argument'}->isValid()) return ${'module_category_srl270_argument'}->getErrorMessage();
} else
${'module_category_srl270_argument'} = NULL;if(${'module_category_srl270_argument'} !== null) ${'module_category_srl270_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl271_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl271_argument'}->isValid()) return ${'layout_srl271_argument'}->getErrorMessage();
} else
${'layout_srl271_argument'} = NULL;if(${'layout_srl271_argument'} !== null) ${'layout_srl271_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin272_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin272_argument'}->isValid()) return ${'skin272_argument'}->getErrorMessage();
} else
${'skin272_argument'} = NULL;if(${'skin272_argument'} !== null) ${'skin272_argument'}->setColumnType('varchar');

${'is_skin_fix273_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix273_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix273_argument'}->isValid()) return ${'is_skin_fix273_argument'}->getErrorMessage();
if(${'is_skin_fix273_argument'} !== null) ${'is_skin_fix273_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin274_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin274_argument'}->isValid()) return ${'mskin274_argument'}->getErrorMessage();
} else
${'mskin274_argument'} = NULL;if(${'mskin274_argument'} !== null) ${'mskin274_argument'}->setColumnType('varchar');

${'is_mskin_fix275_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix275_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix275_argument'}->isValid()) return ${'is_mskin_fix275_argument'}->getErrorMessage();
if(${'is_mskin_fix275_argument'} !== null) ${'is_mskin_fix275_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl276_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl276_argument'}->checkFilter('number');
if(!${'menu_srl276_argument'}->isValid()) return ${'menu_srl276_argument'}->getErrorMessage();
} else
${'menu_srl276_argument'} = NULL;if(${'menu_srl276_argument'} !== null) ${'menu_srl276_argument'}->setColumnType('number');

${'mid277_argument'} = new Argument('mid', $args->{'mid'});
${'mid277_argument'}->checkNotNull();
if(!${'mid277_argument'}->isValid()) return ${'mid277_argument'}->getErrorMessage();
if(${'mid277_argument'} !== null) ${'mid277_argument'}->setColumnType('varchar');

${'browser_title278_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title278_argument'}->checkNotNull();
if(!${'browser_title278_argument'}->isValid()) return ${'browser_title278_argument'}->getErrorMessage();
if(${'browser_title278_argument'} !== null) ${'browser_title278_argument'}->setColumnType('varchar');

${'description279_argument'} = new Argument('description', $args->{'description'});
${'description279_argument'}->ensureDefaultValue('');
if(!${'description279_argument'}->isValid()) return ${'description279_argument'}->getErrorMessage();
if(${'description279_argument'} !== null) ${'description279_argument'}->setColumnType('text');

${'is_default280_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default280_argument'}->ensureDefaultValue('N');
${'is_default280_argument'}->checkNotNull();
if(!${'is_default280_argument'}->isValid()) return ${'is_default280_argument'}->getErrorMessage();
if(${'is_default280_argument'} !== null) ${'is_default280_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content281_argument'} = new Argument('content', $args->{'content'});
if(!${'content281_argument'}->isValid()) return ${'content281_argument'}->getErrorMessage();
} else
${'content281_argument'} = NULL;if(${'content281_argument'} !== null) ${'content281_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent282_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent282_argument'}->isValid()) return ${'mcontent282_argument'}->getErrorMessage();
} else
${'mcontent282_argument'} = NULL;if(${'mcontent282_argument'} !== null) ${'mcontent282_argument'}->setColumnType('bigtext');

${'open_rss283_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss283_argument'}->ensureDefaultValue('Y');
${'open_rss283_argument'}->checkNotNull();
if(!${'open_rss283_argument'}->isValid()) return ${'open_rss283_argument'}->getErrorMessage();
if(${'open_rss283_argument'} !== null) ${'open_rss283_argument'}->setColumnType('char');

${'header_text284_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text284_argument'}->ensureDefaultValue('');
if(!${'header_text284_argument'}->isValid()) return ${'header_text284_argument'}->getErrorMessage();
if(${'header_text284_argument'} !== null) ${'header_text284_argument'}->setColumnType('text');

${'footer_text285_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text285_argument'}->ensureDefaultValue('');
if(!${'footer_text285_argument'}->isValid()) return ${'footer_text285_argument'}->getErrorMessage();
if(${'footer_text285_argument'} !== null) ${'footer_text285_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl286_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl286_argument'}->isValid()) return ${'mlayout_srl286_argument'}->getErrorMessage();
} else
${'mlayout_srl286_argument'} = NULL;if(${'mlayout_srl286_argument'} !== null) ${'mlayout_srl286_argument'}->setColumnType('number');

${'use_mobile287_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile287_argument'}->ensureDefaultValue('N');
if(!${'use_mobile287_argument'}->isValid()) return ${'use_mobile287_argument'}->getErrorMessage();
if(${'use_mobile287_argument'} !== null) ${'use_mobile287_argument'}->setColumnType('char');

${'site_srl288_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl288_argument'}->checkFilter('number');
${'site_srl288_argument'}->ensureDefaultValue('0');
${'site_srl288_argument'}->checkNotNull();
${'site_srl288_argument'}->createConditionValue();
if(!${'site_srl288_argument'}->isValid()) return ${'site_srl288_argument'}->getErrorMessage();
if(${'site_srl288_argument'} !== null) ${'site_srl288_argument'}->setColumnType('number');

${'module_srl289_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl289_argument'}->checkFilter('number');
${'module_srl289_argument'}->checkNotNull();
${'module_srl289_argument'}->createConditionValue();
if(!${'module_srl289_argument'}->isValid()) return ${'module_srl289_argument'}->getErrorMessage();
if(${'module_srl289_argument'} !== null) ${'module_srl289_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module269_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl270_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl271_argument'})
,new UpdateExpression('`skin`', ${'skin272_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix273_argument'})
,new UpdateExpression('`mskin`', ${'mskin274_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix275_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl276_argument'})
,new UpdateExpression('`mid`', ${'mid277_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title278_argument'})
,new UpdateExpression('`description`', ${'description279_argument'})
,new UpdateExpression('`is_default`', ${'is_default280_argument'})
,new UpdateExpression('`content`', ${'content281_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent282_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss283_argument'})
,new UpdateExpression('`header_text`', ${'header_text284_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text285_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl286_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile287_argument'})
));
$query->setTables(array(
new Table('`rx_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl288_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl289_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>