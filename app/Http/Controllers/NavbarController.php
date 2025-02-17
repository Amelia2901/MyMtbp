<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Navbar;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Navbar',
            'description' => 'Navbar Page'
        );
        return view('navbar.index', compact('data'));
    }

    public function create()
    {
        $title = 'Edit Navbar';
        $description = 'Edit Navbar Page';
        return view('navbar.create', compact('title', 'description'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $navbar = new Navbar();
            $navbar->name = $request->name;
            $navbar->url = $request->url;
            $navbar->order = $request->order;
            $navbar->save();
            DB::commit();
            return redirect()->route('navbar.index')->with('success', 'Navbar created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $title = 'Edit Navbar';
        $description = 'Edit Navbar Page';
        $navbar = Navbar::find($id);

        return view('navbar.create', compact('title', 'description', 'navbar'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $navbar = Navbar::find($id);
            $navbar->name = $request->name;
            $navbar->url = $request->url;
            $navbar->order = $request->order;
            $navbar->save();
            DB::commit();
            return redirect()->route('navbar.index')->with('success', 'Navbar updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $navbar = Navbar::find($id);
            $navbar->delete();
            DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Navbar deleted successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function data(Request $request)
    {
        $query = Navbar::select('id', 'name', 'url', 'order')->orderBy('order', 'asc');

        return DataTables::of($query)
            ->filter(function ($query) use ($request) {
                if ($request->has('search') && !is_null($request->search['value'])) {
                    $query->where('name', 'like', '%' . $request->search['value'] . '%');
                }
            })
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                return '<a href="' . route('navbar.edit', $query->id) . '" class="btn btn-primary btn-sm">Edit</a>
                        <button class="btn btn-danger btn-sm" onclick="deleteData(' . htmlspecialchars($query->id, ENT_QUOTES, 'UTF-8') . ')">Delete</button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
