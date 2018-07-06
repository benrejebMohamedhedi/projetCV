<?php
$pro_experience = $bdd->query('SELECT date_begin,date_end,certificate FROM experience E INNER JOIN profesional_experience P where E.id_experience=P.id_experience');
while ($pro = $pro_experience->fetch())
{
?>
						<div class="professional">
							<h3>Professional Experience</h3>
							<hr>
							<table>
								<tr>
									<td><?php echo $pro['date_begin'] ?> - <?php echo $pro['date_end'] ?></td>
									<td>certificate : <?php echo $pro['certificate'] ?></td>
								</tr>
							</table>
						</div>
<?php
}
$pro_experience->closeCursor();
?>
					</div>
				</div>
			</div>
		</div>	<!--fin de container -->
	</body>
</html>	
