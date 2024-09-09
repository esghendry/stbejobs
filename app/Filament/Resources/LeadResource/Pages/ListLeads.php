<?php

namespace App\Filament\Resources\LeadResource\Pages;

use App\Filament\Resources\LeadResource;
use App\Models\Lead;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListLeads extends ListRecords
{
    protected static string $resource = LeadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        // Initialize the tabs array with a default "All" tab
        $tabs = [
            'all' => Tab::make('All'),
        ];

        // Retrieve distinct sources and statuses for the tabs
        $sources = $this->getDistinctLeadsBy('source');
        $statuses = $this->getDistinctLeadsBy('status', true);

        // Create tabs for each distinct source
        foreach ($sources as $source => $displaySource) {
            $tabs[ucfirst($displaySource)] = $this->createTab($source, 'source', $displaySource);
        }

        // Create tabs for each distinct status
        foreach ($statuses as $status => $displayStatus) {
            $tabs[ucfirst($displayStatus)] = $this->createTab($status, 'status', $displayStatus);
        }

        // Return the generated tabs
        return $tabs;
    }

    private function getDistinctLeadsBy(string $column, bool $isEnum = false): \Illuminate\Support\Collection
    {
        return Lead::distinct($column)
            ->pluck($column)
            ->mapWithKeys(function ($value) {
                // Convert the enum to string if necessary
                // $valueString = $isEnum ? (string) $value->value : (string) $value;
                $valueString = (string) $value;

                // Split the value by '/' and get the last part
                $parts = explode('/', $valueString);
                $lastPart = end($parts);

                // If the last part contains a '.', replace it with 'welcome'
                $lastPart = (strpos($lastPart, '.') !== false) ? 'welcome' : $lastPart;

                // Return the original value mapped to the last part for display
                return [$valueString => $lastPart];
            });
    }

    private function createTab(string $fullValue, string $column, string $displayValue): Tab
    {
        return Tab::make(ucfirst($displayValue))
        // Modify the query to filter by the specified column and value
            ->modifyQueryUsing(fn (Builder $query) => $query->where($column, $fullValue))
        // Set a badge showing the count of records matching the filter
            ->badge(Lead::where($column, $fullValue)->count());
    }
}
