<table>
  <tbody>
    <tr>
      <th>Id cv:</th>
      <td><?php echo $cv->getIdCv() ?></td>
    </tr>
    <tr>
      <th>Iduser:</th>
      <td><?php echo $cv->getIduser() ?></td>
    </tr>
    <tr>
      <th>Titrecv:</th>
      <td><?php echo $cv->getTitrecv() ?></td>
    </tr>
    <tr>
      <th>Descriptioncv:</th>
      <td><?php echo $cv->getDescriptioncv() ?></td>
    </tr>
    <tr>
      <th>Datedisponibilitecv:</th>
      <td><?php echo $cv->getDatedisponibilitecv() ?></td>
    </tr>
    <tr>
      <th>Tarifcv:</th>
      <td><?php echo $cv->getTarifcv() ?></td>
    </tr>
    <tr>
      <th>Estvisiblecv:</th>
      <td><?php echo $cv->getEstvisiblecv() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('Cv/edit?id_cv='.$cv->getIdCv()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('Cv/index') ?>">List</a>
