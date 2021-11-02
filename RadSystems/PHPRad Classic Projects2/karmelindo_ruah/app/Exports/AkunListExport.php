<?php 

namespace App\Exports;
use App\Models\Akun;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class AkunListExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
	
	protected $query;
	
    public function __construct($query)
    {
        $this->query = $query->select(Akun::exportListFields());
    }
	
    public function query()
    {
        return $this->query;
    }
	
	public function headings(): array
    {
        return [
			'Kd Akun',
			'Username',
			'Password',
			'Email',
			'Role',
			'Timestamp'
        ];
    }
	
    public function map($record): array
    {
        return [
			$record->kd_akun,
			$record->username,
			$record->password,
			$record->email,
			$record->role,
			$record->timestamp
        ];
    }
}
