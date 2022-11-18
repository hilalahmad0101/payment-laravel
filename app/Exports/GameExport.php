<?php

namespace App\Exports;

use App\Models\GamePlan;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class GameExport implements FromCollection , WithHeadings 
{
    /**
     * @return \Illuminate\Support\Collection
     */

     use Exportable;
    public function collection()
    {
        dd(date('Y-m-d H:i:s'));
        return GamePlan::select('id','name','buyin','total_buyin','cashout','win_loss','inital','total_amount','tip_amount','date_time')
        ->get();

    //     $games=\DB::table('')
    //    ->select('.buyin','game_plans.total_buyin','game_plans.cashout','game_plans.win_loss','game_plans.total_amount','game_plans.tip_amount','game_plans.created_at')->get();
    //    dd($games);
    }
    public function headings(): array
    {
        return ['id','name','Buyin','Total Buyin','Cashout','Win Loss','Initial','Total Amount','Tip Amount','Date and Time'];
    }
    // public function map($row): array{
    //     return [
    //         Date::dateTimeToExcel($row->date_time),
    //     ];
    // }

    // public function columnFormats(): array {
    //     return [
    //         'A' => NumberFormat::FORMAT_DATE_DDMMYYYY
    //     ];
    // }

    // public function styles(Worksheet $sheet) {
    //     return [ 1 => ['font' => ['bold' => true ]]];
    // }

   
}
