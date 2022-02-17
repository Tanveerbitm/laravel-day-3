<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class StudentController extends Controller
{
    protected $fullName;
    private $city;
    private $mobile;
    private $data = [];
    private $products;

    public function index()
    {
        return view('add');
    }

    public function about()
    {
        $this->products = Product::getAllProduct();
        return view('about',['products'=>$this->products]);
    }

    public function contact()
    {
        $this->city = 'Dhaka';
        $this->mobile = '010102';
        $this->data =[
            0=>[
                'name'=>'hasib',
                'city'=>'Dhaka',
                'mobile'=>'01515610'

            ],
            1=>[
                'name'=>'mosiul',
                'city'=>'barishal',
                'mobile'=>'01515610'

            ],
            2=>[
                'name'=>'riaz',
                'city'=>'noakhali',
                'mobile'=>'01515610'

            ]
        ];
        return view('contact', [
            'city' => $this->city,
            'mobile' => $this->mobile,
            'data' => $this->data
        ]);
    }

    public function fullName(Request $request)
    {
        $this->fullName = $request->first_name . ' ' . $request->last_name;
        return view('add', ['result' => $this->fullName]);
    }
    public function detail($id){
        $this->products = Product::getAllProduct();
        foreach ($this->products as $product){
            if($product['id'] == $id){
                return view('detail',['element'=>$product]);
            }
        }
    }
}


