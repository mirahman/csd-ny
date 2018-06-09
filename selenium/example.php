<?php

require_once 'WebDriver.php';
require_once 'WebDriver/Driver.php';
require_once 'WebDriver/MockDriver.php';
require_once 'WebDriver/WebElement.php';
require_once 'WebDriver/MockElement.php';
require_once 'WebDriver/FirefoxProfile.php';
require_once 'WebDriver/NoSuchElementException.php';
require_once 'WebDriver/StaleElementReferenceException.php';
require_once 'WebDriver/ElementNotVisibleException.php';


$webdriver = new WebDriver("localhost","4444");
$webdriver->connect("chrome");
$webdriver->get("https://scrumalliance.org");