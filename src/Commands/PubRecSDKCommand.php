<?php

namespace ChrisReedIO\PubRecSDK\Commands;

use Illuminate\Console\Command;

class PubRecSDKCommand extends Command
{
    public $signature = 'laravel-pubrec-sdk';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
