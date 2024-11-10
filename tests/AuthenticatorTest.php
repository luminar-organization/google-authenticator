<?php

namespace Luminar\GoogleAuthenticator\Tests;

use Luminar\GoogleAuthenticator\Authenticator;
use PHPUnit\Framework\TestCase;

class AuthenticatorTest extends TestCase
{
    protected Authenticator $authenticator;

    protected string $appName = "myCompany";
    protected string $appInfo = "owner";
    protected string $secretCode = "super_secret_code_123_321";
    protected string $code = "123456";

    protected function setUp(): void
    {
        parent::setUp();
        $this->authenticator = new Authenticator();
    }

    /**
     * @return void
     */
    public function testGenerateQrCode(): void
    {
        $qrCode = $this->authenticator->pair($this->appName, $this->appInfo, $this->secretCode);
        $this->assertNotEmpty($qrCode);
    }

    /**
     * @return void
     */
    public function testValidateWrongCode(): void
    {
        $this->assertFalse($this->authenticator->validate($this->code, $this->secretCode));
    }
}