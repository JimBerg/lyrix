<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jimberg
 * Date: 12.05.14
 * Time: 20:27
 * To change this template use File | Settings | File Templates.
 */
class ListsController extends BaseController
{
    /**
     * @var string sets base layout
     */
    protected $layout = 'layout/master';

    public function getNewlist() {
       return View::make('lists/newlist');
    }

    public function getMylists() {
        return View::make('lists/mylists');
    }
}
