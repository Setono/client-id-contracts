# Abstraction for a client id

Client ids are used in many applications to identify a user. It could be in

- Analytics software to identify the user between requests
- Consent management software to check that a user has consented

This library provides a very simple abstraction over this concept:

**An interface for the actual client id**

```php
<?php
declare(strict_types=1);

namespace Setono\ClientId;

interface ClientIdInterface
{
    /**
     * Returns the client id
     */
    public function get(): string;
}
```

**and an interface for the client id generator**

```php
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
```