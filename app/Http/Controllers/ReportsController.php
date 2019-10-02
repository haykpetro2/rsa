<?php

namespace App\Http\Controllers;

use App\Order;
use App\Policy;
use App\Http\Requests\BorderoReportRequest;
use App\Http\Requests\OrdersReportRequest;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class ReportsController extends Controller
{

    public function getBordero(){
        $companies = Policy::select('company_name')->groupBy('company_name')->get()->toArray();
        return view('reports.bordero', compact('companies'));
    }
    public function postBordero(BorderoReportRequest $request)
    {
        $excel = Excel::create('Report_Bordero', function($excel) use($request) {

            $excel->sheet('Sheet 1', function($sheet) use($request) {
                $sheet->appendRow([
                    trans('report.Num'),
                    trans('policy.Policy serial'),
                    trans('policy.Policy number'),
                    trans('report.Handle date'),
                    trans('policy.Date from'),
                    trans('policy.Date to'),
                    trans('policy.Date from'),
                    trans('policy.Date to'),
                    '',
                    '',
                    trans('policy.Receipt number'),
                    trans('report.Payment'),
                    trans('policy.Client'),
                    trans('policy.TO price'),
                    trans('policy.File price'),
                ]);

                $query = Policy::query();
                if(!empty($request->input('company_name'))){
                    $query->whereIn('company_name', $request->input('company_name'));
                }
                if(!empty($request->input('number_from'))){
                    $query->where('policy_number', '>=', $request->input('number_from'));
                }
                if(!empty($request->input('number_to'))){
                    $query->where('policy_number', '<=', $request->input('number_to'));
                }
                $df = $request->input('dt_from');
                if($df){
                    $query->where('created_at', '>=', Carbon::createFromFormat('d.m.Y', $df) );
                }
                $dt = $request->input('dt_to');
                if($dt){
                    $query->where('created_at', '<=', Carbon::createFromFormat('d.m.Y', $dt));
                }
                $query->orderBy('policy_number', 'asc')->get()->each(function($policy) use($sheet) {
                    $sheet->appendRow([
                        $policy->id,
                        $policy->policy_serial,
                        $policy->policy_number,
                        Carbon::now()->format('d.m.Y'),
                        $policy->date_from,
                        $policy->date_to,
                        '',
                        '',
                        '',
                        '',
                        $policy->receipt_number,
                        $policy->p_total,
                        $policy->client->legal_name,
                        $policy->t_amount,
                        $policy->f_amount,
                    ]);
                });
            });
        });

        $excel->download('xls');
    }

    public function getOrders(){
        return view('reports.orders');
    }

    public function postOrders(OrdersReportRequest $request)
    {
        $excel = Excel::create('Report_Orders', function($excel) use($request) {

            $excel->sheet('Sheet 1', function($sheet) use($request) {
                $sheet->appendRow([
                    trans('report.Num'),
                    trans('order.Date'),
                    trans('order.Updated'),
                    trans('order.Name'),
                    trans('order.Email'),
                    trans('order.Phone'),
                    trans('order.Status'),
                    trans('order.Type'),
                    trans('order.Notes'),
                    trans('order.Comment'),
                ]);

                $query = Order::query();
                $df = $request->input('dt_from');
                if($df){
                    $query->where('created_at', '>=', Carbon::createFromFormat('d.m.Y', $df)->startOfDay());
                }
                $dt = $request->input('dt_to');
                if($dt){
                    $query->where('created_at', '<=', Carbon::createFromFormat('d.m.Y', $dt)->endOfDay());
                }
                $query->orderBy('created_at', 'desc')->get()->each(function($order) use($sheet) {
                    $sheet->appendRow([
                        $order->id,
                        $order->created_at,
                        $order->updated_at,
                        $order->name,
                        $order->email,
                        $order->phone,
                        $order->status->name,
                        $order->type->name,
                        $order->notes,
                        $order->comments,
                    ]);
                });
            });
        });

        $excel->download('xls');
    }
}
