<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\SuratMasukWidget;
use App\Filament\Widgets\SuratKeluarWidget;
use BackedEnum;
use UnitEnum;
use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;



class Laporan extends Page
{
    protected string $view = 'filament.pages.laporan';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;
    protected static ?string $navigationLabel = 'Laporan Surat';
    protected static string | UnitEnum | null $navigationGroup = 'Arsip';

    protected function getHeaderWidgets(): array
    {
        return [
            SuratMasukWidget::class,
            SuratKeluarWidget::class,
        ];
    }
    protected function getHeaderActions(): array
    {
        return [
            Action::make('cetakPdf')
                ->button()
                ->label('Cetak Semua Laporan')
                ->icon('heroicon-o-printer')
                ->url(route('laporan-surat.pdf'))
                ->openUrlInNewTab()
        ];
    }
}
