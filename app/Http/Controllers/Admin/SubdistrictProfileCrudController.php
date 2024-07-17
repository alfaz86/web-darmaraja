<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubdistrictProfileRequest;
use App\Models\SubdistrictProfile;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\CRUD\app\Library\Widget;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class SubdistrictProfileCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    protected function setupSubdistrictProfileRoutes($segment, $routeName, $controller)
    {
        Route::get($segment . '/status/{id}', [
            'as' => $routeName . '.status',
            'uses' => $controller . '@status',
            'operation' => 'status',
        ]);
    }

    private function getAttibutes()
    {
        return [
            [
                'label' => 'Thumbnail',
                'type' => 'upload',
                'name' => 'thumbnail_image',
                'withFiles' => true,
                'upload' => true,
            ],
            [
                'label' => 'Judul',
                'type' => 'text',
                'name' => 'title',
            ],
            [
                'label' => 'Konten',
                'type' => 'textarea',
                'name' => 'content',
            ],
            [
                'label' => 'Menu',
                'type' => 'select_from_array',
                'name' => 'menu',
                'options' => SubdistrictProfile::MENU,
            ],
            [
                'label' => 'Status',
                'type' => 'select_from_array',
                'name' => 'status',
                'options' => SubdistrictProfile::STATUS,
            ],
        ];
    }

    public function setup()
    {
        CRUD::setModel(SubdistrictProfile::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/subdistrict-profiles');
        CRUD::setEntityNameStrings('profil kecamatan', 'profil kecamatan');
    }

    protected function setupListOperation()
    {
        CRUD::addColumn([
            'label' => 'Gambar',
            'type' => 'custom_html',
            'name' => 'thumbnailImage',
            'value' => function ($entry) {
                return $entry->thumbnailImage ? '<img src="' . $entry->thumbnailImage->getUrl() . '" style="max-width: 200px; max-height: 200px; object-fit: cover;" />' : '';
            },
        ]);

        CRUD::addColumn([
            'label' => 'Judul',
            'type' => 'text',
            'name' => 'title',
        ]);

        CRUD::addColumn([
            'label' => 'Menu',
            'type' => 'custom_html',
            'name' => 'menu',
            'value' => function ($entry) {
                return SubdistrictProfile::MENU[$entry->menu];
            },
        ]);

        CRUD::addColumn([
            'label' => 'Status',
            'type' => 'custom_html',
            'name' => 'status',
            'value' => function ($entry) {
                return SubdistrictProfile::STATUS[$entry->status];
            },
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(SubdistrictProfileRequest::class);
        CRUD::addFields($this->getAttibutes());

        Widget::add()->type('script')->content('js/ckeditor.js');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();

        CRUD::addColumn([
            'label' => 'Konten',
            'type' => 'custom_html',
            'name' => 'content',
            'value' => function ($entry) {
                return $entry->content;
            },
        ]);
    }

    protected function store()
    {
        $response = \DB::transaction(function () {
            $response = $this->traitStore();
            $subdistrictProfile = $this->crud->getCurrentEntry();
            $subdistrictProfile->addMediaFromRequest('thumbnail_image')
                ->toMediaCollection('thumbnail_image');
            Storage::delete('public/' . $subdistrictProfile['thumbnail_image']);

            $this->status($subdistrictProfile->id, $subdistrictProfile->status);

            return $response;
        });

        return $response;
    }

    protected function update()
    {
        $oldSubdistrictProfile = $this->crud->getCurrentEntry();

        $response = \DB::transaction(function () use ($oldSubdistrictProfile) {
            $response = $this->traitUpdate();
            $subdistrictProfile = $this->crud->getCurrentEntry();

            if ($this->crud->getRequest()->has('thumbnail_image')) {
                // delete old image
                $oldSubdistrictProfile->clearMediaCollection('thumbnail_image');

                // new image
                $subdistrictProfile->addMediaFromRequest('thumbnail_image')
                    ->toMediaCollection('thumbnail_image');
                Storage::delete('public/' . $subdistrictProfile['thumbnail_image']);
            }

            $this->status($subdistrictProfile->id, $subdistrictProfile->status);

            return $response;
        });

        return $response;
    }

    protected function status(string $subdistrictProfileId, bool $status): void
    {
        $subdistrictProfile = SubdistrictProfile::find($subdistrictProfileId);
        $subdistrictProfile->status = $status;
        $subdistrictProfile->save();

        if ($status) {
            SubdistrictProfile::where('id', '!=', $subdistrictProfileId)
                ->where('menu', $subdistrictProfile->menu)
                ->update(['status' => 0]);
        }
    }
}
