
# Better Look Boolean Attribute - Magento 2

---

Change default look of boolean attribute Magento 2 frontend: 
Yes - No to ✔️ - ❌

[![License: GPL v3](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c9ba8265e00142749cda3ae37bcef16d)](https://www.codacy.com/app/GhoSterInc/BetterBooleanAttribute?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=tuyennn/BetterBooleanAttribute&amp;utm_campaign=Badge_Grade)
[![Build Status](https://travis-ci.org/tuyennn/BetterBooleanAttribute.svg?branch=master)](https://travis-ci.org/tuyennn/BetterBooleanAttribute)[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/thinghost)
![Version 1.0.0](https://img.shields.io/badge/Version-1.0.0-green.svg)


---
## [![Alt GhoSter](http://thinghost.info/wp-content/uploads/2015/12/ghoster.png "thinghost.info")](http://thinghost.info) Overview


- Download and place in app/code/GhoSter/BetterBooleanAttribute.
- Run module enable and upgrade command
- [Extension on GitHub](https://github.com/tuyennn/BetterBooleanAttribute)
- [Direct download link](https://github.com/tuyennn/BetterBooleanAttribute/tarball/master)


![Alt Screenshot-1](https://thinghost.info/wp-content/uploads/2019/04/Selection_001.jpg "thinghost.info")

![Alt Screenshot-2](https://thinghost.info/wp-content/uploads/2019/04/Selection_002-1024x628.jpg "thinghost.info")

![Alt Screenshot-3](https://thinghost.info/wp-content/uploads/2019/04/Selection_003.jpg "thinghost.info")

## Main Features

* Change default look of boolean attribute Magento 2 frontend: Yes - No to ✔️ - ❌
* Support Product View, Layered, Compare Panel.

## Configure and Manage

* No Configuration

## How to extend

* Add class `tick` or `cross` inside class `boolean` to have the styled css.
* Yes you could choose which templates to override

## Installation with Composer

* Connect to your server with SSH
* Navigation to your project and run these commands
 
```bash
composer require ghoster/better-boolean-attribute


php bin/magento setup:upgrade
rm -rf pub/static/* 
rm -rf var/*

php bin/magento setup:static-content:deploy
```

## Installation without Composer

* Download the files from github: [Direct download link](https://github.com/tuyennn/BetterBooleanAttribute/tarball/master)
* Extract archive and copy all directories to app/code/GhoSter/BetterBooleanAttribute
* Go to project home directory and execute these commands

```bash
php bin/magento setup:upgrade
rm -rf pub/static/* 
rm -rf var/*

php bin/magento setup:static-content:deploy
```

## Contribution

* You're welcome to contribute this project
* Fork this repository
* Create your feature branch (`git checkout -b your-new-feature`) always from `develop`
* Commit and Submit a new Pull Request


## Licence

[Open Software License (OSL 3.0)](http://opensource.org/licenses/osl-3.0.php)


## Donation

If this project help you reduce time to develop, you can give me a cup of coffee :) 

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.me/thinghost)
