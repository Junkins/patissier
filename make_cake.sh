#!/bin/sh
# マイグレーションファイル作成
bin/cake patissier app_migration
# マイグレーション実行
bin/cake migrations migrate
# シードファイル作成
bin/cake patissier sample_accounts_seed
bin/cake patissier sample_projects_seed
bin/cake patissier sample_tasks_seed
# シード実行
bin/cake migrations seed
# APPファイルの作成
bin/cake app_patissier -f
# APP全作成
bin/cake patissier all accounts -t Patissier -f
bin/cake patissier all projects -t Patissier -f
bin/cake patissier all tasks -t Patissier -f

cat << EOS
　　 (⌒У⌒/⌒ヽ
　　 /　　　　_ノ
　＿/　　　　 |
（／￣￣￣￣＼|_
(/ o　　 o　 (　ヽ
f⌒ｖ⌒ｖ⌒　(＿ノ
|○人＿人○　　｜
ヽ~ ＿＿ ￣ 　 /
　＼i＿ﾉ 　　／
　／ー――＜

イェイｖ（＾＿＾ｖ）♪
EOS