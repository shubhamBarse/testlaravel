<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Student;

class DeleteStudent extends Controller {
   public function delete($id) {
      DB::delete('delete from students where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      return redirect()->action(
        [StudentData::class, 'show']
    )->with('success', 'User registered successfully!');
    //   echo '<a href = "/delete-records">Click Here</a> to go back.';
   }
}