<?php $slug = basename(get_permalink()); 
$class_home="";
$class_mission="";
$class_events="";
if($slug == "mision") {
  $class_mission = "active";
} else if ($slug == "eventos-de-la-red") {
  $class_events = "active";
} else {
  $class_home="active";
}
?>
<nav class="psv-top-bar">
  <ul>
    <li>
    <a href="/" class="<?php echo $class_home;?>">
      perusv
    </a>
    </li>
    <li>
      <a href="index.php/mision/" class="<?php echo $class_mission;?>">
        Mision
      </a>
    </li>
    <li>
      <a href="index.php/eventos-de-la-red/" class="<?php echo $class_events;?>">
        Eventos
      </a>
    </li>
    <li>
      <a href="mailto:contact@perusv.com?Subject=Perusv%20Contact" target="_top">
        Contacto
      </a>
    </li>
  </ul>
</nav>