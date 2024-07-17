<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('test',function(){
    // Yêu cầu 1: 
     // DB::table('users')->ddRawSql();
 
     // Yêu cầu 2:
     // DB::table('users')->where('age', '>', 25)->ddRawSql();
 
     //     Yêu cầu 3:
     // DB::table('users')
     //     ->where('age', '>', 25)
     //     ->where('status', 'active')
     //     ->ddRawSql();
 
     // DB::table('users')
     //     ->where([
     //         ['age', '>', 25],
     //         ['status', 'active']
     //     ])
     //     ->orWhere('is_hot', 1)
     //     ->ddRawSql();
 
     //     Yêu cầu 4:
     // DB::table('users')
     //     ->orderBy('status')
     //     ->orderByDesc('age')
     //     ->ddRawSql();
 
     //     Yêu cầu 5: 
     // DB::table('products')->limit(10)->ddRawSql();
 
     //     Yêu cầu 6: 
     // DB::table('orders')
     //     ->where('status', 'completed')
     //     ->orWhere('total', '>', 100)
     //     ->ddRawSql();
 
     //     Yêu cầu 7: 
     // DB::table('customers')
     //     ->where('name', 'like', '%john%')
     //     ->ddRawSql();
 
     // DB::table('posts')
         // ->where('title', 'like', '%john%')
         // ->orWhere('description', 'like', '%john%')
         // ->orWhere('content', 'like', '%john%')
         // ->whereAll(
         //     ['title', 'description', 'content'],
         //     'like',
         //     '%john%'
         // )
         // ->ddRawSql();
 
     //         Yêu cầu 8:
     // DB::table('sales')->whereBetween('amount', [1000, 5000])->ddRawSql();
 
     //     Yêu cầu 9: 
     // DB::table('employees')->whereIn('department_id', [1, 2, 3])->ddRawSql();
 
     //     Yêu cầu 10: 
     // DB::table('orders')
     //     ->join('customers', 'orders.customer_id', '=', 'customers.id')
     //     ->ddRawSql();
 
     // DB::table('orders')
     //     ->join('customers', function (JoinClause $join) {
     //         $join->on('orders.customer_id', '=', 'customers.id')
     //             ->where('customers.is_vip', 1);
     //     })
     //     ->where('status', 'completed')
     //     ->ddRawSql();
 
     //     Yêu cầu 11: 
     // DB::table('order_items')
     //     ->selectRaw('product_id, SUM(quantity) as total')
     //     ->groupBy('product_id')
     //     ->ddRawSql();
 
     //     Yêu cầu 12: 
     // DB::table('orders')
     //     ->where('status', 'processing')
     //     ->update([
     //         'status' => 'shipped'
     //     ]);
 
     //     Yêu cầu 13: 
     // DB::table('logs')->whereDate('created_at', '<', '2020-01-01')->ddRawSql();
 
     //     Yêu cầu 14: 
     // DB::table('products')->insert([
     //     'name' => 'sp 1',
     //     'price' => 1000,
     //     'quatity' => 5
     // ]);
 
     //     Yêu cầu 15: 
     // DB::table('users')->whereRaw(' month(birth_date) = 5 ')->ddRawSql();
 
 }  );  
 