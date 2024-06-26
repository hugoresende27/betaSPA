<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth')->except(['index', 'show']);//not in laravel 11
        // $this->authorizeResource(Listing::class, 'listing');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Listing/Index',
        [
            'listings' => Listing::orderByDesc('created_at')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()) {
            if ( Auth::user()->cannot('create', Listing::class)) {
                abort(403);
            }; 
        }
      
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all(), $request->code);
        // $listing = new Listing();
        // $listing->code = $request->code;

        //OR better
        // Listing::create([
        //     ...$request->all(),
        //     ...$request->validate([
        //         'beds' => 'required|integer|min:0|max:20',
        //         'baths' => 'required|integer|min:1|max:20',
        //         'area' => 'required|integer|min:10|max:20000',
        //     ]),
        // ]);

        //OR the same
        // Listing::create( 
        $request->user()->listings()->create( //to create the listing with the user_id key
            $request->validate([
                'beds' => 'required|integer|min:0|max:20',
                'baths' => 'required|integer|min:1|max:20',
                'area' => 'required|integer|min:10|max:20000',
                'city' => 'required',
                'code' => 'required',
                'street' => 'required',
                'street_nr' => 'required|min:1|max:1000',
                'price' => 'required|integer|min:1|max:20000000',
            ]),
        );

        return redirect()->route('listing.index')
            ->with('success', 'Listing was created!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        if (Auth::user()) {

            if ( Auth::user()->cannot('view', $listing)) {
                abort(403);
               }; //from ListingPolicy method  view
        }




        return inertia('Listing/Show',
        [
            'listing' => $listing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        if (Auth::user()) {
            if ( Auth::user()->can('update', $listing)) {
                return inertia('Listing/Edit',
                [
                    'listing' => $listing
                ]);
            
            } else {
                abort(403);
            }; 
        }
       
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        $listing->update(
            $request->validate([
                'beds' => 'required|integer|min:0|max:20',
                'baths' => 'required|integer|min:1|max:20',
                'area' => 'required|integer|min:10|max:20000',
                'city' => 'required',
                'code' => 'required',
                'street' => 'required',
                'street_nr' => 'required|min:1|max:1000',
                'price' => 'required|integer|min:1|max:20000000',
            ])
        );

        // $listing->save();

        return redirect()->route('listing.index')
            ->with('success', 'Listing was updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        if (Auth::user()) {
            if ( Auth::user()->can('delete', $listing)) {
               
                $listing->delete();
                return redirect()->back()
                    ->with('danger', 'Listing was deleted!');
            
            } else {
                abort(403);
            }; 
        }
    
    }
}
