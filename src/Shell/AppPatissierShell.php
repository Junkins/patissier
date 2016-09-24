<?php
namespace Patissier\Shell;

use Cake\Console\Shell;
use Bake\Shell\BakeShell;

class AppPatissierShell extends BakeShell
{

    public $tasks = [
        'Patissier.AppController',
        'Patissier.AppEntity',
        'Patissier.AppForm',
        'Patissier.AppTable',
        'Patissier.AppType',
        'Patissier.AppValidation',
        'Patissier.AppValidator',
        'Patissier.AppView',
        'Patissier.AppFormHelper',
        // 'Patissier.AppHtmlHelper',
        // 'Patissier.AppUrlHelper'
    ];

    /**
     * main
     * @author ito
     */
    public function main()
    {
        $this->AppController->main();
        $this->AppEntity->main();
        $this->AppForm->main();
        $this->AppTable->main();
        $this->AppType->main();
        $this->AppValidation->main();
        $this->AppValidator->main();
        $this->AppView->main();
        $this->AppFormHelper->main();
        // $this->AppHtmlHelper->main();
        // $this->AppUrlHelper->main();
    }

}