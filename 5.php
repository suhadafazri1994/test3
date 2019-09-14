<?php
function groupnumber($number){
	$group=str_split(str_replace(array(' ','-'),'',$number),3);
	$last=$group[sizeof($group)-1];
	if (strlen($last)==1) {
		array_pop($group);
		$group[sizeof($group)-1].=$last;
		$last=$group[sizeof($group)-1];
		$group[sizeof($group)-1]=str_split($last,2);
		$group[sizeof($group)-1]=implode('-',$group[sizeof($group)-1]);
	}
	$group=implode('-', $group);
	 return $group;
}
echo groupnumber('da2c312dfe804ef5bd318133a342251a
				  79n89a9mdfe804ef5b18133a342251o
				  6e576057da174c4189f7ea8341946aed');
?>