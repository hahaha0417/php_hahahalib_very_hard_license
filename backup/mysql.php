<?php

namespace hahaha\config;

use hahaha\env;


class Mysql
{
    use \hahaha\instance;

   
    public function initial()
    {
        // --------------------------------------------------- 
        // 主要
        // --------------------------------------------------- 
        // 維修
        $this->maintain = env::MAINTAIN;
        // 紀錄
        $this->log = env::LOG;
        // 除錯
        $this->debug = env::DEBUG;
        // 版本
        $this->version = env::VERSION;
        // 線上
        $this->online = env::ONLINE;
        // --------------------------------------------------- 
        
        return $this;
    }
}