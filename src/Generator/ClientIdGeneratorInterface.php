<?php
declare(strict_types=1);

namespace Setono\ClientId\Generator;

use Setono\ClientId\ClientId;

interface ClientIdGeneratorInterface
{
    /**
     * Generates a unique client id
     */
    public function generate(): ClientId;
}