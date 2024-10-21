<?php
if(isset($_POST['submit1']) || isset($_POST['submit2'])){
    if(is_array($_POST['apprenant']))
    {
        // On compte le nombre d'apprenant
        $nb_apprenant = count($_POST['apprenant']);
        $shuffle_apprenant = shuffle($_POST['apprenant']);
        $tab_apprenant = $_POST['apprenant'];
        $str = '<table>';
        // On vérifie si le nombre est impair
        if($nb_apprenant % 2 != 0)
        {
            // Si le nombre est pas pair on va sélectionner un groupe de 3
            $str.= '<tr><td>'.$tab_apprenant[0].'</td><td>'.$tab_apprenant[1].'</td><td>'.$tab_apprenant[2].'</td></tr>';
            $i2=3;
        }else $i2=0;
        // On exécute quoi qu'il arrive notre boucle avec les apprenants
        for($i=$i2;$i<$nb_apprenant-1;$i++)
        {
            $str.= '<tr><td>'.$tab_apprenant[$i].'</td><td>'.$tab_apprenant[$i+1].'</td></tr>';
            $i++;
        }
        $str.= '</table>';
        echo $str;
    }else echo 'le format des données ne correspond pas';
    
}else echo 'Veuillez soumettre le formulaire';