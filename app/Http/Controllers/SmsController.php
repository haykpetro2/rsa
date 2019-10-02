<?php

namespace App\Http\Controllers;

use App\Policy;
use App\Client;
use App\Services\SmsService;
use Illuminate\Support\Facades\Input;

class SmsController extends Controller {

    public function send() {
        $status = 'not send';
        $messageId = '';

        $smsService = new SmsService();
        $response = '';

        if (Input::has('policy_id')) {
            $policy = Policy::findOrFail(Input::get('policy_id',-1));
            $default_text = trans('general.SMS Notification Template 1', ['client_name'=>$policy->client->short_name, 'exp_date'=>$policy->date_to]);
            $phone_number = $policy->client->sms_phone_number;
            if (\App::environment('local')) {
                $phone_number = config('sms.test_phone');
            }
            $text = Input::get('sms_text', $default_text);

            $response = $smsService->sendMessage($phone_number, $text);

            if(strpos($response, '=') !== false){
                list($messageId, $status) = explode("=", $response, 2);
            }else{
                $status = $response;
            }

            \Log::info('SMS Message', array(
                'status' => $status,
                'message_id' => $messageId,
                'policy_id' => $policy->id,
                'client_id' => $policy->client->id,
                'client_name' => $policy->client->legal_name,
                'phone_number' => $phone_number,
                'message_text' => $text,
            ));

            if($status == 'accepted') {
                $policy->notified = true;
                $policy->notification_id = $messageId;
                $policy->notification_status = $status;
                $policy->save();
                flash()->success(trans('general.SMS '.$status));
            }else{
                flash()->error(trans('general.SMS '.$status));
            }
        } else if (Input::has('client_id')) {
            $client = Client::findOrFail(Input::get('client_id',-1));
            $default_text = trans('general.SMS Notification Template 2', ['client_name'=>$client->short_name]);
            $phone_number = $client->sms_phone_number;
            if (\App::environment('local')) {
                $phone_number = config('sms.test_phone');
            }
            $text = Input::get('sms_text', $default_text);

            $response = $smsService->sendMessage($phone_number, $text);

            if(strpos($response, '=') !== false){
                list($messageId, $status) = explode("=", $response, 2);
            }else{
                $status = $response;
            }

            \Log::info('SMS Message', array(
                'status' => $status,
                'message_id' => $messageId,
                'client_id' => $client->id,
                'client_name' => $client->legal_name,
                'phone_number' => $phone_number,
                'message_text' => $text,
            ));


            if($status == 'accepted') {
                flash()->success(trans('general.SMS '.$status));
            }else{
                flash()->error(trans('general.SMS '.$status));
            }
        } else {
            abort(404);
        }
        return redirect()->back();
    }
}