<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\UnknownGraphException;

class HomeController extends Controller
{
	public function index(Request $request)
	{
		return redirect('examples');
	}

	public function examples(Request $request, $type = null, $chart = null)
	{
		$chartsMaker = app('ChartsMaker');

		$selectedChart = ($type && $chart) ? $type . '.' . $chart : $chartsMaker->defaultChart() ;

		try {
			$chart = $chartsMaker->make($selectedChart);
		} catch (UnknownGraphException $e) {
			abort(404);
		}

		return view('components.examples', [
			'chart' => $chart,
		]);
	}
}
