<?php

namespace App\Http\Controllers;

use App\Models\Funds;
use Illuminate\Http\Request;
use App\Models\User;

class FundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function funds(Request $request)
    {
        $fund = new Funds();
        $fund->firstname = $request->firstname;
        $fund->surname = $request->surname;
        $fund->email = $request->email;
        $fund->phone = $request->phone;
        $fund->fund = $request->fund;
        $fund->loan = $request->loan;
        $fund->accountno = $request->accountno;
        $fund->save();
        return $fund;
    }

    public function getfund(){
        $allfunds = Funds::get();
        return $allfunds;
    }

    
    public function getallusers()
    {
        return User::get();
    }

    // public function editFund($id){

    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editFund(Request $request, $id)
    {
        $updateitem = Funds::where('id', $id)->first();
        $updateitem->fund = $request->fund;
        $updateitem->save();
        return $updateitem;
    }

    public function editFundloan(Request $request, $id)
    {
        $updateitem = Funds::where('id', $id)->first();
        $updateitem->loan = $request->loan;
        $updateitem->save();
        return $updateitem;
    }

    public function editFundProfile(Request $request, $id)
    {
        $updateitem = Funds::where('id', $id)->first();
        $updateitem->firstname = $request->firstname;
        $updateitem->surname = $request->surname;
        $updateitem->email = $request->email;
        $updateitem->phone = $request->phone;
        $updateitem->save();
        return $updateitem;
    }

    public function editUserProfile(Request $request, $id)
    {
        $updateitem = User::where('id', $id)->first();
        $updateitem->firstname = $request->firstname;
        $updateitem->lastname = $request->lastname;
        $updateitem->email = $request->email;
        $updateitem->phone = $request->phone;
        $updateitem->save();
        return $updateitem;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
