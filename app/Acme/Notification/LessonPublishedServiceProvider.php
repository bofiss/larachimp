<?php
/**
 * Created by PhpStorm.
 * User: admindom
 * Date: 29/10/2015
 * Time: 14:56
 */

namespace Larachimp\Notifications;


use Illuminate\Support\ServiceProvider;

class LessonPublishedServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Acme\Notifications\LessonPublished',
            'Acme\Notifications\Mailchimp\LessonPublished'
        );
    }
}