<?php

namespace App\Http\ViewComposers\User\Worker;

use Auth;
use Illuminate\View\View;
use App\Models\Todos\TodoList;

/**
 * Class LayoutComposer
 * @package App\Http\ViewComposers\User\Worker
 */
class LayoutComposer
{
    /**
     * @param View $view
     *
     */
    protected $todolist;

    public function __construct()
    {   
        $this->todolist = TodoList::all();
    }
    
    public function compose(View $view){
        $view->with("todolists", $this->todolist); 
    }

}