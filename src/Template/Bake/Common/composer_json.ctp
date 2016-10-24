{
    "name": "your-name-here/Patissier",
    "description": "Patissier plugin for CakePHP",
    "type": "cakephp-plugin",
    "require": {
        "php": ">=5.4.16",
        "cakephp/cakephp": "~3.0"
    },
    "require-dev": {
        "phpunit/phpunit": "*"
    },
    "autoload": {
        "psr-4": {
            "Patissier\\": "src"
        }
    },
    "autoload-dev": {
        "psr-4": {
            "Patissier\\Test\\": "tests",
            "Cake\\Test\\": "./vendor/cakephp/cakephp/tests"
        }
    }
}
