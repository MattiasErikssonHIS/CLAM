<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Saturation</h4>
		</div>
		<div class="modal-body">
			<p class="text-justify">
				The term ‘saturation’ refers to the amount of work that is planned on a workstation. For a simple example; consider a workstation within an assembly flow where the tact time is 100s. If this workstation has an occupancy of 92 seconds then the saturation is 92%.
			</p>

			<p class="text-justify">
				The saturation of a task or a workstation can and should be measured through time studies. Most industry have normative descriptions of how much time should be spent on each task and the comparison of this value to the balance of the workstation (the time set aside for the whole workstation), reveals a value for the saturation of each workstation.
			</p>

			<h4>Assessment</h4>

			<em>Description:</em>

			<p class="text-justify">
				The saturation of a workstation is related to the particular balance of the assembly tasks. Actual work operations can rarely occupy 100% of the available time and the saturation assessment indicates how much of the available time is occupied by work tasks.
			</p>

			<em>Measurements:</em>

			<p class="text-justify">Percentage of planned occupied time.</p>

			<em>How to evaluate:</em>

			<p class="text-justify">
				Accurate time studies should be available in most SME's and larger organizations.
			</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

	</div>
</div>

<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Variant Flora</h4>
		</div>
		<div class="modal-body">
			<p class="text-justify">
				It is a well-documented fact that the variant flora does have significant effect on production efficiency and it can easily be argued that this effect relates to the cognitive workload of the worker (Thorvald, 2011). However, the concept of variant is only relevant in, more or less, one-piece production where there can also be said to be a volume product. In many manufacturing companies, one does not consider variant and volume products but different types of products are instead batched together.
			</p>

			<p class="text-justify">
				This greatly benefits ramp up times and allows for routine work by the worker, but does not, perhaps, comply with lean production, low fill rate through MTO (Make To Order) and other current manufacturing paradigms. However, considering only the cognitive workload of the worker, batching can become a quality risk when batches are small and workers are expected to adjust to new batches relatively often. What would be considered a high variant flora or a small batch size is very dependent on the product and differences between variants or batches and thus this factor would have to be calibrated internally.
			</p>

			<h4>Assessment</h4>

			<em>Description:</em>

			<p class="text-justify">
				The variant flora is relevant to manufacturing organizations running a mixed mode assembly flow. A flow where volume and variant products are assembled intermixed and not according to a batching strategy. A variant is defined as product or process variation from the most common type of product.
			</p>

			<em>Measurements:</em>

			<p class="text-justify">Percentage of products being considered variant (i.e. non-volume) products.</p>

			<em>How to evaluate:</em>

			<p class="text-justify">Assessment of what percentage of daily output is made up of variant products.</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

	</div>
</div>

<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Level of difficulty</h4>
		</div>
		<div class="modal-body">
			<p class="text-justify">
				The level of difficulty is a subjective assessment regarding the estimated difficulty that a workstation entails. To aid the evaluator in assessing this, the factor is heavily tied to the amount of time required to acquire the necessary training and skills needed for independent work. It is also very beneficial to gather opinions from blue-collar workers about the estimated level of difficulty at this workstation. As this factor is quite difficult to assess objectively, subjective opinions from both white and blue-collar workers is required.
			</p>

			<h4>Assessment</h4>

			<em>Description:</em>

			<p class="text-justify">
				The level of difficulty should be assessed on the entire station and is an estimation about the required physical and cognitive effort to perform a task.
			</p>

			<em>Measurements:</em>

			<p class="text-justify">Subjective.</p>

			<em>How to evaluate:</em>

			<p class="text-justify">Observation; the assessment is divided into eight categories where the assessment should be based on how long it would take before a recently employed worker is allowed to work alone with the task.</p>

			<table class="table-striped">
				<tr>
					<td>Level</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>L8</td>
					<td>The task is very difficult and requires significant training and experience</td>
				</tr>
				<tr>
					<td>L7</td>
					<td></td>
				</tr>
				<tr>
					<td>L6</td>
					<td>The task is slightly complex and requires moderate training and experience</td>
				</tr>
				<tr>
					<td>L5</td>
					<td></td>
				</tr>
				<tr>
					<td>L4</td>
					<td>The task is quite simple with little training required</td>
				</tr>
				<tr>
					<td>L3</td>
					<td></td>
				</tr>
				<tr>
					<td>L2</td>
					<td>The task requires little to no training and is recommended for newly employed personnel</td>
				</tr>
				<tr>
					<td>L1</td>
					<td></td>
				</tr>
				<tr>
					<td>L0</td>
					<td>Not applicable</td>
				</tr>
			</table>

			<h4>Details</h4>

			<p>
				In most manufacturing facilities, the level of difficulty on workstations varies to some degree. The results of evaluating the level of difficulty is highly susceptible to the inclinations of the individual assessor. Thus, the assessment is based on practice in introducing new personnel to a workstation.
			</p>

			<p>
				If a workstation requires very little or no training for new personnel, then the lower levels of assessment should be chosen. If specific training and a small degree of monitoring is required, level two should be selected. For more moderate training and experience, level three should be selected and if the workstation requires significant amounts of expertise and experience is required, then the fourth level is recommended.
			</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

	</div>
</div>

<!-- Modal -->
<div id="myModal4" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Difficulty of tool use</h4>
		</div>
		<div class="modal-body">
			<p class="text-justify">
				The difficulty of tool use is assessed station wide based on accessibility and operation of a tool and is also a very subjective assessment, very dependant on the experience of the evaluator. The factor focuses on both the amount of tool use required and also on the estimated complexity of said tool use. Furthermore, the factor includes all tool use, meaning that all work not done by hand or body manipulation is considered here. Also, the use of special tools or non-standard tools is highly relevant.
			</p>

			<h4>Assessment</h4>

			<em>Description:</em>

			<p class="text-justify">
				The difficulty of tool use should be assessed station wide based on accessibility and operation of a tool. If several tools are used, the assessment should be a mean of these. All tool and fixture use is included in this factor, i.e. Power tools, hand tools, fixtures etc.
			</p>

			<em>Measurements:</em>

			<p class="text-justify">Subjective.</p>

			<em>How to evaluate:</em>

			<p class="text-justify">Observation according to levels.</p>

			<table class="table-striped">
				<tr>
					<td>Level</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>L8</td>
					<td>The assembly task requires complex tools/tool use and/or special tools to perform</td>
				</tr>
				<tr>
					<td>L7</td>
					<td></td>
				</tr>
				<tr>
					<td>L6</td>
					<td>The assembly task contains moderate tool use of some complexity</td>
				</tr>
				<tr>
					<td>L5</td>
					<td></td>
				</tr>
				<tr>
					<td>L4</td>
					<td>The assembly task contains little to moderate tool use</td>
				</tr>
				<tr>
					<td>L3</td>
					<td></td>
				</tr>
				<tr>
					<td>L2</td>
					<td>The assembly task is performed mostly by hand and requires little or very simple tool use</td>
				</tr>
				<tr>
					<td>L1</td>
					<td></td>
				</tr>
				<tr>
					<td>L0</td>
					<td>No tool use</td>
				</tr>
			</table>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

	</div>
</div>

<!-- Modal -->
<div id="myModal5" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Production awareness</h4>
		</div>
		<div class="modal-body">
			<p class="text-justify">
				The attention resources of humans are very limited and thus must be considered when designing for cognitive work. This factor is focused on the amount of focused or active attention that is associated with a task through the estimation of variability of work. Note that this does is not limited to the presence of variant products but is also dependant on station times and the longevity of the tasks performed. Fastening of dozens of bolts within the same task should be considered routine work even though the bolts might not be of the same type.
			</p>

			<h4>Assessment</h4>

			<em>Description:</em>

			<p class="text-justify">
				An assessment on how much focused attention must be applied to the task and the level of "production awareness" that the worker has to muster.
			</p>

			<em>Measurements:</em>

			<p class="text-justify">Subjective.</p>

			<em>How to evaluate:</em>

			<p class="text-justify">Observation according to levels.</p>
			<table class="table-striped">
				<tr>
					<td>Level</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>L8</td>
					<td>The assembly task is highly variable and contains little to very little routine work.</td>
				</tr>
				<tr>
					<td>L7</td>
					<td></td>
				</tr>
				<tr>
					<td>L6</td>
					<td>The assembly task is quite variable but still contains much routine work.</td>
				</tr>
				<tr>
					<td>L5</td>
					<td></td>
				</tr>
				<tr>
					<td>L4</td>
					<td>The assembly task is mostly done on routine but deviant parts or assemblies do occur.</td>
				</tr>
				<tr>
					<td>L3</td>
					<td></td>
				</tr>
				<tr>
					<td>L2</td>
					<td>The assembly task is done purely out of routine and the sequence seldom changes.</td>
				</tr>
				<tr>
					<td>L1</td>
					<td></td>
				</tr>
				<tr>
					<td>L0</td>
					<td>Not applicable</td>
				</tr>
			</table>

			<h4>Details</h4>

			<p>
				The discrimination between complex and simple tool use might be difficult to assess objectively. For you assistance, consider the following questions:
			</p>

			<p>
				Does the work require any tool use at all?
				What kinds of tools are required? Is the tool use straightforward or does it require any non-standard tools?
				Are the tools adapted to the task?
				Is the same tool used for several different operations? If so, is it clear in what way the tool should be used for the different operations?
				Does the task require complex or non-standard tools where specific training is required?
				Finally, try also and consider the training time normally associated with the task as this might give you a clue to the level of difficulty associated with tool use.
			</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

	</div>
</div>

<!-- Modal -->
<div id="myModal6" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Number of tools available</h4>
		</div>
		<div class="modal-body">
			<p class="text-justify">
				A simple metric describing the number of tools used during normal work at a workstation.
			</p>

			<h4>Assessment</h4>

			<em>Description:</em>

			<p class="text-justify">
				The number of tools available and used on the work station. This factor also includes fixtures and special contraptions that are used for work. If in doubt, include anything that is handled by the worker but that is not part of the product.
			</p>

			<em>Measurements:</em>

			<p class="text-justify">Assessment of tool availability.</p>

			<em>How to evaluate:</em>

			<p class="text-justify">Observation according to levels.</p>

			<table class="table-striped">
				<tr>
					<td>Level</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>L8</td>
					<td>More than 8 tools</td>
				</tr>
				<tr>
					<td>L7</td>
					<td></td>
				</tr>
				<tr>
					<td>L6</td>
					<td>5-8 tools and not easily identified</td>
				</tr>
				<tr>
					<td>L5</td>
					<td></td>
				</tr>
				<tr>
					<td>L4</td>
					<td>More than 5 tools and easily identified</td>
				</tr>
				<tr>
					<td>L3</td>
					<td></td>
				</tr>
				<tr>
					<td>L2</td>
					<td>1 to 5 tools and easily identified</td>
				</tr>
				<tr>
					<td>L1</td>
					<td></td>
				</tr>
				<tr>
					<td>L0</td>
					<td>No tools used</td>
				</tr>
			</table>

			<h4>Details</h4>

			<p>
				Attention is, along with response time and memory, the most capacity limited cognitive ability that humans have. Specifically, focused or active attention is finite and cannot cope with too much or too similar information. A rule of thumb is that if a task can be done by routine it is not focused but passive and thus is not subject to this limitation.
			</p>

			<p>
				To understand the concept, consider learning to drive. When you are learning, this task is very focused and often requires significant attention resources, but when learned, it is done automatically, on routine. Tasks that do not differ from each other are soon automatized and do not require much attention resources whereas tasks that do differ (e.g. due to variant flora or poor information design) require much attention resources. If large amounts of the work can be done by routine where the same work is repeated, the assessment should be in the lower levels whereas if focused attention is required to find information, identify product variants or find tools and material, the assessment should be in the higher levels.
			</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

	</div>
</div>

<!-- Modal -->
<div id="myModal7" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Mapping of workstation</h4>
		</div>
		<div class="modal-body">
			<p class="text-justify">
				An assessment of how well the workstation design complies with the assembly sequence. For instance, tools and parts that are used together should be placed together and in the correct order.
			</p>

			<h4>Assessment</h4>

			<em>Description:</em>

			<p class="text-justify">
				The mapping of a workstation refers to the correspondence with the workstation layout to the assembly sequence. Are items and tools placed in the order that they are to be used?
			</p>

			<em>Measurements:</em>

			<p class="text-justify">Subjective.</p>

			<em>How to evaluate:</em>

			<p class="text-justify">Observation assessment on correspondence between workstation layout and assembly sequence for common products.</p>

			<table class="table-striped">
				<tr>
					<td>Level</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>L8</td>
					<td>Workstation layout does not correspond to assembly sequence</td>
				</tr>
				<tr>
					<td>L7</td>
					<td></td>
				</tr>
				<tr>
					<td>L6</td>
					<td>Workstation layout somewhat corresponds to assembly sequence</td>
				</tr>
				<tr>
					<td>L5</td>
					<td></td>
				</tr>
				<tr>
					<td>L4</td>
					<td>Workstation layout heavily corresponds to assembly sequence</td>
				</tr>
				<tr>
					<td>L3</td>
					<td></td>
				</tr>
				<tr>
					<td>L2</td>
					<td>Workstation layout almost completely corresponds to assembly sequence</td>
				</tr>
				<tr>
					<td>L1</td>
					<td></td>
				</tr>
				<tr>
					<td>L0</td>
					<td>Not applicable/the worker is free to set up the workstation and all it's components to their own preferences</td>
				</tr>
			</table>

			<h4>Details</h4>

			<p>
				The relevant parts of the workstation layout for this factor includes all artefacts, materials, or tools that the worker interacts with. You should consider material racks, tools and the positioning of these, and also secondary items such as packaging materials and recycling bins, if they are regularly used. Bins and equipment that is not regularly used can be omitted. An easy way to start organizing the work regarding tools can be found in the Toyota production systems 5S, this methodology can also be used in the assessment of this factor.
			</p>

			<p>
				There are five primary 5S phases:
			</p>
			<p>
				They can be translated from the Japanese as "sort", "straighten", "shine", "standardize", and "sustain". Other translations are possible.
			</p>
			<p>
				A selection of the factor relevant issues from 5S are:
			</p>

			<ul>
				<li>
					Remove unnecessary items and dispose of them properly.
				</li>
				<li>
					Arrange all necessary items in order so they can be easily picked for use.
				</li>
				<li>
					Make it easy to find and pick up necessary items.
				</li>
				<li>
					Maintain everything in order and according to its standard.
				</li>
				<li>
					Everything in its right place.
				</li>
			</ul>

			<p>
				In a mixed mode flow, naturally it is impossible for the workstation layout to correspond completely to the assembly sequence. In this case, the assessment should be at L4 or higher.
			</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

	</div>
</div>

<!-- Modal -->
<div id="myModal8" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Parts identification</h4>
		</div>
		<div class="modal-body">
			<p class="text-justify">
				Different types of part identification systems are more or less adapted to human use. The use of article numbers, for instance, has many benefits when used in computer systems as they are easily discriminated from each other and they are infinitely combinable. However, for human workers, they pose many challenges as their information value is limited at best. Lately, other types of parts identification and material supply solutions such as different types of kitting ands sequencing of material.
			</p>

			<h4>Assessment</h4>

			<em>Description:</em>

			<p class="text-justify">
				Parts identification can be done in several different ways. The traditional way is through article numbers and material racks but other approaches can include kitting and alternate parts identification syntaxes.
			</p>

			<em>Measurements:</em>

			<p class="text-justify">Selection.</p>

			<em>How to evaluate:</em>

			<p class="text-justify">Determine type of parts identification system.</p>

			<table class="table-striped">
				<tr>
					<td>Level</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>L8</td>
					<td>Parts identification through article numbers</td>
				</tr>
				<tr>
					<td>L7</td>
					<td></td>
				</tr>
				<tr>
					<td>L6</td>
					<td>Parts identification through symbol syntax</td>
				</tr>
				<tr>
					<td>L5</td>
					<td></td>
				</tr>
				<tr>
					<td>L4</td>
					<td>Unsequenced kits or kanban is used for most items</td>
				</tr>
				<tr>
					<td>L3</td>
					<td></td>
				</tr>
				<tr>
					<td>L2</td>
					<td>Sequenced kits or kanban is used for most items</td>
				</tr>
				<tr>
					<td>L1</td>
					<td></td>
				</tr>
				<tr>
					<td>L0</td>
					<td>Not applicable</td>
				</tr>
			</table>

			<h4>Details</h4>

			<p>
				There are different approaches to parts identification and material supply that may not fit into the level explanation provided here. If your strategy cannot be found in the level description, please do your best to translate it into a suitable level. L1 is for tasks where the worker has to do no selection of material but rather just picks the part that is in the next sequenced area. L2 is where there are some prepared kits or trays of material but the different parts for one product are bundled together.
			</p>

			<p>
				For L3, parts identification is done with some syntax that carries semantic content. For instance, using symbols or colours instead of random numbers has been shown to be beneficial to human cognitive processing. Even though the symbols or colours are not connected to the part they are referring to, the mere usage of recognizable syntax that has any meaning to the human is beneficial and easier to recognize and remember. L4 is reserved for cases where parts identification codes are randomly generated, such as in the case of most (but not all) article numbers, in numbers or letters that have no meaning to the worker.
			</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

	</div>
</div>

<!-- Modal -->
<div id="myModal9" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Information cost</h4>
		</div>
		<div class="modal-body">
			<p class="text-justify">
				The cost of information is described as an assessment of how much physical or cognitive effort that is required to utilize the information (Thorvald, 2011).
				It has been both argued and empirically confirmed that the cost of gathering information has great impact on the actor’s proneness to do it. Most likely, actors value the information that they believe is to be gathered from experience and make an internal cost-benefit calculation to see if the information should be gathered or if there is room for a “gamble” (i.e. making an experienced assumption on what the information contains). The factors that affect this calculation are the following:
			</p>

			<ul>
				<li>The cost of gathering the information</li>
				<ol>
					<li>Physically – is the information located far away from the actor or can it be attended with minimal physical effort?</li>
					<li>Cognitively – is the information structured so that a mere glance at the information medium is enough for information gathering or is extensive search through the documentation necessary to find the correct information?</li>
				</ol>
				<li>The perceived value of the information – largely based on the frequency with which the information varies. The less the information varies, the lower the perceived value is since it is almost always the same and an educated guess is probably enough in a majority of the cases.</li>
			</ul>

			<h4>Assessment</h4>

			<em>Description:</em>

			<p class="text-justify">
				The cost of information can be described as an assessment of how much physical or cognitive effort that is required to utilize the information.
			</p>

			<em>Measurements:</em>

			<p class="text-justify">Subjective.</p>

			<em>How to evaluate:</em>

			<p class="text-justify">
				Determine if access to information requires physical or cognitive effort. What constitutes as a significant effort can be quite tricky to define but the general conclusion seems to be that it is less than you would think. If accessing information requires more than just a turn of the head while doing the task, it might be considered significant in certain cases. To assess this factor, it is highly recommended that you consult the workers and get their opinion.
			</p>

			<table class="table-striped">
				<tr>
					<td>Level</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>L8</td>
					<td>Significant movement or actions are required for information access</td>
				</tr>
				<tr>
					<td>L7</td>
					<td></td>
				</tr>
				<tr>
					<td>L6</td>
					<td>Information is accessible through minor cognitive or physical effort (max 1 meter)</td>
				</tr>
				<tr>
					<td>L5</td>
					<td></td>
				</tr>
				<tr>
					<td>L4</td>
					<td>Information is easily accessible without significant physical or cognitive effort</td>
				</tr>
				<tr>
					<td>L3</td>
					<td></td>
				</tr>
				<tr>
					<td>L2</td>
					<td>Information is not required for standard operations</td>
				</tr>
				<tr>
					<td>L1</td>
					<td></td>
				</tr>
				<tr>
					<td>L0</td>
					<td>No instructions required</td>
				</tr>
			</table>

			<h4>Details</h4>

			<p>
				An academic experiment, set up to mimic truck assembly showed as much as a 50% reduction in quality defects when using a mobile, handheld information unit as opposed to a computer terminal situated about 2-3m away. Workers were more inclined to attend the information in the mobile unit since it was always at arms length. They were also more inclined to go back and look a second and third time to avoid having to keep all information in their memory.
			</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

	</div>
</div>

<!-- Modal -->
<div id="myModal10" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Quality of instruction</h4>
		</div>
		<div class="modal-body">
			<p class="text-justify">
				An assessment of the general quality of the instructions used to gather information about the work. There exist a lot of guidelines within the Human-Computer Interaction (HCI) area for instructions, see, e.g., Clark et al.’s (2006) evidence-based guidelines to manage cognitive load, Black et al.’s (1987) work on minimal instruction manuals, Carroll et al.’s (1988) minimal manuals, and Eiriksdottir and Catrambone’s (2011) procedural instructions, principles, and examples, to mention but a few.
			</p>

			<h4>Assessment</h4>

			<em>Description:</em>

			<p class="text-justify">
				The quality of instruction is a subjective measure that can be assessed according to several different factors. Focus on general visibility and readability of the instructions is recommended.
			</p>

			<em>Measurements:</em>

			<p class="text-justify">Subjective.</p>

			<em>How to evaluate:</em>

			<p class="text-justify">
				Observation assessment on quality of instruction. The following points should be considered when assessing the factor:
			</p>

			<ul>
				<li>
					Text to background contrast is adequate
				</li>
				<li>
					Avoid dark on dark or light on light
				</li>
				<li>
					Font size and spacing is adequate
				</li>
				<li>
					If in doubt, larger font sizes are generally preferred. Also, line spacing should not be too small as it tends to make lines hard to discriminate to each other.
				</li>
				<li>
					Only relevant information. Manufacturing workers are often under time pressure and information that is of no use to them only slows them down in search of the relevant information.
				</li>
				<li>
					Reasonable time to find relevant information. This is highly connected to the assembly time and must not be excessive.
				</li>
				<li>
					Major tasks are clear and descriptive
				</li>
				<li>
					Critical content is clearly visible
				</li>
				<li>
					Emphasis (bold, colouring etc.) is used only where relevant, not elsewhere.
				</li>
				<li>
					Information is placed “above the fold”. The user should not be required to scroll/turn the page on the interface/instructions.
				</li>
				<li>
					Labels and buttons are clear. If the interface is interactive (i.e. the user is supposed to interact with the interface) the labels and buttons must be easily identified.
				</li>
			</ul>

			<table class="table-striped">
				<tr>
					<td>Level</td>
					<td>Description</td>
				</tr>
				<tr>
					<td>L8</td>
					<td>Instruction is filled with non priority information. Visibility AND readability is diminished</td>
				</tr>
				<tr>
					<td>L7</td>
					<td></td>
				</tr>
				<tr>
					<td>L6</td>
					<td>Assembly sequences are not clearly separated and visibility OR readability is diminished</td>
				</tr>
				<tr>
					<td>L5</td>
					<td></td>
				</tr>
				<tr>
					<td>L4</td>
					<td>Assembly sequences are separated and contains mostly relevant information</td>
				</tr>
				<tr>
					<td>L3</td>
					<td></td>
				</tr>
				<tr>
					<td>L2</td>
					<td>Assembly sequences are clearly separated and contains only relevant information</td>
				</tr>
				<tr>
					<td>L1</td>
					<td></td>
				</tr>
				<tr>
					<td>L0</td>
					<td>No instructions required</td>
				</tr>
			</table>

			<h4>Details</h4>

			<p>
				Below is an example of quite poor instruction design. There are several different emphasis used; underlined, italics, and bold lettering. The line spacing is very varied and it is quite difficult to discriminate actual tasks from random information, not relevant to the workers.
			</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

	</div>
</div>

<!-- Modal -->
<div id="myModal11" class="modal fade" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Poke-a-yoke and constraints</h4>
		</div>
		<div class="modal-body">
			<p class="text-justify">
				Poke-a-yoke is a Japanese term that means "mistake-proofing". A poke-a-yoke is any mechanism in a lean manufacturing process that helps an equipment operator avoid (yokeru) mistakes (poka). Its purpose is to eliminate product defects by preventing, correcting, or drawing attention to human errors as they occur. Forcing functions - A forcing function is an aspect of a design that prevents the user from taking an action without consciously considering information relevant to that action.
			</p>

			<p>
				It forces conscious attention upon something ("bringing to consciousness") and thus deliberately disrupts the efficient or automatized performance of a task. Using a forcing function is self-evidently useful in safety-critical work processes. It is however also useful in situations where the behaviour of the user is skilled, as in performing routine or well-known tasks. Execution of this type of tasks is often partly or wholly automatized, requiring few or no attention resources (controlled processes), and it can thus be necessary to "wake the user up" by deliberately disrupting the performance of the task (interactiondesign.org).
			</p>

			<em>Figure 9. Example of a physical constraint where either end of the USB cable has to be connected the right way.</em>

			<h4>Assessment</h4>

			<em>Description:</em>

			<p class="text-justify">
				Using poke-a-yoke solutions or constraints in assembly is a common way to reduce assembly errors. This includes designing the task and/or the product so that assembly errors cannot be made.
			</p>

			<em>Measurements:</em>

			<p class="text-justify">Subjective.</p>

			<em>How to evaluate:</em>

			<p class="text-justify">
				Determine to what extent constraints or poke-a-yoke solutions exist.
			</p>

			<h4>Details</h4>

			<p>
				Some of the most common examples of poke-a-yoke is the use of;
			</p>

			<ul>
				<li>
					Guide pins – assuring that components can only be assembled in the correct way.
				</li>
				<li>
					Counters – confirming that the correct number of components or steps have been assembled or carried out.
				</li>
				<li>
					Checklists – reminding workers to perform specific actions.
				</li>
			</ul>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>

	</div>
</div>

<div class="container">
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

		$this->load->helper("form");
	?>
	<div class="form-group">
		<?php if (isset($calc_result)): ?>
			<div class="well">
				<?php
					echo "Your result is a value of " . $calc_result;
					echo br(2);

					if ($calc_result > 3.2) {
						echo "According to these results the measured workstation require high cognitive load.";
					} elseif ($calc_result >= 2.5 && $calc_result <= 3.2) {
						echo "According to these results the measured workstation require moderate cognitive load.";
					} elseif ($calc_result >= 1.7 && $calc_result <= 2.5) {
						echo "According to these results the measured workstation require low cognitive load.";
					} elseif ($calc_result >= 0 && $calc_result <= 1.7) {
						echo "According to these results the measured workstation require very low cognitive load.";
					}
				?>
			</div>
		<?php  endif; ?>

		<div class="col-md-12">
			<h2>
				<?php echo "Assessment"; ?>
			</h2>
			<p class="text-justify">
				<?php echo $text2; ?>
			</p>

			<!-- Trigger the modal with a button -->

			<?php
				echo form_open('site/calculate');
			?>
				<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal1">Saturation</button>
			<?php

				echo "<p class='text-justify'>" . $saturation . "</p>";
				echo '<div style="background-color:#e54444;">' . form_error('saturation') . '</div>';
				$data = array(
					'' => 'Choose a value',
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
				echo form_dropdown('saturation', $data, set_value('saturation'), 'class="form-control"');

				echo br(1);
			?>
				<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal2">Variant Flora</button>
			<?php
				echo "<p class='text-justify'>" . $variant_flora . "</p>";
				echo '<div style="background-color:#e54444;">' . form_error('variant_flora') . '</div>';
				$data = array(
					'' => 'Choose a value',
					0 => 'L0 No variant products.',
					1 => 'L1',
					2 => 'L2 Up to 10% variant products.',
					3 => 'L3',
					4 => 'L4 Up to 35% variant products.',
					5 => 'L5',
					6 => 'L6 Up to 50% variant products.',
					7 => 'L7',
					8 => 'L8 One piece production. Full variation.'
				);
				echo form_dropdown('variant_flora', $data, set_value('variant_flora'), 'class="form-control"');

				echo br(1);
			?>
				<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal3">Level of difficulty</button>
			<?php
				echo "<p class='text-justify'>" . $lvl_of_difficulty . "</p>";
				echo '<div style="background-color:#e54444;">' . form_error('lvl_of_difficulty') . '</div>';
				$data = array(
					'' => 'Choose a value',
					0 => 'L0 Not applicable',
					1 => 'L1',
					2 => 'L2 The task requires little to no training and is recommended for newly employed personnel.',
					3 => 'L3',
					4 => 'L4 The task is quite simple with little training required.',
					5 => 'L5',
					6 => 'L6 The task is slightly complex and requires moderate training and experience.',
					7 => 'L7',
					8 => 'L8 The task is very difficult and requires significant training and experience.'
				);
				echo form_dropdown('lvl_of_difficulty', $data, set_value('lvl_of_difficulty'), 'class="form-control"');

				echo br(1);
			?>
				<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal4">Difficulty to use tool</button>
			<?php
				echo "<p class='text-justify'>" . $difficulty_of_use . "</p>";
				echo '<div style="background-color:#e54444;">' . form_error('difficulty_of_use') . '</div>';
				$data = array(
					'' => 'Choose a value',
					0 => 'L0 No tool use',
					1 => 'L1',
					2 => 'L2 The assembly task is performed mostly by hand and requires little or very simple tool use.',
					3 => 'L3',
					4 => 'L4 The assembly task contains little to moderate tool use',
					5 => 'L5',
					6 => 'L6 The assembly task contains moderate to heavy tool use.',
					7 => 'L7',
					8 => 'L8 The assembly task requires complex tools/tool use and/or special tools to perform'
				);
				echo form_dropdown('difficulty_of_use', $data, set_value('difficulty_of_use'), 'class="form-control"');

				echo br(1);
			?>
				<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal5">Production awareness</button>
			<?php
				echo "<p class='text-justify'>" . $production_awareness . "</p>";
				echo '<div style="background-color:#e54444;">' . form_error('production_awareness') . "</div>";
				$data = array(
					'' => 'Choose a value',
					0 => 'L0 Not applicable',
					1 => 'L1',
					2 => 'L2 The assembly task is done purely out of routine and the sequence seldom changes.',
					3 => 'L3',
					4 => 'L4 The assembly task is mostly done on routine but deviant parts or assemblies do occur.',
					5 => 'L5',
					6 => 'L6 The assembly task is quite variable but still contains much routine work.',
					7 => 'L7',
					8 => 'L8 The assembly task is highly variable and contains little to very little routine work.'
				);
				echo form_dropdown('production_awareness', $data, set_value('production_awareness'), 'class="form-control"');

				echo br(1);
			?>
				<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal6">Number of tools</button>
			<?php
				echo "<p class='text-justify'>" . $num_of_tools . "</p>";
				echo '<div style="background-color:#e54444;">' . form_error('num_of_tools') . "</div>";
				$data = array(
					'' => 'Choose a value',
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
				echo form_dropdown('num_of_tools', $data, set_value('num_of_tools'), 'class="form-control"');

				echo br(1);
			?>
				<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal7">Mapping of workstation</button>
			<?php
				echo "<p class='text-justify'>" . $mapping_of_workstation . "</p>";
				echo '<div style="background-color:#e54444;">' . form_error('mapping_of_workstation') . "</div>";
				$data = array(
					'' => 'Choose a value',
					0 => 'L0 Not applicable/the worker is free to set up the workstation and all its components to their own preferences.',
					1 => 'L1',
					2 => 'L2 Workstation layout heavily corresponds to assembly sequence.',
					3 => 'L3',
					4 => 'L4 Workstation layout completely corresponds to assembly sequence.',
					5 => 'L5',
					6 => 'L6 Workstation layout somewhat corresponds to assembly sequence.',
					7 => 'L7',
					8 => 'L8 Workstation layout does not correspond to assembly sequence.'
				);
				echo form_dropdown('mapping_of_workstation', $data, set_value('mapping_of_workstation'), 'class="form-control"');

				echo br(1);
			?>
				<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal8">Parts identification</button>
			<?php
				echo "<p class='text-justify'>" . $parts_ident . "</p>";
				echo '<div style="background-color:#e54444;">' . form_error('parts_ident') . "</div>";
				$data = array(
					'' => 'Choose a value',
					0 => 'L0 Not applicable',
					1 => 'L1',
					2 => 'L2 Sequenced kits or kanban is used for most items.',
					3 => 'L3',
					4 => 'L4 Unsequenced kits or kanban is used for most items.',
					5 => 'L5',
					6 => 'L6 Parts identification through symbol syntax.',
					7 => 'L7',
					8 => 'L8 Parts identification through article numbers.'
				);
				echo form_dropdown('parts_ident', $data, set_value('parts_ident'), 'class="form-control"');

				echo br(1);
			?>
				<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal9">Information cost</button>
			<?php
				echo "<p class='text-justify'>" . $info_cost . "</p>";
				echo '<div style="background-color:#e54444;">' . form_error('info_cost') . "</div>";
				$data = array(
					'' => 'Choose a value',
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
				echo form_dropdown('info_cost', $data, set_value('info_cost'), 'class="form-control"');

				echo br(1);
			?>
				<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal10">Quality of instructions</button>
			<?php
				echo "<p class='text-justify'>" . $quality_of_instructions . "</p>";
				echo '<div style="background-color:#e54444;">' . form_error('quality_of_instructions') . "</div>";
				$data = array(
					'' => 'Choose a value',
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
				echo form_dropdown('quality_of_instructions', $data, set_value('quality_of_instructions'), 'class="form-control"');

				echo br(1);
			?>
				<button type="button" class="btn btn-default btn-sm btn-block" data-toggle="modal" data-target="#myModal11">Poke-a-yoke</button>
			<?php
				echo "<p class='text-justify'>" . $poke_a_yoke . "</p>";
				echo '<div style="background-color:#e54444;">' . form_error('poke_a_yoke') . "</div>";
				$data = array(
					'' => 'Choose a value',
					0 => 'L0 Assembly errors cannot be made due to the design and fit of the product.',
					1 => 'L1',
					2 => 'L2 Assembly errors can barely be made due to the design and fit of the product.',
					3 => 'L3',
					4 => 'L4 Assembly constraints are present in most of the assembly sequence.',
					5 => 'L5',
					6 => 'L6 Assembly constraints are present but not throughout the assembly sequence.',
					7 => 'L7',
					8 => 'L8 No poke-a-yoke solutions are implemented in the task.'
				);
				echo form_dropdown('poke_a_yoke', $data, set_value('poke_a_yoke'), 'class="form-control"');

				echo br(1);
				echo form_submit("contactSubmit", "Beräkna");
				echo form_close();
			?>
		</div>
	</div>
</div>