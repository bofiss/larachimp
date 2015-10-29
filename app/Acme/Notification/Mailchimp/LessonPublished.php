<?php
/**
 * Created by PhpStorm.
 * User: admindom
 * Date: 29/10/2015
 * Time: 14:35
 */

namespace Larachimp\Notifications\Mailchimp;


use Larachimp\Notifications\LessonPublished as LessonPublishedInterface;
use Mailchimp;

class LessonPublished implements LessonPublishedInterface
{
    protected  $mailchimp;
    protected $list = [
        'lessonsSubscribers' => 'efe1b499fc'
    ];

    /**
     * @param Mailchimp $mailchimp
     */
    public function __construct(Mailchimp $mailchimp){
        $this->mailchimp = $mailchimp;

    }

    /**
     * @param $title
     * @param $body
     */
    public function notify($title, $body)
    {
        $options = [
            'list_id' => $this->list['lessonsSubscribers'],
            'subject' => 'New on UHA 4.0:'.$title,
            'from_name' => 'Larachimp',
            'from_email' => 'bofiss@gmail.com',
            'to_name' => 'Larachimp subscribers'
        ];

        $content = [
          'html'=> $body,
          'text' => strip_tags($body)

        ];
        $campain = $this->mailchimp->campaigns->create('regular', $options, $content);
        $this->mailchimp->campaigns->send($campain['id']);


    }
}