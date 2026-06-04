<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilder extends Controller
{
    // INSERT
    public function insert()
    {
        DB::table('students')->insert([
            'name' => 'Ankit',
            'email' => 'ankit@gmail.com'
        ]);

        return "Data Inserted";
    }

    // READ
    public function show()
    {
        $students = DB::table('students')->get();
        return $students;
    }

    // UPDATE
    public function update()
    {
        DB::table('students')
            ->where('id', 1)
            ->update(['name' => 'Updated Name']);

        return "Data Updated";
    }

    // DELETE
    public function delete()
    {
        DB::table('students')->where('id', 1)->delete();

        return "Data Deleted";
    }
}