<?php

namespace Modules\Cargo\Http\Controllers;

use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    private $aclRepo;

    public function __construct()
    {
        // check on permissions
        $this->middleware('user_role:1|0|3|4')->only('index');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        breadcrumb([
            [
                'name' => __('cargo::view.statistics'),
                'path' => fr_route('admin.statistics')
            ],
            [
                'name' => __('cargo::view.statistics')
            ]
        ]);

        $adminTheme = env('ADMIN_THEME', 'adminLte');
        return view('cargo::'.$adminTheme.'.pages.statistics.index');
    }





}
