<?php

use app\models\Posts;
use common\models\User;


class PostTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }
    
    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
       // $post = Yii::getVersion();
        $post = new Posts();
        $user = new User();
        $user->username = 'vlad';
        $this->assertTrue($user->save(),'Проверка сохранения');
    }

}