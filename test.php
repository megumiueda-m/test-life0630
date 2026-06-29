<!-- <?php
$marks = [
  'open'    => ['symbol' => '○', 'class' => 'mark-circle'],
  'consult' => ['symbol' => '△', 'class' => 'mark-triangle'],
  'closed'  => ['symbol' => '×', 'class' => 'mark-cross'],
];
$days = ['mon'=>'月','tue'=>'火','wed'=>'水','thu'=>'木','fri'=>'金','sat'=>'土'];
?>
<table class="vacancy_table">
  <thead>
    <tr><?php foreach ($days as $label): ?><th><?php echo $label; ?></th><?php endforeach; ?></tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach ($days as $key => $label):
        $status = get_field('vacancy_' . $key); // ACFの値: open/consult/closed
        $m = $marks[$status] ?? $marks['closed'];
      ?>
        <td><span class="mark <?php echo $m['class']; ?>"><?php echo $m['symbol']; ?></span></td>
      <?php endforeach; ?>
    </tr>
  </tbody>
</table> -->