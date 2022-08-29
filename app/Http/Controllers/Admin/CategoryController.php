<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\Environment;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $environments = Environment::query()->latest()->get();
        $categories = Category::query()->latest()->get();
        return view('admin.categories.index', [
            'categories' => $categories,
            'environments' => $environments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryStoreRequest $request)
    {
        $name_fa = $request->get('name_fa');
        $name_en = $request->get('name_en');
        $environment_id = $request->get('environment_id');

        Category::query()->create([
            'name_fa' => $name_fa,
            'name_en' => $name_en,
            'slug_en' => strtolower(str_replace(' ', '_', $name_en)),
            'slug_fa' => str_replace(' ', '_', $name_fa),
            'environment_id' => $environment_id,
        ]);
        return redirect()->back()->with('success', 'اقامتگاه با موفقیت افزوده شد');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Category $category)
    {
        $environments = Environment::query()->latest()->get();
        $categories = Category::query()->latest()->get();
        return view('admin.categories.edit', [
            'category' => $category,
            'categories' => $categories,
            'environments' => $environments
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        {
            $name_fa = $request->get('name_fa');
            $name_en = $request->get('name_en');
            $environment_id = $request->get('environment_id');

            $category->update([
                'name_fa' => $name_fa,
                'name_en' => $name_en,
                'slug_en' => strtolower(str_replace(' ', '_', $name_en)),
                'slug_fa' => str_replace(' ', '_', $name_fa),
                'environment_id' => $environment_id,
            ]);
            return redirect()->route('admin.categories.index')->with('success', 'اقامتگاه با موفقیت آپدیت شد');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success', 'اقامتگاه با موفقیت حذف شد');
    }
}
