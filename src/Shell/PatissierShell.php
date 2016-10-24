<?php
namespace Patissier\Shell;

use Bake\Shell\BakeShell;
use Patissier\Console\PatissierTaskRegistry;

abstract class PatissierShell extends BakeShell
{
    public $subDir = '';

    /**
     * __construct
     * @author ito
     */
    public function __construct(ConsoleIo $io = null)
    {
        parent::__construct($io);
        // サブディレクトリ対応させるために$this->Tasksを上書き
        $this->Tasks = new PatissierTaskRegistry($this);
    }

    /**
     * _findTasks
     * @author ito
     */
    protected function _findTasks($tasks, $path, $namespace, $prefix = null)
    {
        $path .= 'Shell/Task' . DS . $this->subDir;
        if (!is_dir($path)) {
            return $tasks;
        }
        $candidates = $this->_findClassFiles($path, $namespace);
        $classes = $this->_findTaskClasses($candidates);
        foreach ($classes as $class) {
            list(, $name) = namespaceSplit($class);
            $name = substr($name, 0, -4);
            $fullName = ($prefix ? $prefix . '.' : '') . $name;
            $tasks[$name] = $fullName;
        }

        return $tasks;
    }

    /**
     * _findClassFiles
     * @author ito
     */
    protected function _findClassFiles($path, $namespace)
    {
        $iterator = new \DirectoryIterator($path);
        $candidates = [];
        foreach ($iterator as $item) {
            if ($item->isDot() || $item->isDir()) {
                continue;
            }
            $name = $item->getBasename('.php');
            $candidates[] = $namespace . '\Shell\Task\\' . $this->subDir . '\\' . $name;
        }
        return $candidates;
    }
}