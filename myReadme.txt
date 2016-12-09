
Динамическое меню

<ul class="nav navbar-nav navbar-right"><?php $id=1 ?>@foreach($menu as $menuFor){!! $menuFor->level == 2 && $menuFor->order == 0 ? '<ul class="dropdown-menu" aria-labelledby="drop{{$id-1}}">' : null!!}<li class="{{$menuFor->level == 1 && $menuFor->no_child == 0 ? 'dropdown' : null}}{!! $url == $menuFor->url ? 'active' : null !!}"><a href="{{$menuFor->level != 1 || $menuFor->no_child == 0 ? '/category/' : ''}}{{ $menuFor->url }}" {!! $menuFor->level == 1 && $menuFor->no_child == 0 ? "class='dropdown-toggle' id='drop$id' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'" : null!!}>{{$menuFor->title }}{!! $menuFor->level == 1 && $menuFor->no_child == 0 ? "<span class='caret'></span>":null!!}</a>{!! $menuFor->last == 1 ? '</ul>' : null!!}<?php if($menuFor->level == 1) {$id=$id+1;}?>@endforeach</ul>


// сортировка меню
public function sortMenu($menus)
{
    $menusSort = [];

    for ($n=0; $n<=$menus[count($menus)-1]->order; $n++) {

        for ($i = 0; $i < count($menus); $i++) {

            if ($menus[$i]->order == $n && !isset($menus[$i]->parent_id)) {
                $menus[$i]->level = 1;
                $menusSort[] = $menus[$i];
            }
        }

        $node = last($menusSort);

        for ($i = 0; $i < count($menus); $i++) {
            if ($menus[$i]->parent_id == $node->id) {
                $menus[$i]->level = 2;
                $menusSort[] = $menus[$i];
            }
        }


    }

    return $menusSort;
}