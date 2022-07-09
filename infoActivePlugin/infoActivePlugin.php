<?php
class infoActivePlugin extends plxPlugin {	 

	public function __construct($default_lang) {

		# appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# déclaration des hooks
		$this->addHook('AdminSettingsInfos', 'AdminSettingsInfos');	
	}

	/* affiche les plugins actis pour Infos. */
	public function AdminSettingsInfos() {
	echo '<?php ';
		?>
		echo '<table><thead><tr><th>'.L_PLUGINS_ACTIVE_LIST.' </th></tr></thead><tbody>';
		foreach($plxAdmin->plxPlugins->aPlugins as $key => $value) {
			echo '<tr><td>'.$key.'</td></tr>';
		}
		echo '</tbody></table>
		<style>.unstyled-list,
.unstyled-list~p{
  float: left;
  clear: left;
}
.unstyled-list {
  padding: 0 2em
}
.unstyled-list~table{
  border:solid;  
}</style>';
	?>
		<?php 
	
	}
}
?>
