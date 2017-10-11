<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Promotion;
use Toastr;

class PromotionController extends Controller
{
	public function home()
  	{
    	return redirect('admin/promotion');
  	}

    public function getpromotion()
    {
      // $promotions = Promotion::all();
      // return view('admin.promotions.index', compact('promotions'));
      $promotions = Promotion::orderBy('id','DESC')->get();
        return view('admin.promotions.index',compact('promotions'));
    }

  	public function view()
  	{
  	   $promotions = Promotion::all();
  	     return view('admin.promotions.index', compact('promotions'));
  	}

    public function formValidationPost(Request $request)
    {
      $this->validate($request,[
          'code_name' => 'required|string|min:6|max:6',
          'promotion' => 'required|integer|max:99|min:1',
        ],[
          'promotion.required' => ' The first name field is required.',
          'promotion.min' => 'Nhập Promotion Lớn Hơn 0',
          'promotion.max' => 'Nhập Promotion Nhỏ Hơn 99.',
          'lastname.required' => ' The last name field is required.',
          'code_name.min' => 'Nhập 6 Kí Tự Bất Kì.',
          'code_name.max' => 'Nhập 6 Kí Tự Bất Kì.',
        ]);
    }

    public function create()
    {
      return view('admin.promotions.create', compact('promotions'));
    }

    public function save()
    {	
      $data = Input::all();
      $promotion = Promotion::create($data);
      Toastr::success('Tạo promotion thành công', $title = null, $options = []);
      return redirect('admin/promotion/index' );
    }

    public function show($id)
    {
       $promotion = Promotion::find($id);
      return view('admin.promotions.show', compact('promotion'));
    }

    // public function delete(Promotion $promotion)
    // {

    //   $promotion->delete();
    //   return redirect('admin/promotion/index')->withSuccess('Cat has been delete');
    // }

    public function delete($id){
            //update post data
            Promotion::find($id)->delete();
            Toastr::warning('Xóa Promotion Thành Công', $title = null, $options = []);
            return redirect()->route('admin.promotion.index');
        }

    public function edit(Promotion $id)
    {
      $promotion = Promotion::find($id);
        //load form view
        return view('admin.promotions.edit', compact('promotion'));
    }
    
        public function update(Promotion $promotion)
    {
      // $data = Input::all();
      // $promotion->update($data);
      // return redirect('admin/promotion/' . $promotion->id);
      $this->validate($promotion, [
            'title' => '',
            'content' => 'required'
        ]);
        $data = Input::all();
        Promotion::find($id)->update($data);
        
        return redirect()->route('admin.promotions.index');
    }

}
