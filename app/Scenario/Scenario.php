<?php

namespace app\Scenario;

use App\Farm\AnimalInterface;
use App\Farm\Cowshed;
use App\Farm\Product;
use Illuminate\Console\OutputStyle;

class Scenario
{
    private Cowshed $farm;
    private Display $display;

    public function __construct(OutputStyle $output)
    {
        $this->display = new Display($output);
        $this->farm = new Cowshed();
    }

    public function play(array $days,array $roadmap ): void
    {
        foreach ($roadmap as $week => $offspring) {
            $this->display->warn($week);
            $this->assumeNewAnimals($offspring);
            $this->reportLivestock();
            $this->gatherProduction($days);
            $this->reportProduction();
        }
    }

    /**
     * @param array $offspring
     * @return void
     */
    private function assumeNewAnimals(
        array $offspring
    ): void {
        foreach ($offspring as $animalType => $amount) {
            for ($i = 0; $i < $amount; ++$i) {
                /** @var AnimalInterface $animalType */
                $animal = new $animalType();
                $this->farm->assume($animal);
                $this->display->line(
                    'Farm assume new ' . $animal::TYPE
                );
            }
        }
    }

    /**
     * @return void
     */
    private function reportLivestock(): void
    {
        $this->display->warn('Livestock report');
        foreach ($this->farm->reportLivestock() as $type => $amount) {
            $this->display->info(
                $type . ' ' . $amount
            );
        }
    }

    /**
     * @param array $days
     * @return void
     */
    private function gatherProduction(
        array $days
    ): void {
        foreach ($days as $day) {
            $this->farm->gather();
        }
    }

    /**
     * @return void
     */
    private function reportProduction(): void
    {
        $this->display->warn('Production report');
        foreach ($this->farm->releaseProduction() as $product) {
            /** @var Product $product */
            $this->display->info(
                $product->type . ' ' . $product->quantity
            );
        }
    }
}
