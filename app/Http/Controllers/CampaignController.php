<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
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
        $fileName = $request->file->getClientOriginalName();
        $image_path = Storage::disk('public')->putFileAs('campaigns', $request->file('file'), $fileName);

        $campaign = new Campaign();
        $campaign->title = $request->title;
        $campaign->description = $request->description;
        $campaign->category = $request->category;
        $campaign->photo = $image_path;
        $campaign->user_id = Auth::id();
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
        return View::make('campaign.campaign');
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
