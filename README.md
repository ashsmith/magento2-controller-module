#Magento 2 Controller Module Example

From my blog post: https://www.ashsmith.io/2014/12/simple-magento2-controller-module/

## To install:

Install with Composer!

    composer require ashsmith/magento2-controller-module:2.0.*

Then you'll need to modify `app/etc/config.php` to activate the module. It should look a little like this:

    <?php
    return array (
        'modules' =>
        array (
            ...
            'Ashsmith_HelloWorld' => 1,
            ),
          );
