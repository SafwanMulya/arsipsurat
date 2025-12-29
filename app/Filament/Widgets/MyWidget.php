<?php

namespace App\Filament\Widgets;

use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;
use Filament\Support\Icons\Heroicon;
use BackedEnum;

class MyWidget extends ChartWidget
{

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;
    protected ?string $heading = 'Statistik Surat Masuk & Keluar per Bulan';

    protected function getData(): array
    {
        $suratMasuk = SuratMasuk::select(
                DB::raw('MONTH(tanggal_surat) as bulan'),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        $suratKeluar = SuratKeluar::select(
                DB::raw('MONTH(tanggal_surat) as bulan'),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy('bulan')
            ->pluck('total', 'bulan')
            ->toArray();

        $dataMasuk = [];
        $dataKeluar = [];
        for ($i = 1; $i <= 12; $i++) {
            $dataMasuk[] = $suratMasuk[$i] ?? 0;
            $dataKeluar[] = $suratKeluar[$i] ?? 0;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Surat Masuk',
                    'data' => $dataMasuk,
                ],
                [
                    'label' => 'Surat Keluar',
                    'data' => $dataKeluar,
                ],
            ],
            'labels' => [
                'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
