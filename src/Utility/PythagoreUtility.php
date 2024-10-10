<?php
namespace App\Utility;

class PythagoreUtility
{
    public function display(): string
    {
        $table = '<table border="1" cellpadding="5">';
        
       
        $table .= "<tr>";
        for ($i = 0; $i <= 10; $i++) {
            $table .= "<th>$i</th>";
        }
        $table .= "</tr>";
        
        
        for ($i = 1; $i <= 10; $i++) {
            $table .= "<tr>";
            
            $table .= "<th>$i</th>";

           
            for ($j = 1; $j <= 10; $j++) {
                if ($i == $j) {
                    $table .= "<td>X</td>";
                } else {
                    $table .= "<td>" . ($i * $j) . "</td>";
                }
            }

            $table .= "</tr>";
        }

       
        $table .= '</table>';

        return $table;
    }
}

