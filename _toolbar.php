<?php

use app\helpers\App;
use app\helpers\Html;

$system = App::setting('system');


$this->addJsFile('firebase/firebase', [], [
    'type' => 'module'
]);

$this->registerCss(<<< CSS
    .widget-left {
        margin: 0 auto !important;
        margin-bottom: 20px !important;
    }
    .topbar {
        align-items: center !important;
    }
CSS);



$this->registerJs(<<< JS
    const doDate = () => {
        var str = "";

        var days = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        var months = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

        var now = new Date();
        var amOrPm = (now.getHours() < 12) ? "AM" : "PM";
        var hour = (now.getHours() < 12) ? now.getHours() : now.getHours() - 12;

        hour = hour < 10 ? "0" + hour: hour;
        hour = parseInt(hour) ? hour: '12';

        var minutes = now.getMinutes() < 10 ? "0" + now.getMinutes(): now.getMinutes();
        var seconds = now.getSeconds() < 10 ? "0" + now.getSeconds(): now.getSeconds();

        str += "<div class='lead font-weight-bold' style='font-size: 1.4rem !important'>"+ hour +":" + minutes + ":" + seconds + " " + amOrPm +"</div>";
        str += "<div class='font-weight-bold' style='text-transform: capitalize; font-size: 1.1rem'>"+ days[now.getDay()] + ", " + now.getDate() + " " + months[now.getMonth()] + " " + now.getFullYear() +"</div>";

        document.getElementById("todaysDate").innerHTML = str;
    }

    setInterval(doDate, 1000);

    const subscribeToAlertLevel = (alert_level, purpose = 'subscribe') => {
        const btn = $('.alert-level .btn-alert-level');

        $.ajax({
            url: app.baseUrl + 'setting/change-alert-level',
            data: { alert_level, purpose },
            method: 'get',
            dataType: 'json',
            success: (s) => {
                if (s.status == 'success') {
                   subscribeToAlertLevel(s.alert_level.id);

                   btn.removeClass('btn-danger')
                        .removeClass('btn-primary')
                        .removeClass('btn-outline-secondary');

                    btn.addClass('btn-' + s.alert_level.class);
                    btn.html(s.alert_level.label);
                }
                else {
                   subscribeToAlertLevel(alert_level);
                }
            },
            error: (e) => {
                console.log('subscribeToAlertLevel', e);
            }
        });
    }

    // subscribeToAlertLevel({$system->alert_level});

    // $('.alert-level .dropdown-item').click(function() {
    //     KTApp.block('.alert-level', {
    //         overlayColor: '#000',
    //         message: 'Changing alert level',
    //         state: 'primary'
    //     });

    //     const alertId = $(this).data('id');
    //     const alertLabel = $(this).data('label');
    //     const alertClass = $(this).data('class');
    //     const alertDescription = $(this).data('description');

    //     const btn = $('.alert-level .btn-alert-level');

    //     $.ajax({
    //         url: app.baseUrl + 'setting/change-alert-level',
    //         data: { alert_level: alertId },
    //         method: 'get',
    //         dataType: 'json',
    //         success: (s) => {
    //             if (s.status == 'success') {
    //                 btn.removeClass('btn-danger')
    //                     .removeClass('btn-primary')
    //                     .removeClass('btn-outline-secondary');

    //                 btn.addClass('btn-' + alertClass);
    //                 btn.html(alertLabel);

    //                 swal.fire('Alert Level: ' + alertLabel, alertDescription, 'success');
    //             }
    //             else {
    //                 swal.fire('Error', s.errorSummary, 'danger');
    //             }

    //             KTApp.unblock('.alert-level');
    //         },
    //         error: (e) => {
    //             swal.fire('Error', e.responseText, 'danger');
    //             KTApp.unblock('.alert-level');
    //         }
    //     });
    // });
JS);
?>

<div class="topbar">
    <div class="mr-10">
        <div class="d-flex justify-content-around align-items-center alert-level">
            <div class="font-weight-bolder mr-2">ALERT LEVEL</div>
            <div>
                <?php /*
                <?php if (App::identity()->can('change-alert-level', 'setting')): ?>
                */ ?>
                <?php if (App::identity()): ?>
                    <div class="dropdown">
                        <button class="btn-alert-level btn btn-<?= $system->alertLevelClass ?> dropdown-toggle font-weight-bolder" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $system->alertLevelLabel ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?= App::foreach(
                                App::params('alert_level'), 
                                fn ($level) => Html::a(<<< HTML
                                    <div class="d-flex align-items-center" style="max-width:20rem;width: max-content;">
                                        <div>
                                            <span class="badge badge-{$level['class']}">
                                                {$level['label']}
                                            </span>
                                        </div>
                                        <div class="ml-4">
                                            <small style="white-space: pre-wrap;" class="font-weight-bold">{$level['description']}</small>
                                        </div>
                                    </div>
                                    HTML, 
                                    '#', 
                                    [
                                        'class' => 'dropdown-item',
                                        'data-id' =>  $level['id'],
                                        'data-label' =>  $level['label'],
                                        'data-class' =>  $level['class'],
                                        'data-description' =>  $level['description'],
                                    ]
                                )
                            ) ?>
                        </div>
                    </div>
                <?php else: ?>
                    <button class="btn btn-<?= $system->alertLevelClass ?> font-weight-bolder">
                        <?= $system->alertLevelLabel ?>
                    </button>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="mr-5">
        <div class='text-center' style="line-height: 1.7rem;">
            <div class='font-weight-bold' style='text-transform: uppercase;'>PHILIPPINES STANDARD TIME</div>
            <div id="todaysDate">
                <div class='lead font-weight-bold' style='font-size: 1.4rem !important; filter: blur(4px);opacity: 0.5;border-radius: 2px'>03:40:54 PM</div>
                <div class='font-weight-bold' style='text-transform: capitalize; font-size: 1.1rem;filter: blur(4px);opacity: 0.5;border-radius: 2px'>Monday, 24 October 2022</div>
            </div>
        </div>
    </div>
    <!--begin::Search-->
    <?php # $this->render('_search_layout') ?>
    <!--end::Search-->
    <!--begin::Quick panel-->
    <?= $this->render('_quick_panel') ?>
    <!--end::Quick panel-->
    <!--begin::Notifications-->
    <?= $this->render('_notifications') ?>
    <!--end::Notifications-->
    <!--begin::Quick Actions-->
    <?php # $this->render('_quick_actions') ?>
    <!--end::Quick Actions-->
    <!--begin::Chat-->
    <?php #$this->render('_chat') ?>
    <!--end::Chat-->
    <!--begin::Languages-->
    <?php # $this->render('_languages') ?>
    <!--end::Languages-->
    <!--begin::User-->
    <?= $this->render('_user') ?>
    <!--end::User-->
</div>