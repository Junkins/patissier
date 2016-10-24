<?php
use Cake\Database\Type;

Type::build('time')->useImmutable()->useLocaleParser();
Type::build('date')->useImmutable()->useLocaleParser();
Type::build('datetime')->useImmutable()->useLocaleParser();

// 拡張タイプの指定
Type::map('code2', 'App\Database\Type\Code2Type');
Type::map('code3', 'App\Database\Type\Code3Type');
Type::map('code4', 'App\Database\Type\Code4Type');
Type::map('code6', 'App\Database\Type\Code6Type');
Type::map('code7', 'App\Database\Type\Code7Type');
Type::map('code8', 'App\Database\Type\Code8Type');