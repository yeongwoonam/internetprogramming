<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDomain");
$query->setAction("update");
$query->setPriority("");
if(isset($args->domain)) {
${'domain306_argument'} = new Argument('domain', $args->{'domain'});
if(!${'domain306_argument'}->isValid()) return ${'domain306_argument'}->getErrorMessage();
} else
${'domain306_argument'} = NULL;if(${'domain306_argument'} !== null) ${'domain306_argument'}->setColumnType('varchar');
if(isset($args->is_default_domain)) {
${'is_default_domain307_argument'} = new Argument('is_default_domain', $args->{'is_default_domain'});
if(!${'is_default_domain307_argument'}->isValid()) return ${'is_default_domain307_argument'}->getErrorMessage();
} else
${'is_default_domain307_argument'} = NULL;if(${'is_default_domain307_argument'} !== null) ${'is_default_domain307_argument'}->setColumnType('char');
if(isset($args->index_module_srl)) {
${'index_module_srl308_argument'} = new Argument('index_module_srl', $args->{'index_module_srl'});
if(!${'index_module_srl308_argument'}->isValid()) return ${'index_module_srl308_argument'}->getErrorMessage();
} else
${'index_module_srl308_argument'} = NULL;if(${'index_module_srl308_argument'} !== null) ${'index_module_srl308_argument'}->setColumnType('number');
if(isset($args->index_document_srl)) {
${'index_document_srl309_argument'} = new Argument('index_document_srl', $args->{'index_document_srl'});
if(!${'index_document_srl309_argument'}->isValid()) return ${'index_document_srl309_argument'}->getErrorMessage();
} else
${'index_document_srl309_argument'} = NULL;if(${'index_document_srl309_argument'} !== null) ${'index_document_srl309_argument'}->setColumnType('number');
if(isset($args->default_layout_srl)) {
${'default_layout_srl310_argument'} = new Argument('default_layout_srl', $args->{'default_layout_srl'});
if(!${'default_layout_srl310_argument'}->isValid()) return ${'default_layout_srl310_argument'}->getErrorMessage();
} else
${'default_layout_srl310_argument'} = NULL;if(${'default_layout_srl310_argument'} !== null) ${'default_layout_srl310_argument'}->setColumnType('number');
if(isset($args->default_mlayout_srl)) {
${'default_mlayout_srl311_argument'} = new Argument('default_mlayout_srl', $args->{'default_mlayout_srl'});
if(!${'default_mlayout_srl311_argument'}->isValid()) return ${'default_mlayout_srl311_argument'}->getErrorMessage();
} else
${'default_mlayout_srl311_argument'} = NULL;if(${'default_mlayout_srl311_argument'} !== null) ${'default_mlayout_srl311_argument'}->setColumnType('number');
if(isset($args->default_menu_srl)) {
${'default_menu_srl312_argument'} = new Argument('default_menu_srl', $args->{'default_menu_srl'});
if(!${'default_menu_srl312_argument'}->isValid()) return ${'default_menu_srl312_argument'}->getErrorMessage();
} else
${'default_menu_srl312_argument'} = NULL;if(${'default_menu_srl312_argument'} !== null) ${'default_menu_srl312_argument'}->setColumnType('number');
if(isset($args->http_port)) {
${'http_port313_argument'} = new Argument('http_port', $args->{'http_port'});
if(!${'http_port313_argument'}->isValid()) return ${'http_port313_argument'}->getErrorMessage();
} else
${'http_port313_argument'} = NULL;if(${'http_port313_argument'} !== null) ${'http_port313_argument'}->setColumnType('number');
if(isset($args->https_port)) {
${'https_port314_argument'} = new Argument('https_port', $args->{'https_port'});
if(!${'https_port314_argument'}->isValid()) return ${'https_port314_argument'}->getErrorMessage();
} else
${'https_port314_argument'} = NULL;if(${'https_port314_argument'} !== null) ${'https_port314_argument'}->setColumnType('number');
if(isset($args->security)) {
${'security315_argument'} = new Argument('security', $args->{'security'});
if(!${'security315_argument'}->isValid()) return ${'security315_argument'}->getErrorMessage();
} else
${'security315_argument'} = NULL;if(${'security315_argument'} !== null) ${'security315_argument'}->setColumnType('varchar');
if(isset($args->description)) {
${'description316_argument'} = new Argument('description', $args->{'description'});
if(!${'description316_argument'}->isValid()) return ${'description316_argument'}->getErrorMessage();
} else
${'description316_argument'} = NULL;if(${'description316_argument'} !== null) ${'description316_argument'}->setColumnType('text');
if(isset($args->settings)) {
${'settings317_argument'} = new Argument('settings', $args->{'settings'});
if(!${'settings317_argument'}->isValid()) return ${'settings317_argument'}->getErrorMessage();
} else
${'settings317_argument'} = NULL;if(${'settings317_argument'} !== null) ${'settings317_argument'}->setColumnType('text');
if(isset($args->regdate)) {
${'regdate318_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate318_argument'}->isValid()) return ${'regdate318_argument'}->getErrorMessage();
} else
${'regdate318_argument'} = NULL;if(${'regdate318_argument'} !== null) ${'regdate318_argument'}->setColumnType('date');

${'domain_srl319_argument'} = new ConditionArgument('domain_srl', $args->domain_srl, 'equal');
${'domain_srl319_argument'}->checkFilter('number');
${'domain_srl319_argument'}->checkNotNull();
${'domain_srl319_argument'}->createConditionValue();
if(!${'domain_srl319_argument'}->isValid()) return ${'domain_srl319_argument'}->getErrorMessage();
if(${'domain_srl319_argument'} !== null) ${'domain_srl319_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`domain`', ${'domain306_argument'})
,new UpdateExpression('`is_default_domain`', ${'is_default_domain307_argument'})
,new UpdateExpression('`index_module_srl`', ${'index_module_srl308_argument'})
,new UpdateExpression('`index_document_srl`', ${'index_document_srl309_argument'})
,new UpdateExpression('`default_layout_srl`', ${'default_layout_srl310_argument'})
,new UpdateExpression('`default_mlayout_srl`', ${'default_mlayout_srl311_argument'})
,new UpdateExpression('`default_menu_srl`', ${'default_menu_srl312_argument'})
,new UpdateExpression('`http_port`', ${'http_port313_argument'})
,new UpdateExpression('`https_port`', ${'https_port314_argument'})
,new UpdateExpression('`security`', ${'security315_argument'})
,new UpdateExpression('`description`', ${'description316_argument'})
,new UpdateExpression('`settings`', ${'settings317_argument'})
,new UpdateExpression('`regdate`', ${'regdate318_argument'})
));
$query->setTables(array(
new Table('`rx_domains`', '`domains`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`domain_srl`',$domain_srl319_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>