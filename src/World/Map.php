<?php
/**
 * Author: RazeSoldier (razesoldier@outlook.com)
 * License: GPL-2.0 or later
 */

namespace RazeSoldier\ArcaeaDataModel\World;

/**
 * 游戏里世界模式里地图的模型
 * @package RazeSoldier\ArcaeaDataModel\World
 * @note 请用MapParser获得本类的实例
 */
class Map
{
    /**
     * @var string 地图的名字
     */
    private $name;

    /**
     * @var int 台阶的总数
     */
    private $stepCount;

    /**
     * @var Step[] 台阶的列表
     */
    private $steps;

    /**
     * @var array 解锁这张地图的条件
     */
    private $require = [
        'type' => null,
        'id' => null,
    ];

    /**
     * Map constructor.
     * @param string $name 地图的名字
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getStepCount() : int
    {
        return $this->stepCount;
    }

    /**
     * @param int $stepCount
     */
    public function setStepCount(int $stepCount) : void
    {
        $this->stepCount = $stepCount;
    }

    public function addStep(Step $step) : void
    {
        $this->steps[$step->getPos()] = $step;
    }

    /**
     * @return Step[]
     */
    public function getSteps() : array
    {
        return $this->steps;
    }

    public function setRequireType(string $requireType) : void
    {
        $this->require['type'] = $requireType;
    }

    public function getRequireType() : string
    {
        return $this->require['type'];
    }

    public function setRequireId(string $requireId) : void
    {
        $this->require['id'] = $requireId;
    }

    public function getRequireId() : string
    {
        return $this->require['id'];
    }

    public function getName() : string
    {
        return $this->name;
    }
}