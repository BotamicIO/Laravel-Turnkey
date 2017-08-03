<?php

declare(strict_types=1);

/*
 * This file is part of Laravel TurnKey.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'model' => 'App\User',

    'identifier' => 'email',

    'feedback' => [
        'active'  => true,
        'subject' => 'Feedback by lost customer',
        'view'    => 'turnkey::feedback-mail',
        'email'   => 'feedback@myapp.io',
    ],

    'urls' => [
        'index'   => '/account/close',
        'handle'  => '/account/close',
        'goodbye' => '/account/close/success',
        'staying' => '/account/close/failure',

        'feedback'        => '/account/close/feedback',
        'feedback-handle' => '/account/close/feedback',
    ],

];
