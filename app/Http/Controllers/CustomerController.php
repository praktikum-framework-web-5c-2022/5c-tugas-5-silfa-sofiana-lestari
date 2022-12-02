<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function all(){
        $customers = Customer::with('rekening')->get();  
            return view('customer.all', [
                'customers' => $customers
            ]);
    }

    public function create(){
        return view('customer.create');
    }

    public function insert(Request $request){
        $customer = Customer::create($request->all());

        $customer->rekening()->create([
            'bri' => $request->bri,
            'btn' =>$request->btn,
        ]);

        return redirect()->route('customer.all')->with(['success' => 'Data customer bernama '.$customer->nama.' berhasil diubah!']);
    }

    public function edit($id){
        $customer = Customer::find($id);
        return view('customer.edit',[
            'customer' => $customer
        ]);
    }

    public function update(Request $request,$id){

        $customer = Customer::find($id);
        $customer->update($request->all());
        $customer->rekening()->update([
            'bri'=>$request->bri,
            'btn'=>$request->btn,
        ]);

        return redirect()->route('customer.all')->with(['success' => 'Data customer bernama'.$customer->nama.' berhasil diubah!']);
    }

    public function delete($id){
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customer.all')->with('success',"Data customer bernama ".$customer->nama." berhasil dihapus");
    }
}
