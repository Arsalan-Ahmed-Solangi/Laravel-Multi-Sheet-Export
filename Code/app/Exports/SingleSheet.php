<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SingleSheet implements WithTitle
{
    protected $title;
    public $data;
    public function __construct(string $title, $data)
    {
        $this->title = $title;
        $this->data = $data;
    }

    public function array(): array
    {
        $userData = [];
        foreach ($this->data as $key => $value) {
            $userData[] = [$this->title, $value->name, $value->email];
        }

        return [['Admin', 'Arsalan', 'ahmed@gmail.com']];
    }

    public function headings(): array
    {
        return ['Role Name', 'User Name', 'Email'];
    }

    public function title(): string
    {
        return $this->title;
    }
}
