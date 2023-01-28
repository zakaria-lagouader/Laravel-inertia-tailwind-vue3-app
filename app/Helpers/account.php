<?php

if (!function_exists("account")) {
    /**
     * Return Athentificated account.
     *
     * @return \App\Models\Account
     */

    function account()
    {
        return session()->get("account");
    }
}