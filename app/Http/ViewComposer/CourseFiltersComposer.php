<?php

namespace App\Http\ViewComposer;

use Illuminate\View\View;
use App\Filters\Course\CourseFilters;

class CourseFiltersComposer
{
    public function compose(View $view)
    {
        $view->with([
            'mappings' => CourseFilters::mappings()
        ]);
    }
}
