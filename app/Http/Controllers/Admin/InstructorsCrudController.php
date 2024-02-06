<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InstructorsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class InstructorsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class InstructorsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData($show = FALSE) {
        return 
        [
            [
                'label' => __('admin.name-ar'),
                'name' => "name_ar",
                'type' => "text",
                'validationRules' => 'required',
                'validationMessages' => ['required' => __('admin.required')]
            ],
            [
                'label' => __('admin.name-en'),
                'name' => "name_en",
                'type' => "text",
                'validationRules' => 'required',
                'validationMessages' => ['required' => __('admin.required')]
            ],
            [
                'label' => __('admin.major-ar'),
                'name' => "major_ar",
                'type' => "text",
                'validationRules' => 'required',
                'validationMessages' => ['required' => __('admin.required')]
            ],
            [
                'label' => __('admin.major-en'),
                'name' => "major_en",
                'type' => "text",
                'validationRules' => 'required',
                'validationMessages' => ['required' => __('admin.required')]
            ],
            [
                'label' => __('admin.email'),
                'name' => "email",
                'type' => "text",
                'validationRules' => 'required',
                'validationMessages' => ['required' => __('admin.required')]
            ],
            [
                'label' => __('admin.image'),
                'name' => "image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'layouts/image',
                'upload' => true,
            ]
        ];
    }
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Instructors::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/instructors');
        CRUD::setEntityNameStrings('instructors', 'instructors');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation([]);
        CRUD::setFromDb(); // set fields from db columns.
        $this->crud->addFields($this->getFieldsData());

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        $this->setupListOperation();
    }
}
