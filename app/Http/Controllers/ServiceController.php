<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index() {
        $title = 'Our services';
        $paragraph = 'Lorem ipsum';

        $data = Service::all();

        return view('service/index', [ 'myServices' => $data, 'title' => $title, 'paragraph' => $paragraph ]);
    }
    
    public function create() {

        $title = "New Service";
        $paragraph = "New Service for PMP ";

        return view('service/create', ['title' => $title, 'paragraph' => $paragraph]);
    }

    public function store(Request $request) {
        
        // Service::create($request->except('_token'));

        $request->validate([
            'label' => 'required|min:3|max:10|unique:services',
            'price' => 'required'
        ]);

        $service = new Service();

        // $service->label = $request->input('label');
        // $service->price = $request->input('price');
        // $service->content = $request->input('content');


        if($request->hasFile('thumbnail')) {
            $service->thumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $service->label = $request->label;
        $service->price = $request->price;
        $service->content = $request->content;

        $service->save();

        return to_route('service.index')->with('status', 'Service is Created in the Database !');
    }

    public function edit($id) {

        $service = Service::findOrFail($id);

        $title = "Edit a Service";
        $paragraph = "New Service for PMP ";

        return view('service/edit', ['title' => $title, 'paragraph' => $paragraph, 'service' => $service]);
    }

    public function update(Request $request, $id) {
        
        $service = Service::findOrFail($id);
        // Service::where('id', $id)->update($request->except(['_token', '_method']));
        
        // $service->label = $request->input('label');
        // $service->price = $request->input('price');
        // $service->content = $request->input('content');

        $request->validate([
            'label' => 'required|min:3|max:10|unique:services',
            'price' => 'required'
        ]);

        if($request->hasFile('thumbnail')) {
            $service->thumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        $service->label = $request->label;
        $service->price = $request->price;
        $service->content = $request->content;

        $service->save();

        return to_route('service.index')->with('status', 'Service is Updated SuccessFully !');
    }

    public function show(Service $service) {

        $title = 'Show page';
        $paragraph = 'Lorem ipsum';

        return view('show', ['service' => $service, 'title' => $title, 'paragraph' => $paragraph]);

    }


    public function destroy($id) {
        $service = Service::findOrFail($id);
        $service->delete();

        return to_route('service.index')->with('status', 'Service is deleted SuccessFully !');

    }
}
