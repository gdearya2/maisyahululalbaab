<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateproductRequest;

class DashboardFlashsaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.flashsale.index', [
            'products' => product::latest()->filter(request(['cari']))->paginate(15)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $flashsale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $flashsale)
    {
        DB::beginTransaction();
        try {
            $flashsale_product = str_replace("-", "/", $request->flashsale);
            $validatedData['flashsale'] = $flashsale_product;
            $validatedData['sold_out'] = $request->sold_out;
            product::where('id', $flashsale->id)->update($validatedData);
            DB::commit();
            return redirect('/dashboard/flashsale')->with('success', 'Flash Sale berhasil di Update!');
        } catch (\Throwable $th) {
            DB::rollBack();
            return $th->getMessage();
        }
    }

    public function removeFlashsale(Request $request, product $remove_flashsale)
    {
        DB::beginTransaction();
        try {
            if ($request->flashsale == 0000 - 00 - 00) {
                $validatedData['flashsale'] = NULL;
            } else {
                $remove_flashsale_product = str_replace("-", "/", $request->flashsale);
                $validatedData['flashsale'] = $remove_flashsale_product;
            }
            $validatedData['sold_out'] = NULL;
            product::where('id', $remove_flashsale->id)->update($validatedData);
            DB::commit();
            return redirect('/dashboard/flashsale')->with('success', 'Flash Sale Berhasil di Non-Aktifkan!');
        } catch (\Throwable $th) {
            DB::rollBack();
            $th->getMessage();
        }
    }

    public function addFlashsale(Request $request, product $add_flashsale)
    {
        DB::beginTransaction();
        try {
            $add_flashsale_product = str_replace("-", "/", $request->flashsale);
            $validatedData['flashsale'] = $add_flashsale_product;
            $validatedData['sold_out'] = $request->sold_out;
            product::where('id', $add_flashsale->id)->update($validatedData);
            DB::commit();
            return redirect('/dashboard/flashsale')->with('success', 'Flash Sale Berhasil di Aktifkan!');
        } catch (\Throwable $th) {
            DB::rollBack();
            $th->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $flashsale
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $flashsale)
    {
        //
    }
}
