<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Validator; 
use App\User;
class ChatController extends Controller
{
    public function index() 
    {
        if(!(auth()->user() && auth()->user()->role_id==User::ROLE_USER))
        {
            return redirect()->route('frontend.home');
        }
        return view('frontend.chat.index');
    }

    public function sendMessage(Request $request) 
    {
        $response=[];
        $response['status']='NOK';
        $validator = Validator::make($request->all(), $this->getValidation());
        $toUser=1;
        if(auth()->user()->role_id==User::ROLE_ADMIN)
        {
            $toUser=$request->get('user_id');
        }
        if (!$validator->passes()) {


			return response()->json($response);
        }
        $model= new Message() ;
        $model->from_id=auth()->user()->id; 
        $model->to_id=$toUser;
        $model->message=$request->get('message');
        $model->type_id=Message::TYPE_NORMAL;
        $model->save(); 
        $response['status']='OK';
        return response()->json($response);

    }

    public function getMessages(Request $request) 
    {
        $currentUserId=Auth()->user()->id;
        $id=(int)$request->get("message_id");
        $models=Message::where("id",">",$id)->where(function($query) use ($currentUserId){
            $query->where("from_id",$currentUserId)->orWhere("to_id",$currentUserId);
        })->orderBy("id","ASC");

        if(Auth()->user()->role_id==User::ROLE_ADMIN)
        {
            $models=Message::where("id",">",$id)->where(function($query) use ($currentUserId,$request){
                $query->where("from_id",$request->get("user_id"))->orWhere("to_id",$request->get("user_id"));
            })->orderBy("id","ASC");

        }
        $models=$models->get();
        $response=[];
        $data=[];
        $max_id=($models->max('id'));
        foreach($models as $model)
        {
             
            $time=$model->created_at->format("h:i A");
            $timeStampLabel=$model->created_at->format("F d");
             
            if(date("Y-m-d")==date("Y-m-d",strtotime($model->created_at)))
            {
                $timeStampLabel="Today";
            }
            else
            if(date("Y-m-d",strtotime("- 1 day",date("Y-m-d"))==date("Y-m-d",strtotime($model->created_at))))
            {
                $timeStampLabel="Yesterday";
            }
            $timestamp="$time $timeStampLabel";
            $msgStatus=($model->to_id==$currentUserId)?'recieved':'sent';
            $data[]=['message'=>$model->message,'id'=>$model->id,'timestamp'=>$timestamp,'msg_status'=>$msgStatus];
        }
        $response['max_id']=$max_id;
        $response['data']=$data;
        return $response ; 
    }

    protected function getValidation()
    {
        return ['message'=>'required'];
    }
}
