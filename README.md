<p class="filament-hidden" align="center">
    <img src="https://filafly.com/images/filafly-filament-hugeicons-icons.jpg" alt="Banner" style="width: 100%; max-width: 800px;" />
</p>

# Filament Hugeicons Icons

A Hugeicons icon set implementation for [Filament Icons](https://github.com/filafly/filament-icons), allowing for instant replacement of all icons used within the Filament framework.

More about this package on FilaFly: [Hugeicons icons for Filament on FilaFly](https://filafly.com/plugins/hugeicons-icons).

## Installation

You can install the package via composer:

```bash
composer require filafly/filament-hugeicons-icons
```

After the package is installed, you must register the plugin in your Filament Panel provider:

```php
use Filafly\Icons\Hugeicons\HugeiconsIcons;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(HugeiconsIcons::make());
}
```

## Overriding individual icons

You can change which icon is used for any given Filament alias:

### Using icon aliases
```php
use Filafly\Icons\Hugeicons\HugeiconsIcons;
use Filafly\Icons\Hugeicons\Enums\Hugeicons;
use Filament\Tables\View\TablesIconAlias;
use Filament\View\PanelsIconAlias;

// Override a single alias
HugeiconsIcons::make()->overrideAlias(TablesIconAlias::ACTIONS_FILTER, Hugeicons::FilterHorizontal);

// Override multiple aliases at once
HugeiconsIcons::make()->overrideAliases([
    TablesIconAlias::ACTIONS_FILTER => Hugeicons::FilterHorizontal,
    PanelsIconAlias::GLOBAL_SEARCH_FIELD => Hugeicons::Search02,
]);
```

### Using icon enum cases
```php
use Filafly\Icons\Hugeicons\HugeiconsIcons;
use Filafly\Icons\Hugeicons\Enums\Hugeicons;

// Replace every instance of one icon with another
HugeiconsIcons::make()->overrideIcon(Hugeicons::User, Hugeicons::UserCircle);

// Replace multiple icons at once
HugeiconsIcons::make()->overrideIcons([
    Hugeicons::User->value => Hugeicons::UserCircle,
    Hugeicons::Search01->value => Hugeicons::Search02,
]);
```
> PHP arrays do not support enums as keys so `->value` is necessary if you want to reference the enum

## Credits

- [Hugeicons](https://hugeicons.com/) for the icon library
- [Filament Icons](https://github.com/filafly/filament-icons) for the base icon system

## From FilaFly

FilaFly also makes premium themes for Filament panels: Lucent, Prizm, Cypher and Citrus. [Browse the themes](https://filafly.com/themes?utm_source=github&utm_medium=readme&utm_campaign=hugeicons-icons).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.