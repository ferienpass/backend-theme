<?php

declare(strict_types=1);

/*
 * This file is part of Ferienpass package.
 *
 * (c) Richard Henkenjohann <richard@ferienpass.online>
 *
 * For more information visit the project website <https://ferienpass.online>.
 */

namespace Ferienpass\BackendThemeBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Ferienpass\BackendThemeBundle\FerienpassBackendThemeBundle;

final class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(FerienpassBackendThemeBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
