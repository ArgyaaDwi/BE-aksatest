<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'name' => 'Ahmad Rizki',
                'phone' => '081234567891',
                'image' => null,
                'division_id' => 1,
                'position' => 'Frontend Developer',
            ],
            [
                'name' => 'Siti Rahma',
                'phone' => '081234567892',
                'image' => 'employees/siti.jpg',
                'division_id' => 1,
                'position' => 'Backend Developer',
            ],
            [
                'name' => 'Budi Santoso',
                'phone' => '081234567893',
                'image' => 'employees/budi.jpg',
                'division_id' => 2,
                'position' => 'HR Manager',
            ],
            [
                'name' => 'Dewi Lestari',
                'phone' => '081234567894',
                'image' => null,
                'division_id' => 2,
                'position' => 'Recruitment Specialist',
            ],
            [
                'name' => 'Joko Widodo',
                'phone' => '081234567895',
                'image' => 'employees/joko.jpg',
                'division_id' => 3,
                'position' => 'Finance Manager',
            ],
            [
                'name' => 'Maya Sari',
                'phone' => '081234567896',
                'image' => null,
                'division_id' => 3,
                'position' => 'Accountant',
            ],
            [
                'name' => 'Rudi Hartono',
                'phone' => '081234567897',
                'image' => 'employees/rudi.jpg',
                'division_id' => 4,
                'position' => 'Marketing Head',
            ],
            [
                'name' => 'Lisa Anggraeni',
                'phone' => '081234567898',
                'image' => null,
                'division_id' => 4,
                'position' => 'Digital Marketer',
            ],
            [
                'name' => 'Hendra Kurniawan',
                'phone' => '081234567899',
                'image' => 'employees/hendra.jpg',
                'division_id' => 5,
                'position' => 'Operations Manager',
            ],
            [
                'name' => 'Fitriani Putri',
                'phone' => '081234567810',
                'image' => null,
                'division_id' => 5,
                'position' => 'Logistics Coordinator',
            ],
            [
                'name' => 'Ari Wibowo',
                'phone' => '081234567811',
                'image' => 'employees/ari.jpg',
                'division_id' => 6,
                'position' => 'Sales Manager',
            ],
            [
                'name' => 'Nina Permata',
                'phone' => '081234567812',
                'image' => null,
                'division_id' => 6,
                'position' => 'Sales Executive',
            ],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
