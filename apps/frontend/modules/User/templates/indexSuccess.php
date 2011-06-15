<h1>Users List</h1>

<table>
  <thead>
    <tr>
      <th>Iduser</th>
      <th>Idusertype</th>
      <th>Titreuser</th>
      <th>Nameuser</th>
      <th>Surnameuser</th>
      <th>Adressuser</th>
      <th>Countryuser</th>
      <th>Raisonsocialuser</th>
      <th>Phonenumberuser</th>
      <th>Mailuser</th>
      <th>Pwduser</th>
      <th>Isactivateuser</th>
      <th>Lastconnexionuser</th>
      <th>Zipcodeuser</th>
      <th>Jobdescriptionuser</th>
      <th>Corporationsize</th>
      <th>Isacceptemailnews</th>
      <th>Apayersacotisationpourpublication</th>
      <th>Datevalidationpayement</th>
      <th>Datefinvalidation</th>
      <th>Isconsultant</th>
      <th>Isrecruteur</th>
      <th>Issupplier</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
      <td><a href="<?php echo url_for('User/show?iduser='.$user->getIduser()) ?>"><?php echo $user->getIduser() ?></a></td>
      <td><?php echo $user->getIdusertype() ?></td>
      <td><?php echo $user->getTitreuser() ?></td>
      <td><?php echo $user->getNameuser() ?></td>
      <td><?php echo $user->getSurnameuser() ?></td>
      <td><?php echo $user->getAdressuser() ?></td>
      <td><?php echo $user->getCountryuser() ?></td>
      <td><?php echo $user->getRaisonsocialuser() ?></td>
      <td><?php echo $user->getPhonenumberuser() ?></td>
      <td><?php echo $user->getMailuser() ?></td>
      <td><?php echo $user->getPwduser() ?></td>
      <td><?php echo $user->getIsactivateuser() ?></td>
      <td><?php echo $user->getLastconnexionuser() ?></td>
      <td><?php echo $user->getZipcodeuser() ?></td>
      <td><?php echo $user->getJobdescriptionuser() ?></td>
      <td><?php echo $user->getCorporationsize() ?></td>
      <td><?php echo $user->getIsacceptemailnews() ?></td>
      <td><?php echo $user->getApayersacotisationpourpublication() ?></td>
      <td><?php echo $user->getDatevalidationpayement() ?></td>
      <td><?php echo $user->getDatefinvalidation() ?></td>
      <td><?php echo $user->getIsconsultant() ?></td>
      <td><?php echo $user->getIsrecruteur() ?></td>
      <td><?php echo $user->getIssupplier() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('User/new') ?>">New</a>
