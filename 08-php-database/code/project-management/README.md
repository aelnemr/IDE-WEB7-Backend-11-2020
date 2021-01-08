## Autoload using composer
- composer init

```
Package name (<vendor>/<name>) [root/project-management]: elnemr/project-manager
Description []: project management
Author [, n to skip]: Ahmed El-Nemr <pro.ahmedelnemr@gmail.com>
Minimum Stability []:
Package Type (e.g. library, project, metapackage, composer-plugin) []: project
License []:

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? no
```

- add to `index.php` `require_once __DIR__ . "/vendor/autoload.php";`
- edit `composer.json` 
```
"autoload": {
        "classmap": ["models"]
    }
```


# How to run the project
- clone from Github
- `composer install`
- create database
- `cp .env.example .env`
- edit on `.env` database connection