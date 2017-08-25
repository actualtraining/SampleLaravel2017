<?php

namespace App\BLL;

use App\TodoList;

class TodoListBLL{
    public function GetAll(){
        $todo_lists = TodoList::all();
        return $todo_lists;
    }

    public static function GetAllOrderAsc(){
        $todo_lists = TodoList::orderBy('name','asc')->get();
        return $todo_lists;
    }
}