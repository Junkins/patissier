#!/bin/sh
# マイグレーションファイル作成
bin/cake sample_app_patissier sample_migration
# マイグレーション実行
bin/cake migrations migrate
# シードファイル作成
bin/cake sample_app_patissier sample_accounts_seed
bin/cake sample_app_patissier sample_projects_seed
bin/cake sample_app_patissier sample_tasks_seed
# シード実行
bin/cake migrations seed
# APPファイルの作成
bin/cake common_patissier -f