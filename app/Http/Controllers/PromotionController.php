<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\CheckPromotionRequest;
use App\Promotion;
use Toastr;

class PromotionController extends Controller
{
	public function home()
  	{
    	return redirect('admin/promotion/index');
  	}

    public function getpromotion()
    {
      $promotions = Promotion::orderBy('id','DESC')->get();
        return view('admin.promotions.index',compact('promotions'));
    }

  	public function view()
  	{
  	   $promotions = Promotion::all();
  	     return view('admin.promotions.index', compact('promotions'));
  	}

    public function create()
    {
      return view('admin.promotions.create');
    }

    public function save(CheckPromotionRequest $request)
    {	
      $data = $request->all();
      $promotion = Promotion::create($data);
      Toastr::success('Tạo promotion thành công', $title = null, $options = []);
      return redirect('admin/promotion/index');
    }

    public function show($id)
    {
      $promotion = Promotion::find($id);
      return view('admin.promotions.show', compact(['promotion']));
    }

    public function delete($id)
    {
      Promotion::find($id)->delete();
      Toastr::info('Xóa Promotion Thành Công', $title = null, $options = []);
      return redirect()->route('admin.promotion.index');
    }

    public function edit(Promotion $promotion)
    {
      return view('admin.promotions.edit', compact('promotion'));
    }
    
    public function update(Promotion $promotion, CheckPromotionRequest $request)
    {
        $data = $request->all();
        $promotion->update($data);
        Toastr::success('Update promotion thành công', $title = null, $options = []);
        return redirect('admin/promotion/index');
    }

}
