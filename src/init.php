<?php

namespace StarterTemplateComposer;

use StarCore\Config\Star;
use StarCore\Service\HyperHooks;

log_message('info', 'Starter Template Composer module initialized');

HyperHooks::getInstance()->register(hook('Core.modules:init'), function () {
    log_message('info', 'Starter Template Composer: Core.modules:init');

    /** @var Star $star */
    $star = config('Star');
    log_message('info', $star->kernelName . ' ' . $star->kernelVersion);
});
