<?php

namespace yiiunit\extensions\model;

use Yii;

use yiiunit\extensions\model\data\models\Animal;
use yiiunit\extensions\model\data\models\Zoo;

class ModelTest extends TestCase
{
    protected function tearDown()
    {
        parent::tearDown();
    }

    // Tests:

    public function testTest()
    {
        $zoo = new Zoo();
        $this->assertInstanceOf(Zoo::className(), $zoo);

        $zoo->animals = [
            new Animal(['name' => 'Tupla']),
            new Animal(['name' => 'Ringo']),
            new Animal(['name' => 'Minù'])
        ];

        $array = $zoo->toArray();
        var_dump($array);
    }
}