<?php
$header=(isset($header) ? $header : false);
$rows=(isset($rows) ? $rows : false);
$class=(isset($class) ? $class : false);

// jen pokud jsou nejake radky na vystup
if(!empty($rows)){
?><table<?=($class ? ' class="'.$class.'"' : false)?>>
<?php if(is_array($header) && count($header)){ ?>
	<tr>
		<!-- hlavicka tabulky -->
		<th class="LineNum">#</th>
<?php foreach($header as $cell){ ?>
		<th><?=$cell?></th>
<?php } ?>
	</tr>
<?php }
$i=0;
$this_row_class=false;
foreach($rows as $row){
	if(isset($row['this_row_class'])){
		$this_row_class=' class="'.$row['this_row_class'].'"';
		unset($row['this_row_class']);
	}
	else{
		$this_row_class=false;
	}
?>
	<tr<?=$this_row_class?>>
		<td class="LineNum"><?=++$i?></td>
<?php foreach($row as $cell){ ?>
		<td><?=$cell?></td>
<?php } ?>
	</tr>
<?php } ?>
</table>
<?php } ?>