<table>
  <tbody>
    <tr>
      <th>Idideas:</th>
      <td><?php echo $ideas->getIdideas() ?></td>
    </tr>
    <tr>
      <th>Idcatgeoryidea:</th>
      <td><?php echo $ideas->getIdcatgeoryidea() ?></td>
    </tr>
    <tr>
      <th>Iduser:</th>
      <td><?php echo $ideas->getIduser() ?></td>
    </tr>
    <tr>
      <th>Titreideas:</th>
      <td><?php echo $ideas->getTitreideas() ?></td>
    </tr>
    <tr>
      <th>Descriptionideas:</th>
      <td><?php echo $ideas->getDescriptionideas() ?></td>
    </tr>
    <tr>
      <th>Priceideas:</th>
      <td><?php echo $ideas->getPriceideas() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('Ideas/edit?idideas='.$ideas->getIdideas()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('Ideas/index') ?>">List</a>
