<?php

namespace IGScraper\Model;

use IGScraper\Traits\ArrayLikeTrait;
use IGScraper\Traits\InitializerTrait;

/**
 * Class AbstractModel
 * @package IGScraper\Model
 */
abstract class AbstractModel implements \ArrayAccess
{
    use InitializerTrait, ArrayLikeTrait;

    /**
     * @var array
     */
    protected static $initPropertiesMap = [];

    /**
     * @return array
     */
    public static function getColumns()
    {
        return \array_keys(static::$initPropertiesMap);
    }
}