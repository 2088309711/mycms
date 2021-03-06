<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


use think\Route;


Route::get([
    '/' => 'index/index/index',
    'nav' => 'index/index/nav',
    'download' => 'index/index/download',
    'loader_help' => 'index/index/loaderHelp',
    'video_play/:id' => 'index/index/videoPlay',
    'download_loader' => 'index/index/downloadLoader',
    'add' => 'red_pack/index/add',
    'query' => 'red_pack/index/index',
    'login' => 'red_pack/index/login',
    'delete/:id' => 'red_pack/index/delete',
    'update/:id' => 'red_pack/index/update',

    'info' => 'admin/Info/index',
    'list_news' => 'admin/Info/news',
    'list_news_get_data' => 'admin/Info/getData',

    'admin_login' => 'admin/Login/index',

    'admin' => 'admin/Index/index',
    'menu' => 'admin/Index/menu',

    'system' => 'admin/System/index',
    'system_param_set' => 'admin/System/systemParamSet',
    'pseudo_static_param_set' => 'admin/System/pseudoStaticParamSet',
    'dynamic_page_cache_set' => 'admin/System/dynamicPageCacheSet',
    'digg_top_set' => 'admin/System/diggTopSet',
    'extended_variables' => 'admin/System/extendedVariables',
    'security_param_config' => 'admin/System/securityParamConfig',
    'website_firewall' => 'admin/System/websiteFirewall',
    'data_update_center' => 'admin/System/dataUpdateCenter',
    'update_info_page_address' => 'admin/System/updateInfoPageAddress',
    'update_dynamic_page_cache' => 'admin/System/updateDynamicPageCache',
    'data_collation' => 'admin/System/dataCollation',
    'remote_publish' => 'admin/System/remotePublish',
    'new_data_table' => 'admin/System/newDataTable',
    'management_data_sheet' => 'admin/System/managementDataSheet',
    'manage_refresh_tasks' => 'admin/System/manageRefreshTasks',
    'manage_scheduled_tasks' => 'admin/System/manageScheduledTasks',
    'add_workflow' => 'admin/System/addWorkflow',
    'manage_workflow' => 'admin/System/manageWorkflow',
    'management_optimization_plan' => 'admin/System/managementOptimizationPlan',
    'manage_site_visitors' => 'admin/System/manageSiteVisitors',
    'management_menu' => 'admin/System/managementMenu',
    'backup_data' => 'admin/System/backupData',
    'restore_data' => 'admin/System/restoreData',
    'manage_backup_directories' => 'admin/System/manageBackupDirectories',
    'execute_sql_statement' => 'admin/System/executeSqlStatement',

    'class' => 'admin/NjClass/index',
    'manage_info' => 'admin/NjClass/manageInfo',
    'audit_info' => 'admin/NjClass/auditInfo',
    'issue_info' => 'admin/NjClass/issueInfo',
    'manage_review' => 'admin/NjClass/manageReview',
    'update_fragments' => 'admin/NjClass/updateFragments',
    'update_topic' => 'admin/NjClass/updateTopic',
    'data_count' => 'admin/NjClass/dataCount',
    'rank_count' => 'admin/NjClass/rankCount',
    'manage_class' => 'admin/NjClass/manageClass',
    'manage_class_pageing' => 'admin/NjClass/manageClassPageing',
    'class_custom_field' => 'admin/NjClass/classCustomField',
    'batch_set_class_pro' => 'admin/NjClass/batchSetClassPro',
    'manage_topic_class' => 'admin/NjClass/manageTopicClass',
    'manage_topics' => 'admin/NjClass/manageTopics',
    'theme_custom_fields' => 'admin/NjClass/themeCustomFields',
    'add_title_category' => 'admin/NjClass/addTitleCategory',
    'manage_title_type' => 'admin/NjClass/manageTitleType',
    'manage_type' => 'admin/NjClass/manageType',
    'management_debris' => 'admin/NjClass/managementDebris',
    'manage_custom_page_type' => 'admin/NjClass/manageCustomPageType',
    'add_custom_page' => 'admin/NjClass/addCustomPage',
    'manage_custom_page' => 'admin/NjClass/manageCustomPage',
    'manage_custom_list_class' => 'admin/NjClass/manageCustomListClass',
    'add_custom_list' => 'admin/NjClass/addCustomList',
    'manage_custom_lists' => 'admin/NjClass/manageCustomLists',
    'manage_custom_js_type' => 'admin/NjClass/manageCustomJsType',
    'add_custom_js' => 'admin/NjClass/addCustomJs',
    'manage_custom_js' => 'admin/NjClass/manageCustomJs',
    'set_tags_param' => 'admin/NjClass/setTagsParam',
    'manage_tags_type' => 'admin/NjClass/manageTagsType',
    'manage_tags' => 'admin/NjClass/manageTags',
    'manage_headline_levels' => 'admin/NjClass/manageHeadlineLevels',
    'manage_recommendation_levels' => 'admin/NjClass/manageRecommendationLevels',
    'manage_annex' => 'admin/NjClass/manageAnnex',
    'add_acquisition_node' => 'admin/NjClass/addAcquisitionNode',
    'manage_collection_nodes' => 'admin/NjClass/manageCollectionNodes',
    'manage_collection_node_paging' => 'admin/NjClass/manageCollectionNodePaging',
    'site_wide_search_settings' => 'admin/NjClass/siteWideSearchSettings',
    'manage_search_data_sources' => 'admin/NjClass/manageSearchDataSources',
    'clean_up_search_data' => 'admin/NjClass/cleanUpSearchData',
    'wap_set' => 'admin/NjClass/wapSet',
    'manage_wap_templates' => 'admin/NjClass/manageWapTemplates',
    'count_info_data' => 'admin/NjClass/countInfoData',
    'user_publish_count' => 'admin/NjClass/userPublishCount',
    'manage_search_keyword' => 'admin/NjClass/manageSearchKeyword',
    'batch_replace_field_value' => 'admin/NjClass/batchReplaceFieldValue',
    'batch_transfer_info' => 'admin/NjClass/batchTransferInfo',
    'mass_archiving_info' => 'admin/NjClass/massArchivingInfo',
    'bulk_del_info' => 'admin/NjClass/bulkDelInfo',
    'manage_default_voting' => 'admin/NjClass/manageDefaultVoting',

    'template' => 'admin/Template/index',
    'view_tag_syntax' => 'admin/Template/viewTagSyntax',
    'automatically_generate_label' => 'admin/Template/automaticallyGenerateLabel',
    'dynamic_page_template_manage' => 'admin/Template/dynamicPageTemplateManage',
    'home_template' => 'admin/Template/homeTemplate',
    'manage_index_scheme' => 'admin/Template/manageIndexScheme',
    'manage_cover_template_type' => 'admin/Template/manageCoverTemplateType',
    'manage_cover_page_template' => 'admin/Template/manageCoverPageTemplate',
    'manage_list_template_type' => 'admin/Template/manageListTemplateType',
    'manage_list_template' => 'admin/Template/manageListTemplate',
    'manage_content_template_categories' => 'admin/Template/manageContentTemplateCategories',
    'manage_content_template' => 'admin/Template/manageContentTemplate',
    'manage_search_template_type' => 'admin/Template/manageSearchTemplateType',
    'manage_search_template' => 'admin/Template/manageSearchTemplate',
    'manage_label_template_type' => 'admin/Template/manageLabelTemplateType',
    'manage_label_template' => 'admin/Template/manageLabelTemplate',
    'manage_template_var_type' => 'admin/Template/manageTemplateVarType',
    'manage_template_var' => 'admin/Template/manageTemplateVar',
    'control_panel_template' => 'admin/Template/controlPanelTemplate',
    'site_wide_search_template' => 'admin/Template/siteWideSearchTemplate',
    'advanced_search_form_template' => 'admin/Template/advancedSearchFormTemplate',
    'search_js_templates_horizontally' => 'admin/Template/searchJsTemplatesHorizontally',
    'vertical_search_js_template' => 'admin/Template/verticalSearchJsTemplate',
    'related_info_template' => 'admin/Template/relatedInfoTemplate',
    'message_board_template' => 'admin/Template/messageBoardTemplate',
    'comment_js_call_template' => 'admin/Template/commentJsCallTemplate',
    'final_download_page_template' => 'admin/Template/finalDownloadPageTemplate',
    'download_address_template' => 'admin/Template/downloadAddressTemplate',
    'online_play_address_template' => 'admin/Template/onlinePlayAddressTemplate',
    'list_page_template' => 'admin/Template/listPageTemplate',
    'login_status_template' => 'admin/Template/loginStatusTemplate',
    'js_call_login_template' => 'admin/Template/jsCallLoginTemplate',
    'manage_js_template_type' => 'admin/Template/manageJsTemplateType',
    'manage_js_template' => 'admin/Template/manageJsTemplate',
    'add_comment_template' => 'admin/Template/addCommentTemplate',
    'manage_comment_template' => 'admin/Template/manageCommentTemplate',
    'add_print_template' => 'admin/Template/addPrintTemplate',
    'manage_print_template' => 'admin/Template/managePrintTemplate',
    'add_custom_page_template' => 'admin/Template/addCustomPageTemplate',
    'manage_custom_page_template' => 'admin/Template/manageCustomPageTemplate',
    'add_voting_template' => 'admin/Template/addVotingTemplate',
    'manage_voting_template' => 'admin/Template/manageVotingTemplate',
    'manage_label_type' => 'admin/Template/manageLabelType',
    'manage_label' => 'admin/Template/manageLabel',
    'modify_template_id' => 'admin/Template/modifyTemplateId',
    'export_template_group' => 'admin/Template/exportTemplateGroup',
    'batch_import_class_template' => 'admin/Template/batchImportClassTemplate',
    'batch_change_list_template' => 'admin/Template/batchChangeListTemplate',
    'batch_replace_template_char' => 'admin/Template/batchReplaceTemplateChar',

    'user_manage' => 'admin/UserManage/index',
    'update_user_data' => 'admin/UserManage/updateUserData',
    'manage_user_group' => 'admin/UserManage/manageUserGroup',
    'manage_department' => 'admin/UserManage/manageDepartment',
    'manage_user' => 'admin/UserManage/manageUser',
    'manage_log_in' => 'admin/UserManage/manageLogIn',
    'manage_operation_log' => 'admin/UserManage/manageOperationLog',
    'manage_admin_style' => 'admin/UserManage/manageAdminStyle',
    'manage_member' => 'admin/UserManage/manageMember',
    'manage_member_details' => 'admin/UserManage/manageMemberDetails',
    'bulk_clear_member' => 'admin/UserManage/bulkClearMember',
    'member_group' => 'admin/UserManage/memberGroup',
    'member_internal_group' => 'admin/UserManage/memberInternalGroup',
    'member_visit_group' => 'admin/UserManage/memberVisitGroup',
    'member_manage_group' => 'admin/UserManage/memberManageGroup',
    'manage_member_field' => 'admin/UserManage/manageMemberField',
    'manage_member_form' => 'admin/UserManage/manageMemberForm',
    'manage_space_template' => 'admin/UserManage/manageSpaceTemplate',
    'manage_space_message' => 'admin/UserManage/manageSpaceMessage',
    'manage_space_feedback' => 'admin/UserManage/manageSpaceFeedback',
    'manage_external_login_interface' => 'admin/UserManage/manageExternalLoginInterface',
    'manage_recharge_type' => 'admin/UserManage/manageRechargeType',
    'manage_card' => 'admin/UserManage/manageCard',
    'bulk_free_point' => 'admin/UserManage/bulkFreePoint',
    'bulk_send_mail' => 'admin/UserManage/bulkSendMail',
    'bulk_send_sms' => 'admin/UserManage/bulkSendSms',
    'bulk_delete_sms' => 'admin/UserManage/bulkDeleteSms',

    'plug_in' => 'admin/PlugIn/index',
    'manage_advertising_type' => 'admin/PlugIn/manageAdvertisingType',
    'manage_advertising' => 'admin/PlugIn/manageAdvertising',
    'add_voting' => 'admin/PlugIn/addVoting',
    'manage_voting' => 'admin/PlugIn/manageVoting',
    'manage_link_type' => 'admin/PlugIn/manageLinkType',
    'manage_link' => 'admin/PlugIn/manageLink',
    'manage_message_type' => 'admin/PlugIn/manageMessageType',
    'manage_message' => 'admin/PlugIn/manageMessage',
    'bulk_delete_message' => 'admin/PlugIn/bulkDeleteMessage',
    'manage_feedback_type' => 'admin/PlugIn/manageFeedbackType',
    'manage_feedback_field' => 'admin/PlugIn/manageFeedbackField',
    'manage_info_feedback' => 'admin/PlugIn/manageInfoFeedback',
    'manage_anti_collection_rand_char' => 'admin/PlugIn/manageAntiCollectionRandChar',


    'shopping_mall' => 'admin/ShoppingMall/index',
    'all_order' => 'admin/ShoppingMall/allOrder',
    'undelivered_order' => 'admin/ShoppingMall/undeliveredOrder',
    'order_in_stock' => 'admin/ShoppingMall/orderInStock',
    'order_shipped' => 'admin/ShoppingMall/orderShipped',
    'return_order' => 'admin/ShoppingMall/returnOrder',
    'discount_code' => 'admin/ShoppingMall/discountCode',
    'manage_payment_method' => 'admin/ShoppingMall/managePaymentMethod',
    'manage_delivery_method' => 'admin/ShoppingMall/manageDeliveryMethod',
    'mall_param_set' => 'admin/ShoppingMall/mallParamSet',


    'other' => 'admin/Other/index',
    'source_manage_info' => 'admin/Other/sourceManageInfo',
    'manage_author' => 'admin/Other/manageAuthor',
    'manage_content_keywords' => 'admin/Other/manageContentKeywords',
    'manage_filter_char' => 'admin/Other/manageFilterChar',
    'manage_addres_prefixe' => 'admin/Other/manageAddresPrefixe',
    'delete_download_record' => 'admin/Other/deleteDownloadRecord',
    'manage_error_reporting' => 'admin/Other/manageErrorReporting',
    'batch_replace_addres_permission' => 'admin/Other/batchReplaceAddresPermission',
    'player_manage' => 'admin/Other/playerManage',
    'payment_param_config' => 'admin/Other/paymentParamConfig',
    'manage_payment_interface' => 'admin/Other/managePaymentInterface',
    'manage_payment_record' => 'admin/Other/managePaymentRecord',
    'manage_picture_info_type' => 'admin/Other/managePictureInfoType',
    'manage_picture_info' => 'admin/Other/managePictureInfo',

]);

Route::post([
    'query' => 'red_pack/index/index',
    'add' => 'red_pack/index/add',
    'login' => 'red_pack/index/login',
    'delete' => 'red_pack/index/delete',
    'update' => 'red_pack/index/update',
    'admin_login' => 'admin/login/index',
]);


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];


