# Processmaker Package Oriel Tasks
This package provides the necessary base code to start the developing a package in ProcessMaker 4.

## Development
If you need to create a new ProcessMaker package run the following commands:

```
git clone https://github.com/ProcessMaker/package-oriel-tasks.git
cd package-oriel-tasks
php rename-project.php package-oriel-tasks
composer install
npm install
npm run dev
```

## Installation
* Use `composer require processmaker/package-oriel-tasks` to install the package.
* Use `php artisan package-oriel-tasks:install` to install generate the dependencies.

## Navigation and testing
* Navigate to administration tab in your ProcessMaker 4
* Select `Skeleton Package` from the administrative sidebar

## Uninstall
* Use `php artisan package-oriel-tasks:uninstall` to uninstall the package
* Use `composer remove processmaker/package-oriel-tasks` to remove the package completely
# package-oriel-tasks
