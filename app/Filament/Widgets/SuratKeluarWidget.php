<?php

namespace App\Filament\Widgets;

use App\Models\SuratKeluar;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Support\Facades\Storage;

class SuratKeluarWidget extends TableWidget
{
    protected int|string|array $columnSpan = 'full';
    protected static ?string $heading = 'Daftar Surat Keluar';

    public function table(Table $table): Table
    {
        return $table
            ->query(SuratKeluar::query())
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('No')
                    ->searchable(),
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_surat')
                    ->label('Nomor Surat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tujuan_surat')
                    ->label('Tujuan Surat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('perihal')
                    ->label('Perihal')->limit(30)
                    ->searchable(),
                Tables\Columns\TextColumn::make('file_surat')
                    ->label('File PDF')
                    ->formatStateUsing(fn($state) => $state ? 'Download PDF' : '-')
                    ->url(fn($record) => $record->file_surat ? Storage::url($record->file_surat) : null)
                    ->openUrlInNewTab()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_surat')
                    ->label('Tanggal')
                    ->date()
                    ->searchable(),
            ]);
    }
}
