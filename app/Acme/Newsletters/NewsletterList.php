<?php
/**
 * Created by PhpStorm.
 * User: admindom
 * Date: 29/10/2015
 * Time: 13:52
 */

namespace Larachimp\Newsletters;


interface NewsletterList{
    /**
     * @param $list
     * @param $email
     * @return mixed
     */
    public function subscribeTo($list, $email);

    /**
     * @param $list
     * @param $email
     * @return mixed
     */
    public function unSubscribeFrom($list, $email);
}