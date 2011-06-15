<table>
  <tbody>
    <tr>
      <th>Iddocument:</th>
      <td><?php echo $document->getIddocument() ?></td>
    </tr>
    <tr>
      <th>Idideas:</th>
      <td><?php echo $document->getIdideas() ?></td>
    </tr>
    <tr>
      <th>Id confidentialitylevel:</th>
      <td><?php echo $document->getIdConfidentialitylevel() ?></td>
    </tr>
    <tr>
      <th>Titredocument:</th>
      <td><?php echo $document->getTitredocument() ?></td>
    </tr>
    <tr>
      <th>Descriptiondocument:</th>
      <td><?php echo $document->getDescriptiondocument() ?></td>
    </tr>
    <tr>
      <th>Chemindocument:</th>
      <td><?php echo $document->getChemindocument() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('Document/edit?iddocument='.$document->getIddocument()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('Document/index') ?>">List</a>
