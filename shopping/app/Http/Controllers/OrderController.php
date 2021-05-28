<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use PHPUnit\Util\Json;

class OrderController extends Controller
{
    public function __construct(Order $order, Product $product, OrderDetail $orderdetail)
    {
        $this->product = $product;
        $this->order = $order;
        $this->orderdetail = $orderdetail;
    }
    public function save(Request $request)
    {

        $data = Session::get('cart');
        if ($data) {
            $order = new Order();
            $order->name = $request->name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->address = $request->address;
            $order->status = 0;
            $order->total = 0;
            $order->payments = 0;
            $order->save();

            $totalMoney = 0;
            foreach ($data as $item) {

                $this->orderdetail->create([
                    'orderid' => $order->id,
                    'productid' => $item['product_id'],
                    'quantity' => $item['product_count']
                ]);
                $totalMoney = $totalMoney + ((int)$item['product_price'] * (int)$item['product_count']);
            }
            $this->order->find($order->id)->update([
                'total' => $totalMoney
            ]);
            Session::flush();
            $email=[
                'title'=>'Thông báo đơn hàng',
                'body'=>'Xin chào bạn',
                'name'=>$order->name,
                'data'=>$data,
                'total'=>$order->total
            ];
            Mail::to($order->email)->send(new Email($email));
            print_r(true);
        } else {
            print_r(false);
        }
    }
    public function index(){
        $datas = $this->order->all();
    	return view('order.index',['datas' => $datas]);
    }
}
