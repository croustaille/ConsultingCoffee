<h1>Cvs List</h1>

<table>
  <thead>
    <tr>
      <th>Id cv</th>
      <th>Iduser</th>
      <th>Titrecv</th>
      <th>Descriptioncv</th>
      <th>Datedisponibilitecv</th>
      <th>Tarifcv</th>
      <th>Estvisiblecv</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cvs as $cv): ?>
    <tr>
      <td><a href="<?php echo url_for('Cv/show?id_cv='.$cv->getIdCv()) ?>"><?php echo $cv->getIdCv() ?></a></td>
      <td><?php echo $cv->getIduser() ?></td>
      <td><?php echo $cv->getTitrecv() ?></td>
      <td><?php echo $cv->getDescriptioncv() ?></td>
      <td><?php echo $cv->getDatedisponibilitecv() ?></td>
      <td><?php echo $cv->getTarifcv() ?></td>
      <td><?php echo $cv->getEstvisiblecv() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('Cv/new') ?>">New</a>
