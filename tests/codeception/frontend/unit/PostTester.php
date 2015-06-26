<?php

use app\models\Posts;

class PostTester extends \yii\codeception\TestCase {
    
    public function testPost() {
        
        $post = new Post();
        $this->assertNotEmpty($post);
    }
    
}