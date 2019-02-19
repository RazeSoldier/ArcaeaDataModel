<?php
/**
 * Author: RazeSoldier (razesoldier@outlook.com)
 * License: GPL-2.0 or later
 */

namespace RazeSoldier\ArcaeaDataModel\Song;

/**
 * 用于构建SongMap
 * @package RazeSoldier\ArcaeaDataModel\Song
 */
class SongMapBuilder
{
    /**
     * @var SongMap
     */
    private $songMap;

    /**
     * @var string songlist.json的路径
     */
    private $rawPath;

    /**
     * SongMapBuilder constructor.
     * @param string $rawPath songlist.json的路径
     */
    public function __construct(string $rawPath)
    {
        if (!file_exists($rawPath)) {
            throw new \RuntimeException("$rawPath does not exist");
        }
        $this->rawPath = $rawPath;
        $this->build();
    }

    private function build()
    {
        $json = json_decode(file_get_contents($this->rawPath), true);
        if ($json === null) {
            throw new \RuntimeException('Failed to parse songlist json file: ' . json_last_error_msg());
        }
        $this->songMap = new SongMap;
        foreach ($json['songs'] as $song) {
            $songObj = new Song($song['title_localized']['en'], $song['id']);
            //$songObj->setTime($song['']); // TODO: 因技术原因目前暂时无法获得歌曲时间
            foreach ($song['title_localized'] as $langCode => $text) {
                $songObj->addI18nName($langCode, $text);
            }
            $songObj->setArtist($song['artist']);
            $songObj->setBpm($song['bpm_base']);
            $songObj->setUpdateTime($song['date']);
            $songObj->setPastInfo($song['difficulties'][0]);
            $songObj->setPresentInfo($song['difficulties'][1]);
            $songObj->setFutureInfo($song['difficulties'][2]);
            $songObj->setPackName($song['set']);
            $this->songMap->addSong($songObj);
        }
    }

    public function getSongMap() : SongMap
    {
        return $this->songMap;
    }
}