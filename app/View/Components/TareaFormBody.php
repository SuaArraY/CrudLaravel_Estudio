<?php

namespace App\View\Components;

USE App\Models\Tarea;
use Illuminate\View\Component;

class TareaFormBody extends Component
{
    private $tarea;
    /**
     * Create a new component instance.
     * @param \App\Model\Tarea $tarea
     * @return void
     */
    public function __construct( $tarea=null)
    {
        $this->tarea= $tarea;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {   
        $params =[
            'tarea' => $this->tarea,
            'urgencias' => Tarea::URGENCIAS,

        ];
        return view('components.tarea-form-body', $params);
    }
}
