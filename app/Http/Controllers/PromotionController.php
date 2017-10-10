<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Promotion;
class PromotionController extends Controller
{
	 public function home()
  	{
    	return redirect('admin/promotion');
  	}
    public function getpromotion()
    {
      $promotions = Promotion::all();
      return view('hotels.promotions.index', compact('promotions'));
    }
	 public function view()
	{
	  $promotions = Promotion::all();
	  return view('hotels.promotions.index', compact('promotions'));
	}
    public function create()
    {
      $promotions = Promotion::all()->pluck('code_name', 'promotion');
      return view('hotels.promotions.create', compact('promotions'));
    }
    public function save()
    {	
      $data = Input::all();
      $promotion = Promotion::create($data);
      return redirect('admin/promotion/' . $promotion->id);
    }
    public function show(Promotion $promotion)
    {
      return view('hotels.promotions.show', compact('promotion'));
    }
    public function delete(Promotion $promotion)
    {
      $promotion->delete();
      return redirect('admin/promotion/index')->withSuccess('Cat has been delete');
    }
    public function edit(Promotion $promotion)
    {
      $promotion = Promotion::all()->pluck( 'id', 'code_name', 'promotion');
      return view('hotels.promotions.edit', compact('promotion'));
    }
        public function update(Promotion $promotion)
    {
      $data = Input::all();
      $promotion->update($data);
      return redirect('admin/promotion/' . $promotion->id);
    }

}
