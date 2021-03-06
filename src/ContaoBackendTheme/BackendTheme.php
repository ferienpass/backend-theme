<?php

declare(strict_types=1);

/*
 * This file is part of the Ferienpass package.
 *
 * (c) Richard Henkenjohann <richard@ferienpass.online>
 *
 * For more information visit the project website <https://ferienpass.online>
 * or the documentation under <https://docs.ferienpass.online>.
 */

namespace Ferienpass\BackendThemeBundle\ContaoBackendTheme;

use Contao\CoreBundle\BackendTheme\BackendThemeInterface;

final class BackendTheme implements BackendThemeInterface
{
    public function getThemePath(): string
    {
        return 'web/bundles/ferienpassbackendtheme/entrypoints.json';
    }
}
