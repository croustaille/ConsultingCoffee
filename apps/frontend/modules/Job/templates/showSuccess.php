<table>
  <tbody>
    <tr>
      <th>Idjob:</th>
      <td><?php echo $job->getIdjob() ?></td>
    </tr>
    <tr>
      <th>Idcountry:</th>
      <td><?php echo $job->getIdcountry() ?></td>
    </tr>
    <tr>
      <th>Id city:</th>
      <td><?php echo $job->getIdCity() ?></td>
    </tr>
    <tr>
      <th>Iduser:</th>
      <td><?php echo $job->getIduser() ?></td>
    </tr>
    <tr>
      <th>Idsubjobcategory:</th>
      <td><?php echo $job->getIdsubjobcategory() ?></td>
    </tr>
    <tr>
      <th>Jobname:</th>
      <td><?php echo $job->getJobname() ?></td>
    </tr>
    <tr>
      <th>Descriptionjob:</th>
      <td><?php echo $job->getDescriptionjob() ?></td>
    </tr>
    <tr>
      <th>Datedeadlinejob:</th>
      <td><?php echo $job->getDatedeadlinejob() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('Job/edit?idjob='.$job->getIdjob()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('Job/index') ?>">List</a>
