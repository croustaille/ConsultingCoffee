<h1>Documents List</h1>

<table>
  <thead>
    <tr>
      <th>Iddocument</th>
      <th>Idideas</th>
      <th>Id confidentialitylevel</th>
      <th>Titredocument</th>
      <th>Descriptiondocument</th>
      <th>Chemindocument</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($documents as $document): ?>
    <tr>
      <td><a href="<?php echo url_for('Document/show?iddocument='.$document->getIddocument()) ?>"><?php echo $document->getIddocument() ?></a></td>
      <td><?php echo $document->getIdideas() ?></td>
      <td><?php echo $document->getIdConfidentialitylevel() ?></td>
      <td><?php echo $document->getTitredocument() ?></td>
      <td><?php echo $document->getDescriptiondocument() ?></td>
      <td><?php echo $document->getChemindocument() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('Document/new') ?>">New</a>
