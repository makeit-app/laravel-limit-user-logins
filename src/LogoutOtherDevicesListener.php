<?php

namespace MakeIT\LoginLimiter;

/**
 * Class LogoutOtherDevicesListener
 * @package MakeIT\LoginLimiter
 */
class LogoutOtherDevicesListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle()
    {
        login_limiter();
    }
}
