<?php

namespace App\Http\Controllers\Dashboard;

use App\Company;
use App\CompanyCategory;
use App\Dashboard\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax())
        {
            $comapnies = Company::all();

            return response()->json($comapnies);

        }
        return view('dashboard.companies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('dashboard.companies.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $rules = new Company();
        $rules = $rules->factoryRules;
        $categories = $request['categories'];

        $this->validate($request, $rules);

        $company = Company::create([
            'name_en'   => $request['name_en'],
            'name_ar'   => $request['name_ar'],
            'owner'     => $request['owner'],
            'email'     => $request['email'],
            'address'   => $request['address'],
            'brief'     => $request['brief'],
            'phone_1'   => $request['phone_1'],
            'phone_2'   => $request['phone_2'],
        ]);

        foreach ( $categories as $category)
        {
             CompanyCategory::create([
                 'category_id' => $category,
                 'company_id'  => $company->id,
             ]);
        }

        if (isset($request['logo']))
        {
            $this->imageUpload($company,$request);
        }

        return  redirect()->route('dashboard.companies.index')->with('success','New Factory has been added successfully !');

    }

    public function show($id)
    {
        $company = Company::find($id);
        $company_categories = $company->categories;
        return view('dashboard.companies.show',compact('company','company_categories'));
    }


    public function edit($id)
    {
        $categories = Category::all();
        $company = Company::find($id);
        $company_categories = $company->categories->pluck('id')->toArray();
        return view('dashboard.companies.edit',compact('company','categories','company_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Company $company
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $rules = new Company();
        $rules = $rules->factoryRules;
        $categories = $request['categories'];

        $rules['email'] = $rules['email'] . ',id,' . $id;
        $rules['phone_1'] = $rules['phone_1'] . ',id,' . $id;
        $rules['phone_2'] = $rules['phone_2'] . ',id,' . $id;

        $this->validate($request, $rules);

        $company = Company::find($id);

        $company->update([
            'name_en'   => $request['name_en'],
            'name_ar'   => $request['name_ar'],
            'owner'     => $request['owner'],
            'email'     => $request['email'],
            'address'   => $request['address'],
            'brief'     => $request['brief'],
            'phone_1'   => $request['phone_1'],
            'phone_2'   => $request['phone_2'],
        ]);

        if ($company->categories->pluck('id')->toArray() != $categories)
        {
            CompanyCategory::where('company_id',$company->id)->delete();

            if ( $categories != null)
            {
                foreach ( $categories as $category)
                {
                    CompanyCategory::create([
                        'category_id' => $category,
                        'company_id'  => $company->id,
                    ]);
                }
            }

        }

        if ( isset($request['logo']) && $request['logo'] != $company->logo )
        {
            $this->imageUpload($company,$request);
        }

        return  redirect()->route('dashboard.companies.index')->with('success','company\'s info has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->ajax())
        {
            Company::find($id)->destroy($id);
        }
    }

    public function imageUpload(Company $company ,Request $request)

    {
        $request->validate([

            'logo' => 'required|image|mimes:jpeg,png,jpg,svg',

        ]);

        $imageName = time().'.'.$request['logo']->getClientOriginalExtension();


        $request['logo']->move(public_path('factory_logos'), $imageName);

        $company->logo = $imageName;

        $company->save();

    }

    public function getCompanyCategories(Request $request)
    {
        $id = $request['company_id'];

        if($request->ajax()){
            $company = Company::find($id);
            $company_categories = $company->categories->pluck('name_en','id')->toArray();
            return json_encode($company_categories);
        }
    }
}
