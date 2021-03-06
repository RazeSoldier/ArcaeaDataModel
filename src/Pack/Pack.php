<?php
/**
 * Author: RazeSoldier (razesoldier@outlook.com)
 * License: GPL-2.0 or later
 */

namespace RazeSoldier\ArcaeaDataModel\Pack;

/**
 * 单个曲包的模型
 * @package RazeSoldier\ArcaeaDataModel\Pack
 */
class Pack
{
    /**
     * @var string 人类可读的名字
     */
    private $name;

    /**
     * @var string 机器可读的名字
     */
    private $realName;

    public function __construct($name, $realName)
    {
        $this->name = $name;
        $this->realName = $realName;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRealName() : string
    {
        return $this->realName;
    }
}