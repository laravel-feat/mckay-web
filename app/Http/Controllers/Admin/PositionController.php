<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;
class PositionController extends Controller
{
    public function index() 
    {
        $models=Position::paginate()  ; 
        return view('admin.position.index')->with('models',$models) ;
    }

    public function update(Position $model)
    {

        return view('admin.position.update', ['model' => $model]);
    }

    public function doUpdate(Request $request,Position $model)
    {
        $data=$request->validate($this->getValidation());
        $model->fill($data); 
        $model->save() ; 

        
        return redirect()->back()->withSuccess(__('Position Updated Successfuly'));
    }

    public function store (Request $request)
    {
        $data=$request->validate($this->getValidation());
        
        Position::create($data);

        return redirect()->back()->withSuccess(__('Position Added Successfuly'));

    }

    public function getValidation() 
    {
        return [
            'title'=>'required'
        ];
    }
}
