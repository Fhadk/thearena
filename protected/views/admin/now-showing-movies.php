<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Start Movie List -->
<form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/AddMovie" method="POST">
		<div class="col_12">
			<div class="col_9"><h4>Now Showing - Movies List</h4></div>
			
			<div class="col_3 right" style="margin-top: 40px;">
				<!-- Select -->
				<label for="select1">Status</label>
				<select id="select1">
				<option value="1">All</option>
				<option value="2">Active</option>
				<option value="3">Inactive</option>
				</select>
			</div>
			
			<div class="col_12">
				<form>
				<!-- Table -->
				<table cellspacing="0" cellpadding="0">
				<thead><tr>
                    <th width="140">Thumbnail</th>
					<th>Title/Description</th>
					<th width="100" class="center">Images</th>
					<th width="100" class="center">Status</th>
					<th width="100" class="center">Edit</th>
				</tr></thead>
				<tbody>
				<tr>
                    <td><img src="images/movie-img.png" /></td>
					<td>
						<h5>Avengers: Age of Ultron</h5>
						When Tony Stark and Bruce Banner try to jump-start a dormant peacekeeping program called Ultron, things go horribly wrong and it's up to Earth's Mightiest Heroes to stop the villainous Ultron from enacting his terrible plans.
					</td>
					<td class="center">
						<button class="small">Full Size</button>
					</td>
					<td class="center">
                        Active
						<button class="small green">Deactivate</button>
                    </td>
					<td class="center">
						<button class="small blue" formaction="edit-movie.html">Edit</button>
						<button class="small red">Delete</button>
					</td>
				</tr>

				<tr>
                    <td><img src="images/movie-img.png" /></td>
					<td>
						<h5>Avengers: Age of Ultron</h5>
						When Tony Stark and Bruce Banner try to jump-start a dormant peacekeeping program called Ultron, things go horribly wrong and it's up to Earth's Mightiest Heroes to stop the villainous Ultron from enacting his terrible plans.
					</td>
					<td class="center">
						<button class="small">Full Size</button>
					</td>
					<td class="center">
                        Inactive
						<button class="small">Activate</button>
                    </td>
					<td class="center">
						<button class="small blue" formaction="edit-movie.html">Edit</button>
						<button class="small red">Delete</button>
					</td>
				</tr>

				<tr>
                    <td><img src="images/movie-img.png" /></td>
					<td>
						<h5>Avengers: Age of Ultron</h5>
						When Tony Stark and Bruce Banner try to jump-start a dormant peacekeeping program called Ultron, things go horribly wrong and it's up to Earth's Mightiest Heroes to stop the villainous Ultron from enacting his terrible plans.
					</td>
					<td class="center">
						<button class="small">Full Size</button>
					</td>
					<td class="center">
                        Active
						<button class="small green">Deactivate</button>
                    </td>
					<td class="center">
						<button class="small blue" formaction="edit-movie.html">Edit</button>
						<button class="small red">Delete</button>
					</td>
				</tr>

				</tbody>
				</table>
				</form>
			</div>
		</div>	
    </form>

	<!-- End Movie List -->