<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function Home()
    {
        $Cabang = DB::select('select id_cabang,nama_cabang,FORMAT(sum(quantity_product*price), "N", "en-us") as `Total_Omset`,count(order_id) as `Total_Kunjungan` from v_trans group by id_cabang');
        $Customer = DB::select('select customer_id,customer_name,FORMAT(sum(price*quantity_product), "N", "en-us") `Total_Belanja`,count(order_id)`Total_Kunjungan` from v_trans group by id_cabang, customer_id,customer_name order by `Total_Kunjungan` desc');
        $Product = DB::select('select id_cabang,nama_cabang,product_id,product_name,price,sum(quantity_product) as `Total_Penjualan`,(sum(quantity_product)*price) as `Total_Uang_Diterima` from v_trans group by id_cabang,product_id order by `Total_Penjualan` desc');
        $CabangCustomer = DB::select('select id_cabang,nama_cabang,customer_id,customer_name,count(*) as `Jumlah_Kunjungan` from v_trans group by id_cabang,customer_name order by id_cabang, `Jumlah_Kunjungan` desc');
        $CabangProduct = DB::select('select id_cabang,nama_cabang,product_id,product_name,price, sum(quantity_product) `Jumlah_Terjual` from v_trans group by id_cabang, product_id, product_name order by id_cabang,`Jumlah_Terjual` desc');
        $CustomerProduct = DB::select('select product_id,product_name,price, count(customer_name) `Jumlah_Customer` from v_trans group by product_id, product_name');
        return view('welcome')->with('cabang', $Cabang)->with('customer', $Customer)->with('product', $Product)->with('cabangcus', $CabangCustomer)->with('cabangpro', $CabangProduct)->with('customerpro', $CustomerProduct);
    }
}
