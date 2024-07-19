<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PublicComplaintRequest;
use App\Models\PublicComplaint;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class PublicComplaintCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getAttibutes()
    {
        return [
            [
                'label' => 'Nama',
                'type' => 'text',
                'name' => 'name',
            ],
            [
                'label' => 'Email',
                'type' => 'email',
                'name' => 'email',
            ],
            [
                'label' => 'Telepon',
                'type' => 'text',
                'name' => 'phone',
            ],
            [
                'label' => 'Pesan',
                'type' => 'textarea',
                'name' => 'message',
            ]
        ];
    }
    public function setup()
    {
        CRUD::setModel(PublicComplaint::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/public-complaint');
        CRUD::setEntityNameStrings('pengaduan publik', 'pengaduan publik');
        if (backpack_user()->role === 'user') {
            CRUD::denyAccess('delete');
        }
    }

    protected function setupListOperation()
    {
        CRUD::addColumns($this->getAttibutes());
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(PublicComplaintRequest::class);
        CRUD::setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }

    public function store(PublicComplaintRequest $request)
    {
        $publicComplaint = new PublicComplaint();
        $publicComplaint->name = $request->name;
        $publicComplaint->email = $request->email;
        $publicComplaint->phone = $request->phone;
        $publicComplaint->message = $request->message;
        $publicComplaint->save();

        return redirect()->route('layanan-publik.pengaduan-publik')->with('success', 'Pesan berhasil dikirim!');
    }
}
