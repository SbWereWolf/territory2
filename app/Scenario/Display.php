<?php

namespace app\Scenario;

use Illuminate\Console\OutputStyle;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;

readonly class Display
{
    public function __construct(
        private OutputStyle $output
    )
    {

    }

    /**
     * Write a string as standard output.
     *
     * @param string $string
     * @param string|null $style
     * @return void
     */
    public function line(string $string, string $style = null): void
    {
        $styled = $style ? "<$style>$string</$style>" : $string;

        $this->output->writeln($styled);
    }

    /**
     * Write a string as warning output.
     *
     * @param string $string
     * @return void
     */
    public function warn(string $string): void
    {
        if (! $this->output->getFormatter()->hasStyle('warning')) {
            $style = new OutputFormatterStyle('yellow');

            $this->output->getFormatter()->setStyle('warning', $style);
        }

        $this->line($string, 'warning');
    }

    /**
     * Write a string as information output.
     *
     * @param string $string
     * @return void
     */
    public function info(string $string): void
    {
        $this->line($string, 'info');
    }
}
