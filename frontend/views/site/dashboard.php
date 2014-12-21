<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this yii\web\View */
?>
<h1>Dashboard</h1>

 <div>
        <?php
            NavBar::begin();
            $menuItems = [
                
                ['label' => 'School', 'url' => ['/school/index']],
                ['label' => 'Classes', 'url' => ['/classes/index']],
                ['label' => 'Lesson', 'url' => ['/lesson/index']],
                ['label' => 'Student', 'url' => ['/student/index']],
                ['label' => 'Rating', 'url' => ['/rating/rating/index']],
		
            ];
            echo Nav::widget([
                'options' => ['class' => 'nav-dashboard'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

    </div>
