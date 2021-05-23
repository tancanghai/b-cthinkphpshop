<?php
/**
 * 获取状态中文释义
 * @ $config_file 配置文件名
 * @ $config_file 状态名
 * @ $config_file 状态值
 */
function getStatusText($config_file,$code,$key)
{
    return config($config_file)[$code][$key]?:"其它";
}
