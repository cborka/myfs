<?php
require_once 'mypdo/mdnDB.php';

if ($_POST['password'] == 21) {
//    echo
    addRecord($_POST['id'], $_POST['dt'], $_POST['header'], $_POST['content']);

    header('location: /views/mdnList.php');
}
else { ?>

<script>
    alert('Неверный пароль, ваши труды пропали! Увы!');
    window.open ('/views/mdnList.php','_self',false);
</script>

<?php }
  // header('location: /views/mdnList.php');
