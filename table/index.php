<?php
Kirby::plugin('strukturart/table', [
    'tags' => [
        'table' => [
          'attr' =>[
            'table_name'
          ],
            'html' => function($tag) {

              $field = $tag->value;

  
              $html = '<table class="kirbytag-table">';
              $loop_counter = 0;
			foreach(page()->$field()->toStructure() as $table) 
			{
				$loop_counter++;
				if($loop_counter == 1):;
				$html .= '<tr>';
				$html .= '<th>';
				$html .= $table->col01();
				$html .= '</th>';
				$html .= '<th>';
				$html .= $table->col02();
				$html .= '</th>';
				$html .= '<th>';
				$html .= $table->col03();
				$html .= '</th>';
				$html .= '</tr>';
				endif;
				if($loop_counter >1):;
				$html .= '<tr>';
				$html .= '<td>';
				$html .= $table->col01();
				$html .= '</td>';
				$html .= '<td>';
				$html .= $table->col02();
				$html .= '</td>';
				$html .= '<td>';
				$html .= $table->col03();
				$html .= '</td>';
				$html .= '</tr>';
				endif;
			}

			$html .= '</table><br>';

			return $html;

            }
        ]
    ]
]);


?>


