<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function services()
    {
//        $this->crud->addField([   // CustomHTML
//                        'name' => 'metas_separator',
//                        'type' => 'custom_html',
//                        'value' => '<br><h2>Metas</h2><hr>',
//                        'tab' => 'Metas',
//                    ]);
        $this->crud->addField([
                        'name' => 'meta_title',
                        'label' => 'Meta Title',
                        'fake' => true,
                        'store_in' => 'extras',
                        'tab' => 'Metas',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_keywords',
                        'label' => 'Meta Keywords',
                        'fake' => true,
                        'store_in' => 'extras',
                        'tab' => 'Metas',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_description',
                        'label' => 'Meta Description',
                        'type' => 'textarea',
                        'fake' => true,
                        'store_in' => 'extras',
                        'tab' => 'Metas',
                    ]);
//        $this->crud->addField([   // CustomHTML
//                        'name' => 'content_separator',
//                        'type' => 'custom_html',
//                        'value' => '<br><h2>Content</h2><hr>',
//                        'tab' => 'Content',
//                    ]);
        $this->crud->addField([
                        'name' => 'content',
                        'label' => 'Content',
                        'type' => 'wysiwyg',
                        'placeholder' => 'Your content here',
                        'tab' => 'Content',
                    ]);
    }

    private function landing_page()
    {
        $this->crud->addField([
            'name' => 'meta_title',
            'label' => 'Meta Title',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Metas',
        ]);
        $this->crud->addField([
            'name' => 'meta_keywords',
            'label' => 'Meta Keywords',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Metas',
        ]);
        $this->crud->addField([
            'name' => 'meta_description',
            'label' => 'Meta Description',
            'type' => 'textarea',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Metas',
        ]);

        $this->crud->addField([
            'name' => 'content',
            'label' => 'Content',
            'type' => 'wysiwyg',
            'placeholder' => 'Your content here',
            'tab' => 'Content',
        ]);

        $this->crud->addField([ // image
            'label' => "Page Image",
            'name' => "image",
            'type' => 'upload',
            'upload' => true,
//            'crop' => true, // set to true to allow cropping, false to disable
//            'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            'tab' => 'Content',
            'disk' => 'uploads',
//             'prefix' => 'uploads/pages/' // in case you only store the filename in the database, this text will be prepended to the database value
        ]);

        $this->crud->addField([
            'name' => 'meta_description',
            'label' => 'Meta Description',
            'type' => 'textarea',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Metas',
        ]);
    }

    private function about_us()
    {
        $this->crud->addField([
                        'name' => 'content',
                        'label' => 'Content',
                        'type' => 'wysiwyg',
                        'placeholder' => 'Your content here',
                        'tab' => 'Content',
                    ]);
    }
}
