<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getAttibutes($show = true)
    {
        return [
            [
                'label' => 'Nama',
                'type' => 'text',
                'name' => 'name',
            ],
            [
                'label' => 'Username',
                'type' => 'text',
                'name' => 'username',
            ],
            [
                'label' => 'Email',
                'type' => 'email',
                'name' => 'email',
            ],
            [
                'label' => 'Role',
                'type' => 'select_from_array',
                'name' => 'role',
                'options' => User::ROLE,
            ],
            [
                'label' => 'Password',
                'type' => $show ? 'password' : 'hidden',
                'name' => 'password',
            ]
        ];
    }

    public function setup()
    {
        CRUD::setModel(User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('user', 'users');
    }

    protected function setupListOperation()
    {
        CRUD::setFromDb();
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserRequest::class);
        CRUD::addFields($this->getAttibutes());

        User::creating(function ($entry) {
            $entry->password = \Hash::make($entry->password);
        });
    }

    protected function setupUpdateOperation()
    {
        CRUD::setValidation(UserRequest::class);
        CRUD::addFields($this->getAttibutes(false));
    }
}
