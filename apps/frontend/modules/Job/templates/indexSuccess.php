<h1>Jobs List</h1>

<table>
  <thead>
    <tr>
      <th>Idjob</th>
      <th>Idcountry</th>
      <th>Id city</th>
      <th>Iduser</th>
      <th>Idsubjobcategory</th>
      <th>Jobname</th>
      <th>Descriptionjob</th>
      <th>Datedeadlinejob</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobs as $job): ?>
    <tr>
      <td><a href="<?php echo url_for('Job/show?idjob='.$job->getIdjob()) ?>"><?php echo $job->getIdjob() ?></a></td>
      <td><?php echo $job->getIdcountry() ?></td>
      <td><?php echo $job->getIdCity() ?></td>
      <td><?php echo $job->getIduser() ?></td>
      <td><?php echo $job->getIdsubjobcategory() ?></td>
      <td><?php echo $job->getJobname() ?></td>
      <td><?php echo $job->getDescriptionjob() ?></td>
      <td><?php echo $job->getDatedeadlinejob() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('Job/new') ?>">New</a>
