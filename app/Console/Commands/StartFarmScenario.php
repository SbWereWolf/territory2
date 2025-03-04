<?php

namespace App\Console\Commands;

use App\Farm\Chicken;
use App\Farm\Cow;
use app\Scenario\Scenario;
use Illuminate\Console\Command;

class StartFarmScenario extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'farm:life';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Play farm scenario';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Starting farm scenario');
        $scenario = new Scenario($this->getOutput());

        $days = array(
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
        );
        $roadmap = [
            'first week' => [
                Cow::class => 10,
                Chicken::class => 20,
            ],
            'second week' => [
                Cow::class => 1,
                Chicken::class => 5,
            ]
        ];
        $scenario->play($days,$roadmap);
    }
}
