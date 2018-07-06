
			<?php
$skills = $bdd->query('SELECT * FROM skills');
while ($skills_info = $skills->fetch())
{
?>
			<div class="info">	<!-- DEBUT -->
				<div class="left-info">  <!-- DEBUT -->
					<div class="languages">  <!-- DEBUT -->
						<H3>Languages & IT skills</H3>
							<hr>
							<dl><H5>Languages</H5>
									<dd><?php echo $skills_info['languages'] ?></dd>	
							</dl>
							<dl><H5>IT skills</H5>
									<dt><?php echo $skills_info['it_skills'] ?></dt>
							</dl>
					</div>  <!-- FIN -->
					<br>
					<div class="competitions"> <!-- DEBUT -->
						<H3>Competitions</H3>
						<hr>
						<table>
							<tr>
								<td><?php echo $skills_info['competitions'] ?></td>
							</tr>
						</table>
						
					</div>  <!-- FIN -->
					<br>
					<div class="social">   <!-- DEBUT -->
						<H3>Social Life</H3>
						<hr>
						<p> <?php echo $skills_info['social_life'] ?> </p>
					</div>  <!-- FIN -->
					<div class="Hobbies">    <!-- DEBUT -->
						<H3>Hobbies</H3>
						<hr>
						<p> <?php echo $skills_info['hobbies'] ?> </p>
					</div>	<!-- FIN -->
				</div> <!-- fin de left info-->
<?php
}
$skills->closeCursor();
?>