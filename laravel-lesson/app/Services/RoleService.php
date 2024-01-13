<?php 

namespace App\Services;

use App\Models\Role;

class RoleService 
{
    public function getRoles()
    {
        return Role::all();
    }

    public function createRole(array $data)
    {
        return Role::create($data);
    }

    public function showRole($id) {
        return Role::find($id);
    }

    public function updateRole(string $id, array $data)
    {
        Role::find($id)->update($data);
        return Role::find($id);
    }

    public function destroyRole($id)
    {
        Role::find($id)->delete();
    }
}