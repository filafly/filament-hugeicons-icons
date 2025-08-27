<p class="filament-hidden" align="center">
    <img src="https://your-domain.com/images/filament-hugeicons-icons.png" alt="Banner" style="width: 100%; max-width: 800px;" />
</p>

# Filament Hugeicons Icons

A Hugeicons icon set implementation for [Filament Icons](https://github.com/filafly/filament-icons), allowing for instant replacement of all icons used within the Filament framework.

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
use Filament\Actions\View\ActionsIconAlias;

// Override a single alias
HugeiconsIcons::make()->overrideAlias(TablesIconAlias::ACTIONS_FILTER, Hugeicons::FunnelSimple);

// Override multiple aliases at once
HugeiconsIcons::make()->overrideAliases([
    TablesIconAlias::ACTIONS_FILTER => Hugeicons::FunnelSimple,
    ActionsIconAlias::BUTTON_GROUP_DROPDOWN_INDICATOR => Hugeicons::CaretUpDown,
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
    Hugeicons::User => Hugeicons::UserCircle,
    Hugeicons::Heart => Hugeicons::HeartFilled,
]);
```

## Credits

- [Hugeicons](https://example.com) for the icon library
- [Filament Icons](https://github.com/filafly/filament-icons) for the base icon system

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.