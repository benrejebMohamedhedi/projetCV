<!--DEBUT DE RIGHT INFO-->
				<div class="right-info">
					<div class="Profil">
						<H3>Profile and Personality</H3>
						<hr>
						<p>My goal is to be a part of reputed organization which can utilize my talents for the growth of the organization and looking for the challenging opportunity
							where I can serve to my full ability and grow strong into a great human.</p>
					</div>
				
<?php
$education = $bdd->query('SELECT * FROM education');
while ($educ = $education->fetch())
{
?>
					<div class="education">
						<h3>Education</h3>
						<hr>
						<table>
							<tr>
								<td><?php echo $educ['date_begin'] ?> - <?php echo $educ['date_end'] ?></td>
								<td><?php echo $educ['description'] ?></td>
							</tr>
						</table>
					</div>

<?php
}
$education->closeCursor();
?>