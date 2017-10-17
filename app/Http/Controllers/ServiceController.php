<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Service;
use App\Http\Requests\CheckServiceRequest;
use Toastr;
class ServiceController extends Controller
{
    public function home()
  	{
    	return redirect('admin/services/index');
  	}

    public function getservices()
    {
      $services = Service::orderBy('id','DESC')->get();
      return view('admin.services.index',compact('services'));
    }

    public function create(Service $services)
    {
      return view('admin.services.create', compact('services'));
    }

    public function save(CheckServiceRequest $request)
    {	
      $data = Input::all();
      $service = Service::create($data);
      Toastr::success('Tạo services thành công', $title = null, $options = []);
      return redirect('admin/services/index' );
    }

    public function show($id)
    {
      $service = Service::find($id);
      return view('admin.services.show', compact('service'));
    }

    public function delete($id)
    {
      Service::find($id)->delete();
      Toastr::warning('Xóa Promotion Thành Công', $title = null, $options = []);
      return redirect()->route('admin.services.index');
    }

    public function edit(Service $service)
    {
      return view('admin.services.edit', compact('service'));
    }
    
    public function update(Service $service, CheckServiceRequest $request)
    {
      $data = Input::all();
      $service->update($data);
      return redirect()->route('admin.services.index');
    }
}
