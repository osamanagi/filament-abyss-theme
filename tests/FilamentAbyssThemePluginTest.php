<?php

use Filament\Panel;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;
use Illuminate\Foundation\Vite;
use Illuminate\Support\HtmlString;
use Nagi\FilamentAbyssTheme\FilamentAbyssThemePlugin;

it('registers its identity and palette on a panel', function () {
    $plugin = FilamentAbyssThemePlugin::make();
    $panel = Panel::make()->plugin($plugin);

    expect($plugin->getId())->toBe('filament-abyss-theme')
        ->and($panel->getPlugin('filament-abyss-theme'))->toBe($plugin)
        ->and($panel->getColors()['primary'][500])->toBe('#2F8F8E')
        ->and($panel->getColors()['primary'][950])->toBe('#092424')
        ->and($panel->getColors()['danger'])->toBe(Color::hex('#ff2056'))
        ->and(FilamentColor::getColor('gray')[900])->toBe(Color::convertToOklch('#001e29'));
});

it('loads the package stylesheet as the panel theme', function () {
    $stylesheet = 'vendor/osamanagi/filament-abyss-theme/resources/css/theme.css';
    $vite = Mockery::mock(Vite::class);

    $vite->shouldReceive('__invoke')
        ->once()
        ->with($stylesheet, null)
        ->andReturn(new HtmlString('<link href="/build/abyss.css" rel="stylesheet">'));

    app()->instance(Vite::class, $vite);

    $panel = Panel::make()->plugin(FilamentAbyssThemePlugin::make());

    expect($panel->getTheme()->getHtml()->toHtml())->toContain('/build/abyss.css');
});
