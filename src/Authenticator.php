<?php

namespace Luminar\GoogleAuthenticator;

class Authenticator
{
    /**
     * @param string $appName
     * @param string $appInfo
     * @param string $secretCode
     * @return string
     */
    public function pair(string $appName, string $appInfo, string $secretCode): string
    {
        return file_get_contents("https://www.authenticatorApi.com/pair.aspx?AppName=$appName&AppInfo=$appInfo&SecretCode=$secretCode");
    }

    /**
     * @param string $pin
     * @param string $secretCode
     * @return bool
     */
    public function validate(string $pin, string $secretCode): bool
    {
        $response = file_get_contents("https://www.authenticatorApi.com/Validate.aspx?Pin=$pin&SecretCode=$secretCode");
        if($response === "True") {
            return true;
        }
        return false;
    }
}