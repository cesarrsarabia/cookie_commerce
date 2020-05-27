<?php

namespace App\Policies;

use App\Cart;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CartPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function Checkout(){
        $cart = Cart::where('user_id',\Auth::id())->count();        
        return $cart == 0;
        
    }
}
