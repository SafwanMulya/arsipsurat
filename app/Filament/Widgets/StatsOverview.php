<?php

namespace App\Filament\Widgets;

use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use App\Models\Kategori;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\RichEditor\TextColor;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            // HIJAU
            Stat::make('Total Surat Masuk', SuratMasuk::count())
                ->descriptionIcon('heroicon-c-arrow-right')
                ->description('Klik untuk lihat data kelas')
                ->icon('heroicon-o-inbox')
                ->url(route('filament.admin.resources.surat-masuks.index')),


            // BIRU
            Stat::make('Total Surat Keluar', SuratKeluar::count())
                ->descriptionIcon('heroicon-c-arrow-right')
                ->description('Klik untuk lihat data kelas')
                ->icon('heroicon-o-paper-airplane')
                ->url(route('filament.admin.resources.surat-keluars.index')),

            // KUNING
            Stat::make('Total Kategori', Kategori::count())
                ->descriptionIcon('heroicon-c-arrow-right')
                ->description('Klik untuk lihat data kelas')
                ->icon('heroicon-o-tag')
                ->url(route('filament.admin.resources.kategoris.index')),

        ];
    }
}
