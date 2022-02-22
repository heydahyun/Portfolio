<?php 

return function ($page) {

    $filterBy = get('filter');
    $unfiltered = $page->children()->listed();
    $projects = $unfiltered
        ->when($filterBy, function($filterBy) {
            return $this->filterBy('category', $filterBy);
        })
        ->paginate(10000);
        
        $pagination = $projects->pagination();
        $filters = $page->children()->listed()->pluck('category', null, true);
        

    return [
        'filterBy' => $filterBy,
        'unfiltered' => $unfiltered,
        'projects' => $projects,
        'pagination' => $pagination,
        'filters' => $filters
    ];
};
