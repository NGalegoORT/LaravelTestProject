<?php

namespace App\View\Composers;
use Illuminate\View\View;

class CompanyComposer
{
    public function compose(View $view): void
    {
        $view->with('prueba2', 'Mensaje desde el View Composer');
    }
}