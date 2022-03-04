<?php

namespace Obadadk\InlineMedia\Commands;

use Illuminate\Console\Command;

class InlineMediaCommand extends Command
{
    public $signature = 'laravel-inline-media';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
