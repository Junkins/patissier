#!/bin/sh
# Migrationの削除
rm config/Migrations/*
# Seedの削除
rm config/Seeds/*
# Typeの削除
rm src/Database/Type/*
# Entityの削除
rm src/Model/Entity/*
# Tableの削除
rm src/Model/Table/*
# Controllerの削除
cd src/Controller/
ls | grep -v -E 'Component$' | xargs rm
cd ../../
# Templateの削除
cd src/Template/
ls | grep -v -E 'Element|Email|Error|Layout|Pages$' | xargs rm -r
cd ../../
# Validationの削除
rm src/Validation/*
# Viewの削除
rm src/View/AppView.php
# Helperの削除
rm src/View/Helper/*
