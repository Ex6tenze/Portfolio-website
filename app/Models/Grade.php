<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    // Method to update the 'best_grade' variable. The 'passed_at' variable will be updated if the 'best_grade'
    // variable is higher than the 'lowest_passing_grade' variable. (Default = 5.5)
    public function addResult($newGrade) {
        if ($this->passed_at === null && $newGrade > $this->lowest_passing_grade) {
            $this->best_grade = $newGrade;
            $this->passed_at = now();
        // Checks if the new grade is higher than the existing grade, but does not update the 'passed_at' variable again.
        } else if ($newGrade > $this->best_grade) {
            $this->best_grade = $newGrade;
        }
        $this->save();
    }
}
