<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：news.php
 * ----------------------------------------------------------------------------
 * 功能描述：微信通-精品查询
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

/* 访问控制 */
if (! defined('IN_ECTOUCH')) {
    die('Deny Access');
}

// 加载语言包
$lang = ROOT_PATH . 'plugins/wechat/' . basename(__FILE__, '.php') . '/language/' . C('lang') . '/' . basename(__FILE__);

if (file_exists($lang)) {
    include_once ($lang);
    L($_LANG);
}
/**
 * 配置信息
 */
if (isset($set_modules) && $set_modules == TRUE) {
    $i = isset($modules) ? count($modules) : 0;
    // 功能名称
    $modules[$i]['name'] = '精品';
    // 关键词
    $modules[$i]['keywords'] = basename(__FILE__, '.php');
    // 扩展词
    $modules[$i]['command'] = '精品,best';
    // 作者
    $modules[$i]['author'] = 'ECTOUCH TEAM';
    // 网址
    $modules[$i]['website'] = 'http://www.ectouch.cn';
    // 扩展配置
    $modules[$i]['config'] = array(
        array(
            'name' => 'point_status',
            'type' => 'radio',
            'value' => 1
        ),
        array(
            'name' => 'point_value',
            'type' => 'text',
            'value' => 5
        ),
        array(
            'name' => 'point_num',
            'type' => 'text',
            'value' => 1
        ),
        array(
            'name' => 'point_interval',
            'type' => 'select',
            'value' => array(
                '24小时' => 24 * 60 * 60,
                '1小时' => 60 * 60,
                '1分钟' => 60
            )
        )
    );
    return;
}

/**
 * 精品查询类
 *
 * @author wanglu
 *        
 */
class best extends PluginWechatController
{

    /**
     * 获取数据
     */
    public function show()
    {
        $articles = array();
        $data = model('base')->model->table('goods')
            ->field('goods_id, goods_name, goods_img')
            ->where('is_best = 1')
            ->order('click_count desc, last_update desc')
            ->limit(6)
            ->select();
        if (! empty($data)) {
            foreach ($data as $key => $val) {
                // 不是远程图片
                if (! preg_match('/(http:|https:)/is', $val['goods_img'])) {
                    $articles[$key]['PicUrl'] = __URL__ . '/' . $val['goods_img'];
                } else {
                    $articles[$key]['PicUrl'] = $val['goods_img'];
                }
                $articles[$key]['Title'] = $val['goods_name'];
                $articles[$key]['Url'] = __HOST__ . url('goods/index', array(
                    'id' => $val['goods_id']
                ));
            }
        }
        return $articles;
    }
    
    /**
     * 积分赠送
     * @param unknown $fromusername
     * @param unknown $info
     */
    public function give_point($fromusername, $info)
    {
        if (! empty($info)) {
            $info['config'] = unserialize($info['config']);
            // 配置信息重组
            $config = array();
            foreach ($info['config'] as $key => $val) {
                $config[$val['name']] = $val['value'];
            }
            // 开启积分赠送
            if (isset($config['point_status']) && $config['point_status'] == 1) {
                $where = 'openid = "' . $fromusername . '" and keywords = "' . $info['keywords'] . '" and createtime > (UNIX_TIMESTAMP(NOW())- ' . $config['point_interval'] . ')';
                $num = model('base')->model->table('wechat_point')
                    ->field('createtime')
                    ->where($where)
                    ->order('createtime desc')
                    ->count();
                //当前时间减去时间间隔得到的历史时间之后赠送的次数
                if ($num < $config['point_num']) {
                    $this->do_point($fromusername, $info, $config['point_value']);
                }
            }
        }
    }
    
    /**
     * 行为操作
     */
    public function action(){
        
    }
}
