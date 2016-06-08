# Laravel Angular Artisan Generators

Angular generators for Artisan. inspired by  


# Usage

```
artisan frontend:page name       #New page inside frontend/app/pages/
artisan frontend:dialog name     #New custom dialog inside frontend/dialogs/
artisan frontend:component name  #New component inside frontend/app/components/
artisan frontend:service name    #New service inside frontend/services/
artisan frontend:filter name     #New filter inside frontend/filters/
artisan frontend:config name     #New config inside frontend/config/
```

# Installation

If you're using the starter project, then it's already pre-installed.

    composer require frontend/generators

    //and then add the provider in config/app.php
    Frontend\Generators\LaravelServiceProvider::class,

    php artisan vendor:publish


# Documentation



# Contributors

Originally created at


# Notes

- Do not append the word `service`, it will be automatically added for you.
