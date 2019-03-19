# Kapok 2 Sample Plugin

This is a sample plugin to demonstrate how you can write extentions (plugins) to add custom functionality to [Elementor](https://github.com/pojome/elementor/)

Plugin Structure: 
```
assets/
      /js   
      /css  Holds plugin CSS Files
      
widgets/
      /kapok02.php
      /inline-editing.php
      
index.php
kapok02.php
plugin.php
```


* `assets` directory - holds plugin JavaScript and CSS assets
  * `/js` directory - Holds plugin Javascript Files
  * `/css` directory - Holds plugin CSS Files
* `widgets` directory - Holds Plugin widgets
  * `/kapok02.php` - Kapok 2 demo Widget class
  * `/inline-editing.php` - Inline Editing demo Widget class
* `index.php`	- Prevent direct access to directories
* `kapok02.php`	- Main plugin file, used as a loader if plugin minimum requirements are met.
* `plugin.php` - The actual Plugin file/Class.

For more documentation please see [Elementor Developers Resource](https://developers.elementor.com/creating-an-extension-for-elementor/).
