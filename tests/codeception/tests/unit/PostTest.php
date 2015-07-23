<?php

use frontend\modules\payment\models\Post;
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
        $post = new Post();
        //$user = new User();
        //$user->username = 'vlad';
        $this->assertTrue($post->returnTrue(),'Проверка сохранения');
        $this->assertLessThan(10,9, 'Проверка числа');
        $this->assertNotNull($post, "не null");
        $this->assertNotEmpty($_SERVER);
        
        $array = ['abs' => 1];
        $jsarray = json_encode($array);
        $this->assertJson($jsarray);
    }

}