<?php
$experience = $bdd->query('SELECT * FROM experience E INNER JOIN academic_experience A where E.id_experience=A.id_experience');
while ($acad = $experience->fetch())
{
?>
					<div class="academic">
						<h3>Academic Experience</h3>
							<hr>
							<table>
								<tr>
									<td><?php echo $acad['date_begin'] ?> - <?php echo $acad['date_end'] ?></td>
									<td><?php echo $acad['description'] ?><br />
										<?php echo $acad['tools'] ?><br />
										<?php echo $acad['graduate'] ?><br />
										<?php echo $acad['note'] ?>
									</td>
								</tr>		

							</table>
					</div>
<?php
}
	$experience = closeCursor();
 ?>