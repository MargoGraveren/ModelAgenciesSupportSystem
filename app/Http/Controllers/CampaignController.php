<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return View::make('campaign.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('campaign.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $campaign = new Campaign();
        $campaign->title = $request->title;
        $campaign->description = $request->description;
        $campaign->category = 'category';
//        Auth::user()->campaign()->save($campaign);
        $campaign->save();

        return redirect('campaign');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Campaign $advertisement
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Campaign $advertisement)
    {
        return View::make('campaign.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Campaign $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Campaign $advertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Campaign $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $advertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Campaign $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $advertisement)
    {
        //
    }
}
