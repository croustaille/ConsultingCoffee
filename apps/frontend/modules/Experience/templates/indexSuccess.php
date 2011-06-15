<h1>Experiences List</h1>

<table>
  <thead>
    <tr>
      <th>Idexperience</th>
      <th>Id cv</th>
      <th>Titreexperience</th>
      <th>Descriptionexperience</th>
      <th>Datedebexperience</th>
      <th>Datefinexperience</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($experiences as $experience): ?>
    <tr>
      <td><a href="<?php echo url_for('Experience/show?idexperience='.$experience->getIdexperience()) ?>"><?php echo $experience->getIdexperience() ?></a></td>
      <td><?php echo $experience->getIdCv() ?></td>
      <td><?php echo $experience->getTitreexperience() ?></td>
      <td><?php echo $experience->getDescriptionexperience() ?></td>
      <td><?php echo $experience->getDatedebexperience() ?></td>
      <td><?php echo $experience->getDatefinexperience() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('Experience/new') ?>">New</a>
