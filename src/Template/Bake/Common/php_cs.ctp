<?php
$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('vender')
    ->exclude('webroot')
    ->in(__DIR__);

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->setUsingCache(true)
    ->finder($finder);