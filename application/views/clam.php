<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-10 well">
			<?php
				foreach ($results as $row)
				{
					$title = $row->title;
					$text2 = $row->text2;
					$saturation = $row->saturation;
					$variant_flora = $row->variant_flora;
					$lvl_of_difficulty = $row->lvl_of_difficulty;
					$difficulty_of_use = $row->difficulty_of_use;
					$production_awareness = $row->production_awareness;
					$num_of_tools = $row->num_of_tools;
					$mapping_of_workstation = $row->mapping_of_workstation;
					$parts_ident = $row->parts_ident;
					$info_cost = $row->info_cost;
					$quality_of_instructions = $row->quality_of_instructions;
					$poke_a_yoke = $row->poke_a_yoke;
				}

				echo heading($title, 1);
				$this->load->helper("form");
				echo validation_errors();
			?>
		</div>
	</div>
		<div class="form-group">
		<?php if ($calc_result === null): ?>

			<div class="col-lg-8">
				<h2>
				<?php echo "Instructions"; ?>
				</h2>
				<p class="text-justify">
					<?php echo $text2; ?>
				</p>
			</div>
			<div class="col-lg-5">
				<?php
					echo form_open('site/calculate');
					echo form_label("Saturation: ", "data");
					$data = array(
						0 => 'L0 Not applicable',
						1 => 'L1',
						2 => 'L2 65% saturation or lower',
						3 => 'L3',
						4 => 'L4 65-75% saturation',
						5 => 'L5',
						6 => 'L6 75-85% saturation',
						7 => 'L7',
						8 => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');

					echo "<p class='text-justify'>" . $saturation . "</p>";

					echo br(1);
					echo form_label("Variant Flora: ", "data");
					$data = array(
						0 => 'L0 No variant products.',
						1 => 'L1',
						2 => 'L2 Up to 10% variant products.',
						3 => 'L3',
						4 => 'L4 Up to 35% variant products.',
						5 => 'L5',
						6 => 'L6 Up to 50% variant products.',
						7 => 'L7',
						8 => 'L8 One piece production. Full variation.'				);
					echo form_dropdown('variant_flora', $data, '0', 'class="form-control"');

					echo "<p class='text-justify'>" . $variant_flora . "</p>";

					echo br(1);
					echo form_label("Level of difficulty: ", "data");
					$data = array(
						0 => 'L0 No variant products.',
						1 => 'L1',
						2 => 'L2 The task requires little to no training and is recommended for newly employed personnel.',
						3 => 'L3',
						4 => 'L4 The task is quite simple with little training required.',
						5 => 'L5',
						6 => 'L6 The task is slightly complex and requires moderate training and experience.',
						7 => 'L7',
						8 => 'L8 The task is very difficult and requires significant training and experience.'
					);
					echo form_dropdown('lvl_of_difficulty', $data, '0', 'class="form-control"');

					echo "<p class='text-justify'>" . $lvl_of_difficulty . "</p>";

					echo br(1);
					echo form_label("Difficulty to use tool: ", "data");
					$data = array(
						0 => 'L0 No variant products.',
						1 => 'L1',
						2 => 'L2 The assembly task is performed mostly by hand and requires little or very simple tool use.',
						3 => 'L3',
						4 => 'L4 The assembly task contains little to moderate tool use',
						5 => 'L5',
						6 => 'L6 The assembly task contains moderate to heavy tool use.',
						7 => 'L7',
						8 => 'L8 The assembly task requires complex tools/tool use and/or special tools to perform'
					);
					echo form_dropdown('difficulty_of_use', $data, '0', 'class="form-control"');

					echo "<p class='text-justify'>" . $difficulty_of_use . "</p>";

					echo br(1);
					echo form_label("Production awareness: ", "data");
					$data = array(
						0 => 'L0 No variant products.',
						1 => 'L1',
						2 => 'L2 The assembly task is done purely out of routine and the sequence seldom changes.',
						3 => 'L3',
						4 => 'L4 The assembly task is mostly done on routine but deviant parts or assemblies do occur.',
						5 => 'L5',
						6 => 'L6 The assembly task is quite variable but still contains much routine work.',
						7 => 'L7',
						8 => 'L8 The assembly task is highly variable and contains little to very little routine work.'
					);
					echo form_dropdown('production_awareness', $data, '0', 'class="form-control"');
					echo "<p class='text-justify'>" . $production_awareness . "</p>";
					echo br(1);
					echo form_label("Number of tools: ", "data");
					$data = array(
						0 => 'L0 No tools used',
						1 => 'L1',
						2 => 'L2 1 to 5 tools and easily identified',
						3 => 'L3',
						4 => 'L4 More than 5 tools and easily identified',
						5 => 'L5',
						6 => 'L6 5-8 tools and not easily identified',
						7 => 'L7',
						8 => 'L8 More than 8 tools'
					);
					echo form_dropdown('num_of_tools', $data, '0', 'class="form-control"');
					echo "<p class='text-justify'>" . $num_of_tools . "</p>";
					echo br(1);
					echo form_label("Mapping of workstation: ", "data");
					$data = array(
						0 => 'L0 Not applicable/the worker is free to set up the workstation and all its components to their own preferences.',
						1 => 'L1',
						2 => 'L2 Workstation layout heavily corresponds to assembly sequence.',
						3 => 'L3',
						4 => 'L4 Workstation layout completely corresponds to assembly sequence.',
						5 => 'L5',
						6 => 'L6 Workstation layout somewhat corresponds to assembly sequence.',
						7 => 'L7',
						8 => 'L8 More than 8 tools'
					);
					echo form_dropdown('mapping_of_workstation', $data, '0', 'class="form-control"');
					echo "<p class='text-justify'>" . $mapping_of_workstation . "</p>";
					echo br(1);
					echo form_label("Parts identification: ", "data");
					$data = array(
						0 => 'L0 Not applicable',
						1 => 'L1',
						2 => 'L2 Sequenced kits or kanban is used for most items.',
						3 => 'L3',
						4 => 'L4 Unsequenced kits or kanban is used for most items.',
						5 => 'L5',
						6 => 'L6 Parts identification through symbol syntax.',
						7 => 'L7',
						8 => 'L8 More than 8 tools'
					);
					echo form_dropdown('parts_ident', $data, '0', 'class="form-control"');
					echo "<p class='text-justify'>" . $parts_ident . "</p>";
					echo br(1);
					echo form_label("Information cost: ", "data");
					$data = array(
						0 => 'L0 Not applicable',
						1 => 'L1',
						2 => 'L2 Information is not required for standard operations.',
						3 => 'L3',
						4 => 'L4 Information is easily accessible without significant physical or cognitive effort.',
						5 => 'L5',
						6 => 'L6 Information is accessible through minor cognitive or physical effort (max 1 meter).',
						7 => 'L7',
						8 => 'L8 Significant movement or actions are required for information access.'
					);
					echo form_dropdown('info_cost', $data, '0', 'class="form-control"');
					echo "<p class='text-justify'>" . $info_cost . "</p>";
					echo br(1);
					echo form_label("Quality of instructions: ", "data");
					$data = array(
						0 => 'L0 No instructions required',
						1 => 'L1',
						2 => 'L2 Information is not required for standard operations.',
						3 => 'L3',
						4 => 'L4 Assembly sequences are separated and contains mostly relevant information',
						5 => 'L5',
						6 => 'L6 Assembly sequences are not clearly separated and visibility OR readability is diminished.',
						7 => 'L7',
						8 => 'L8 Instruction is filled with non priority information. Visibility AND readability is diminished.'
					);
					echo form_dropdown('quality_of_instructions', $data, '0', 'class="form-control"');
					echo "<p class='text-justify'>" . $quality_of_instructions . "</p>";
					echo br(1);
					echo form_label("Poke-a-yoke: ", "data");
					$data = array(
						0 => 'L0 No instructions required',
						1 => 'L1',
						2 => 'L2 Assembly errors can barely be made due to the design and fit of the product.',
						3 => 'L3',
						4 => 'L4 Assembly constraints are present in most of the assembly sequence.',
						5 => 'L5',
						6 => 'L6 Assembly constraints are present but not throughout the assembly sequence.',
						7 => 'L7',
						8 => 'L8 No poke-a-yoke solutions are implemented in the task.'
					);
					echo form_dropdown('poke_a_yoke', $data, '0', 'class="form-control"');
					echo "<p class='text-justify'>" . $poke_a_yoke . "</p>";
					echo br(1);
					echo form_submit("contactSubmit", "Beräkna");
					echo form_close();
				else:
					echo "This is your result: " . $calc_result;

					echo br(1);

					if ($calc_result > 3.2) {
						echo "According to this tool your results mean that you are under high cognitive load.";
					} elseif ($calc_result > 2.5 && $calc_result < 3.2) {
						echo "According to this tool your results mean that you are under moderate cognitive load.";
					} elseif ($calc_result > 1.7 && $calc_result < 2.5) {
						echo "According to this tool your results mean that you are under low cognitive load.";
					} elseif ($calc_result > 0 && $calc_result < 1.7) {						
						echo "According to this tool your results mean that you are under very low cognitive load.";
					}

				endif;
				?>
			</div>
		</div>