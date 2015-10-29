<?php
/**
 * Created by PhpStorm.
 * User: admindom
 * Date: 29/10/2015
 * Time: 13:56
 */

namespace Larachimp\Newsletters\Mailchimp;


use Mailchimp;
use Larachimp\Newsletters\NewsletterList as NewsletterListInterface;

class NewsletterList implements NewsletterListInterface
{
    /**
     * @var \Mailchimp
     */
    protected $mailchimp;

    protected $list = [
        'lessonsSubscribers' => 'efe1b499fc'
    ];

    /**
     *
     */
    public function __construct(Mailchimp $mailchimp){

        $this->mailchimp = $mailchimp;
    }


    /**
     * @param $listName
     * @param $email
     * @return mixed
     */
    public function subscribeTo($listName, $email){
        return $this->mailchimp->lists->subscribe(
            $this->list[$listName],
            compact('email'),
            null ,// merge vars
            'html',
            false ,
            true
        );
    }

    /**
     * @param $listName
     * @param $email
     * @return mixed
     */
    public function unSubscribeFromo($listName, $email){
        return $this->mailchimp->lists->unsubscribe(
            $this->list[$listName],
            compact('email'),
            false ,// merge vars
            false,
            false
        );
    }

}