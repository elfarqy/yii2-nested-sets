<?php
/**
 * @link https://github.com/dlds/yii2-nested-sets
 * @copyright Copyright (c) 2015 Alexander Kochetov
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace tests\models;

use dlds\nestedsets\NestedSetsQueryBehavior;

/**
 * MultipleTreeQuery
 */
class MultipleTreeQuery extends \yii\db\ActiveQuery
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            NestedSetsQueryBehavior::className(),
        ];
    }
}
