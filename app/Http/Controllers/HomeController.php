<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $homeService;

    public function __construct(
        HomeService $homeService
    ) {
        $this->homeService = $homeService;
    }

    public function index(Request $request)
    {
        $tournaments = $this->homeService->index($request->all());
        $countMatches = $this->homeService->countMatches();
        $categories = $this->_constant();
        return view('home', compact('tournaments', 'categories', 'countMatches'));
    }

    public function _constant()
    {
        $categories = [
            'all' => 'Tất cả',
            'live' => 'Trực tiếp',
            'end' => 'Đã kết thúc',
            'schedule' => 'Lịch thi đấu',
        ];

        return $categories;
    }
}
