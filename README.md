# How to change currency symbol position in Magento 2.x (Left to Right or Right to Left)
When you work for a project, you are required to move the currency symbol from left to right or from right to left, you don't know how to complete this task, you are searching for a solution. This extension is the best to complete your task.

# How to install this extension?

Under your root folder, run the following command lines:

- composer require magegadgets/m2-currency-symbol-position
- php bin/magento setup:upgrade
- php bin/magento setup:di:compile
- php bin/magento setup:static-content:deploy -f
- php bin/magento cache:flush

### Manually
1) Go to your Magento root folder:
    
    ```
    cd <magento_root>
    ```
   
2) Copy extension files to *app/code/Magegadgets/CurrencySymbolPosition* folder:
    ```
    git clone https://github.com/magegadgets/m2-currency-symbol-position.git app/code/Magegadgets/CurrencySymbolPosition
    ```
    ***NOTE:*** *alternatively, you can manually create the folder and copy the extension files there.*
    
3) Run setup commands:

    ```
    php bin/magento setup:upgrade;
    php bin/magento setup:di:compile;
    php bin/magento setup:static-content:deploy -f;
    php bin/magento cache:flush;

# How to see the results

1. Go to the backend

On the Magento Admin Panel, you navigate to the Stores → Currency → Currency Symbol Position

2. Go to the storefront

Check the product price.

## Other Extensions
You can find more useful extensions for Magento 2 by visiting [Magegadgets Official Website](https://www.magegadgets.com/)
    ```