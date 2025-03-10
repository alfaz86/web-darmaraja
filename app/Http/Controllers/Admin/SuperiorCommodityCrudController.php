<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SuperiorCommodityRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class SuperiorCommodityCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getAttibutes()
    {
        return [
            [
                'label' => 'Lokasi',
                'type' => 'text',
                'name' => 'location',
            ],
            [
                'label' => 'Pemilik',
                'type' => 'text',
                'name' => 'owner',
            ],
            [
                'label' => 'Kerajinan',
                'type' => 'text',
                'name' => 'craft',
            ],
            [
                'label' => 'Olah Pangan',
                'type' => 'text',
                'name' => 'food_processing',
            ],
        ];
    }

    public function setup()
    {
        CRUD::setModel(\App\Models\SuperiorCommodity::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/superior-comodity');
        CRUD::setEntityNameStrings('komoditas unggulan', 'komoditas unggulan');
        if (backpack_user()->role === 'user') {
            CRUD::denyAccess('update');
            CRUD::denyAccess('delete');
        }
    }

    protected function setupListOperation()
    {
        CRUD::addColumns($this->getAttibutes());
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(SuperiorCommodityRequest::class);
        CRUD::addFields($this->getAttibutes());
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
