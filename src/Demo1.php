<?php
namespace whtcgh;
use Illuminate\Support\ServiceProvider;
class Demo1 extends ServiceProvider
{
    public function __construct() { }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        echo __METHOD__;
    }
}