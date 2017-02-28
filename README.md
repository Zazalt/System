System
=================

[![Build Status](https://travis-ci.org/Zazalt/System.svg?branch=master)](https://travis-ci.org/Zazalt/System)
[![Coverage Status](https://coveralls.io/repos/github/Zazalt/System/badge.svg?branch=master)](https://coveralls.io/github/Zazalt/System?branch=master)
[![Code Climate](https://codeclimate.com/github/Zazalt/System/badges/gpa.svg)](https://codeclimate.com/github/Zazalt/System)
[![Issue Count](https://codeclimate.com/github/Zazalt/System/badges/issue_count.svg)](https://codeclimate.com/github/Zazalt/System/issues)
[![Total Downloads](https://poser.pugx.org/zazalt/system/downloads)](https://packagist.org/packages/zazalt/system/stats)
[![Latest Stable Version](https://poser.pugx.org/zazalt/system/v/stable)](https://packagist.org/packages/zazalt/system)
![Version](https://img.shields.io/badge/version-beta-yellow.svg)

System is a PHP library/package for directories and files manipulation.

Requirements
---------------
* php >= 7.1.0

Packagist Dependencies
---------------
* None

Installation
---------------
With composer:
``` json
{
	"require": {
		"zazalt/system": "dev-master"
	}
}
```

## Usage
```php

$System = new Zazalt\System\System();

/**
 * Recursive create a directory
 *
 * @return  boolean
 */
$System->recursiveCreateDirectory($directory);

/**
 * Recursive delete files/directories
 *
 * @return boolean
 */
$System->recursiveDelete($str, $removeParrentDir = true);
```