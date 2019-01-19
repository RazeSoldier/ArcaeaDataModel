<?php
/**
 * Author: RazeSoldier (razesoldier@outlook.com)
 * License: GPL-2.0 or later
 */

namespace RazeSoldier\ArcaeaDataModel\Song;

/**
 * 歌曲映射
 * 主要用于把机器可读的歌曲名字转换为人类可读的名字
 * @package RazeSoldier\ArcaeaDataModel\Song
 * @note 请用SongMapBuilder来获取本类的实例
 */
class SongMap
{
    /**
     * @var Song[]
     */
    private $map = [];

    public function addSong(Song $song)
    {
        $this->map[] = $song;
    }

    /**
     * @return Song[]
     */
    public function getMap() : array
    {
        return $this->map;
    }
}