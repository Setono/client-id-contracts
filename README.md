# Abstraction for a client id

Client ids are used in many applications to identify a user. It could be in

- Analytics software to identify the user between requests
- Consent management software to check that a user has consented

This library provides a very simple abstraction over this concept by providing
- a `ClientId` value object
- a `ClientIdGeneratorInterface` that will generate a `ClientId`
- a `ClientIdProviderInterface` that will return a client id