<?php

use app\helpers\App;
use app\helpers\Html;
use app\helpers\Url;
use app\models\Email;
use app\widgets\Anchor;
use app\widgets\Menu;
use yii\web\User;


$identity = App::identity() ?? ['firstname'=>'Eugene'];
// if ($identity) $identity->setTheProfile();

?>
<section class="user-side-nav mt-5">
    <div class="d-flex align-items-center" style="padding: 0 15px;">
        <div class="symbol symbol-60 mr-5">
            <div id="profile-image-dropdown" class="symbol-label" 
                style="background-image:url('<?= Url::image($identity->photo ?? "", ['w' => 200]) ?>')">
            </div>
            <!-- <i class="symbol-badge bg-success"></i> -->
        </div>
        <div class="d-flex flex-column text-white" style="word-break: break-all;">
            <?= Anchor::widget([
                // 'title' => ucwords($identity->firstname ?: $identity->username),
                'title' => ucwords('title_firstname'),
                'link' => ['user/my-account'],
                'text' => true,
                'options' => [
                    'class' => 'font-weight-bold font-size-h5 text-white text-hover-primary',
                ]
            ]) ?>
            
            <div class="text-white mt-1">
                <?= Anchor::widget([
                    // 'title' => $identity->position ?: $identity->roleName,
                    'title' => 'title_role',
                    'link' => ['user/my-account'],
                    'text' => true,
                    'options' => [
                        'class' => 'text-hover-primary text-white',
                    ]
                ]) ?>
            </div>
            
        </div>
    </div>
</section>
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <?= Menu::widget([
            'viewParams' => $this->params
        ]) ?>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>