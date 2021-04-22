<?php
declare(strict_types=1);

namespace Setono\ClientId\Provider;

use Setono\ClientId\ClientId;

interface ClientIdProviderInterface
{
    public function getClientId(): ClientId;
}