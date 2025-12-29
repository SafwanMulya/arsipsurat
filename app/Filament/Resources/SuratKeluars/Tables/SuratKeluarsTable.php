<?php

namespace App\Filament\Resources\SuratKeluars\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SuratKeluarsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('No')
                    ->searchable(),
                TextColumn::make('kategori.nama_kategori')
                    ->searchable(),
                TextColumn::make('judul')
                    ->searchable(),
                TextColumn::make('nomor_surat')
                    ->searchable(),
                TextColumn::make('tanggal_surat')
                    ->date()
                    ->sortable(),
                TextColumn::make('tujuan_surat')
                    ->searchable(),
                TextColumn::make('file_surat')
                    ->label('File PDF')
                    ->formatStateUsing(fn($state) => $state ? 'Download PDF' : '-')
                    ->url(fn($record) => $record->file_surat ? Storage::url($record->file_surat) : null)
                    ->openUrlInNewTab(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
