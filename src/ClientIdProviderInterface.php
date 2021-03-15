<?php
declare(strict_types=1);

namespace Setono\ClientId;

interface ClientIdProviderInterface
{
    public function get(): ClientId;
}