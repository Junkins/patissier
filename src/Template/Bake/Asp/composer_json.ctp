{
    "name": "ito/Asp",
    "description": "AspApplication",
    "type": "project",
    "license": "MIT",
    "require": {
        "php": ">=5.4.16",
        "cakephp/cakephp": "~3.0"
        "cakephp/migrations": "1.*",
        "cakephp/plugin-installer": "*",
        "friendsofcake/bootstrap-ui": "*",
        "friendsofcake/search": "1.*",
        "fusic/apollon": "1.*",
        "fusic/encount": "1.*",
        "k1low/property-enum": "1.*",
        "k1low/holiday_jp": "1.*",
        "kozo/partial": "3.*",
        "kozo/liberty-behavior": "3.*",
        "tutida/pack": "*",
        "satthi/csv-combine-plugin-for-cakephp": "*",
        "junkins/jp-chronos": "*",
        "junkins/multi-step-form": "*"
    },
    "require-dev": {
        "cakephp/debug_kit": "~3.2",
        "cakephp/bake": "~1.1",
        "phpunit/phpunit": "5.*",
        "phpunit/phpcov": "~3.0",
        "phpmd/phpmd": "*",
        "friendsofphp/php-cs-fixer": "*",
        "cakephp/cakephp-codesniffer": "dev-master",
    },
    "autoload": {
        "psr-4": {
            "Patissier\\": "src"
        }
    },
    "scripts": {
        "post-install-cmd": [
            "cp git-pre-commit .git/hooks/pre-commit",
            "chmod -R +x .git/hooks/pre-commit",
        ]
    },
    "autoload-dev": {
        "psr-4": {
            "Patissier\\Test\\": "tests",
            "Cake\\Test\\": "./vendor/cakephp/cakephp/tests"
        }
    }
}
