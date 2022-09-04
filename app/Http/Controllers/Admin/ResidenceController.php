<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResidenceStoreRequest;
use App\Models\Category;
use App\Models\Environment;
use App\Models\Gallery;
use App\Models\Residence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ResidenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $residences = Residence::query()->latest()->get();
        $categories = Category::query()->latest()->get();
        $environments = Environment::query()->latest()->get();
        return view('admin.residences.index', [
            'residences' => $residences,
            'categories' => $categories,
            'environments' => $environments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $environments = Environment::query()->latest()->get();
        $categories = Category::query()->latest()->get();
        return view('admin.residences.create', [
            'environments' => $environments,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ResidenceStoreRequest $request)
    {
        $name_en = $request->get('name_en');
        $image = $request->file('thumbnail');
        $image_extension = $image->extension();
        $image_name = time() . '_' . $name_en . '.' . $image_extension;

        $special_offer = 0;
        if ($request->get('special_offer') == 'on') {
            $special_offer = 1;
        }
        $residence = Residence::query()->create([
            'name_fa' => $request->get('name_fa'),
            'slug_fa' => str_replace('', '_', $request->get('name_fa')),
            'environment_id' => $request->get('environment_id'),
            'wc_fa' => $request->get('wc_fa'),
            'double_bed' => $request->get('double_bed'),
            'capacity' => $request->get('capacity'),
            'price' => $request->get('price'),
            'long_desc_fa' => $request->get('long_desc_fa'),
            'short_desc_fa' => $request->get('short_desc_fa'),
            'name_en' => $request->get('name_en'),
            'slug_en' => strtolower(str_replace('', '_', $request->get('name_en'))),
            'category_id' => $request->get('category_id'),
            'wc_en' => $request->get('wc_en'),
            'single_bed' => $request->get('single_bed'),
            'bath' => $request->get('bath'),
            'discount' => $request->get('discount'),
            'long_desc_en' => $request->get('long_desc_en'),
            'short_desc_en' => $request->get('short_desc_en'),
            'status' => 1,
            'special_offer' => $special_offer,
            'thumbnail' => $image_name
        ]);
        File::makeDirectory('images/residences/' . $residence->id);
        File::makeDirectory('images/residences/' . $residence->id . '/gallery/small', 0777, true);
        File::makeDirectory('images/residences/' . $residence->id . '/gallery/large', 0777, true);
        Image::make($image)->resize('350', '350')->save('images/residences/' . $residence->id . '/' . $image_name);


        return redirect('admin.residences.index')->with('success', 'محصول با موفقیت افزوده شد');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Residence $residence
     * @return \Illuminate\Http\Response
     */
    public function show(Residence $residence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Residence $residence
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Residence $residence)
    {
        $categories = Category::query()->latest()->get();
        $environments = Environment::query()->latest()->get();
        return view('admin.residences.edit', [
            'residence' => $residence,
            'categories' => $categories,
            'environments' => $environments
        ]);
    }

    /**
     * @param Residence $residence
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function gallery(Residence $residence)
    {
        $galleries = Gallery::query()->latest()->get();
        return view('admin.residences.gallery', [
            'galleries' => $galleries,
            'residence' => $residence
        ]);
    }

    /**
     * @param Request $request
     * @param Residence $residence
     * @return \Illuminate\Http\RedirectResponse
     */
    public function galleryStore(Request $request, Residence $residence)
    {
        {
            $name_en = $residence->name_en;
            $residence_id = $residence->id;
            $images = $request->file('multi_img');
            foreach ($images as $img) {
                $image_name = time() + rand(0, 1233) . '_' . $name_en . '.' . $img->extension();
                \Intervention\Image\Facades\Image::make($img)->resize('115', '115')->save('images/residences/' . $residence_id . '/gallery/small/' . $image_name);
                \Intervention\Image\Facades\Image::make($img)->resize('1200', '1200')->save('images/residences/' . $residence_id . '/gallery/large/' . $image_name);
                Gallery::query()->create([
                    'residence_id' => $residence->id,
                    'image' => $image_name,
                ]);
            }
            return redirect()->back();
        }
    }

    /**
     * @param Gallery $gallery
     * @return \Illuminate\Http\RedirectResponse
     */
    public function galleryDestroy(Gallery $gallery)

    {
        $residence_id = $gallery->residence_id;
        $image_name = $gallery->image;
        $gallery->delete();
        unlink('images/residences/' . $residence_id . '/gallery/large/' . $image_name);
        unlink('images/residences/' . $residence_id . '/gallery/small/' . $image_name);
        return redirect()->back()->with('success', 'عکس مورد نظر حذف شد');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Residence $residence
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Residence $residence)
    {
        $name_en = $request->get('name_en');
        $image = $request->file('thumbnail');

        $old_image = $residence->thumbnail;


        if ($request->hasFile('thumbnail')) {
            unlink('images/residences/' . $residence->id . '/' . $old_image);
            $image_extension = $image->extension();
            $new_name = time() . '_' . $name_en . '.' . $image_extension;
            Image::make($image)->resize('350', '350')->save('images/residences/' . $residence->id . '/' . $new_name);
        } else {
            $new_name = $old_image;
        }

        $special_offer = 0;
        if ($request->get('special_offer') == 'on') {
            $special_offer = 1;
        }
        $residence = Residence::query()->update([
            'name_fa' => $request->get('name_fa'),
            'slug_fa' => str_replace('', '_', $request->get('name_fa')),
            'environment_id' => $request->get('environment_id'),
            'wc_fa' => $request->get('wc_fa'),
            'double_bed' => $request->get('double_bed'),
            'capacity' => $request->get('capacity'),
            'price' => $request->get('price'),
            'long_desc_fa' => $request->get('long_desc_fa'),
            'short_desc_fa' => $request->get('short_desc_fa'),
            'name_en' => $request->get('name_en'),
            'slug_en' => strtolower(str_replace('', '_', $request->get('name_en'))),
            'category_id' => $request->get('category_id'),
            'wc_en' => $request->get('wc_en'),
            'single_bed' => $request->get('single_bed'),
            'bath' => $request->get('bath'),
            'discount' => $request->get('discount'),
            'long_desc_en' => $request->get('long_desc_en'),
            'short_desc_en' => $request->get('short_desc_en'),
            'status' => 1,
            'special_offer' => $special_offer,
            'thumbnail' => $new_name
        ]);

        return redirect('admin.residences.index')->with('success', 'محصول با موفقیت افزوده شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Residence $residence
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Residence $residence)
    {
//
//        $galleries = Gallery::query()->where('residence_id', $residence->id)->get();
//
//        foreach ($galleries as $gallery) {
//            Gallery::query()->where('residence_id', $residence->id)->delete();
//        }
        //             rmdir('images/residences/' . $residence->id);
//


        File::deleteDirectory('images/residences/' . $residence->id);
        $residence->delete();
        return redirect()->back()->with('success', 'اقامتگاه با موفقیت حذف شد');
    }
}
