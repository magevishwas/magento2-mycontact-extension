# magento2-mycontact-extension
A basic Magento 2 module with a Admin Grid and Frontend CRUD Operations.

Hello World Magento2 extension

Module was made for educational purposes only.

# Install

    Go to Magento2 root folder

    Enter following commands to install module:

    composer config repositories.helloworld git https://github.com/magevishwas/magento2-mycontact-extension.git
    composer require magevishwas/magento2-mycontact-extension:dev-master

    Wait while dependencies are updated.

    Enter following commands to enable module:

    php bin/magento module:enable Vishwas_Mycontact --clear-static-content
    php bin/magento setup:upgrade

    Enable and configure Extension in Magento Admin.
