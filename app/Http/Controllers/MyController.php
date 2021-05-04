<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\customer_good;
use App\Models\Customers;
use App\Models\Goods;
use App\Models\Types;
use App\Models\MyModel;
use Illuminate\Database\Eloquent\Model;

class MyController extends Controller
{
    public function getMy($var){
        $m = new MyModel($var);
        $page = $m->checkId();
        return view($page);
    }

    public function postMy(){
        $i=0;
        $arr = array("", "", "", "", "", "");
        if (request('name') == "" || request('phone') == "" || request('email') == "" || request('for') == "" || request('text') == "") {
            $arr[$i] = "Виправте невірно вказані дані:";
            $i++;
            if (request('name') == "") {
                $arr[$i] = "Введіть ім'я";
                $i++;
            }
            if (request('phone') == "") {
                $arr[$i] = "Введіть телефон";
                $i++;
            }
            if (request('email') == "") {
                $arr[$i] = "Введіть електронну пошту";
                $i++;
            }
            if (request('for') == "") {
                $arr[$i] = "Вкажіть, для кого замовленя";
                $i++;
            }
            if (request('text') == "") {
                $arr[$i] = "Введіть повідомлення";
                $i++;
            }
        } else{
            $arr[$i] = "Ми зв'яжемось з вами найближчим часом!";
        }
        $c = new Customers();
        $c->name=request('name');
        $c->phone=request('phone');
        $c->email=request('email');
        $c->address=request('text');
        $c->save();
        return redirect('/afterform')->with('array', $arr);
    }

    public function loadPages($var){
        return view($var);
    }

    public function makeOrder(){
        $cg = new customer_good();
        $c=Customers::where('phone', request('phone'))->get();
        $cg->customer_id=$c->get(0)->id;
        $g=Goods::where('name', request('good'))->get();
        $cg->good_id=$g->get(0)->id;
        $cg->deadline=request('deadline');
        $cg->save();
        return redirect('/afterorder');
    }

    public function getGoods($id){
        $result = Types::find($id)->goods;
        return view('goods', ['goods'=>$result]);
    }

    public function getCustomers($id){
        $result = Goods::find($id)->customers;
        return view('customers', ['customers'=>$result]);
    }
}
