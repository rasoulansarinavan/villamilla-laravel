<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EnvironmentStoreRequest;
use App\Models\Environment;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EnvironmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $environments = Environment::query()->latest()->get();
        return view('admin.environments.index', [
            'environments' => $environments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(EnvironmentStoreRequest $request)
    {
        $name_fa = $request->get('name_fa');
        $name_en = $request->get('name_en');
        $image = $request->file('image');
        $image_extension = $image->extension();
        $image_name = time() . '_' . $name_en . '.' . $image_extension;
        Image::make($image)->resize('300', '200')->save('images/environments/' . $image_name);

        Environment::query()->create([
            'name_fa' => $name_fa,
            'name_en' => $name_en,
            'slug_en' => strtolower(str_replace(' ', '_', $name_en)),
            'slug_fa' => str_replace(' ', '_', $name_fa),
            'image' => $image_name,
        ]);
        return redirect()->back()->with('success', 'محیط با موفقیت ذخیره شد');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Environment $environment
     * @return \Illuminate\Http\Response
     */
    public function show(Environment $environment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Environment $environment
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Environment $environment)
    {

        return view('admin.environments.edit',[
            'environment'=>$environment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Environment $environment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Environment $environment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Environment $environment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Environment $environment)
    {
        //
    }
}
