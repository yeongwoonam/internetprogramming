<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispDocumentAdminList';
$info->menu = new stdClass;
$info->menu->document = new stdClass;
$info->menu->document->title='문서';
$info->menu->document->type='';
$info->permission = new stdClass;
$info->permission_check = new stdClass;
$info->action = new stdClass;
$info->action->dispDocumentPrint = new stdClass;
$info->action->dispDocumentPrint->type='view';
$info->action->dispDocumentPrint->grant='guest';
$info->action->dispDocumentPrint->standalone='true';
$info->action->dispDocumentPrint->ruleset='';
$info->action->dispDocumentPrint->method='';
$info->action->dispDocumentPrint->check_csrf='true';
$info->action->dispDocumentPrint->meta_noindex='true';
$info->action->dispDocumentPreview = new stdClass;
$info->action->dispDocumentPreview->type='view';
$info->action->dispDocumentPreview->grant='guest';
$info->action->dispDocumentPreview->standalone='true';
$info->action->dispDocumentPreview->ruleset='';
$info->action->dispDocumentPreview->method='';
$info->action->dispDocumentPreview->check_csrf='true';
$info->action->dispDocumentPreview->meta_noindex='true';
$info->permission->dispTempSavedList = 'member';
$info->permission_check->dispTempSavedList = new stdClass;
$info->permission_check->dispTempSavedList->key = '';
$info->permission_check->dispTempSavedList->type = '';
$info->action->dispTempSavedList = new stdClass;
$info->action->dispTempSavedList->type='view';
$info->action->dispTempSavedList->grant='guest';
$info->action->dispTempSavedList->standalone='true';
$info->action->dispTempSavedList->ruleset='';
$info->action->dispTempSavedList->method='';
$info->action->dispTempSavedList->check_csrf='true';
$info->action->dispTempSavedList->meta_noindex='true';
$info->permission->dispDocumentDeclare = 'member';
$info->permission_check->dispDocumentDeclare = new stdClass;
$info->permission_check->dispDocumentDeclare->key = '';
$info->permission_check->dispDocumentDeclare->type = '';
$info->action->dispDocumentDeclare = new stdClass;
$info->action->dispDocumentDeclare->type='view';
$info->action->dispDocumentDeclare->grant='guest';
$info->action->dispDocumentDeclare->standalone='true';
$info->action->dispDocumentDeclare->ruleset='';
$info->action->dispDocumentDeclare->method='';
$info->action->dispDocumentDeclare->check_csrf='true';
$info->action->dispDocumentDeclare->meta_noindex='true';
$info->permission->dispDocumentManageDocument = 'all-managers';
$info->permission_check->dispDocumentManageDocument = new stdClass;
$info->permission_check->dispDocumentManageDocument->key = '';
$info->permission_check->dispDocumentManageDocument->type = '';
$info->action->dispDocumentManageDocument = new stdClass;
$info->action->dispDocumentManageDocument->type='view';
$info->action->dispDocumentManageDocument->grant='guest';
$info->action->dispDocumentManageDocument->standalone='true';
$info->action->dispDocumentManageDocument->ruleset='';
$info->action->dispDocumentManageDocument->method='';
$info->action->dispDocumentManageDocument->check_csrf='true';
$info->action->dispDocumentManageDocument->meta_noindex='true';
$info->action->getDocumentMenu = new stdClass;
$info->action->getDocumentMenu->type='model';
$info->action->getDocumentMenu->grant='guest';
$info->action->getDocumentMenu->standalone='true';
$info->action->getDocumentMenu->ruleset='';
$info->action->getDocumentMenu->method='';
$info->action->getDocumentMenu->check_csrf='true';
$info->action->getDocumentMenu->meta_noindex='false';
$info->permission->getDocumentCategories = 'all-managers';
$info->permission_check->getDocumentCategories = new stdClass;
$info->permission_check->getDocumentCategories->key = '';
$info->permission_check->getDocumentCategories->type = '';
$info->action->getDocumentCategories = new stdClass;
$info->action->getDocumentCategories->type='model';
$info->action->getDocumentCategories->grant='guest';
$info->action->getDocumentCategories->standalone='true';
$info->action->getDocumentCategories->ruleset='';
$info->action->getDocumentCategories->method='';
$info->action->getDocumentCategories->check_csrf='true';
$info->action->getDocumentCategories->meta_noindex='false';
$info->permission->getDocumentCategoryTplInfo = 'manager';
$info->permission_check->getDocumentCategoryTplInfo = new stdClass;
$info->permission_check->getDocumentCategoryTplInfo->key = 'module_srl';
$info->permission_check->getDocumentCategoryTplInfo->type = '';
$info->action->getDocumentCategoryTplInfo = new stdClass;
$info->action->getDocumentCategoryTplInfo->type='model';
$info->action->getDocumentCategoryTplInfo->grant='guest';
$info->action->getDocumentCategoryTplInfo->standalone='true';
$info->action->getDocumentCategoryTplInfo->ruleset='';
$info->action->getDocumentCategoryTplInfo->method='';
$info->action->getDocumentCategoryTplInfo->check_csrf='true';
$info->action->getDocumentCategoryTplInfo->meta_noindex='false';
$info->permission->getDocumentVotedMemberList = 'root';
$info->permission_check->getDocumentVotedMemberList = new stdClass;
$info->permission_check->getDocumentVotedMemberList->key = '';
$info->permission_check->getDocumentVotedMemberList->type = '';
$info->action->getDocumentVotedMemberList = new stdClass;
$info->action->getDocumentVotedMemberList->type='model';
$info->action->getDocumentVotedMemberList->grant='guest';
$info->action->getDocumentVotedMemberList->standalone='true';
$info->action->getDocumentVotedMemberList->ruleset='';
$info->action->getDocumentVotedMemberList->method='';
$info->action->getDocumentVotedMemberList->check_csrf='true';
$info->action->getDocumentVotedMemberList->meta_noindex='false';
$info->action->procDocumentVoteUp = new stdClass;
$info->action->procDocumentVoteUp->type='controller';
$info->action->procDocumentVoteUp->grant='guest';
$info->action->procDocumentVoteUp->standalone='true';
$info->action->procDocumentVoteUp->ruleset='';
$info->action->procDocumentVoteUp->method='';
$info->action->procDocumentVoteUp->check_csrf='true';
$info->action->procDocumentVoteUp->meta_noindex='false';
$info->action->procDocumentVoteUpCancel = new stdClass;
$info->action->procDocumentVoteUpCancel->type='controller';
$info->action->procDocumentVoteUpCancel->grant='guest';
$info->action->procDocumentVoteUpCancel->standalone='true';
$info->action->procDocumentVoteUpCancel->ruleset='';
$info->action->procDocumentVoteUpCancel->method='';
$info->action->procDocumentVoteUpCancel->check_csrf='true';
$info->action->procDocumentVoteUpCancel->meta_noindex='false';
$info->action->procDocumentVoteDown = new stdClass;
$info->action->procDocumentVoteDown->type='controller';
$info->action->procDocumentVoteDown->grant='guest';
$info->action->procDocumentVoteDown->standalone='true';
$info->action->procDocumentVoteDown->ruleset='';
$info->action->procDocumentVoteDown->method='';
$info->action->procDocumentVoteDown->check_csrf='true';
$info->action->procDocumentVoteDown->meta_noindex='false';
$info->action->procDocumentVoteDownCancel = new stdClass;
$info->action->procDocumentVoteDownCancel->type='controller';
$info->action->procDocumentVoteDownCancel->grant='guest';
$info->action->procDocumentVoteDownCancel->standalone='true';
$info->action->procDocumentVoteDownCancel->ruleset='';
$info->action->procDocumentVoteDownCancel->method='';
$info->action->procDocumentVoteDownCancel->check_csrf='true';
$info->action->procDocumentVoteDownCancel->meta_noindex='false';
$info->permission->procDocumentTempSave = 'member';
$info->permission_check->procDocumentTempSave = new stdClass;
$info->permission_check->procDocumentTempSave->key = '';
$info->permission_check->procDocumentTempSave->type = '';
$info->action->procDocumentTempSave = new stdClass;
$info->action->procDocumentTempSave->type='controller';
$info->action->procDocumentTempSave->grant='guest';
$info->action->procDocumentTempSave->standalone='true';
$info->action->procDocumentTempSave->ruleset='';
$info->action->procDocumentTempSave->method='';
$info->action->procDocumentTempSave->check_csrf='true';
$info->action->procDocumentTempSave->meta_noindex='false';
$info->permission->procDocumentDeclare = 'member';
$info->permission_check->procDocumentDeclare = new stdClass;
$info->permission_check->procDocumentDeclare->key = '';
$info->permission_check->procDocumentDeclare->type = '';
$info->action->procDocumentDeclare = new stdClass;
$info->action->procDocumentDeclare->type='controller';
$info->action->procDocumentDeclare->grant='guest';
$info->action->procDocumentDeclare->standalone='true';
$info->action->procDocumentDeclare->ruleset='';
$info->action->procDocumentDeclare->method='';
$info->action->procDocumentDeclare->check_csrf='true';
$info->action->procDocumentDeclare->meta_noindex='false';
$info->permission->procDocumentGetList = 'manager';
$info->permission_check->procDocumentGetList = new stdClass;
$info->permission_check->procDocumentGetList->key = 'document_srls';
$info->permission_check->procDocumentGetList->type = 'document';
$info->action->procDocumentGetList = new stdClass;
$info->action->procDocumentGetList->type='controller';
$info->action->procDocumentGetList->grant='guest';
$info->action->procDocumentGetList->standalone='true';
$info->action->procDocumentGetList->ruleset='';
$info->action->procDocumentGetList->method='';
$info->action->procDocumentGetList->check_csrf='true';
$info->action->procDocumentGetList->meta_noindex='false';
$info->permission->procDocumentAddCart = 'manager';
$info->permission_check->procDocumentAddCart = new stdClass;
$info->permission_check->procDocumentAddCart->key = 'srls';
$info->permission_check->procDocumentAddCart->type = 'document';
$info->action->procDocumentAddCart = new stdClass;
$info->action->procDocumentAddCart->type='controller';
$info->action->procDocumentAddCart->grant='guest';
$info->action->procDocumentAddCart->standalone='true';
$info->action->procDocumentAddCart->ruleset='';
$info->action->procDocumentAddCart->method='';
$info->action->procDocumentAddCart->check_csrf='true';
$info->action->procDocumentAddCart->meta_noindex='false';
$info->permission->procDocumentManageCheckedDocument = 'manager';
$info->permission_check->procDocumentManageCheckedDocument = new stdClass;
$info->permission_check->procDocumentManageCheckedDocument->key = 'cart';
$info->permission_check->procDocumentManageCheckedDocument->type = 'document';
$info->action->procDocumentManageCheckedDocument = new stdClass;
$info->action->procDocumentManageCheckedDocument->type='controller';
$info->action->procDocumentManageCheckedDocument->grant='guest';
$info->action->procDocumentManageCheckedDocument->standalone='true';
$info->action->procDocumentManageCheckedDocument->ruleset='';
$info->action->procDocumentManageCheckedDocument->method='';
$info->action->procDocumentManageCheckedDocument->check_csrf='true';
$info->action->procDocumentManageCheckedDocument->meta_noindex='false';
$info->permission->procDocumentInsertModuleConfig = 'manager';
$info->permission_check->procDocumentInsertModuleConfig = new stdClass;
$info->permission_check->procDocumentInsertModuleConfig->key = 'target_module_srl';
$info->permission_check->procDocumentInsertModuleConfig->type = '';
$info->action->procDocumentInsertModuleConfig = new stdClass;
$info->action->procDocumentInsertModuleConfig->type='controller';
$info->action->procDocumentInsertModuleConfig->grant='guest';
$info->action->procDocumentInsertModuleConfig->standalone='true';
$info->action->procDocumentInsertModuleConfig->ruleset='';
$info->action->procDocumentInsertModuleConfig->method='';
$info->action->procDocumentInsertModuleConfig->check_csrf='true';
$info->action->procDocumentInsertModuleConfig->meta_noindex='false';
$info->permission->procDocumentInsertCategory = 'manager';
$info->permission_check->procDocumentInsertCategory = new stdClass;
$info->permission_check->procDocumentInsertCategory->key = 'module_srl';
$info->permission_check->procDocumentInsertCategory->type = '';
$info->action->procDocumentInsertCategory = new stdClass;
$info->action->procDocumentInsertCategory->type='controller';
$info->action->procDocumentInsertCategory->grant='guest';
$info->action->procDocumentInsertCategory->standalone='true';
$info->action->procDocumentInsertCategory->ruleset='insertCategory';
$info->action->procDocumentInsertCategory->method='';
$info->action->procDocumentInsertCategory->check_csrf='true';
$info->action->procDocumentInsertCategory->meta_noindex='false';
$info->permission->procDocumentDeleteCategory = 'manager';
$info->permission_check->procDocumentDeleteCategory = new stdClass;
$info->permission_check->procDocumentDeleteCategory->key = 'module_srl';
$info->permission_check->procDocumentDeleteCategory->type = '';
$info->action->procDocumentDeleteCategory = new stdClass;
$info->action->procDocumentDeleteCategory->type='controller';
$info->action->procDocumentDeleteCategory->grant='guest';
$info->action->procDocumentDeleteCategory->standalone='true';
$info->action->procDocumentDeleteCategory->ruleset='';
$info->action->procDocumentDeleteCategory->method='';
$info->action->procDocumentDeleteCategory->check_csrf='true';
$info->action->procDocumentDeleteCategory->meta_noindex='false';
$info->permission->procDocumentMoveCategory = 'manager';
$info->permission_check->procDocumentMoveCategory = new stdClass;
$info->permission_check->procDocumentMoveCategory->key = 'module_srl';
$info->permission_check->procDocumentMoveCategory->type = '';
$info->action->procDocumentMoveCategory = new stdClass;
$info->action->procDocumentMoveCategory->type='controller';
$info->action->procDocumentMoveCategory->grant='guest';
$info->action->procDocumentMoveCategory->standalone='true';
$info->action->procDocumentMoveCategory->ruleset='';
$info->action->procDocumentMoveCategory->method='';
$info->action->procDocumentMoveCategory->check_csrf='true';
$info->action->procDocumentMoveCategory->meta_noindex='false';
$info->permission->procDocumentMakeXmlFile = 'manager';
$info->permission_check->procDocumentMakeXmlFile = new stdClass;
$info->permission_check->procDocumentMakeXmlFile->key = 'module_srl';
$info->permission_check->procDocumentMakeXmlFile->type = '';
$info->action->procDocumentMakeXmlFile = new stdClass;
$info->action->procDocumentMakeXmlFile->type='controller';
$info->action->procDocumentMakeXmlFile->grant='guest';
$info->action->procDocumentMakeXmlFile->standalone='true';
$info->action->procDocumentMakeXmlFile->ruleset='';
$info->action->procDocumentMakeXmlFile->method='';
$info->action->procDocumentMakeXmlFile->check_csrf='true';
$info->action->procDocumentMakeXmlFile->meta_noindex='false';
$info->menu->document->index='dispDocumentAdminList';
$info->menu->document->acts[]='dispDocumentAdminList';
$info->action->dispDocumentAdminList = new stdClass;
$info->action->dispDocumentAdminList->type='view';
$info->action->dispDocumentAdminList->grant='guest';
$info->action->dispDocumentAdminList->standalone='true';
$info->action->dispDocumentAdminList->ruleset='';
$info->action->dispDocumentAdminList->method='';
$info->action->dispDocumentAdminList->check_csrf='true';
$info->action->dispDocumentAdminList->meta_noindex='false';
$info->menu->document->acts[]='dispDocumentAdminConfig';
$info->action->dispDocumentAdminConfig = new stdClass;
$info->action->dispDocumentAdminConfig->type='view';
$info->action->dispDocumentAdminConfig->grant='guest';
$info->action->dispDocumentAdminConfig->standalone='true';
$info->action->dispDocumentAdminConfig->ruleset='';
$info->action->dispDocumentAdminConfig->method='';
$info->action->dispDocumentAdminConfig->check_csrf='true';
$info->action->dispDocumentAdminConfig->meta_noindex='false';
$info->menu->document->acts[]='dispDocumentAdminDeclared';
$info->action->dispDocumentAdminDeclared = new stdClass;
$info->action->dispDocumentAdminDeclared->type='view';
$info->action->dispDocumentAdminDeclared->grant='guest';
$info->action->dispDocumentAdminDeclared->standalone='true';
$info->action->dispDocumentAdminDeclared->ruleset='';
$info->action->dispDocumentAdminDeclared->method='';
$info->action->dispDocumentAdminDeclared->check_csrf='true';
$info->action->dispDocumentAdminDeclared->meta_noindex='false';
$info->menu->document->acts[]='dispDocumentAdminDeclaredLogByDocumentSrl';
$info->action->dispDocumentAdminDeclaredLogByDocumentSrl = new stdClass;
$info->action->dispDocumentAdminDeclaredLogByDocumentSrl->type='view';
$info->action->dispDocumentAdminDeclaredLogByDocumentSrl->grant='guest';
$info->action->dispDocumentAdminDeclaredLogByDocumentSrl->standalone='true';
$info->action->dispDocumentAdminDeclaredLogByDocumentSrl->ruleset='';
$info->action->dispDocumentAdminDeclaredLogByDocumentSrl->method='';
$info->action->dispDocumentAdminDeclaredLogByDocumentSrl->check_csrf='true';
$info->action->dispDocumentAdminDeclaredLogByDocumentSrl->meta_noindex='false';
$info->menu->document->acts[]='dispDocumentAdminAlias';
$info->action->dispDocumentAdminAlias = new stdClass;
$info->action->dispDocumentAdminAlias->type='view';
$info->action->dispDocumentAdminAlias->grant='guest';
$info->action->dispDocumentAdminAlias->standalone='true';
$info->action->dispDocumentAdminAlias->ruleset='';
$info->action->dispDocumentAdminAlias->method='';
$info->action->dispDocumentAdminAlias->check_csrf='true';
$info->action->dispDocumentAdminAlias->meta_noindex='false';
$info->menu->document->acts[]='dispDocumentAdminTrashList';
$info->action->dispDocumentAdminTrashList = new stdClass;
$info->action->dispDocumentAdminTrashList->type='view';
$info->action->dispDocumentAdminTrashList->grant='guest';
$info->action->dispDocumentAdminTrashList->standalone='true';
$info->action->dispDocumentAdminTrashList->ruleset='';
$info->action->dispDocumentAdminTrashList->method='';
$info->action->dispDocumentAdminTrashList->check_csrf='true';
$info->action->dispDocumentAdminTrashList->meta_noindex='false';
$info->action->procDocumentAdminDeleteChecked = new stdClass;
$info->action->procDocumentAdminDeleteChecked->type='controller';
$info->action->procDocumentAdminDeleteChecked->grant='guest';
$info->action->procDocumentAdminDeleteChecked->standalone='true';
$info->action->procDocumentAdminDeleteChecked->ruleset='';
$info->action->procDocumentAdminDeleteChecked->method='';
$info->action->procDocumentAdminDeleteChecked->check_csrf='true';
$info->action->procDocumentAdminDeleteChecked->meta_noindex='false';
$info->action->procDocumentAdminInsertConfig = new stdClass;
$info->action->procDocumentAdminInsertConfig->type='controller';
$info->action->procDocumentAdminInsertConfig->grant='guest';
$info->action->procDocumentAdminInsertConfig->standalone='true';
$info->action->procDocumentAdminInsertConfig->ruleset='';
$info->action->procDocumentAdminInsertConfig->method='';
$info->action->procDocumentAdminInsertConfig->check_csrf='true';
$info->action->procDocumentAdminInsertConfig->meta_noindex='false';
$info->action->procDocumentAdminDeleteAllThumbnail = new stdClass;
$info->action->procDocumentAdminDeleteAllThumbnail->type='controller';
$info->action->procDocumentAdminDeleteAllThumbnail->grant='guest';
$info->action->procDocumentAdminDeleteAllThumbnail->standalone='true';
$info->action->procDocumentAdminDeleteAllThumbnail->ruleset='';
$info->action->procDocumentAdminDeleteAllThumbnail->method='';
$info->action->procDocumentAdminDeleteAllThumbnail->check_csrf='true';
$info->action->procDocumentAdminDeleteAllThumbnail->meta_noindex='false';
$info->action->procDocumentAdminCancelDeclare = new stdClass;
$info->action->procDocumentAdminCancelDeclare->type='controller';
$info->action->procDocumentAdminCancelDeclare->grant='guest';
$info->action->procDocumentAdminCancelDeclare->standalone='true';
$info->action->procDocumentAdminCancelDeclare->ruleset='';
$info->action->procDocumentAdminCancelDeclare->method='';
$info->action->procDocumentAdminCancelDeclare->check_csrf='true';
$info->action->procDocumentAdminCancelDeclare->meta_noindex='false';
$info->action->procDocumentAdminInsertAlias = new stdClass;
$info->action->procDocumentAdminInsertAlias->type='controller';
$info->action->procDocumentAdminInsertAlias->grant='guest';
$info->action->procDocumentAdminInsertAlias->standalone='true';
$info->action->procDocumentAdminInsertAlias->ruleset='insertAlias';
$info->action->procDocumentAdminInsertAlias->method='';
$info->action->procDocumentAdminInsertAlias->check_csrf='true';
$info->action->procDocumentAdminInsertAlias->meta_noindex='false';
$info->action->procDocumentAdminDeleteAlias = new stdClass;
$info->action->procDocumentAdminDeleteAlias->type='controller';
$info->action->procDocumentAdminDeleteAlias->grant='guest';
$info->action->procDocumentAdminDeleteAlias->standalone='true';
$info->action->procDocumentAdminDeleteAlias->ruleset='deleteAlias';
$info->action->procDocumentAdminDeleteAlias->method='';
$info->action->procDocumentAdminDeleteAlias->check_csrf='true';
$info->action->procDocumentAdminDeleteAlias->meta_noindex='false';
$info->permission->procDocumentAdminMoveToTrash = 'manager';
$info->permission_check->procDocumentAdminMoveToTrash = new stdClass;
$info->permission_check->procDocumentAdminMoveToTrash->key = 'document_srl';
$info->permission_check->procDocumentAdminMoveToTrash->type = 'document';
$info->action->procDocumentAdminMoveToTrash = new stdClass;
$info->action->procDocumentAdminMoveToTrash->type='controller';
$info->action->procDocumentAdminMoveToTrash->grant='guest';
$info->action->procDocumentAdminMoveToTrash->standalone='true';
$info->action->procDocumentAdminMoveToTrash->ruleset='';
$info->action->procDocumentAdminMoveToTrash->method='';
$info->action->procDocumentAdminMoveToTrash->check_csrf='true';
$info->action->procDocumentAdminMoveToTrash->meta_noindex='false';
$info->action->procDocumentAdminRestoreTrash = new stdClass;
$info->action->procDocumentAdminRestoreTrash->type='controller';
$info->action->procDocumentAdminRestoreTrash->grant='guest';
$info->action->procDocumentAdminRestoreTrash->standalone='true';
$info->action->procDocumentAdminRestoreTrash->ruleset='';
$info->action->procDocumentAdminRestoreTrash->method='';
$info->action->procDocumentAdminRestoreTrash->check_csrf='true';
$info->action->procDocumentAdminRestoreTrash->meta_noindex='false';
$info->permission->procDocumentAdminInsertExtraVar = 'manager';
$info->permission_check->procDocumentAdminInsertExtraVar = new stdClass;
$info->permission_check->procDocumentAdminInsertExtraVar->key = 'module_srl';
$info->permission_check->procDocumentAdminInsertExtraVar->type = '';
$info->action->procDocumentAdminInsertExtraVar = new stdClass;
$info->action->procDocumentAdminInsertExtraVar->type='controller';
$info->action->procDocumentAdminInsertExtraVar->grant='guest';
$info->action->procDocumentAdminInsertExtraVar->standalone='true';
$info->action->procDocumentAdminInsertExtraVar->ruleset='insertExtraVar';
$info->action->procDocumentAdminInsertExtraVar->method='';
$info->action->procDocumentAdminInsertExtraVar->check_csrf='true';
$info->action->procDocumentAdminInsertExtraVar->meta_noindex='false';
$info->permission->procDocumentAdminDeleteExtraVar = 'manager';
$info->permission_check->procDocumentAdminDeleteExtraVar = new stdClass;
$info->permission_check->procDocumentAdminDeleteExtraVar->key = 'module_srl';
$info->permission_check->procDocumentAdminDeleteExtraVar->type = '';
$info->action->procDocumentAdminDeleteExtraVar = new stdClass;
$info->action->procDocumentAdminDeleteExtraVar->type='controller';
$info->action->procDocumentAdminDeleteExtraVar->grant='guest';
$info->action->procDocumentAdminDeleteExtraVar->standalone='true';
$info->action->procDocumentAdminDeleteExtraVar->ruleset='';
$info->action->procDocumentAdminDeleteExtraVar->method='';
$info->action->procDocumentAdminDeleteExtraVar->check_csrf='true';
$info->action->procDocumentAdminDeleteExtraVar->meta_noindex='false';
$info->permission->procDocumentAdminMoveExtraVar = 'manager';
$info->permission_check->procDocumentAdminMoveExtraVar = new stdClass;
$info->permission_check->procDocumentAdminMoveExtraVar->key = 'module_srl';
$info->permission_check->procDocumentAdminMoveExtraVar->type = '';
$info->action->procDocumentAdminMoveExtraVar = new stdClass;
$info->action->procDocumentAdminMoveExtraVar->type='controller';
$info->action->procDocumentAdminMoveExtraVar->grant='guest';
$info->action->procDocumentAdminMoveExtraVar->standalone='true';
$info->action->procDocumentAdminMoveExtraVar->ruleset='';
$info->action->procDocumentAdminMoveExtraVar->method='';
$info->action->procDocumentAdminMoveExtraVar->check_csrf='true';
$info->action->procDocumentAdminMoveExtraVar->meta_noindex='false';
return $info;