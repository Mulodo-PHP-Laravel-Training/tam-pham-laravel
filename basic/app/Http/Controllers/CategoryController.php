<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use Session;

class CategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        
        //
        $category = Category::paginate(1);
        return view('category.index', compact('category'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        
        //
        return view('category.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        
        //
        $category = new Category();
        $category->name = $request->input('name');
        $category->alias = $request->input('alias');
        $category->ordering = $request->input('ordering');
        if ($category->validate()) {
            $category->save();
            Session::flash('success', 'add success');
        } 
        else {
            $errors = $category->errors;
            $messages = '';
            
            //dd($errors);
            foreach ($errors->all() as $error) {
                $messages.= $error . '<br>';
            }
            Session::flash('error', $messages);
        }
        return redirect('category/create')->withInput();
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        
        //
        $category = Category::find($id);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        
        //
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        
        //
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->alias = $request->input('alias');
        $category->ordering = $request->input('ordering');
        if ($category->validate()) {
            $category->save();
            Session::flash('success', 'edit success');
        } 
        else {
            $errors = $category->errors;
            $messages = '';
            
            //dd($errors);
            foreach ($errors->all() as $error) {
                $messages.= $error . '<br>';
            }
            Session::flash('error', $messages);
        }
        return redirect('category/' . $id . '/edit')->withInput();
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        
        //
        
        
    }
}
