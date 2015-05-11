<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-10 well">
			<?php
				foreach ($results as $row)
				{
					$title = $row->title;
					$text2 = $row->text2;
				}

				echo heading($title, 1);
				$this->load->helper("form");
				echo validation_errors();
				echo form_open("site/send_email");
			?>
		</div>
	</div>
	<form>
		<div class="form-group">
			<div class="col-lg-5">
				<?php
					echo form_label("Saturation: ", "saturation");
					$data = array(
						'0' => 'L0 Not applicable',
						'1' => 'L1',
						'2' => 'L2 65% saturation or lower',
						'3' => 'L3',
						'4' => 'L4 65-75% saturation',
						'5' => 'L5',
						'6' => 'L6 75-85% saturation',
						'7' => 'L7',
						'8' => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');
					echo br(1);
					echo form_label("Variant Flora: ", "variant_flora");
					$data = array(
						'0' => 'L0 Not applicable',
						'1' => 'L1',
						'2' => 'L2 65% saturation or lower',
						'3' => 'L3',
						'4' => 'L4 65-75% saturation',
						'5' => 'L5',
						'6' => 'L6 75-85% saturation',
						'7' => 'L7',
						'8' => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');
					echo br(1);
					echo form_label("Level of difficulty: ", "lvl_of_difficulty");
					$data = array(
						'0' => 'L0 Not applicable',
						'1' => 'L1',
						'2' => 'L2 65% saturation or lower',
						'3' => 'L3',
						'4' => 'L4 65-75% saturation',
						'5' => 'L5',
						'6' => 'L6 75-85% saturation',
						'7' => 'L7',
						'8' => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');
					echo br(1);
					echo form_label("Difficulty to use tool: ", "difficulty_of_use");
					$data = array(
						'0' => 'L0 Not applicable',
						'1' => 'L1',
						'2' => 'L2 65% saturation or lower',
						'3' => 'L3',
						'4' => 'L4 65-75% saturation',
						'5' => 'L5',
						'6' => 'L6 75-85% saturation',
						'7' => 'L7',
						'8' => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');
					echo br(1);
					echo form_label("Production awareness: ", "production_awareness");
					$data = array(
						'0' => 'L0 Not applicable',
						'1' => 'L1',
						'2' => 'L2 65% saturation or lower',
						'3' => 'L3',
						'4' => 'L4 65-75% saturation',
						'5' => 'L5',
						'6' => 'L6 75-85% saturation',
						'7' => 'L7',
						'8' => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');
					echo br(1);
					echo form_label("Number of tools: ", "nr_of_tools");
					$data = array(
						'0' => 'L0 Not applicable',
						'1' => 'L1',
						'2' => 'L2 65% saturation or lower',
						'3' => 'L3',
						'4' => 'L4 65-75% saturation',
						'5' => 'L5',
						'6' => 'L6 75-85% saturation',
						'7' => 'L7',
						'8' => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');
					echo br(1);
					echo form_label("Mapping of workstation: ", "mappning_of_workstation");
					$data = array(
						'0' => 'L0 Not applicable',
						'1' => 'L1',
						'2' => 'L2 65% saturation or lower',
						'3' => 'L3',
						'4' => 'L4 65-75% saturation',
						'5' => 'L5',
						'6' => 'L6 75-85% saturation',
						'7' => 'L7',
						'8' => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');
					echo br(1);
					echo form_label("Parts identification: ", "parts_ident");
					$data = array(
						'0' => 'L0 Not applicable',
						'1' => 'L1',
						'2' => 'L2 65% saturation or lower',
						'3' => 'L3',
						'4' => 'L4 65-75% saturation',
						'5' => 'L5',
						'6' => 'L6 75-85% saturation',
						'7' => 'L7',
						'8' => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');
					echo br(1);
					echo form_label("Information cost: ", "info_cost");
					$data = array(
						'0' => 'L0 Not applicable',
						'1' => 'L1',
						'2' => 'L2 65% saturation or lower',
						'3' => 'L3',
						'4' => 'L4 65-75% saturation',
						'5' => 'L5',
						'6' => 'L6 75-85% saturation',
						'7' => 'L7',
						'8' => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');
					echo br(1);
					echo form_label("Quality of instructions: ", "quaility_of_instructions");
					$data = array(
						'0' => 'L0 Not applicable',
						'1' => 'L1',
						'2' => 'L2 65% saturation or lower',
						'3' => 'L3',
						'4' => 'L4 65-75% saturation',
						'5' => 'L5',
						'6' => 'L6 75-85% saturation',
						'7' => 'L7',
						'8' => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');
					echo br(1);
					echo form_label("Poke-a-yoke: ", "poke_a_yoke");
					$data = array(
						'0' => 'L0 Not applicable',
						'1' => 'L1',
						'2' => 'L2 65% saturation or lower',
						'3' => 'L3',
						'4' => 'L4 65-75% saturation',
						'5' => 'L5',
						'6' => 'L6 75-85% saturation',
						'7' => 'L7',
						'8' => 'L8 86% saturation or higher'
					);
					echo form_dropdown('saturation', $data, '0', 'class="form-control"');
					echo br(1);
					echo form_submit("contactSubmit", "Send");
					echo form_close();
				?>
			</div>
			<div class="offset-lg-5 col-lg-5">
				<h2>
				<?php echo "Instructions"; ?>
				</h2>
				<p class="text-justify">
					<?php echo $text2; ?>
				</p>
			</div>
		</div>
	</form>