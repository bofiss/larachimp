<?php
/**
 * Created by PhpStorm.
 * User: admindom
 * Date: 29/10/2015
 * Time: 14:32
 */

namespace Larachimp\Notifications;


interface LessonPublished
{

    public function notify($title, $body);
}