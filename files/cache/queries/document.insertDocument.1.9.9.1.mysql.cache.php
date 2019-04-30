<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocument");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl218_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl218_argument'}->checkFilter('number');
${'document_srl218_argument'}->checkNotNull();
if(!${'document_srl218_argument'}->isValid()) return ${'document_srl218_argument'}->getErrorMessage();
if(${'document_srl218_argument'} !== null) ${'document_srl218_argument'}->setColumnType('number');

${'module_srl219_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl219_argument'}->checkFilter('number');
${'module_srl219_argument'}->ensureDefaultValue('0');
if(!${'module_srl219_argument'}->isValid()) return ${'module_srl219_argument'}->getErrorMessage();
if(${'module_srl219_argument'} !== null) ${'module_srl219_argument'}->setColumnType('number');

${'category_srl220_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl220_argument'}->checkFilter('number');
${'category_srl220_argument'}->ensureDefaultValue('0');
if(!${'category_srl220_argument'}->isValid()) return ${'category_srl220_argument'}->getErrorMessage();
if(${'category_srl220_argument'} !== null) ${'category_srl220_argument'}->setColumnType('number');

${'lang_code221_argument'} = new Argument('lang_code', $args->{'lang_code'});
${'lang_code221_argument'}->ensureDefaultValue('');
if(!${'lang_code221_argument'}->isValid()) return ${'lang_code221_argument'}->getErrorMessage();
if(${'lang_code221_argument'} !== null) ${'lang_code221_argument'}->setColumnType('varchar');

${'is_notice222_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice222_argument'}->ensureDefaultValue('N');
${'is_notice222_argument'}->checkNotNull();
if(!${'is_notice222_argument'}->isValid()) return ${'is_notice222_argument'}->getErrorMessage();
if(${'is_notice222_argument'} !== null) ${'is_notice222_argument'}->setColumnType('char');

${'title223_argument'} = new Argument('title', $args->{'title'});
${'title223_argument'}->checkNotNull();
if(!${'title223_argument'}->isValid()) return ${'title223_argument'}->getErrorMessage();
if(${'title223_argument'} !== null) ${'title223_argument'}->setColumnType('varchar');

${'title_bold224_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold224_argument'}->ensureDefaultValue('N');
if(!${'title_bold224_argument'}->isValid()) return ${'title_bold224_argument'}->getErrorMessage();
if(${'title_bold224_argument'} !== null) ${'title_bold224_argument'}->setColumnType('char');

${'title_color225_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color225_argument'}->ensureDefaultValue('N');
if(!${'title_color225_argument'}->isValid()) return ${'title_color225_argument'}->getErrorMessage();
if(${'title_color225_argument'} !== null) ${'title_color225_argument'}->setColumnType('varchar');

${'content226_argument'} = new Argument('content', $args->{'content'});
${'content226_argument'}->checkNotNull();
if(!${'content226_argument'}->isValid()) return ${'content226_argument'}->getErrorMessage();
if(${'content226_argument'} !== null) ${'content226_argument'}->setColumnType('bigtext');

${'readed_count227_argument'} = new Argument('readed_count', $args->{'readed_count'});
${'readed_count227_argument'}->ensureDefaultValue('0');
if(!${'readed_count227_argument'}->isValid()) return ${'readed_count227_argument'}->getErrorMessage();
if(${'readed_count227_argument'} !== null) ${'readed_count227_argument'}->setColumnType('number');

${'blamed_count228_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count228_argument'}->ensureDefaultValue('0');
if(!${'blamed_count228_argument'}->isValid()) return ${'blamed_count228_argument'}->getErrorMessage();
if(${'blamed_count228_argument'} !== null) ${'blamed_count228_argument'}->setColumnType('number');

${'voted_count229_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count229_argument'}->ensureDefaultValue('0');
if(!${'voted_count229_argument'}->isValid()) return ${'voted_count229_argument'}->getErrorMessage();
if(${'voted_count229_argument'} !== null) ${'voted_count229_argument'}->setColumnType('number');

${'comment_count230_argument'} = new Argument('comment_count', $args->{'comment_count'});
${'comment_count230_argument'}->ensureDefaultValue('0');
if(!${'comment_count230_argument'}->isValid()) return ${'comment_count230_argument'}->getErrorMessage();
if(${'comment_count230_argument'} !== null) ${'comment_count230_argument'}->setColumnType('number');

${'trackback_count231_argument'} = new Argument('trackback_count', $args->{'trackback_count'});
${'trackback_count231_argument'}->ensureDefaultValue('0');
if(!${'trackback_count231_argument'}->isValid()) return ${'trackback_count231_argument'}->getErrorMessage();
if(${'trackback_count231_argument'} !== null) ${'trackback_count231_argument'}->setColumnType('number');

${'uploaded_count232_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count232_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count232_argument'}->isValid()) return ${'uploaded_count232_argument'}->getErrorMessage();
if(${'uploaded_count232_argument'} !== null) ${'uploaded_count232_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password233_argument'} = new Argument('password', $args->{'password'});
if(!${'password233_argument'}->isValid()) return ${'password233_argument'}->getErrorMessage();
} else
${'password233_argument'} = NULL;if(${'password233_argument'} !== null) ${'password233_argument'}->setColumnType('varchar');

${'nick_name234_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name234_argument'}->checkNotNull();
if(!${'nick_name234_argument'}->isValid()) return ${'nick_name234_argument'}->getErrorMessage();
if(${'nick_name234_argument'} !== null) ${'nick_name234_argument'}->setColumnType('varchar');

${'member_srl235_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl235_argument'}->checkFilter('number');
${'member_srl235_argument'}->ensureDefaultValue('0');
if(!${'member_srl235_argument'}->isValid()) return ${'member_srl235_argument'}->getErrorMessage();
if(${'member_srl235_argument'} !== null) ${'member_srl235_argument'}->setColumnType('number');

${'user_id236_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id236_argument'}->ensureDefaultValue('');
if(!${'user_id236_argument'}->isValid()) return ${'user_id236_argument'}->getErrorMessage();
if(${'user_id236_argument'} !== null) ${'user_id236_argument'}->setColumnType('varchar');

${'user_name237_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name237_argument'}->ensureDefaultValue('');
if(!${'user_name237_argument'}->isValid()) return ${'user_name237_argument'}->getErrorMessage();
if(${'user_name237_argument'} !== null) ${'user_name237_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address238_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address238_argument'}->checkFilter('email');
if(!${'email_address238_argument'}->isValid()) return ${'email_address238_argument'}->getErrorMessage();
} else
${'email_address238_argument'} = NULL;if(${'email_address238_argument'} !== null) ${'email_address238_argument'}->setColumnType('varchar');

${'homepage239_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage239_argument'}->checkFilter('homepage');
${'homepage239_argument'}->ensureDefaultValue('');
if(!${'homepage239_argument'}->isValid()) return ${'homepage239_argument'}->getErrorMessage();
if(${'homepage239_argument'} !== null) ${'homepage239_argument'}->setColumnType('varchar');
if(isset($args->tags)) {
${'tags240_argument'} = new Argument('tags', $args->{'tags'});
if(!${'tags240_argument'}->isValid()) return ${'tags240_argument'}->getErrorMessage();
} else
${'tags240_argument'} = NULL;if(${'tags240_argument'} !== null) ${'tags240_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars241_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars241_argument'}->isValid()) return ${'extra_vars241_argument'}->getErrorMessage();
} else
${'extra_vars241_argument'} = NULL;if(${'extra_vars241_argument'} !== null) ${'extra_vars241_argument'}->setColumnType('text');

${'regdate242_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate242_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate242_argument'}->isValid()) return ${'regdate242_argument'}->getErrorMessage();
if(${'regdate242_argument'} !== null) ${'regdate242_argument'}->setColumnType('date');

${'last_update243_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update243_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'last_update243_argument'}->isValid()) return ${'last_update243_argument'}->getErrorMessage();
if(${'last_update243_argument'} !== null) ${'last_update243_argument'}->setColumnType('date');
if(isset($args->last_updater)) {
${'last_updater244_argument'} = new Argument('last_updater', $args->{'last_updater'});
if(!${'last_updater244_argument'}->isValid()) return ${'last_updater244_argument'}->getErrorMessage();
} else
${'last_updater244_argument'} = NULL;if(${'last_updater244_argument'} !== null) ${'last_updater244_argument'}->setColumnType('varchar');

${'ipaddress245_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress245_argument'}->ensureDefaultValue(\RX_CLIENT_IP);
if(!${'ipaddress245_argument'}->isValid()) return ${'ipaddress245_argument'}->getErrorMessage();
if(${'ipaddress245_argument'} !== null) ${'ipaddress245_argument'}->setColumnType('varchar');

${'list_order246_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order246_argument'}->ensureDefaultValue('0');
if(!${'list_order246_argument'}->isValid()) return ${'list_order246_argument'}->getErrorMessage();
if(${'list_order246_argument'} !== null) ${'list_order246_argument'}->setColumnType('number');

${'update_order247_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order247_argument'}->ensureDefaultValue('0');
if(!${'update_order247_argument'}->isValid()) return ${'update_order247_argument'}->getErrorMessage();
if(${'update_order247_argument'} !== null) ${'update_order247_argument'}->setColumnType('number');

${'allow_trackback248_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback248_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback248_argument'}->isValid()) return ${'allow_trackback248_argument'}->getErrorMessage();
if(${'allow_trackback248_argument'} !== null) ${'allow_trackback248_argument'}->setColumnType('char');

${'notify_message249_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message249_argument'}->ensureDefaultValue('N');
if(!${'notify_message249_argument'}->isValid()) return ${'notify_message249_argument'}->getErrorMessage();
if(${'notify_message249_argument'} !== null) ${'notify_message249_argument'}->setColumnType('char');

${'status250_argument'} = new Argument('status', $args->{'status'});
${'status250_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status250_argument'}->isValid()) return ${'status250_argument'}->getErrorMessage();
if(${'status250_argument'} !== null) ${'status250_argument'}->setColumnType('varchar');

${'commentStatus251_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus251_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus251_argument'}->isValid()) return ${'commentStatus251_argument'}->getErrorMessage();
if(${'commentStatus251_argument'} !== null) ${'commentStatus251_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl218_argument'})
,new InsertExpression('`module_srl`', ${'module_srl219_argument'})
,new InsertExpression('`category_srl`', ${'category_srl220_argument'})
,new InsertExpression('`lang_code`', ${'lang_code221_argument'})
,new InsertExpression('`is_notice`', ${'is_notice222_argument'})
,new InsertExpression('`title`', ${'title223_argument'})
,new InsertExpression('`title_bold`', ${'title_bold224_argument'})
,new InsertExpression('`title_color`', ${'title_color225_argument'})
,new InsertExpression('`content`', ${'content226_argument'})
,new InsertExpression('`readed_count`', ${'readed_count227_argument'})
,new InsertExpression('`blamed_count`', ${'blamed_count228_argument'})
,new InsertExpression('`voted_count`', ${'voted_count229_argument'})
,new InsertExpression('`comment_count`', ${'comment_count230_argument'})
,new InsertExpression('`trackback_count`', ${'trackback_count231_argument'})
,new InsertExpression('`uploaded_count`', ${'uploaded_count232_argument'})
,new InsertExpression('`password`', ${'password233_argument'})
,new InsertExpression('`nick_name`', ${'nick_name234_argument'})
,new InsertExpression('`member_srl`', ${'member_srl235_argument'})
,new InsertExpression('`user_id`', ${'user_id236_argument'})
,new InsertExpression('`user_name`', ${'user_name237_argument'})
,new InsertExpression('`email_address`', ${'email_address238_argument'})
,new InsertExpression('`homepage`', ${'homepage239_argument'})
,new InsertExpression('`tags`', ${'tags240_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars241_argument'})
,new InsertExpression('`regdate`', ${'regdate242_argument'})
,new InsertExpression('`last_update`', ${'last_update243_argument'})
,new InsertExpression('`last_updater`', ${'last_updater244_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress245_argument'})
,new InsertExpression('`list_order`', ${'list_order246_argument'})
,new InsertExpression('`update_order`', ${'update_order247_argument'})
,new InsertExpression('`allow_trackback`', ${'allow_trackback248_argument'})
,new InsertExpression('`notify_message`', ${'notify_message249_argument'})
,new InsertExpression('`status`', ${'status250_argument'})
,new InsertExpression('`comment_status`', ${'commentStatus251_argument'})
));
$query->setTables(array(
new Table('`rx_documents`', '`documents`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>