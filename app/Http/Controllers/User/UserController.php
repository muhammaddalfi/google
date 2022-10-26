<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('user.index');
    }

    public function store(Request $request)
    {
        $rule = [
            'email' => 'required'
        ];

        $message = [
            'email.required' => 'Email cannot be empty'
        ];

        $validator = Validator::make($request->all(), $rule, $message);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        } else {
            $ajax = new User();
            $ajax->email = $request->input('email');
            $ajax->save();
            return response()->json([
                'status' => 200,
                'message' => 'Data masuk Pak Eko',
            ]);
        }
    }

    public function fetch()
    {
        $user = User::all();
        return DataTables::of($user)
            ->addIndexColumn()
            ->addColumn('action', function ($user) {
                return '<a href="javascript:void(0)" class="btn btn-teal edit" data-id="' . $user->id . '"><i class="icon-pencil mr-2"></i>Edit</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
