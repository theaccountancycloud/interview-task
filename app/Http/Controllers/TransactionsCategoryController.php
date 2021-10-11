<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionsCategoryController extends Controller
{

    public function index(Request $request)
    {
        $data= array();
        if($request->has('column')) {
            $data['column'] = $request->get('column');
        }
        if($request->has('order')) {
            $data['order'] = $request->get('order');
        }
        if($request->has('per_page')) {
            $data['per_page'] = $request->get('per_page');
        }
        return $this->getDataForDataTable($data);
    }


    /**
     * Get data for the data table.
     *
     * @param Request $request
     *
     * @return 
     */
    public function getDataForDataTable($data)
    {
        $query = DB::table('transactions') 
        ->join('transaction_categories', 'transaction_categories.transaction_id', '=',  'transactions.id')
        ->join('categories', 'transaction_categories.category_id' ,'=','categories.id')
        ->selectRaw(" `transactions`.`name`, `transactions`.`amount`, `transactions`.`date`, GROUP_CONCAT(`categories`.`name`) As categoryName, 
        `transactions`.`amount` * 100/(SELECT SUM(`amount`) FROM `transactions`) As 'percentage_of_total' ")
         ->groupBy('transactions.id')
        ->orderBy($data['column'], $data['order'])
        ->paginate($data['per_page']);

        $transactions = $query->toArray();

        return response()->json($transactions);
    }
}
