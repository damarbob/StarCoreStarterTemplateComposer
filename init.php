<?php

namespace StarterTemplate;

use StarCore\Config\Star;
use StarCore\Service\HyperHooks;

log_message('info', 'Starter Template module initialized');

HyperHooks::getInstance()->register(hook('Core.modules:init'), function () {
    log_message('info', 'Starter Template: Core.modules:init');

    /** @var Star $star */
    $star = config('Star');
    log_message('info', $star->kernelName . ' ' . $star->kernelVersion);
});
