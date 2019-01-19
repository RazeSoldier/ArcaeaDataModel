<?php
/**
 * Author: RazeSoldier (razesoldier@outlook.com)
 * License: GPL-2.0 or later
 */

namespace RazeSoldier\ArcaeaDataModel\Pack;

/**
 * 用于构建PackMap
 * @package RazeSoldier\ArcaeaDataModel\Pack
 */
class PackMapBuilder
{
    /**
     * @var PackMap
     */
    private $packMap;

    /**
     * @var string packlist.json的路径
     */
    private $rawPath;

    /**
     * PackMapBuilder constructor.
     * @param string $rawPath packlist.json的路径
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
            throw new \RuntimeException('Failed to parse packlist json file: ' . json_last_error_msg());
        }
        $this->packMap = new PackMap();
        foreach ($json['packs'] as $pack) {
            $packObj = new Pack($pack['name_localized']['en'], $pack['id']);
            $this->packMap->addPack($packObj);
        }
    }

    public function getPackMap() : PackMap
    {
        return $this->packMap;
    }
}