<?php
namespace LaraMod\Admin\Core\Traits;

trait DashboardTrait {

    public function addWidget($item)
    {
        $items = config('laramod.dashboard.widgets', []);
        $items[] = $item;
        config(['laramod.dashboard.widgets' => $items]);
    }

    public function getWidgets()
    {
        return config('laramod.dashboard.widgets', []);
    }
}