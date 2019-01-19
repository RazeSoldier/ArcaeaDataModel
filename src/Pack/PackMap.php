<?php
/**
 * Author: RazeSoldier (razesoldier@outlook.com)
 * License: GPL-2.0 or later
 */

namespace RazeSoldier\ArcaeaDataModel\Pack;

/**
 * 曲包映射
 * 主要用于把机器可读的曲包名字转换为人类可读的名字
 * @package RazeSoldier\ArcaeaDataModel\Pack
 * @note 请用PackMapBuilder获得本类的实例
 */
class PackMap
{
    /**
     * @var Pack[]
     */
    private $map = [];

    public function addPack(Pack $song)
    {
        $this->map[] = $song;
    }

    /**
     * @return Pack[]
     */
    public function getMap() : array
    {
        return $this->map;
    }
}