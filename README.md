# Luminar Google Authenticator
![Tests Status](https://img.shields.io/github/actions/workflow/status/luminar-organization/google-authenticator/tests.yml?label=Tests)

**Luminar Google Authenticator** is a simple library for 2FA using [authenticatorapi.com](https://authenticatorapi.com/)

## Installing
```shell
composer require luminar-organization/google-authenticator
```

## Functions

### Pairing Devices

```php
$authenticator = new \Luminar\GoogleAuthenticator\Authenticator();

// APP_NAME -> Name of your project
// APP_INFO -> Example user email
// SECRET_CODE -> Static variable same for every user
$authenticator->pair("APP_NAME", "APP_INFO", "SECRET_CODE")
```

### Validating

```php
$authenticator = new \Luminar\GoogleAuthenticator\Authenticator();

// PIN -> Combination of 6 numbers provided by user to verify them self
// SECRET_CODE -> Static variable same for every user
$authenticator->validate("PIN", "SECRET_CODE")
```

## Testing
To run the tests, ensure you have installed all development requirements:
```shell
composer install
```
After that run all tests:
```shell
composer run test
```

## License
Luminar Google Authenticator is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information

