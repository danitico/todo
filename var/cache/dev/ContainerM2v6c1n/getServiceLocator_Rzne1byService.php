<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.rzne1by' shared service.

return $this->services['service_locator.rzne1by'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('repository' => function () {
    $f = function (\App\Repository\TaskRepository $v = null) { return $v; }; return $f(${($_ = isset($this->services['App\Repository\TaskRepository']) ? $this->services['App\Repository\TaskRepository'] : $this->load(__DIR__.'/getTaskRepositoryService.php')) && false ?: '_'});
}));