<?php

namespace App\Http\Controllers;

use App\Services\RoleService;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    
    protected $roleService;


    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->roleService->getRoles();
        // Повернення виду зі списком ролей
        return response()->json($roles);
    }


    public function show(Request $request)
    {
        $role = $this->roleService->showRole($request->id);
        // Повернення виду зі списком ролей
        return response()->json($role);
    }


    public function store(Request $request)
    {
        // Логіка для створення ролі з використанням сервісу
        $data = $request->validate([
            'name' => 'required|unique:roles|max:255',
            // Додайте інші правила валідації, які потрібні
        ]);

        $roles =  $this->roleService->createRole($data);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($roles);
    }

    public function update(Request $request, string $id)
    {
        // Логіка для оновлення ролі з використанням сервісу
        $data = $request->validate([
            'name' => 'required|unique:roles,name,' . $id . '|max:255',
            // Додайте інші правила валідації, які потрібні
        ]);

        $roles = $this->roleService->updateRole($id, $data);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($roles);
    }

    public function destroy($id)
    {
        // Логіка для видалення ролі з використанням сервісу
        $roles = $this->roleService->destroyRole($id);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($roles);
    }

}