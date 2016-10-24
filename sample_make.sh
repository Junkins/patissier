#!/bin/sh
# マイグレーションファイル作成
# bin/cake sample_app_patissier sample_migration -f
# マイグレーション実行
# bin/cake migrations migrate -f
# シードファイル作成
# bin/cake sample_app_patissier sample_accounts_seed -f
# bin/cake sample_app_patissier sample_projects_seed -f
# bin/cake sample_app_patissier sample_tasks_seed -f
# シード実行
# bin/cake migrations seed -f
# APPファイルの作成
bin/cake common_app_patissier app_controller -f
bin/cake common_app_patissier app_entity -f
bin/cake common_app_patissier app_form_helper -f
bin/cake common_app_patissier app_form -f
bin/cake common_app_patissier app_html_helper -f
bin/cake common_app_patissier app_paginator_helper -f
bin/cake common_app_patissier app_table -f
bin/cake common_app_patissier app_type -f
bin/cake common_app_patissier app_url_helper -f
bin/cake common_app_patissier app_validation -f
bin/cake common_app_patissier app_validator -f
bin/cake common_app_patissier app_view -f
bin/cake common_app_patissier admin_entity_trait -f
bin/cake common_app_patissier admin_entity_trait -f
bin/cake common_app_patissier bower_json -f
bin/cake common_app_patissier bower_rc -f
bin/cake common_app_patissier common_form_trait -f
bin/cake common_app_patissier composer_json -f
bin/cake common_app_patissier find_exist_in_behavior -f
bin/cake common_app_patissier find_ignore_behavior -f
bin/cake common_app_patissier find_no_behavior -f
bin/cake common_app_patissier get_options_behavior -f
bin/cake common_app_patissier git_ignore -f
bin/cake common_app_patissier git_pre_commit -f
bin/cake common_app_patissier human_info_entity_trait -f
bin/cake common_app_patissier jp_date_info_entity_trait -f
bin/cake common_app_patissier option_label_entity_trait -f
bin/cake common_app_patissier paginator_query -f
bin/cake common_app_patissier paginator_query_trait -f
bin/cake common_app_patissier php_cs -f
bin/cake common_app_patissier php_md -f
bin/cake common_app_patissier prg_validation_component -f
bin/cake common_app_patissier simple_master_delete_trait -f
bin/cake common_app_patissier simple_master_index_trait -f
bin/cake common_app_patissier plugin_config -f
bin/cake common_app_patissier session_config -f
bin/cake common_app_patissier time_format_config -f
bin/cake common_app_patissier type_config -f