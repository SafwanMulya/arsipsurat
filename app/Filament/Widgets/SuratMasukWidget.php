<?php

namespace App\Filament\Widgets;

use App\Models\SuratMasuk;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Support\Facades\Storage;

class SuratMasukWidget extends TableWidget
{
    protected int|string|array $columnSpan = 'full';
    protected static ?string $heading = 'Daftar Surat Masuk';

    public function table(Table $table): Table
    {
        return $table
            ->query(SuratMasuk::query())
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
                Tables\Columns\TextColumn::make('asal_surat')
                    ->label('Asal Surat')
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
                    ->label('Tanggal')->date()
                    ->searchable(),
            ]);
    }
}
