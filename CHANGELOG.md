# 1.0.4
* Added support for multi session testing - #73
* Fixed double quotes to not break JavaScript commands - #71

# 1.0.3
* Fix incorrectly cropped full page screenshots
* Remove test dependency from www.thewebhatesme.com to local http server
* Move CI tests to GitHub actions
* Fix problems with getting imageCoords in IE11
* Fix elements hiding behavior for full screenshot
* Allow to use any module which inherits from WebDriver

# 1.0.2
* Replaces URL for images with locally provided ones

# 1.0.1

* Added fullpage screenshot for Chrome and Firefox (new configuration option `fullScreenShot`)
* Fixed using namespaces on Windows
* Fixed compatibility with Codeception 2.4
* Removed duplicity code

# 1.0.0

* **Removed jQuery**; switched to native JavaScript to hide elements
* Configuration of reports changed
* Hardcoded timeouts (`wait(1)`) replaced with corresponding waiter (`waitFor*`) methods
* Added optional parameter `$deviation` to `seeVisualChanges` and `dontSeeVisualChanges`.
* Added `getReferenceImageDir` method to return full path to reference images directory.
* Added new report template `templToJpg.php`, 

# 0.9.0

Released under Codeception organization. Changes:

* *Possible BC* Codeception 2.2+ Compatibility
* *Possible BC* `referenceImageDir` config is now relative to data directory of Codeception (`tests/_data`)
* *Possible BC* `currentImageDir` config is now relative to output directory of Codeception (`tests/_output`)
* *Possible BC*  VisualCeptionReport merged with VisualCeption module and can be enabled with `report: true` config option
