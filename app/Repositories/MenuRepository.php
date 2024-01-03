<?php

namespace App\Repositories;

use App\Helpers\ConstantHelper;
use App\Models\Menu;

class MenuRepository extends Repository
{
    protected $model, $menuItem, $content, $brand;

    public function __construct(
        Menu $model,
        MenuItemRepository $menuItem,
        ContentRepository $content,
        ProductBrandRepository $brand
    ) {
        $this->model = $model;
        $this->menuItem = $menuItem;
        $this->content = $content;
        $this->brand = $brand;
    }

    public function dataProvider($request, $paginate = true)
    {
        $limit = ConstantHelper::DEFAULT_PAGE_LIMIT;

        $dataProvider = $this->model;
        if ($request->trash == true) {
            $dataProvider = $dataProvider->onlyTrashed();
        }
        if ($request->has('title') && $request->title != '') {
            $dataProvider = $dataProvider->where('title', 'like', $request->title . '%');
        }

        if ($request->has('status') || $request->status != '') {
            $dataProvider = $dataProvider->where('status', $request->status);
        }
        if ($paginate) {
            $dataProvider = $dataProvider->paginate($limit);
        } else {
            $dataProvider = $dataProvider->get();
        }
        return $dataProvider;
    }
    public function customLinks($id)
    {
        return $this->menuItem->where('type', 2)->where('menu_id', $id)->get();
    }
    public function getContent($type, $reference_id)
    {
        switch ($type) {
            case ConstantHelper::MENU_TYPE_CONTENT:
                return $this->content->where('id', $reference_id)->where('status', 1)->first();
            case ConstantHelper::MENU_TYPE_BRAND:
                return $this->brand->where('id', $reference_id)->where('status', 1)->first();
        }
    }
    public function content($menuItem)
    {
        $data['title'] = '';
        $data['slug'] = '';
        $data['url'] = '';
        $data['relative_url'] = '';
        if ($menuItem) {
            $data['target'] = $menuItem->link_target == true ? '_blank' : '';
            $data['icon'] = !empty($menuItem->icon) ? $menuItem->icon : '';

            switch ($menuItem->type) {

                case ConstantHelper::MENU_TYPE_CONTENT:
                    $content = $this->content->where('id', $menuItem->reference_id)
                        ->where('status', 1)->first();
                    if ($content) {
                        $data['title'] = $content->title;
                        $data['slug'] = $content->slug;
                        $data['url'] = url('/' . $content->slug);
                        $data['relative_url'] = '/' . $content->slug;
                    }
                    break;
                case ConstantHelper::MENU_TYPE_BRAND:
                    $brand = $this->brand->where('id', $menuItem->reference_id)->where('status', 1)->first();
                    if ($brand) {
                        $data['title'] = $brand->title;
                        $data['slug'] = $brand->slug;
                        $data['url'] = url('/brand' . '/' . $brand->slug);
                        $data['relative_url'] = '/brand' . '/' . $brand->slug;
                    }
                    break;
                default:
                    $data['title'] = $menuItem->title;
                    $dat['slug'] = $menuItem->slug;
                    $data['url'] = $menuItem->link_url;
                    $data['relative_url'] = $menuItem->slug;
                    break;
            }
        }

        return $data;
    }
    public function frontendMenu($id = null)
    {
        $items =  $this->menuItem;
        if ($id) {
            $items = $items->where('menu_id', $id);
        }
        return $items->where('status', 1)
            ->orderBy('parent_id', 'asc')
            ->orderBy('display_order', 'asc')
            ->get();
    }
}
