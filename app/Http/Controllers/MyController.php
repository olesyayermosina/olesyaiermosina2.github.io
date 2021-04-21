<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\MyModel;

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
        return redirect('/afterform')->with('array', $arr);
    }

    public function loadPages($var){
        return view($var);
    }
}
