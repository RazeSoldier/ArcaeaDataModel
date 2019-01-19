<?php
/**
 * Author: RazeSoldier (razesoldier@outlook.com)
 * License: GPL-2.0 or later
 */

namespace RazeSoldier\ArcaeaDataModel\World;

/**
 * 用于解析世界模式里的梯子Raw数据
 * @package RazeSoldier\ArcaeaDataModel\World
 */
class MapParser
{
    /**
     * @var string
     */
    private $raw;

    /**
     * @var Map
     */
    private $result;

    public function __construct(string $raw)
    {
        $this->raw = $raw;
        $this->parse();
    }

    private function parse()
    {
        $json = json_decode($this->raw, true)['value'];
        $map = new Map($json['current_map']);
        $map->setStepCount($json['maps'][0]['step_count']);
        $map->setRequireType($json['maps'][0]['require_type']);
        $map->setRequireId($json['maps'][0]['require_id']);
        foreach ($json['maps'][0]['steps'] as $step) {
            $step = new StepParser($step);
            $map->addStep($step->getResult());
        }
        $this->result = $map;
    }

    /**
     * @return Map
     */
    public function getResult() : Map
    {
        return $this->result;
    }
}