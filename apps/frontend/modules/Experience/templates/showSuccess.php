<table>
  <tbody>
    <tr>
      <th>Idexperience:</th>
      <td><?php echo $experience->getIdexperience() ?></td>
    </tr>
    <tr>
      <th>Id cv:</th>
      <td><?php echo $experience->getIdCv() ?></td>
    </tr>
    <tr>
      <th>Titreexperience:</th>
      <td><?php echo $experience->getTitreexperience() ?></td>
    </tr>
    <tr>
      <th>Descriptionexperience:</th>
      <td><?php echo $experience->getDescriptionexperience() ?></td>
    </tr>
    <tr>
      <th>Datedebexperience:</th>
      <td><?php echo $experience->getDatedebexperience() ?></td>
    </tr>
    <tr>
      <th>Datefinexperience:</th>
      <td><?php echo $experience->getDatefinexperience() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('Experience/edit?idexperience='.$experience->getIdexperience()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('Experience/index') ?>">List</a>
