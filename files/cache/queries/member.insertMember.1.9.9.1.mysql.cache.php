<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMember");
$query->setAction("insert");
$query->setPriority("");

${'member_srl79_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl79_argument'}->checkFilter('number');
${'member_srl79_argument'}->checkNotNull();
if(!${'member_srl79_argument'}->isValid()) return ${'member_srl79_argument'}->getErrorMessage();
if(${'member_srl79_argument'} !== null) ${'member_srl79_argument'}->setColumnType('number');

${'user_id80_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id80_argument'}->checkFilter('userid');
${'user_id80_argument'}->checkNotNull();
if(!${'user_id80_argument'}->isValid()) return ${'user_id80_argument'}->getErrorMessage();
if(${'user_id80_argument'} !== null) ${'user_id80_argument'}->setColumnType('varchar');

${'email_address81_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address81_argument'}->checkFilter('email');
${'email_address81_argument'}->checkNotNull();
if(!${'email_address81_argument'}->isValid()) return ${'email_address81_argument'}->getErrorMessage();
if(${'email_address81_argument'} !== null) ${'email_address81_argument'}->setColumnType('varchar');

${'password82_argument'} = new Argument('password', $args->{'password'});
${'password82_argument'}->checkNotNull();
if(!${'password82_argument'}->isValid()) return ${'password82_argument'}->getErrorMessage();
if(${'password82_argument'} !== null) ${'password82_argument'}->setColumnType('varchar');

${'email_id83_argument'} = new Argument('email_id', $args->{'email_id'});
${'email_id83_argument'}->checkNotNull();
if(!${'email_id83_argument'}->isValid()) return ${'email_id83_argument'}->getErrorMessage();
if(${'email_id83_argument'} !== null) ${'email_id83_argument'}->setColumnType('varchar');

${'email_host84_argument'} = new Argument('email_host', $args->{'email_host'});
${'email_host84_argument'}->checkNotNull();
if(!${'email_host84_argument'}->isValid()) return ${'email_host84_argument'}->getErrorMessage();
if(${'email_host84_argument'} !== null) ${'email_host84_argument'}->setColumnType('varchar');

${'user_name85_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name85_argument'}->checkNotNull();
if(!${'user_name85_argument'}->isValid()) return ${'user_name85_argument'}->getErrorMessage();
if(${'user_name85_argument'} !== null) ${'user_name85_argument'}->setColumnType('varchar');

${'nick_name86_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name86_argument'}->checkNotNull();
if(!${'nick_name86_argument'}->isValid()) return ${'nick_name86_argument'}->getErrorMessage();
if(${'nick_name86_argument'} !== null) ${'nick_name86_argument'}->setColumnType('varchar');
if(isset($args->find_account_question)) {
${'find_account_question87_argument'} = new Argument('find_account_question', $args->{'find_account_question'});
if(!${'find_account_question87_argument'}->isValid()) return ${'find_account_question87_argument'}->getErrorMessage();
} else
${'find_account_question87_argument'} = NULL;if(${'find_account_question87_argument'} !== null) ${'find_account_question87_argument'}->setColumnType('number');
if(isset($args->find_account_answer)) {
${'find_account_answer88_argument'} = new Argument('find_account_answer', $args->{'find_account_answer'});
if(!${'find_account_answer88_argument'}->isValid()) return ${'find_account_answer88_argument'}->getErrorMessage();
} else
${'find_account_answer88_argument'} = NULL;if(${'find_account_answer88_argument'} !== null) ${'find_account_answer88_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage89_argument'} = new Argument('homepage', $args->{'homepage'});
if(!${'homepage89_argument'}->isValid()) return ${'homepage89_argument'}->getErrorMessage();
} else
${'homepage89_argument'} = NULL;if(${'homepage89_argument'} !== null) ${'homepage89_argument'}->setColumnType('varchar');
if(isset($args->blog)) {
${'blog90_argument'} = new Argument('blog', $args->{'blog'});
if(!${'blog90_argument'}->isValid()) return ${'blog90_argument'}->getErrorMessage();
} else
${'blog90_argument'} = NULL;if(${'blog90_argument'} !== null) ${'blog90_argument'}->setColumnType('varchar');
if(isset($args->birthday)) {
${'birthday91_argument'} = new Argument('birthday', $args->{'birthday'});
if(!${'birthday91_argument'}->isValid()) return ${'birthday91_argument'}->getErrorMessage();
} else
${'birthday91_argument'} = NULL;if(${'birthday91_argument'} !== null) ${'birthday91_argument'}->setColumnType('char');

${'allow_mailing92_argument'} = new Argument('allow_mailing', $args->{'allow_mailing'});
${'allow_mailing92_argument'}->ensureDefaultValue('Y');
if(!${'allow_mailing92_argument'}->isValid()) return ${'allow_mailing92_argument'}->getErrorMessage();
if(${'allow_mailing92_argument'} !== null) ${'allow_mailing92_argument'}->setColumnType('char');

${'allow_message93_argument'} = new Argument('allow_message', $args->{'allow_message'});
${'allow_message93_argument'}->ensureDefaultValue('Y');
if(!${'allow_message93_argument'}->isValid()) return ${'allow_message93_argument'}->getErrorMessage();
if(${'allow_message93_argument'} !== null) ${'allow_message93_argument'}->setColumnType('char');

${'denied94_argument'} = new Argument('denied', $args->{'denied'});
${'denied94_argument'}->ensureDefaultValue('N');
if(!${'denied94_argument'}->isValid()) return ${'denied94_argument'}->getErrorMessage();
if(${'denied94_argument'} !== null) ${'denied94_argument'}->setColumnType('char');
if(isset($args->limit_date)) {
${'limit_date95_argument'} = new Argument('limit_date', $args->{'limit_date'});
if(!${'limit_date95_argument'}->isValid()) return ${'limit_date95_argument'}->getErrorMessage();
} else
${'limit_date95_argument'} = NULL;if(${'limit_date95_argument'} !== null) ${'limit_date95_argument'}->setColumnType('date');

${'regdate96_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate96_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate96_argument'}->isValid()) return ${'regdate96_argument'}->getErrorMessage();
if(${'regdate96_argument'} !== null) ${'regdate96_argument'}->setColumnType('date');

${'change_password_date97_argument'} = new Argument('change_password_date', $args->{'change_password_date'});
${'change_password_date97_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'change_password_date97_argument'}->isValid()) return ${'change_password_date97_argument'}->getErrorMessage();
if(${'change_password_date97_argument'} !== null) ${'change_password_date97_argument'}->setColumnType('date');

${'last_login98_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login98_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'last_login98_argument'}->isValid()) return ${'last_login98_argument'}->getErrorMessage();
if(${'last_login98_argument'} !== null) ${'last_login98_argument'}->setColumnType('date');

${'is_admin99_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin99_argument'}->ensureDefaultValue('N');
if(!${'is_admin99_argument'}->isValid()) return ${'is_admin99_argument'}->getErrorMessage();
if(${'is_admin99_argument'} !== null) ${'is_admin99_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description100_argument'} = new Argument('description', $args->{'description'});
if(!${'description100_argument'}->isValid()) return ${'description100_argument'}->getErrorMessage();
} else
${'description100_argument'} = NULL;if(${'description100_argument'} !== null) ${'description100_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars101_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars101_argument'}->isValid()) return ${'extra_vars101_argument'}->getErrorMessage();
} else
${'extra_vars101_argument'} = NULL;if(${'extra_vars101_argument'} !== null) ${'extra_vars101_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order102_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order102_argument'}->isValid()) return ${'list_order102_argument'}->getErrorMessage();
} else
${'list_order102_argument'} = NULL;if(${'list_order102_argument'} !== null) ${'list_order102_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl79_argument'})
,new InsertExpression('`user_id`', ${'user_id80_argument'})
,new InsertExpression('`email_address`', ${'email_address81_argument'})
,new InsertExpression('`password`', ${'password82_argument'})
,new InsertExpression('`email_id`', ${'email_id83_argument'})
,new InsertExpression('`email_host`', ${'email_host84_argument'})
,new InsertExpression('`user_name`', ${'user_name85_argument'})
,new InsertExpression('`nick_name`', ${'nick_name86_argument'})
,new InsertExpression('`find_account_question`', ${'find_account_question87_argument'})
,new InsertExpression('`find_account_answer`', ${'find_account_answer88_argument'})
,new InsertExpression('`homepage`', ${'homepage89_argument'})
,new InsertExpression('`blog`', ${'blog90_argument'})
,new InsertExpression('`birthday`', ${'birthday91_argument'})
,new InsertExpression('`allow_mailing`', ${'allow_mailing92_argument'})
,new InsertExpression('`allow_message`', ${'allow_message93_argument'})
,new InsertExpression('`denied`', ${'denied94_argument'})
,new InsertExpression('`limit_date`', ${'limit_date95_argument'})
,new InsertExpression('`regdate`', ${'regdate96_argument'})
,new InsertExpression('`change_password_date`', ${'change_password_date97_argument'})
,new InsertExpression('`last_login`', ${'last_login98_argument'})
,new InsertExpression('`is_admin`', ${'is_admin99_argument'})
,new InsertExpression('`description`', ${'description100_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars101_argument'})
,new InsertExpression('`list_order`', ${'list_order102_argument'})
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>