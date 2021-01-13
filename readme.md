# AgoraSDK

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

PHP SDK Agora.io (unofficial) Token Generator

## Installation

Via Composer

``` bash
$ composer require willywes/agora-sdk-php
```

## Usage

``` php
use Willywes\AgoraSDK\RtcTokenBuilder;

class AgoraHelper
{
    public static function GetToken($user_id){
    
        $appID = "72fc...";
        $appCertificate = "72fc...";
        $channelName = "Test";
        $uid = $user_id;
        $uidStr = ($user_id) . '';
        $role = RtcTokenBuilder::RoleAttendee;
        $expireTimeInSeconds = 3600;
        $currentTimestamp = (new \DateTime("now", new \DateTimeZone('UTC')))->getTimestamp();
        $privilegeExpiredTs = $currentTimestamp + $expireTimeInSeconds;
    
        return RtcTokenBuilder::buildTokenWithUid($appID, $appCertificate, $channelName, $uid, $role, $privilegeExpiredTs);
    
    }
}
```

``` php  
    $user = auth()->user();
    $agora_token = AgoraHelper::GetToken($user->id);
```

## Credits

- [Alejandro Isla][link-author]



## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/willywes/agora-sdk-php.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/willywes/agora-sdk-php.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/willywes/agora-sdk-php/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/329085525/shield

[link-packagist]: https://packagist.org/packages/willywes/agora-sdk-php
[link-downloads]: https://packagist.org/packages/willywes/agora-sdk-php
[link-travis]: https://travis-ci.org/willywes/agora-sdk-php
[link-styleci]: https://styleci.io/repos/329085525
[link-author]: https://github.com/willywes

