<?php

$palabras = explode(' ' , "abad abar abes abey abia abra abre abri abro abur acal acas achi acle acme acne acre acta acto adan adia adie adio adir ador adra adre adro adul
aeda aedo aeta afan afaz afea afee afeo afer afin afra afro afta agil agio agra agre agro agua ague aguo agur aina aira aire airo aisa aite ajad ajan ajar ajas ajea ajee ajen ajeo ajes ajis ajos alan alar alas alba albo alca alce alea alee alef aleo alfa alfe alfo alga algo alia alie alim alio alis alla alli allu alma almo alna alno aloe alon
 amad aman amar amas ambo amel amen ames amia amin amir amis amol amor amos ampo
anal anas anay anca anda ande ando anea anee aneo angu anis anoa anon anos ansa ansi anta ante anti anua anuo
añal añas añil añir años
aoja aoje aojo aova aove aovo
apea apee apeo apex apio apis apon apos apta apto apud
aque aqui
arad aran arar aras arca arce arco arda arde ardi ardo area arel aren ares arfa arfe arfo aria ario arla arle arlo arma arme armo arna aron aros arpamás…
asad asan asar asas asaz asca asco asea asee asen aseo ases asga asgo asia asid asin asio asir asis asma asna asno aspa aspe aspo asta
atad atal atan atar atas atea aten ateo ates atoa atoe atol atoo atun
auca auge aula auna aune auno aupa aupe aupo aura auto
aval aven aves avia avie avio avol
axil axis axon
ayas ayau ayea ayee ayeo ayer ayes ayme ayos ayua
azar azoa azoe azoo azor azos azua azud azul azur azut");


$array2=[];
$arrayDeDistintas=[];


foreach ($palabras as $palabra) {
  $array = str_split($palabra, 1);
  $array2 = array_unique($array);

  if (count($array2) == count($array)) {
            $array = implode("",$array);
            $arrayDeDistintas[] = $array;}

}

var_dump($arrayDeDistintas);


 ?>
