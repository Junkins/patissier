<?php
namespace App\Controller\Component;

use Cake\Form\Form;
use Cake\Controller\Component;

class PrgValidationComponent extends Component
{

    /**
     * validation
     * @author ito
     */
    public function validation(Form $form)
    {
        if (!$this->request->is('post')) {
            $this->request->data = $this->request->query;
        }

        $form->execute($this->request->data);
        if (empty($form->errors())) {
            $this->_registry->getController()->Prg->conversion();
        }

        return $form;
    }
}