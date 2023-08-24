<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;


class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
        protected function grid()
        {
            $grid = new Grid(new Product());

            $grid->column('id', __('Id'));
            $grid->column('name', __('Name'));
            //$grid->column('image', __('Image'));
            $grid->column('image', __('Image'))->display(function($image){
                return '<img src="../uploads/'.$image.'" style="width: 35px; height: 35px;">';
            });
            $grid->column('price', __('Price'));
            $grid->column('quantity', __('Quantity'));
            $grid->column('status', __('Status'))->display(function ($value) {
                return $value == 1 ? 'Mới' : 'Cũ';
            });
            $grid->column('category_id', __('Category'))->display(function ($value) {
                $category = Category::find($value);
                return $category ? $category->name : '';
            });
            $grid->column('description', __('Description'));
            $grid->column('size', __('Size'));
            $grid->column('color', __('Color'));
            $grid->column('code', __('Code'));
            $grid->column('created_at', __('Created at'));
            $grid->column('updated_at', __('Updated at'));

            return $grid;
        }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('price', __('Price'));
        $show->field('quantity', __('Quantity'));
        $show->field('status', __('Status'))->as(function ($value) {
            return $value == 1 ? 'Mới' : 'Cũ';
        });
        $show->field('category_id', __('Category'))->as(function ($value) {
            $category = Category::find($value);
            return $category ? $category->name : '';
        });
        $show->field('description', __('Description'));
        $show->field('size', __('Size'));
        $show->field('color', __('Color'));
        $show->field('code', __('Code'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->text('name', __('Name'));
        $form->image('image', __('Image'));
        $form->decimal('price', __('Price'));
        $form->number('quantity', __('Quantity'))->default(1);
        $form->switch('status', __('Status'))->states([
            'on' => ['value' => 1, 'text' => 'Mới', 'color' => 'primary'],
            'off' => ['value' => 0, 'text' => 'Cũ', 'color' => 'default'],
        ]); 
        
       // $form->number('category_id', __('Category id'));
        $form->select('category_id')->options(function(){
            $categories = Category::all();
            $arr = [];
            foreach($categories as $category){
                $arr += [$category->id => $category->name];
            }
            return $arr;
        });
        $form->text('description', __('Description'));
        $form->text('size', __('Size'));
        $form->text('color', __('Color'));
        $form->text('code', __('Code'));
        return $form;
    }
}
