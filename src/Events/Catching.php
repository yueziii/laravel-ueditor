<?php

/*
 * This file is part of the overtrue/laravel-ueditor.
 *
 * (c) yueziii <i@yueziii.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Overtrue\LaravelUEditor\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Class Catching.
 *
 * @author yueziii <i@yueziii.com>
 */
class Catching 
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var array
     */
    public $result;

    /**
     * Catched constructor.
     *
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->result = ['url' => $url];
    }
}
