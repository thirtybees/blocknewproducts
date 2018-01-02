<?php

if (!defined('_TB_VERSION_')) {
    return;
}

function upgrade_module_1_5_0($module)
{
    $module->unregisterHook('rightColumn');
    $module->registerHook('displayHomeTab');
    $module->registerHook('displayHomeTabContent');

    return true;
}
