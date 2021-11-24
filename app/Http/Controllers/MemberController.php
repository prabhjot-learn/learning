<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function addMember(Request $req)
    {
        $member = new Member;
        $member->first_name=$req->first_name;
        $member->last_name=$req->last_name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->contact_no=$req->contact_no;
        $member->city=$req->city;
        $member->save();



    }
}
