<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminsTrashController extends Controller
{
	/**
	 * shows deleted admins
	 * 
	 * @return \Illuminate\Http\Response
	 */
    public function index ()
    {
    	$admins = Admin::onlyTrashed()->paginate(15);

    	return view(
    		'dashboard.admins.trash.index',
    		compact('admins')
    	);
    }

    /**
     * shows the deleted admin profile
     * 
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show ($id)
    {
    	$admin = Admin::onlyTrashed()->findOrFail($id);
    	$roles = $admin->roles;

    	return view(
    		'dashboard.admins.trash.show',
    		compact('admin', 'roles')
    	);
    }
}
