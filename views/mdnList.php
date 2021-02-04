<?php include 'header.php'?>
<a href="/">Домой</a><br>
<H2>Мои ежедневные новости</H2>
My daily news (mdn)<br>
Последние десять записей в порядке убывания дат<br>
<hr>

<?php
require_once '../mypdo/mdnDB.php';

$records = getRecords();

foreach($records as $rec) { ?>

    <form action="mdnForm.php" method="post">

<!-- Скрытые поля для передачи данных методом POST-->
        <input type="number" name="id" value="<?php echo $rec['id']; ?>" readonly hidden>
        <input type="datetime-local" name="dt" value=
            "<?php echo date('Y-m-d\TH:i', strtotime($rec['dt'])); ?>" hidden>
        <input type="text" name="header" value="<?php echo $rec['header']; ?>" hidden>
        <textarea name="content" rows="10" cols="60" hidden><?php echo $rec['content']; ?></textarea>
<!-- Вывод на экран-->
<!--        --><?php //echo $rec['id']; ?><!--<br>-->
        <?php echo $rec['dt']; ?>
        <h3><?php echo $rec['header']; ?></h3>
        <p><?php echo str_replace("\n", '<br>', $rec['content']); ?></p>
        <button>Редактировать</button>
        <br><hr>

    </form>

<?php } ?>

<form action="mdnForm.php" method="post">
    <input type="number" name="id" value="0" readonly hidden>
    <input type="datetime-local" name="dt" value="" hidden>
    <input type="text" name="header" value="" hidden>
    <textarea name="content" rows="10" cols="60" hidden></textarea>
    <button >Добавить запись</button>
    <br>
</form>

<?php include 'footer.php' ?>
