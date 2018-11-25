# KLogger: Simple Logging for PHP

A project written by [Kenny Katzgrau](http://twitter.com/katzgrau) and [Dan Horrigan](http://twitter.com/dhrrgn).

## About

KLogger is an easy-to-use [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
compliant logging class for PHP. It isn't naive about
file permissions (which is expected). It was meant to be a class that you could
quickly include into a project and have working right away.

If you need a logger that supports PHP < 5.3, see [past releases](https://github.com/katzgrau/KLogger/releases) for KLogger versions < 1.0.0.

## Installation

### Composer

From the Command Line:

```
composer require katzgrau/klogger:dev-master
```

In your `composer.json`:

``` json
{
    "require": {
        "katzgrau/klogger": "dev-master"
    }
}
```

## Basic Usage

``` php
<?php

require 'vendor/autoload.php';

$users = [
    [
        'name' => 'Kenny Katzgrau',
        'username' => 'katzgrau',
    ],
    [
        'name' => 'Dan Horrigan',
        'username' => 'dhrrgn',
    ],
];

$logger = new Katzgrau\KLogger\Logger(__DIR__.'/logs');
$logger->info('Returned a million search results');
$logger->error('Oh dear.');
$logger->debug('Got these users from the Database.', $users);
```

### Output

```
[2014-03-20 3:35:43.762437] [INFO] Returned a million search results
[2014-03-20 3:35:43.762578] [ERROR] Oh dear.
[2014-03-20 3:35:43.762795] [DEBUG] Got these users from the Database.
    0: array(
        'name' => 'Kenny Katzgrau',
        'username' => 'katzgrau',
    )
    1: array(
        'name' => 'Dan Horrigan',
        'username' => 'dhrrgn',
    )
```

## PSR-3 Compliant

KLogger is [PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
compliant. This means it implements the `Psr\Log\LoggerInterface`.

[See Here for the interface definition.](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md#3-psrlogloggerinterface)

## Setting the Log Level Threshold

You can use the `Psr\Log\LogLevel` constants to set Log Level Threshold, so that
any messages below that level, will not be logged.

### Default Level

The default level is `DEBUG`, which means everything will be logged.

### Available Levels

``` php
<?php
use Psr\Log\LogLevel;

// These are in order of highest priority to lowest.
LogLevel::EMERGENCY;
LogLevel::ALERT;
LogLevel::CRITICAL;
LogLevel::ERROR;
LogLevel::WARNING;
LogLevel::NOTICE;
LogLevel::INFO;
LogLevel::DEBUG;
```

### Example

``` php
<?php
// The 
$logger = new Katzgrau\KLogger\Logger('/var/log/', Psr\Log\LogLevel::WARNING);
$logger->error('Uh Oh!'); // Will be logged
$logger->info('Something Happened Here'); // Will be NOT logged
```

### Additional Options

KLogger supports additional options via third parameter in the constructor:

``` php
<?php
// Example
$logger = new Katzgrau\KLogger\Logger('/var/log/', Psr\Log\LogLevel::WARNING, array (
    'extension' => 'log', // changes the log file extension
));
```

Here's the full list:

| Option | Default | Description |
| ------ | ------- | ----------- |
| dateFormat | 'Y-m-d G:i:s.u' | The format of the date in the start of the log lone (php formatted) |
| extension | 'txt' | The log file extension |
| filename | [prefix][date].[extension] | Set the filename for the log file. **This overrides the prefix and extention options.** |
| flushFrequency | `false` (disabled) | How many lines to flush the output buffer after |
| prefix  | 'log_' | The log file prefix |
| logFormat | `false` | Format of log entries |
| appendContext | `true` | When `false`, don't append context to log entries |

### Log Formatting

The `logFormat` option lets you define what each line should look like and can contain parameters representing the date, message, etc.

When a string is provided, it will be parsed for variables wrapped in braces (`{` and `}`) and replace them with the appropriate value:

| Parameter | Description |
| --------- | ----------- |
| date | Current date (uses `dateFormat` option) |
| level | The PSR log level |
| level-padding | The whitespace needed to make this log level line up visually with other log levels in the log file |
| priority | Integer value for log level (see `$logLevels`) |
| message | The message being logged |
| context | JSON-encoded context |

#### Tab-separated

Same as default format but separates parts with tabs rather than spaces:

    $logFormat = "[{date}]\t[{level}]\t{message}";

#### Custom variables and static text

Inject custom content into log messages:

    $logFormat = "[{date}] [$var] StaticText {message}";

#### JSON

To output pure JSON, set `appendContext` to `false` and provide something like the below as the value of the `logFormat` option:

```
$logFormat = json_encode([
    'datetime' => '{date}',
    'logLevel' => '{level}',
    'message'  => '{message}',
    'context'  => '{context}',
]);
```

The output will look like:

    {"datetime":"2015-04-16 10:28:41.186728","logLevel":"INFO","message":"Message content","context":"{"1":"foo","2":"bar"}"}
    
#### Pretty Formatting with Level Padding

For the obsessive compulsive

    $logFormat = "[{date}] [{level}]{level-padding} {message}";

... or ...

    $logFormat = "[{date}] [{level}{level-padding}] {message}";

## Why use KLogger?

Why not? Just drop it in and go. If it saves you time and does what you need,
go for it! Take a line from the book of our C-code fathers: "`build` upon the
work of others".

## Who uses KLogger?

Klogger has been used in projects at:

    * The University of Iowa
    * The University of Laverne
    * The New Jersey Institute of Technology
    * Middlesex Hospital in NJ

Additionally, it's been used in numerous projects, both commercial and personal.

## Special Thanks

Special thanks to all contributors:

* [Dan Horrigan](http://twitter.com/dhrrgn)
* [Brian Fenton](http://github.com/fentie)
* [Tim Kinnane](http://twitter.com/etherealtim)
* [Onno Vos](https://github.com/onno-vos-dev)
* [Cameron Will](https://github.com/cwill747)

## License

The MIT License

Copyright (c) 2008-2015 Kenny Katzgrau <katzgrau@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
