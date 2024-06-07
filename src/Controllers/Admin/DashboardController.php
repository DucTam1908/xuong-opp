<?php

namespace Nguyenductam\XuongOop\Controllers\Admin;

use Nguyenductam\XuongOop\Commons\Controller;
use Nguyenductam\XuongOop\Commons\Helper;
use Nguyenductam\XuongOop\Models\Product;

class DashboardController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function dashboard() {    
        $products = $this->product->all();

        $analysisProduct = array_map(function ($item) {
            return [
                $item['name'],
                $item['views']
            ];
        }, $products);

        array_unshift($analysisProduct, ['Tên sản phẩm', 'Lượt views']);

        $this->renderViewAdmin(__FUNCTION__, [
            'analysisProduct' => $analysisProduct
        ]);
    }
}