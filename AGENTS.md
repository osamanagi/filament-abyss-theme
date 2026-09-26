# Repository Guidelines

## Project Structure & Module Organization

This repository is a Filament 4 theme package for PHP 8.2+. `src/` contains the Filament plugin and Laravel service provider under the `Nagi\FilamentAbyssTheme` namespace. Theme rules live in `resources/css/theme.css`; package defaults are in `config/filament-abyss-theme.php`. `tests/` contains Pest tests and the Orchestra Testbench setup. `docs/` holds screenshots used by `README.md`. Keep PHP color registration and CSS theme variables aligned when changing the palette.

## Build, Test, and Development Commands

- `composer install` installs development dependencies and runs Testbench package discovery.
- `composer test` runs the Pest suite; `composer test-coverage` generates coverage reports under `build/` when a coverage driver is available.
- `composer analyse` runs PHPStan on `src/` and `config/` at level 4.
- `composer format` applies Laravel Pint using `pint.json`. Run `vendor/bin/pint --test` to check formatting without changing files.

There is no npm project or standalone theme build in this repository. To preview CSS, install this package in a Laravel/Filament app, add the theme CSS path to that app's Vite inputs as shown in `README.md`, and run the app's `npm run build` or development server.

## Coding Style & Naming Conventions

Use four spaces in PHP and PSR-4 paths matching `Nagi\FilamentAbyssTheme`. Follow the Laravel Pint preset and the contribution guide's PSR-2 conventions. The CSS file uses tabs and Filament utility classes, with light and `.dark` variants where needed. Scope selectors to the relevant Filament component and reuse existing color variables.

## Testing Guidelines

Add a focused Pest test in `tests/*Test.php` for behavior changes; `tests/Pest.php` binds tests to the Testbench `TestCase`. Keep descriptive `it('...')` names. Run `composer test` and `composer analyse` before submitting. CI enforces at least 95% PHP source coverage on Filament 4 and 5; run `composer test-coverage` locally with a coverage driver. CI also compiles the CSS theme against both versions. For appearance changes, check light and dark modes in a consuming Filament app and update `docs/` screenshots when the README visuals become inaccurate.

## Commit & Pull Request Guidelines

Recent commits use short, descriptive subjects such as `Refine color variables ...` and `Add new image assets ...`; dependency updates use `Bump ...`. There is no enforced conventional-commit format. Keep each commit coherent and squash intermediate work. Submit one feature or fix per pull request, explain the behavior change, link any relevant issue, and include before/after screenshots for visual changes. Update `README.md` when usage or behavior changes. Follow `.github/CONTRIBUTING.md` and avoid breaking public APIs without considering the project's SemVer policy.
