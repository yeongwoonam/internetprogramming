<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = 'dispAdminIndex';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = '';
$info->menu = new stdClass;
$info->menu->adminConfigurationGeneral = new stdClass;
$info->menu->adminConfigurationGeneral->title='시스템 설정';
$info->menu->adminConfigurationGeneral->type='all';
$info->menu->adminMenuSetup = new stdClass;
$info->menu->adminMenuSetup->title='관리자 화면 설정';
$info->menu->adminMenuSetup->type='all';
$info->menu->adminConfigurationFtp = new stdClass;
$info->menu->adminConfigurationFtp->title='FTP 설정';
$info->menu->adminConfigurationFtp->type='all';
$info->permission = new stdClass;
$info->permission_check = new stdClass;
$info->action = new stdClass;
$info->permission->getSiteAllList = 'root';
$info->permission_check->getSiteAllList = new stdClass;
$info->permission_check->getSiteAllList->key = '';
$info->permission_check->getSiteAllList->type = '';
$info->action->getSiteAllList = new stdClass;
$info->action->getSiteAllList->type='model';
$info->action->getSiteAllList->grant='guest';
$info->action->getSiteAllList->standalone='true';
$info->action->getSiteAllList->ruleset='';
$info->action->getSiteAllList->method='';
$info->action->getSiteAllList->check_csrf='true';
$info->action->getSiteAllList->meta_noindex='false';
$info->action->dispAdminIndex = new stdClass;
$info->action->dispAdminIndex->type='view';
$info->action->dispAdminIndex->grant='guest';
$info->action->dispAdminIndex->standalone='true';
$info->action->dispAdminIndex->ruleset='';
$info->action->dispAdminIndex->method='';
$info->action->dispAdminIndex->check_csrf='true';
$info->action->dispAdminIndex->meta_noindex='false';
$info->menu->adminConfigurationGeneral->index='dispAdminConfigGeneral';
$info->menu->adminConfigurationGeneral->acts[]='dispAdminConfigGeneral';
$info->action->dispAdminConfigGeneral = new stdClass;
$info->action->dispAdminConfigGeneral->type='view';
$info->action->dispAdminConfigGeneral->grant='guest';
$info->action->dispAdminConfigGeneral->standalone='true';
$info->action->dispAdminConfigGeneral->ruleset='';
$info->action->dispAdminConfigGeneral->method='';
$info->action->dispAdminConfigGeneral->check_csrf='true';
$info->action->dispAdminConfigGeneral->meta_noindex='false';
$info->menu->adminConfigurationGeneral->acts[]='dispAdminConfigNotification';
$info->action->dispAdminConfigNotification = new stdClass;
$info->action->dispAdminConfigNotification->type='view';
$info->action->dispAdminConfigNotification->grant='guest';
$info->action->dispAdminConfigNotification->standalone='true';
$info->action->dispAdminConfigNotification->ruleset='';
$info->action->dispAdminConfigNotification->method='';
$info->action->dispAdminConfigNotification->check_csrf='true';
$info->action->dispAdminConfigNotification->meta_noindex='false';
$info->menu->adminConfigurationGeneral->acts[]='dispAdminConfigSecurity';
$info->action->dispAdminConfigSecurity = new stdClass;
$info->action->dispAdminConfigSecurity->type='view';
$info->action->dispAdminConfigSecurity->grant='guest';
$info->action->dispAdminConfigSecurity->standalone='true';
$info->action->dispAdminConfigSecurity->ruleset='';
$info->action->dispAdminConfigSecurity->method='';
$info->action->dispAdminConfigSecurity->check_csrf='true';
$info->action->dispAdminConfigSecurity->meta_noindex='false';
$info->menu->adminConfigurationGeneral->acts[]='dispAdminConfigAdvanced';
$info->action->dispAdminConfigAdvanced = new stdClass;
$info->action->dispAdminConfigAdvanced->type='view';
$info->action->dispAdminConfigAdvanced->grant='guest';
$info->action->dispAdminConfigAdvanced->standalone='true';
$info->action->dispAdminConfigAdvanced->ruleset='';
$info->action->dispAdminConfigAdvanced->method='';
$info->action->dispAdminConfigAdvanced->check_csrf='true';
$info->action->dispAdminConfigAdvanced->meta_noindex='false';
$info->menu->adminConfigurationGeneral->acts[]='dispAdminConfigDebug';
$info->action->dispAdminConfigDebug = new stdClass;
$info->action->dispAdminConfigDebug->type='view';
$info->action->dispAdminConfigDebug->grant='guest';
$info->action->dispAdminConfigDebug->standalone='true';
$info->action->dispAdminConfigDebug->ruleset='';
$info->action->dispAdminConfigDebug->method='';
$info->action->dispAdminConfigDebug->check_csrf='true';
$info->action->dispAdminConfigDebug->meta_noindex='false';
$info->menu->adminConfigurationGeneral->acts[]='dispAdminConfigSEO';
$info->action->dispAdminConfigSEO = new stdClass;
$info->action->dispAdminConfigSEO->type='view';
$info->action->dispAdminConfigSEO->grant='guest';
$info->action->dispAdminConfigSEO->standalone='true';
$info->action->dispAdminConfigSEO->ruleset='';
$info->action->dispAdminConfigSEO->method='';
$info->action->dispAdminConfigSEO->check_csrf='true';
$info->action->dispAdminConfigSEO->meta_noindex='false';
$info->menu->adminConfigurationGeneral->acts[]='dispAdminConfigSitelock';
$info->action->dispAdminConfigSitelock = new stdClass;
$info->action->dispAdminConfigSitelock->type='view';
$info->action->dispAdminConfigSitelock->grant='guest';
$info->action->dispAdminConfigSitelock->standalone='true';
$info->action->dispAdminConfigSitelock->ruleset='';
$info->action->dispAdminConfigSitelock->method='';
$info->action->dispAdminConfigSitelock->check_csrf='true';
$info->action->dispAdminConfigSitelock->meta_noindex='false';
$info->menu->adminConfigurationGeneral->acts[]='dispAdminInsertDomain';
$info->action->dispAdminInsertDomain = new stdClass;
$info->action->dispAdminInsertDomain->type='view';
$info->action->dispAdminInsertDomain->grant='guest';
$info->action->dispAdminInsertDomain->standalone='true';
$info->action->dispAdminInsertDomain->ruleset='';
$info->action->dispAdminInsertDomain->method='';
$info->action->dispAdminInsertDomain->check_csrf='true';
$info->action->dispAdminInsertDomain->meta_noindex='false';
$info->menu->adminConfigurationFtp->index='dispAdminConfigFtp';
$info->menu->adminConfigurationFtp->acts[]='dispAdminConfigFtp';
$info->action->dispAdminConfigFtp = new stdClass;
$info->action->dispAdminConfigFtp->type='view';
$info->action->dispAdminConfigFtp->grant='guest';
$info->action->dispAdminConfigFtp->standalone='true';
$info->action->dispAdminConfigFtp->ruleset='';
$info->action->dispAdminConfigFtp->method='';
$info->action->dispAdminConfigFtp->check_csrf='true';
$info->action->dispAdminConfigFtp->meta_noindex='false';
$info->menu->adminMenuSetup->index='dispAdminSetup';
$info->menu->adminMenuSetup->acts[]='dispAdminSetup';
$info->action->dispAdminSetup = new stdClass;
$info->action->dispAdminSetup->type='view';
$info->action->dispAdminSetup->grant='guest';
$info->action->dispAdminSetup->standalone='true';
$info->action->dispAdminSetup->ruleset='';
$info->action->dispAdminSetup->method='';
$info->action->dispAdminSetup->check_csrf='true';
$info->action->dispAdminSetup->meta_noindex='false';
$info->action->dispAdminViewServerEnv = new stdClass;
$info->action->dispAdminViewServerEnv->type='view';
$info->action->dispAdminViewServerEnv->grant='guest';
$info->action->dispAdminViewServerEnv->standalone='true';
$info->action->dispAdminViewServerEnv->ruleset='';
$info->action->dispAdminViewServerEnv->method='';
$info->action->dispAdminViewServerEnv->check_csrf='true';
$info->action->dispAdminViewServerEnv->meta_noindex='false';
$info->action->procAdminRemoveIcons = new stdClass;
$info->action->procAdminRemoveIcons->type='controller';
$info->action->procAdminRemoveIcons->grant='guest';
$info->action->procAdminRemoveIcons->standalone='true';
$info->action->procAdminRemoveIcons->ruleset='';
$info->action->procAdminRemoveIcons->method='';
$info->action->procAdminRemoveIcons->check_csrf='true';
$info->action->procAdminRemoveIcons->meta_noindex='false';
$info->action->procAdminRecompileCacheFile = new stdClass;
$info->action->procAdminRecompileCacheFile->type='controller';
$info->action->procAdminRecompileCacheFile->grant='guest';
$info->action->procAdminRecompileCacheFile->standalone='true';
$info->action->procAdminRecompileCacheFile->ruleset='';
$info->action->procAdminRecompileCacheFile->method='';
$info->action->procAdminRecompileCacheFile->check_csrf='true';
$info->action->procAdminRecompileCacheFile->meta_noindex='false';
$info->action->procAdminLogout = new stdClass;
$info->action->procAdminLogout->type='controller';
$info->action->procAdminLogout->grant='guest';
$info->action->procAdminLogout->standalone='true';
$info->action->procAdminLogout->ruleset='';
$info->action->procAdminLogout->method='GET|POST';
$info->action->procAdminLogout->check_csrf='true';
$info->action->procAdminLogout->meta_noindex='false';
$info->action->procAdminInsertDefaultDesignInfo = new stdClass;
$info->action->procAdminInsertDefaultDesignInfo->type='controller';
$info->action->procAdminInsertDefaultDesignInfo->grant='guest';
$info->action->procAdminInsertDefaultDesignInfo->standalone='true';
$info->action->procAdminInsertDefaultDesignInfo->ruleset='';
$info->action->procAdminInsertDefaultDesignInfo->method='';
$info->action->procAdminInsertDefaultDesignInfo->check_csrf='true';
$info->action->procAdminInsertDefaultDesignInfo->meta_noindex='false';
$info->action->procAdminToggleFavorite = new stdClass;
$info->action->procAdminToggleFavorite->type='controller';
$info->action->procAdminToggleFavorite->grant='guest';
$info->action->procAdminToggleFavorite->standalone='true';
$info->action->procAdminToggleFavorite->ruleset='toggleFavorite';
$info->action->procAdminToggleFavorite->method='';
$info->action->procAdminToggleFavorite->check_csrf='true';
$info->action->procAdminToggleFavorite->meta_noindex='false';
$info->action->procAdminEnviromentGatheringAgreement = new stdClass;
$info->action->procAdminEnviromentGatheringAgreement->type='controller';
$info->action->procAdminEnviromentGatheringAgreement->grant='guest';
$info->action->procAdminEnviromentGatheringAgreement->standalone='true';
$info->action->procAdminEnviromentGatheringAgreement->ruleset='';
$info->action->procAdminEnviromentGatheringAgreement->method='';
$info->action->procAdminEnviromentGatheringAgreement->check_csrf='true';
$info->action->procAdminEnviromentGatheringAgreement->meta_noindex='false';
$info->action->procAdminUpdateConfig = new stdClass;
$info->action->procAdminUpdateConfig->type='controller';
$info->action->procAdminUpdateConfig->grant='guest';
$info->action->procAdminUpdateConfig->standalone='true';
$info->action->procAdminUpdateConfig->ruleset='';
$info->action->procAdminUpdateConfig->method='';
$info->action->procAdminUpdateConfig->check_csrf='true';
$info->action->procAdminUpdateConfig->meta_noindex='false';
$info->action->procAdminDeleteLogo = new stdClass;
$info->action->procAdminDeleteLogo->type='controller';
$info->action->procAdminDeleteLogo->grant='guest';
$info->action->procAdminDeleteLogo->standalone='true';
$info->action->procAdminDeleteLogo->ruleset='';
$info->action->procAdminDeleteLogo->method='';
$info->action->procAdminDeleteLogo->check_csrf='true';
$info->action->procAdminDeleteLogo->meta_noindex='false';
$info->action->procAdminMenuReset = new stdClass;
$info->action->procAdminMenuReset->type='controller';
$info->action->procAdminMenuReset->grant='guest';
$info->action->procAdminMenuReset->standalone='true';
$info->action->procAdminMenuReset->ruleset='';
$info->action->procAdminMenuReset->method='';
$info->action->procAdminMenuReset->check_csrf='true';
$info->action->procAdminMenuReset->meta_noindex='false';
$info->action->procAdminUpdateDomains = new stdClass;
$info->action->procAdminUpdateDomains->type='controller';
$info->action->procAdminUpdateDomains->grant='guest';
$info->action->procAdminUpdateDomains->standalone='true';
$info->action->procAdminUpdateDomains->ruleset='';
$info->action->procAdminUpdateDomains->method='';
$info->action->procAdminUpdateDomains->check_csrf='true';
$info->action->procAdminUpdateDomains->meta_noindex='false';
$info->action->procAdminUpdateNotification = new stdClass;
$info->action->procAdminUpdateNotification->type='controller';
$info->action->procAdminUpdateNotification->grant='guest';
$info->action->procAdminUpdateNotification->standalone='true';
$info->action->procAdminUpdateNotification->ruleset='';
$info->action->procAdminUpdateNotification->method='';
$info->action->procAdminUpdateNotification->check_csrf='true';
$info->action->procAdminUpdateNotification->meta_noindex='false';
$info->action->procAdminUpdateSecurity = new stdClass;
$info->action->procAdminUpdateSecurity->type='controller';
$info->action->procAdminUpdateSecurity->grant='guest';
$info->action->procAdminUpdateSecurity->standalone='true';
$info->action->procAdminUpdateSecurity->ruleset='';
$info->action->procAdminUpdateSecurity->method='';
$info->action->procAdminUpdateSecurity->check_csrf='true';
$info->action->procAdminUpdateSecurity->meta_noindex='false';
$info->action->procAdminUpdateAdvanced = new stdClass;
$info->action->procAdminUpdateAdvanced->type='controller';
$info->action->procAdminUpdateAdvanced->grant='guest';
$info->action->procAdminUpdateAdvanced->standalone='true';
$info->action->procAdminUpdateAdvanced->ruleset='';
$info->action->procAdminUpdateAdvanced->method='';
$info->action->procAdminUpdateAdvanced->check_csrf='true';
$info->action->procAdminUpdateAdvanced->meta_noindex='false';
$info->action->procAdminUpdateDebug = new stdClass;
$info->action->procAdminUpdateDebug->type='controller';
$info->action->procAdminUpdateDebug->grant='guest';
$info->action->procAdminUpdateDebug->standalone='true';
$info->action->procAdminUpdateDebug->ruleset='';
$info->action->procAdminUpdateDebug->method='';
$info->action->procAdminUpdateDebug->check_csrf='true';
$info->action->procAdminUpdateDebug->meta_noindex='false';
$info->action->procAdminUpdateSEO = new stdClass;
$info->action->procAdminUpdateSEO->type='controller';
$info->action->procAdminUpdateSEO->grant='guest';
$info->action->procAdminUpdateSEO->standalone='true';
$info->action->procAdminUpdateSEO->ruleset='';
$info->action->procAdminUpdateSEO->method='';
$info->action->procAdminUpdateSEO->check_csrf='true';
$info->action->procAdminUpdateSEO->meta_noindex='false';
$info->action->procAdminUpdateSitelock = new stdClass;
$info->action->procAdminUpdateSitelock->type='controller';
$info->action->procAdminUpdateSitelock->grant='guest';
$info->action->procAdminUpdateSitelock->standalone='true';
$info->action->procAdminUpdateSitelock->ruleset='';
$info->action->procAdminUpdateSitelock->method='';
$info->action->procAdminUpdateSitelock->check_csrf='true';
$info->action->procAdminUpdateSitelock->meta_noindex='false';
$info->action->procAdminInsertDomain = new stdClass;
$info->action->procAdminInsertDomain->type='controller';
$info->action->procAdminInsertDomain->grant='guest';
$info->action->procAdminInsertDomain->standalone='true';
$info->action->procAdminInsertDomain->ruleset='';
$info->action->procAdminInsertDomain->method='';
$info->action->procAdminInsertDomain->check_csrf='true';
$info->action->procAdminInsertDomain->meta_noindex='false';
$info->action->procAdminDeleteDomain = new stdClass;
$info->action->procAdminDeleteDomain->type='controller';
$info->action->procAdminDeleteDomain->grant='guest';
$info->action->procAdminDeleteDomain->standalone='true';
$info->action->procAdminDeleteDomain->ruleset='';
$info->action->procAdminDeleteDomain->method='';
$info->action->procAdminDeleteDomain->check_csrf='true';
$info->action->procAdminDeleteDomain->meta_noindex='false';
$info->action->procAdminUpdateFTPInfo = new stdClass;
$info->action->procAdminUpdateFTPInfo->type='controller';
$info->action->procAdminUpdateFTPInfo->grant='guest';
$info->action->procAdminUpdateFTPInfo->standalone='true';
$info->action->procAdminUpdateFTPInfo->ruleset='';
$info->action->procAdminUpdateFTPInfo->method='';
$info->action->procAdminUpdateFTPInfo->check_csrf='true';
$info->action->procAdminUpdateFTPInfo->meta_noindex='false';
$info->action->procAdminRemoveFTPInfo = new stdClass;
$info->action->procAdminRemoveFTPInfo->type='controller';
$info->action->procAdminRemoveFTPInfo->grant='guest';
$info->action->procAdminRemoveFTPInfo->standalone='true';
$info->action->procAdminRemoveFTPInfo->ruleset='';
$info->action->procAdminRemoveFTPInfo->method='';
$info->action->procAdminRemoveFTPInfo->check_csrf='true';
$info->action->procAdminRemoveFTPInfo->meta_noindex='false';
$info->action->procAdminFaviconUpload = new stdClass;
$info->action->procAdminFaviconUpload->type='controller';
$info->action->procAdminFaviconUpload->grant='guest';
$info->action->procAdminFaviconUpload->standalone='true';
$info->action->procAdminFaviconUpload->ruleset='';
$info->action->procAdminFaviconUpload->method='';
$info->action->procAdminFaviconUpload->check_csrf='true';
$info->action->procAdminFaviconUpload->meta_noindex='false';
return $info;