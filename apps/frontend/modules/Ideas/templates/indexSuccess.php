<h1>Ideass List</h1>

<table>
  <thead>
    <tr>
      <th>Idideas</th>
      <th>Idcatgeoryidea</th>
      <th>Iduser</th>
      <th>Titreideas</th>
      <th>Descriptionideas</th>
      <th>Priceideas</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ideass as $ideas): ?>
    <tr>
      <td><a href="<?php echo url_for('Ideas/show?idideas='.$ideas->getIdideas()) ?>"><?php echo $ideas->getIdideas() ?></a></td>
      <td><?php echo $ideas->getIdcatgeoryidea() ?></td>
      <td><?php echo $ideas->getIduser() ?></td>
      <td><?php echo $ideas->getTitreideas() ?></td>
      <td><?php echo $ideas->getDescriptionideas() ?></td>
      <td><?php echo $ideas->getPriceideas() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('Ideas/new') ?>">New</a>
