<?php
/**
 * abc_basic模块微站定义
 *
 * @author imeepos
 * @url
 */
defined('IN_IA') or exit('Access Denied');

class Abc_basicModuleSite extends WeModuleSite
{

    public function doWebAdd()
    {
        global $_W, $_GPC;
        include $this->template('add');
    }

    public function doWebList()
    {
        global $_W, $_GPC;
        include $this->template('list');
    }
}
