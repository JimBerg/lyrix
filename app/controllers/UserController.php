<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jimberg
 * Date: 12.05.14
 * Time: 11:16
 * To change this template use File | Settings | File Templates.
 */

use Illuminate\Validation\Validator;

class UserController extends BaseController
{
    /**
     * @var string sets base layout
     */
    protected $layout = 'layout/master';

    /**
     * constructor method, calls parent constructor
     * runs before action for csrf protection on post requests
     *
     * @return void
     */
    public function __construct()
    {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

    /**
     * create new user account
     * handles get request
     * displays register form
     *
     * @return mixed
     */
    public function getRegister()
    {
        return View::make('user.register');
    }

    /**
     * create new user account
     * handles post request
     * take input values of register form
     * and validates them against the rules specified in user model
     * if validation passes, user is logged in,
     * else user will receive an error message
     *
     * @return mixed
     */
    public function postRegister()
    {
        $validator = \Validator::make(Input::all(), User::$registerRules);

        if ($validator->passes()) {
            $user = new User();
            $user->username = Input::get('username');
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();

            return Redirect::to('user/login');
        }
       //die(var_dump($validator->messages()));

        return Redirect::to('user/register')
            ->with('message', 'Something went wrong')
            ->withErrors($validator)
            ->withInput();
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return View::make('user.login'); //->with('message', 'Thank you for creating a new account. Please sign in.');
    }

    /**
     *
     */
    public function postLogin()
    {
        if (Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
            return Redirect::to('search/index');
        }
        return Redirect::to('user/login')->with('message', 'Your email/password combo was incorrect');
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('user/login')->with('message', 'You have been signed out');
    }
}
