<?php

dataset('metric chart views', [
    'resources/views/livewire/project/shared/metrics.blade.php',
    'resources/views/livewire/server/charts.blade.php',
    'resources/views/livewire/fleet/metrics.blade.php',
]);

it('shows metric chart times in the browser time zone', function (string $path) {
    $view = file_get_contents(__DIR__.'/../../'.$path);

    expect($view)
        ->toContain('datetimeUTC: false')
        ->toContain('window.chartTooltipTime(timestamp)')
        ->not->toContain('datetimeUTC: true')
        ->not->toContain("timeZone: 'UTC'");
})->with('metric chart views');
