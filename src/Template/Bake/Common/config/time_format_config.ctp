<?php
use Cake\I18n\FrozenDate;
use Cake\I18n\FrozenTime;

// DATE型の時刻のフォーマット指定
FrozenDate::setToStringFormat('yyyy/MM/dd');
FrozenDate::setJsonEncodeFormat('yyyy/MM/dd');

// DATETIME型の時刻のフォーマット指定
FrozenTime::setToStringFormat('yyyy/MM/dd');
FrozenTime::setJsonEncodeFormat('yyyy/MM/dd');