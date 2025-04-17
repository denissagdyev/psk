<?php

namespace App\Http\Controllers\Admin;

    use App\Models\Banner;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    class BannerController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $banners = Banner::all();
            return view('admin.banners.index', compact('banners'));
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('admin.banners.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'is_active' => 'nullable|boolean',
                'url' => 'nullable|url',
            ]);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('public/banners');
                $validatedData['image'] = $imagePath;
            }

            Banner::create($validatedData);

            return redirect()->route('admin.banners.index')->with('success', 'Баннер добавлен!');
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Banner  $banner
         * @return \Illuminate\Http\Response
         */
        public function show(Banner $banner)
        {
            return view('admin.banners.show', compact('banner'));
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Banner  $banner
         * @return \Illuminate\Http\Response
         */
        public function edit(Banner $banner)
        {
            return view('admin.banners.edit', compact('banner'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Banner  $banner
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Banner $banner)
        {
            $validatedData = $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'is_active' => 'nullable|boolean',
                'url' => 'nullable|url',
            ]);

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('public/banners');
                $validatedData['image'] = $imagePath;
            }

            $banner->update($validatedData);

            return redirect()->route('admin.banners.index')->with('success', 'Баннер обновлен!');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Banner  $banner
         * @return \Illuminate\Http\Response
         */
        public function destroy(Banner $banner)
        {
            $banner->delete();
            return redirect()->route('admin.banners.index')->with('success', 'Баннер удален!');
        }
    }