<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TourRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Storage;

class TourCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation{ store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getAttibutes()
    {
        return [
            [
                'label' => 'Gambar',
                'type' => 'upload',
                'name' => 'tour_image',
                'withFiles' => true,
                'upload' => true,
            ],
            [
                'label' => 'Judul',
                'type' => 'text',
                'name' => 'title',
            ],
            [
                'label' => 'Deskripsi',
                'type' => 'text',
                'name' => 'description',
            ],
        ];
    }

    public function setup()
    {
        CRUD::setModel(\App\Models\Tour::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tour');
        CRUD::setEntityNameStrings('wisata', 'wisata');
    }

    protected function setupListOperation()
    {
        CRUD::addColumn([
            'label' => 'Gambar',
            'type' => 'custom_html',
            'name' => 'tourImage',
            'value' => function ($entry) {
                return $entry->tourImage ? '<img src="' . $entry->tourImage->getUrl() . '" style="max-width: 200px; max-height: 200px; object-fit: cover;" />' : '';
            },
        ]);

        CRUD::addColumn([
            'label' => 'Judul',
            'type' => 'text',
            'name' => 'title',
        ]);

        CRUD::addColumn([
            'label' => 'Deskripsi',
            'type' => 'text',
            'name' => 'description',
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(TourRequest::class);
        CRUD::addFields($this->getAttibutes());
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function store()
    {
        $response = \DB::transaction(function () {
            $response = $this->traitStore();
            $tour = $this->crud->getCurrentEntry();
            $tour->addMediaFromRequest('tour_image')
                ->toMediaCollection('tour_image');
            Storage::delete('public/' . $tour['tour_image']);

            return $response;
        });

        return $response;
    }
}
