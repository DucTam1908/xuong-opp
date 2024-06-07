<?php 

namespace Nguyenductam\XuongOop\Controllers\Client;

use Nguyenductam\XuongOop\Commons\Controller;
use Nguyenductam\XuongOop\Commons\Helper;
use Nguyenductam\XuongOop\Models\Product;

class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {
        $name = 'DucTV44';

        $products = $this->product->all();

        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }
}