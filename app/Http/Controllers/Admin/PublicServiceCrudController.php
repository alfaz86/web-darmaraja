<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PublicServiceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\CRUD\app\Library\Widget;

class PublicServiceCrudController extends CrudController
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
                'label' => 'Judul',
                'type' => 'text',
                'name' => 'title',
            ],
            [
                'label' => 'Konten',
                'type' => 'textarea',
                'name' => 'content',
            ]
        ];
    }

    public function setup()
    {
        CRUD::setModel(\App\Models\PublicService::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/public-service');
        CRUD::setEntityNameStrings('produk layanan', 'produk layanan');
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
        CRUD::setValidation(PublicServiceRequest::class);
        CRUD::addFields($this->getAttibutes());

        Widget::add()->type('script')->content('js/ckeditor.js');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
