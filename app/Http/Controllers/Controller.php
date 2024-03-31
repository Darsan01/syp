<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Get the authenticated user.
     *
     * @return \App\Models\User|null
     */
    protected function getAuthenticatedUser()
    {
        return Auth::user();
    }

    /**
     * Check if the user is authenticated.
     *
     * @return bool
     */
    protected function isAuthenticated()
    {
        return Auth::check();
    }

    /**
     * Add a success message to the session.
     *
     * @param  string  $message
     * @return void
     */
    protected function successMessage($message)
    {
        Session::flash('success', $message);
    }

    /**
     * Add an error message to the session.
     *
     * @param  string  $message
     * @return void
     */
    protected function errorMessage($message)
    {
        Session::flash('error', $message);
    }

    /**
     * Redirect back with input and error message.
     *
     * @param  string  $message
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function backWithError($message)
    {
        return redirect()->back()->withInput()->withErrors(['error' => $message]);
    }
}
