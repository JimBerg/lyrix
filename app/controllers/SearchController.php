<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jimberg
 * Date: 12.05.14
 * Time: 14:06
 * To change this template use File | Settings | File Templates.
 */
class SearchController extends  BaseController
{
    /**
     * @var string sets base layout
     */
    protected $layout = 'layout/master';

    public function __construct()
    {
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('login');
    }

    public function getIndex()
    {
        $search = Input::get('search');
        return View::make('search.index')
            ->with('items', Items::where('content', 'LIKE', '%'.$search.'%')->get())
            ->with('search', $search);
    }
}
