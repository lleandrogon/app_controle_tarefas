<?php

namespace App\Exports;

use App\Models\Tarefa;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

use function PHPSTORM_META\map;

class TarefasExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Auth::user()->tarefas()->get();
    }

    public function headings():array { //declarando o tipo de retorno
        return [
            'ID da tarefa',
            'Tarefa',
            'Data limite conclusão'
        ];
    }

    public function map($linha):array {
        return [
            $linha->id,
            $linha->tarefa,
            date('d/m/Y', strtotime($linha->data_limite_conclusao))
        ];
    }
}
