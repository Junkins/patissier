<?php
use Cake\Core\Configure;

Configure::write('Session', [
    'timeout' => 60 // セッション破棄時間を1時間に設定
]);