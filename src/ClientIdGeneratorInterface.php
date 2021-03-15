<?php
declare(strict_types=1);

namespace Setono\ClientId;

interface ClientIdGeneratorInterface
{
    /**
     * Generates a unique client id
     */
    public function generate(): string;
}