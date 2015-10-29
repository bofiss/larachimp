<?php
/**
 * Created by PhpStorm.
 * User: admindom
 * Date: 29/10/2015
 * Time: 14:26
 */

namespace Larachimp\Newsletters;


use Illuminate\Support\ServiceProvider;

class NewsletterListServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(
           'Acme\Newsletters\NewsletterList',
           'Acme\Newsletters\Mailchimp\NewsletterList'
       );
    }
}