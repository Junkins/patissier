<?php
namespace <%= $namespace %>\Model\Table;

<%
$uses = [
    'use Cake\Datasource\EntityInterface;',
    'use Cake\Event\Event;',
    'use Cake\Datasource\Exception\InvalidPrimaryKeyException;',
    'use Cake\Network\Exception\MethodNotAllowedException;',
    'use Cake\ORM\Query;',
    'use Cake\ORM\RulesChecker;',
    'use Cake\ORM\Table;',
    'use Cake\Validation\Validator;'
];
sort($uses);
echo implode("\n", $uses);
%>

/**
 * <%= $name %>
 */
class <%= $name %> extends Table
{
    /**
     * initialize
     * @author ito
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        // Config Validator
        $this->_validatorClass = '\App\Validation\AppValidator';

        // Config PrimaryKey
        $this->primaryKey('id');

        // Add Behaviors
        $this->addBehavior('Timestamp');

        // Add Behaviors (Finder)
        $this->addBehavior('FindIgnore');
        $this->addBehavior('FindExistIn');
        $this->addBehavior('FindNo');
    }

    /**
     * get
     * @author ito
     */
    public function get($primaryKey, $options = [])
    {
        // Check Natural Number
        if (!Validation::naturalNumber($primaryKey)) {
            throw new InvalidPrimaryKeyException("Invalid PrimaryKey. You must use natural number.");
        }

        return parent::get($primaryKey, $options);
    }

    /**
     * save
     * @author ito
     */
    public function save(EntityInterface $entity, $options = [])
    {
        // Forced Atomic False Setting
        if (array_key_exists('atomic', $options) && $options['atomic'] === true) {
            new MethodNotAllowedException('It is prohibited to close the transaction with the function save()');
        }

        $options['atomic'] = false;
        return parent::save($entity, $options);
    }
}