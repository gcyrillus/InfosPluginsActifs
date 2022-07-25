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
		$plxAdmin = plxAdmin::getInstance(); 
		echo '<table><thead><tr><th>'.L_PLUGINS_ACTIVE_LIST.' </th><th>'.L_PLUGINS_VERSION.'</th></tr></thead><tbody>';
		foreach($plxAdmin->plxPlugins->aPlugins as $key => $value) {
			$plugInstance=$plxAdmin->plxPlugins->getInstance($key);
			$plugInstance->getInfos();
			echo '<tr><td>'.$key.'</td><td>'.plxUtils::strCheck($plugInstance->getInfo("version")).'</td></tr>';
		}
		echo '</tbody></table>
		<style>section .unstyled-list,
section .unstyled-list~p{
  float: left;
  clear: left;
}
section .unstyled-list {
  padding: 0 2em
}
section .unstyled-list~table{
  border:solid;  
}
thead{
  background:#bee
}</style>';
	?>
		<?php 	
	}
}
?>
